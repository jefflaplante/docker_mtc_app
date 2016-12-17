<?php

class Waindigo_ConvAccess_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/Waindigo/ConvAccess/Extend/XenForo/ControllerPublic/Conversation.php' => '0ede1a4e7e6b0a99ed6eea62f8def6ab',
                'library/Waindigo/ConvAccess/Extend/XenForo/DataWriter/ConversationMessage.php' => '79cf7f7b3bea9791cec6ec85af4b1c0f',
                'library/Waindigo/ConvAccess/Extend/XenForo/Model/Conversation.php' => '1cca0df13411609a06deae6cae0db6c0',
                'library/Waindigo/ConvAccess/Extend/XenForo/Route/Prefix/Conversations.php' => '2af5f7594b22e52e366fb0b6f78ed96f',
                'library/Waindigo/ConvAccess/Install/Controller.php' => '02f32c4001c2cda18836d39fdcc56570',
                'library/Waindigo/ConvAccess/Listener/LoadClass.php' => '7c789b70098b24a70d6c11fba272da28',
                'library/Waindigo/ConvAccess/Listener/TemplateModification.php' => '76c37c37914da44cd3a6fa4daf2410cc',
                'library/Waindigo/ConvAccess/Listener/TemplatePostRender.php' => '76d4db0776bec6b7c8efa55c89fc82a1',
                'library/Waindigo/Install.php' => '00d8b93ea3458f18752c348a09a16c50',
                'library/Waindigo/Install/20140611.php' => 'c0d4af592999549895ee773f873c53a2',
                'library/Waindigo/Deferred.php' => '4649953c0a44928b5e2d4a86e7d3f48a',
                'library/Waindigo/Deferred/20130725.php' => '699fb7a47bd443d53cb14f524321175a',
                'library/Waindigo/Listener/ControllerPreDispatch.php' => 'f51aeb4ef6c4acbce629188b04cd3643',
                'library/Waindigo/Listener/ControllerPreDispatch/20140603.php' => 'e994eceede4e4ff50a32a2326db5445f',
                'library/Waindigo/Listener/InitDependencies.php' => '5b755bcc0e553351c40871f4181ce5b0',
                'library/Waindigo/Listener/InitDependencies/20140612.php' => 'fc3a7a3a7ee5a4172703fe4ed6261865',
                'library/Waindigo/Listener/LoadClass.php' => 'bfdfe90f8d484d81b05889037a4fb091',
                'library/Waindigo/Listener/LoadClass/20140604.php' => '645baab050ea0895d7dccd8489f93b8e',
                'library/Waindigo/Listener/Template.php' => 'b52cba9c298d9702b4536146d3ac4312',
                'library/Waindigo/Listener/Template/20140612.php' => '65e22fdb29c23f36608cbe88da32918f',
                'library/Waindigo/Listener/TemplateModification.php' => '2cb817ff114aa8dd375185e951998109',
                'library/Waindigo/Listener/TemplateModification/20130810.php' => '8b8d1e64bb118c58b228597cb5afebd5',
                'library/Waindigo/Listener/TemplatePostRender.php' => '73d70bb432c859375b1b8c05ffd8d027',
                'library/Waindigo/Listener/TemplatePostRender/20130522.php' => '6309fdcf4496771bb7050ad03d91593e',
            ));
    } /* END fileHealthCheck */
}