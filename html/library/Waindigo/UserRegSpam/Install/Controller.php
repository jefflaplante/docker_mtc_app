<?php

/**
 * Installer for User Registration Spam Criteria by Waindigo.
 */
class Waindigo_UserRegSpam_Install_Controller extends Waindigo_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/user-registration-spam-rules-by-waindigo.2890/';

    protected $_minVersionId = 1020000;

    protected $_minVersionString = '1.2.0';

    /**
     * Gets the tables (with fields) to be created for this add-on.
     * See parent for explanation.
     *
     * @return array Format: [table name] => fields
     */
    protected function _getTables()
    {
        return array(
            'xf_user_spam_rule_waindigo' => array(
                'user_spam_rule_id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY', /* END 'user_spam_rule_id' */
                'title' => 'VARCHAR(255) NOT NULL', /* END 'title' */
                'action' => 'ENUM(\'moderate\', \'reject\') DEFAULT \'moderate\'', /* END 'action' */
                'request_criteria' => 'MEDIUMBLOB', /* END 'request_criteria' */
            ), /* END 'xf_user_spam_rule_waindigo' */
        );
    } /* END _getTables */
}