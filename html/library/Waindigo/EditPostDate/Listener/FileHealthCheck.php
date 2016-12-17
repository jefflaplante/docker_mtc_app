<?php

class Waindigo_EditPostDate_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/Waindigo/EditPostDate/Deferred/Thread.php' => 'e95279a1d3fd90f38a1866438cf5ad77',
                'library/Waindigo/EditPostDate/Extend/XenForo/ControllerPublic/Forum.php' => 'a9e36bfd6014bcb5b871ede17f453e7e',
                'library/Waindigo/EditPostDate/Extend/XenForo/ControllerPublic/InlineMod/Post.php' => 'd0cd3e5f234f9936d8e8f3da228fe5f7',
                'library/Waindigo/EditPostDate/Extend/XenForo/ControllerPublic/Post.php' => '65de25ad60c1fb39c010e2c9efd48521',
                'library/Waindigo/EditPostDate/Extend/XenForo/ControllerPublic/Thread.php' => '934b4eb9b35b47fb5cce521b28f52b1f',
                'library/Waindigo/EditPostDate/Extend/XenForo/DataWriter/Discussion/Thread.php' => '403ced119fba0abf06e9a7ab0bdf2b20',
                'library/Waindigo/EditPostDate/Extend/XenForo/DataWriter/DiscussionMessage/Post.php' => '21a767ca7ecd9cd17347cf6e0311e6a9',
                'library/Waindigo/EditPostDate/Extend/XenForo/Model/Forum.php' => '7eea660979f500a5de7c0afaf036e2b1',
                'library/Waindigo/EditPostDate/Extend/XenForo/Model/InlineMod/Post.php' => '32ec63f2d3d5fe3f7e8aed0320d2649e',
                'library/Waindigo/EditPostDate/Extend/XenForo/Model/Post.php' => 'b580a9b35dcc1801e7c6cd38462e0ebc',
                'library/Waindigo/EditPostDate/Install/Controller.php' => 'b14c0e9762d5fba3c29d70eabb23576d',
                'library/Waindigo/EditPostDate/Listener/LoadClass.php' => 'e105c435badea7f98225786150f8ec38',
                'library/Waindigo/EditPostDate/Listener/TemplateHook.php' => '0537e1911d62478c3947678346946a7f',
                'library/Waindigo/EditPostDate/Listener/TemplatePostRender.php' => 'f265e5000d97cff9054177aa9762f362',
                'library/Waindigo/Install.php' => '00d8b93ea3458f18752c348a09a16c50',
                'library/Waindigo/Install/20141110.php' => '7e9d8f07c2cb4f1a049f3ffb2f99bf43',
                'library/Waindigo/Deferred.php' => '4649953c0a44928b5e2d4a86e7d3f48a',
                'library/Waindigo/Deferred/20130725.php' => '699fb7a47bd443d53cb14f524321175a',
                'library/Waindigo/Listener/ControllerPreDispatch.php' => 'f51aeb4ef6c4acbce629188b04cd3643',
                'library/Waindigo/Listener/ControllerPreDispatch/20141226.php' => '1fcffd0dc3050b0bcb5b6e3b16f53019',
                'library/Waindigo/Listener/InitDependencies.php' => '5b755bcc0e553351c40871f4181ce5b0',
                'library/Waindigo/Listener/InitDependencies/20150101.php' => '21c224866b2ea0b90dee32a6658fef5d',
                'library/Waindigo/Listener/LoadClass.php' => 'bfdfe90f8d484d81b05889037a4fb091',
                'library/Waindigo/Listener/LoadClass/20141202.php' => '088b3f5d9e4d7c103b48b3bc3c451f74',
                'library/Waindigo/Listener/Template.php' => 'b52cba9c298d9702b4536146d3ac4312',
                'library/Waindigo/Listener/Template/20150101.php' => '120172c186efb3f25ce2ceeb7dbc8f05',
                'library/Waindigo/Listener/TemplateHook.php' => '37c6a882bfb9d790801c94051fe3eb0d',
                'library/Waindigo/Listener/TemplateHook/20141020.php' => '7cea585f0284789f639fd08dbc1679b6',
                'library/Waindigo/Listener/TemplatePostRender.php' => '73d70bb432c859375b1b8c05ffd8d027',
                'library/Waindigo/Listener/TemplatePostRender/20140711.php' => '83c92589762bac3b5efa016de1b1aee3',
            ));
    } /* END fileHealthCheck */
}