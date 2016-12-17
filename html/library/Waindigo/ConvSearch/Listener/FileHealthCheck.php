<?php

class Waindigo_ConvSearch_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/Waindigo/ConvSearch/Extend/XenForo/DataWriter/ConversationMaster.php' => '190e6cf6f08afb285b07b12dcb90dfd7',
                'library/Waindigo/ConvSearch/Extend/XenForo/DataWriter/ConversationMessage.php' => '7c9f7c1eb91e277cddc614e2a532966c',
                'library/Waindigo/ConvSearch/Extend/XenForo/Model/Conversation.php' => 'f2940d8ec343c84683775b34be502d13',
                'library/Waindigo/ConvSearch/Install/Controller.php' => 'aff43b34129ddf448307b1036a25e0a3',
                'library/Waindigo/ConvSearch/Listener/LoadClass.php' => '29b16189330ffdf68b99b751f77d8ef2',
                'library/Waindigo/ConvSearch/Listener/TemplateHook.php' => '795ccc0907723b5cf153380b26048c78',
                'library/Waindigo/ConvSearch/Search/DataHandler/Conversation.php' => '539fae1e63d0ae0a1b2de702535286ac',
                'library/Waindigo/ConvSearch/Search/DataHandler/ConversationMessage.php' => 'd8a84ceb8fa719374245f5cbba17a46e',
                'library/Waindigo/Install.php' => '00d8b93ea3458f18752c348a09a16c50',
                'library/Waindigo/Install/20150101.php' => '57a34ae9288bb314c0d357e8c0aa3fe0',
                'library/Waindigo/Deferred.php' => '4649953c0a44928b5e2d4a86e7d3f48a',
                'library/Waindigo/Deferred/20130725.php' => '699fb7a47bd443d53cb14f524321175a',
                'library/Waindigo/Listener/ControllerPreDispatch.php' => 'f51aeb4ef6c4acbce629188b04cd3643',
                'library/Waindigo/Listener/ControllerPreDispatch/20141226.php' => '1fcffd0dc3050b0bcb5b6e3b16f53019',
                'library/Waindigo/Listener/InitDependencies.php' => '5b755bcc0e553351c40871f4181ce5b0',
                'library/Waindigo/Listener/InitDependencies/20150101.php' => '21c224866b2ea0b90dee32a6658fef5d',
                'library/Waindigo/Listener/LoadClass.php' => 'bfdfe90f8d484d81b05889037a4fb091',
                'library/Waindigo/Listener/LoadClass/20150105.php' => '62c60df197c188c32fe83139fd17f2e3',
                'library/Waindigo/Listener/Template.php' => 'b52cba9c298d9702b4536146d3ac4312',
                'library/Waindigo/Listener/Template/20150101.php' => '120172c186efb3f25ce2ceeb7dbc8f05',
                'library/Waindigo/Listener/TemplateHook.php' => '37c6a882bfb9d790801c94051fe3eb0d',
                'library/Waindigo/Listener/TemplateHook/20141020.php' => '7cea585f0284789f639fd08dbc1679b6',
            ));
    } /* END fileHealthCheck */
}