<?php

class Waindigo_UserRegSpam_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/Waindigo/UserRegSpam/ControllerAdmin/UserSpamRule.php' => '8fbcf48b34c7921bd3868752347f3794',
                'library/Waindigo/UserRegSpam/DataWriter/UserSpamRule.php' => '943eec0f290ecdfe5bb853424878beb1',
                'library/Waindigo/UserRegSpam/Extend/XenForo/Model/SpamPrevention.php' => '15f52450f3a7291b1b8976b108ec4f34',
                'library/Waindigo/UserRegSpam/Helper/Criteria.php' => '9e52d89da55313be4f1f01992b45dcad',
                'library/Waindigo/UserRegSpam/Install/Controller.php' => 'a6ec02b0fa022ff71891e598d31b3561',
                'library/Waindigo/UserRegSpam/Listener/LoadClass.php' => '5eff0da5a20513ed72dc0746f74357e7',
                'library/Waindigo/UserRegSpam/Model/UserSpamRule.php' => '59735a496336b9c57e5ecd81ad350c9b',
                'library/Waindigo/UserRegSpam/Route/PrefixAdmin/UserSpamRules.php' => 'f815d8d8f5f2a5edf1276fa4af8ed677',
                'library/Waindigo/Install.php' => '00d8b93ea3458f18752c348a09a16c50',
                'library/Waindigo/Install/20140131.php' => '48656e0767accc4a528b37fb484e31f5',
                'library/Waindigo/Deferred.php' => '4649953c0a44928b5e2d4a86e7d3f48a',
                'library/Waindigo/Deferred/20130725.php' => '699fb7a47bd443d53cb14f524321175a',
                'library/Waindigo/Listener/ControllerPreDispatch.php' => 'f51aeb4ef6c4acbce629188b04cd3643',
                'library/Waindigo/Listener/ControllerPreDispatch/20131003.php' => '7ad68f6ed984c7123cacf75e1093ff04',
                'library/Waindigo/Listener/InitDependencies.php' => '5b755bcc0e553351c40871f4181ce5b0',
                'library/Waindigo/Listener/InitDependencies/20140101.php' => 'b7745aba37ee138e7d6af5806599f21a',
                'library/Waindigo/Listener/LoadClass.php' => 'bfdfe90f8d484d81b05889037a4fb091',
                'library/Waindigo/Listener/LoadClass/20131003.php' => 'e3cd73a6c98c045050a307426997d806',
            ));
    } /* END fileHealthCheck */
}