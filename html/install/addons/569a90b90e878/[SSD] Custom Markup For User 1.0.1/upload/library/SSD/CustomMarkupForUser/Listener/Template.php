<?php
/*
* Custom Username Markup For User v1.0.1 written by tyteen4a03@3.studIo.
* This software is licensed under the BSD 2-Clause modified License.
* See the LICENSE file within the package for details.
*/

class SSD_CustomMarkupForUser_Listener_Template {
    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template) {
        $baseViewParams = array(
            "borderList" => SSD_CustomMarkupForUser_Helpers::lazyArrayShift(SSD_CustomMarkupForUser_Constants::$borderList),
            "fontList" => SSD_CustomMarkupForUser_Helpers::lazyArrayShift(SSD_CustomMarkupForUser_Constants::$fontList)
        );
        $renderHTML = "";
        switch ($hookName) {
            case "account_preferences_options":
                $visitor = XenForo_Visitor::getInstance();
                if (!$visitor->hasPermission("SSD_cmfu", "canUseCMFUSystem")) return;
                $fullUserOptions = SSD_CustomMarkupForUser_Helpers::prepareSerializedOptionsForView($visitor["SSD_cmfu_options"]);

                $settingsTemplate = $template->create("SSD_cmfu_account_cmcontrol", $template->getParams());
                // Render username
                if ($visitor->hasPermission("SSD_cmfu", "canUseCustomUNM")) {
                    $settingsTemplate->setParams(array_merge(array(
                        "title" => new XenForo_Phrase("user_name"),
                        "titleCode" => "username",
                        "permissions" => SSD_CustomMarkupForUser_Helpers::assembleCustomMarkupPermissionForUser("username"),
                        "userOptions" => $fullUserOptions["username"],
                        "currentMarkupRender" => XenForo_Template_Helper_Core::callHelper("usernamehtml", array($visitor->toArray(), "", true))
                    ), $baseViewParams));
                    $renderHTML .= $settingsTemplate->render();
                }
                // Clean up
                $settingsTemplate = $template->create("SSD_cmfu_account_cmcontrol", $template->getParams());
                // Render user title
                if (empty($user["custom_title"])) { // No user title
                    $user["custom_title"] = "(No Title Set)";
                }
                if ($visitor->hasPermission("SSD_cmfu", "canUseCustomUTM")) {
                    $settingsTemplate->setParams(array_merge(array(
                        "title" => new XenForo_Phrase("SSD_cmfu_user_title"),
                        "titleCode" => "usertitle",
                        "permissions" => SSD_CustomMarkupForUser_Helpers::assembleCustomMarkupPermissionForUser("usertitle"),
                        "userOptions" => $fullUserOptions["usertitle"],
                        "currentMarkupRender" => XenForo_Template_Helper_Core::callHelper("usertitle", array($visitor->toArray()))
                    ), $baseViewParams));
                    $renderHTML .= $settingsTemplate->render();
                }
                /* Things - Account Panel */
                $contents .= $renderHTML;
                break;
            case "admin_user_edit_tabs": // ACP - User Tab
                $user = $template->getParam("user");
                if ($user["user_id"] == 0) break; // New user, don't show this
                $contents .= $template->create("SSD_cmfu_user_edit_tab", $template->getParams())->render();
                break;
            case "admin_user_edit_panes": // ACP - User Tab content
                $user = $template->getParam("user");

                if ($user["user_id"] == 0) break; // New user, don't show this
                $fullUserOptions = SSD_CustomMarkupForUser_Helpers::prepareSerializedOptionsForView($user["SSD_cmfu_options"]);

                $settingsTemplate = $template->create("SSD_cmfu_cmcontrol", $template->getParams());
                $settingsTemplate->setParams(array_merge(array(
                    "title" => new XenForo_Phrase("user_name"),
                    "titleCode" => "username",
                    "userOptions" => $fullUserOptions["username"],
                    "currentMarkupRender" => XenForo_Template_Helper_Core::callHelper("usernamehtml", array($user, "", true))
                ), $baseViewParams));
                $renderHTML .= $settingsTemplate->render();
                // Clean up
                $settingsTemplate = $template->create("SSD_cmfu_cmcontrol", $template->getParams());
                // Render user title
                if (empty($user["custom_title"])) {
                    // No user title
                    $user["custom_title"] = "(No Custom Title Set)";
                }
                $settingsTemplate->setParams(array_merge(array(
                    "title" => new XenForo_Phrase("SSD_cmfu_user_title"),
                    "titleCode" => "usertitle",
                    "userOptions" => $fullUserOptions["usertitle"],
                    "currentMarkupRender" => XenForo_Template_Helper_Core::callHelper("usertitle", array($user, true))
                ), $baseViewParams));
                $renderHTML .= $settingsTemplate->render();
                /* Things - AdminCP */
                $contents .= "<li>" . $renderHTML . "</li>";
                break;
            case "footer":
                $displayCredit = (bool) XenForo_Application::getOptions()->get("SSD_cmfu_displayCreditNotice");
                $creditNotice = ($displayCredit) ? new XenForo_Phrase("SSD_cmfu_credit_notice") : '';
                $copyrightText = new XenForo_Phrase("xenforo_copyright");
                $search = '<div id="copyright">' . $copyrightText;
                $replace = '<div id="copyright">' . $copyrightText .
                    ($displayCredit ? '<br /><div id="SSD_cmfu_credit_notice">' . $creditNotice."</div>" : '') .
                    '<!-- This forum uses [3.studIo] Custom Markup For User, licensed under the BSD 2-Clause Modified License. DO NOT REMOVE THIS NOTICE! -->' . PHP_EOL;
                $contents = str_replace($search, $replace, $contents);
                break;
        }
    }
}