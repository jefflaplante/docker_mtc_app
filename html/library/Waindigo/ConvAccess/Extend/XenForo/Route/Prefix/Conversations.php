<?php

/**
 *
 * @see XenForo_Route_Prefix_Conversations
 */
class Waindigo_ConvAccess_Extend_XenForo_Route_Prefix_Conversations extends XFCP_Waindigo_ConvAccess_Extend_XenForo_Route_Prefix_Conversations
{

    /**
     *
     * @see XenForo_Route_Prefix_Conversations::buildLink()
     */
    public function buildLink($originalPrefix, $outputPrefix, $action, $extension, $data, array &$extraParams)
    {
        $request = new Zend_Controller_Request_Http();
        $userId = $request->getParam('conversation_user_id');
        if ($userId) {
            $extraParams['conversation_user_id'] = $userId;
        }

        return parent::buildLink($originalPrefix, $outputPrefix, $action, $extension, $data, $extraParams);
    } /* END buildLink */
}