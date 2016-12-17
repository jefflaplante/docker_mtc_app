<?php
/*
* Custom Username Markup For User v1.0.1 written by tyteen4a03@3.studIo.
* This software is licensed under the BSD 2-Clause modified License.
* See the LICENSE file within the package for details.
*/

class SSD_CustomMarkupForUser_Model_User extends XFCP_SSD_CustomMarkupForUser_Model_User {
    public function rebuildCustomMarkupCache($userId, $category=null) {
        $user = $this->getUserById($userId);
        $options = unserialize($user["SSD_cmfu_options"]);
        $renderCache = array();
        if ($category) {
            if (!in_array($category, SSD_CustomMarkupForUser_Constants::$categories)) {
                throw new UnexpectedValueException("Unknown category");
            }
            $renderCache = unserialize($user["SSD_cmfu_render_cache"]);
            $renderCache[$category] = SSD_CustomMarkupForUser_Helpers::assembleCustomMarkup($options, $category);
        } else {
            foreach (SSD_CustomMarkupForUser_Constants::$categories as $category) {
                $renderCache[$category] = SSD_CustomMarkupForUser_Helpers::assembleCustomMarkup($options, $category);
            }
        }
        $db = $this->_getDb();
        $db->update('xf_user',
            array("SSD_cmfu_render_cache" => serialize($renderCache)),
            'user_id = ' . $db->quote($userId)
        );
    }

    public function insertDefaultCustomMarkup($userId) {
        $db = $this->_getDb();
        $db->update("xf_user",
            array("SSD_cmfu_options" => serialize(SSD_CustomMarkupForUser_Constants::$defaultOptionsArray)),
            'user_id = ' . $db->quote($userId)
        );
    }
}