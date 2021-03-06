<?php
/*
* Custom Username Markup For User v1.0.1 written by tyteen4a03@3.studIo.
* This software is licensed under the BSD 2-Clause modified License.
* See the LICENSE file within the package for details.
*/

class SSD_CustomMarkupForUser_ControllerAdmin_User extends XFCP_SSD_CustomMarkupForUser_ControllerAdmin_User {
    public function actionSave() {
        $response = parent::actionSave();
        $userId = $this->_input->filterSingle('user_id', XenForo_Input::UINT);
        if ($userId == 0) return $response; // Not sure why, but don't do it
        $options = $this->_input->filterSingle("SSD_cmfu_options", XenForo_Input::ARRAY_SIMPLE);

        if (empty($options)) {
            // Nothing in here, populate it with nothingness
            $options = SSD_CustomMarkupForUser_Constants::$defaultOptionsArray;
        }

        // Pre-check cleanup
        foreach ($options as $category => $catArray) {
            foreach ($catArray as $itemName => $itemValue) {
                if (SSD_CustomMarkupForUser_Helpers::startsWith($itemName, "enable_")) {
                    unset($options[$category][$itemName]); // Ignore any placeholders
                    continue;
                }
                $options[$category][$itemName] = XenForo_Input::rawFilter($itemValue, SSD_CustomMarkupForUser_Constants::$availableMarkups[$itemName]["type"]);
            }
        }

        foreach ($options as $category => $catArray) {
            foreach ($catArray as $itemName => $itemValue) {
                $itemArray = SSD_CustomMarkupForUser_Constants::$availableMarkups[$itemName];
                // Check if we have dependencies
                if (isset($itemArray["requires"])) {
                    foreach ($itemArray["requires"] as $requirement) {
                        if ($catArray[$requirement[0]] !== $requirement[1]) {
                            unset($options[$category][$itemName]); // Dependency not match, skipping
                            continue;
                        }
                    }
                }
                if (!call_user_func($itemArray["verify"]["func"], $itemValue)) {
                    return $this->responseError(new XenForo_Phrase($itemArray["verify"]["error"]));  // Validation failed, ragequit
                }
            }
        }

        $dw = XenForo_DataWriter::create('XenForo_DataWriter_User');
        $dw->setExistingData($userId);
        $dw->set("SSD_cmfu_options", serialize($options));
        if (XenForo_Application::getOptions()->get("SSD_cmfu_useCache")) {
            $dw->rebuildCustomMarkupCache();
        }
        $dw->save();
        return $response; // No error from our end, continue executing
    }
}