<?php

class Waindigo_UserCriteria_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/Waindigo/UserCriteria/Extend/XenForo/Model/Like.php' => 'b9ce0b248d9a67ce3543baa81cd9de94',
                'library/Waindigo/UserCriteria/Extend/XenForo/Model/Post.php' => '19dfa6f3154a44debd20dddea2c088b4',
                'library/Waindigo/UserCriteria/Install/Controller.php' => 'fbd6ade8edeccf6f63a3486985f9cc9e',
                'library/Waindigo/UserCriteria/Listener/ControllerPreDispatch.php' => 'f0cf890f67b728ec7a3fe05fc10ee8c7',
                'library/Waindigo/UserCriteria/Listener/CriteriaUser.php' => '3cc8de95e29da8cb05cc9e3dd6fa78c9',
                'library/Waindigo/UserCriteria/Listener/LoadClass.php' => 'be7ba9b1c55787b2c25c0345c6c302db',
                'library/Waindigo/UserCriteria/Listener/TemplateHook.php' => '0dc7d8e9c61a1c62d09c7e6c94867cab',
                'library/Waindigo/UserCriteria/Listener/TemplatePostRender.php' => '29b361dff4ec379b0639e6233274fa30',
                'library/Waindigo/Install.php' => '00d8b93ea3458f18752c348a09a16c50',
                'library/Waindigo/Install/20150218.php' => '7f3891b7527189c007f071bb6b098757',
                'library/Waindigo/Deferred.php' => '4649953c0a44928b5e2d4a86e7d3f48a',
                'library/Waindigo/Deferred/20150106.php' => 'c886ad117aa0d601292bc1fa0b156544',
                'library/Waindigo/Listener/ControllerPreDispatch.php' => 'f51aeb4ef6c4acbce629188b04cd3643',
                'library/Waindigo/Listener/ControllerPreDispatch/20150212.php' => 'a2f05f1e44689d39d1ce95ad461eb4c5',
                'library/Waindigo/Listener/InitDependencies.php' => '5b755bcc0e553351c40871f4181ce5b0',
                'library/Waindigo/Listener/InitDependencies/20150212.php' => '2c5d6ecedd94347715d4866d9b03112c',
                'library/Waindigo/Listener/LoadClass.php' => 'bfdfe90f8d484d81b05889037a4fb091',
                'library/Waindigo/Listener/LoadClass/20150106.php' => 'a962cf203ee7efe8247366e5de3862a0',
                'library/Waindigo/Listener/Template.php' => 'b52cba9c298d9702b4536146d3ac4312',
                'library/Waindigo/Listener/Template/20150106.php' => '2bbe04f8b858a9dd2834a1ea6558d7b7',
                'library/Waindigo/Listener/TemplateHook.php' => '37c6a882bfb9d790801c94051fe3eb0d',
                'library/Waindigo/Listener/TemplateHook/20150106.php' => '49397da485e59bb06089c84ba60db5a7',
                'library/Waindigo/Listener/TemplatePostRender.php' => '73d70bb432c859375b1b8c05ffd8d027',
                'library/Waindigo/Listener/TemplatePostRender/20150106.php' => '41fc17661980130f039d011cc419fc9f',
            ));
    }
}