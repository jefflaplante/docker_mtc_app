<?php

/**
 *
 * @see XenForo_Model_SpamPrevention
 */
class Waindigo_UserRegSpam_Extend_XenForo_Model_SpamPrevention extends XFCP_Waindigo_UserRegSpam_Extend_XenForo_Model_SpamPrevention
{

    /**
     *
     * @see XenForo_Model_SpamPrevention::allowRegistration()
     */
    public function allowRegistration(array $user, Zend_Controller_Request_Http $request)
    {
        $results = array(
            parent::allowRegistration($user, $request)
        );

        if (!$request) {
            $request = new Zend_Controller_Request_Http();
        }

        $results[] = $this->_checkUserSpamRules($user, $request);

        return max($results);
    } /* END allowRegistration */

    protected function _checkUserSpamRules(array $user, Zend_Controller_Request_Http $request)
    {
        /* @var $userSpamRuleModel Waindigo_UserRegSpam_Model_UserSpamRule */
        $userSpamRuleModel = $this->getModelFromCache('Waindigo_UserRegSpam_Model_UserSpamRule');

        $userSpamRules = $userSpamRuleModel->prepareUserSpamRules($userSpamRuleModel->getUserSpamRules());

        $result = self::RESULT_ALLOWED;

        foreach ($userSpamRules as $userSpamRule) {
            $requestMatches = Waindigo_UserRegSpam_Helper_Criteria::requestMatchesCriteria(
                $userSpamRule['requestCriteria'], true, $request);
            if ($requestMatches) {
                switch ($userSpamRule['action']) {
                    case 'moderate':
                        $result = self::RESULT_MODERATED;
                        break;
                    case 'reject':
                        $result = self::RESULT_DENIED;
                        break 2;
                }
            }
        }

        return $result;
    } /* END _checkUserSpamRules */
}