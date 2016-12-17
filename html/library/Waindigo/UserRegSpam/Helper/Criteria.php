<?php

/**
 * Helper to manage/check the criteria that are used in user spam rules.
 */
class Waindigo_UserRegSpam_Helper_Criteria
{

    /**
     * Determines if the given request matches the criteria.
     *
     * @param array|string $criteria List of criteria, format: [] with keys rule
     * and data; may be serialized
     * @param boolean $matchOnEmpty If true and there's no criteria, true is
     * returned; otherwise, false
     * @param Zend_Controller_Request_Http $request Request to check against
     *
     * @return boolean
     */
    public static function requestMatchesCriteria($criteria, $matchOnEmpty = false,
        Zend_Controller_Request_Http $request = null)
    {
        if (!$criteria = XenForo_Helper_Criteria::unserializeCriteria($criteria)) {
            return (boolean) $matchOnEmpty;
        }

        if (!$request) {
            $request = new Zend_Controller_Request_Http();
        }

        foreach ($criteria as $criterion) {
            $data = $criterion['data'];

            switch ($criterion['rule']) {
                // user has open port
                case 'open_port':
                    if (empty($data['port'])) {
                        return (boolean) $matchOnEmpty;
                    }
                    if (@fsockopen($_SERVER['REMOTE_ADDR'], $data['port'], $errstr, $errno, 1)) {
                        return false;
                    }
                    break;
            }
        }

        return true;
    } /* END requestMatchesCriteria */
}