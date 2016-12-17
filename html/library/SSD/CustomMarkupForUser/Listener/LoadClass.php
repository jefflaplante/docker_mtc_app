<?php
/*
* Custom Username Markup For User v1.0.1 written by tyteen4a03@3.studIo.
* This software is licensed under the BSD 2-Clause modified License.
* See the LICENSE file within the package for details.
*/

class SSD_CustomMarkupForUser_Listener_LoadClass {
    public static function loadClassController($class, array &$extend) {
        switch ($class) {
            case "XenForo_ControllerPublic_Account":
                $extend[] = "SSD_CustomMarkupForUser_ControllerPublic_Account";
                break;
            case "XenForo_ControllerAdmin_User":
                $extend[] = "SSD_CustomMarkupForUser_ControllerAdmin_User";
                break;
        }
    }

    public static function loadClassDataWriter($class, array &$extend) {
        switch ($class) {
            case "XenForo_DataWriter_User":
                $extend[] = "SSD_CustomMarkupForUser_DataWriter_User";
                break;
        }
    }

    public static function loadClassModel($class, array &$extend) {
        switch ($class) {
            case "XenForo_Model_User":
                $extend[] = "SSD_CustomMarkupForUser_Model_User";
                break;
        }
    }
}