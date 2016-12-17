<?php

class Waindigo_EditPostDate_Install_Controller extends Waindigo_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/edit-post-date-by-waindigo.2295/';

    protected function _getPermissionEntries()
    {
        return array(
            'forum' => array(
                'editPostDate' => array(
                    'permission_group_id' => 'forum', /* 'permission_group_id' */
                    'permission_id' => 'manageAnyThread', /* 'permission_id' */
                ), /* 'editPostDate' */
           ), /* 'forum' */
        );
    } /* END _getPermissionEntries */
}