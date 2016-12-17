<?php
/*
* Custom Username Markup For User v1.0.1 written by tyteen4a03@3.studIo.
* This software is licensed under the BSD 2-Clause modified License.
* See the LICENSE file within the package for details.
*/

class SSD_CustomMarkupForUser_Installer {
    public static final function install($installedAddon) {
        $db = XenForo_Application::getDb();
        $version = is_array($installedAddon) ? $installedAddon['version_id'] : 0;
        if ($version == 0) {
            $db->query("ALTER TABLE `xf_user`
                        ADD COLUMN  `SSD_cmfu_options` BLOB NULL AFTER `is_staff`,
                        ADD COLUMN `SSD_cmfu_render_cache` BLOB NULL AFTER `SSD_cmfu_options`");
        }
        if ($version > 0) { // Upgrade section
            if ($version < 3) { // 1.0.0 Beta 1 - 1.0.0
                $db->query("ALTER TABLE `xf_user` ADD COLUMN `SSD_cmfu_render_cache` BLOB NULL AFTER `SSD_cmfu_options`");
            }
            
            if ($version < 4) { // 1.0.0 - 1.0.1
                $db->query("ALTER TABLE `xf_user`
                    CHANGE `SSD_cmfu_options` `SSD_cmfu_options` BLOB NULL,
                    CHANGE `SSD_cmfu_render_cache` `SSD_cmfu_render_cache` BLOB NULL
                ");
            }
        }
    }

    public static final function uninstall() {
        $db = XenForo_Application::getDb();
        $db->query("ALTER TABLE `xf_user`
                    DROP COLUMN `SSD_cmfu_options`,
                    DROP COLUMN `SSD_cmfu_render_cache`");
    }
}
