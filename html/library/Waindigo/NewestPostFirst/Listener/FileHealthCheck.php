<?php

class Waindigo_NewestPostFirst_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/Waindigo/NewestPostFirst/Extend/XenForo/ControllerPublic/Account.php' => 'be14033fc824311090bfd38d041b6592',
                'library/Waindigo/NewestPostFirst/Extend/XenForo/ControllerPublic/Post.php' => '6f5d7e56043f61486f14c3eff7416441',
                'library/Waindigo/NewestPostFirst/Extend/XenForo/ControllerPublic/Thread.php' => '354fc13f344181fbdc58a40617a61a62',
                'library/Waindigo/NewestPostFirst/Extend/XenForo/DataWriter/User.php' => 'f97a0aa3094d316d36862d4ecb0b95c9',
                'library/Waindigo/NewestPostFirst/Extend/XenForo/Model/Post.php' => '4d9c03841f285321d5b59d47822dc829',
                'library/Waindigo/NewestPostFirst/Extend/XenForo/Model/Thread.php' => 'fff026cd59505ce1df5ea04fa33750a6',
                'library/Waindigo/NewestPostFirst/Extend/XenForo/ViewPublic/Thread/View.php' => 'ac1f681e8a78952a4d650046c970c08d',
                'library/Waindigo/NewestPostFirst/Install/Controller.php' => '7f915dc1f806712a1c1d596a077deaa1',
                'library/Waindigo/NewestPostFirst/Listener/LoadClass.php' => '031d7f19a92a29150e343caa9dedf304',
                'library/Waindigo/NewestPostFirst/Listener/TemplateCreate.php' => 'a1fb1155249d8f02c9caad5058c5e0df',
                'library/Waindigo/NewestPostFirst/Listener/TemplateHook.php' => '125750ed36e3701b725ff739e4aaab3c',
                'library/Waindigo/Install.php' => '00d8b93ea3458f18752c348a09a16c50',
                'library/Waindigo/Install/20150313.php' => '0acd9a035aaa29f2ed22cb3754a696f0',
                'library/Waindigo/Deferred.php' => '4649953c0a44928b5e2d4a86e7d3f48a',
                'library/Waindigo/Deferred/20150106.php' => 'c886ad117aa0d601292bc1fa0b156544',
                'library/Waindigo/Listener/ControllerPreDispatch.php' => 'f51aeb4ef6c4acbce629188b04cd3643',
                'library/Waindigo/Listener/ControllerPreDispatch/20150212.php' => 'a2f05f1e44689d39d1ce95ad461eb4c5',
                'library/Waindigo/Listener/InitDependencies.php' => '5b755bcc0e553351c40871f4181ce5b0',
                'library/Waindigo/Listener/InitDependencies/20150212.php' => '2c5d6ecedd94347715d4866d9b03112c',
                'library/Waindigo/Listener/LoadClass.php' => 'bfdfe90f8d484d81b05889037a4fb091',
                'library/Waindigo/Listener/LoadClass/20150318.php' => '64bd61c4189f6fdb16d7dfcc578d1745',
                'library/Waindigo/Listener/Template.php' => 'b52cba9c298d9702b4536146d3ac4312',
                'library/Waindigo/Listener/Template/20150106.php' => '2bbe04f8b858a9dd2834a1ea6558d7b7',
                'library/Waindigo/Listener/TemplateCreate.php' => 'db5c0d5eb8c65b1840dd437e5cca69d6',
                'library/Waindigo/Listener/TemplateCreate/20150106.php' => '197a5be81b03099661da027fa4370312',
                'library/Waindigo/Listener/TemplateHook.php' => '37c6a882bfb9d790801c94051fe3eb0d',
                'library/Waindigo/Listener/TemplateHook/20150106.php' => '49397da485e59bb06089c84ba60db5a7',
            ));
    }
}