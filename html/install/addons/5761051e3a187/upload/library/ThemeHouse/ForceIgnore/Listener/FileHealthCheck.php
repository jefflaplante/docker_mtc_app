<?php

class ThemeHouse_ForceIgnore_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/ForceIgnore/ControllerAdmin/ForceIgnore.php' => 'a1441e5a0e458f1c4abe5e10fb025195',
                'library/ThemeHouse/ForceIgnore/CronEntry/CleanUp.php' => '1ea7553833f9f8561e882855e06d0677',
                'library/ThemeHouse/ForceIgnore/Extend/XenForo/ControllerPublic/Account.php' => 'ffa55fb53104996a8d1c09302cbfdeac',
                'library/ThemeHouse/ForceIgnore/Extend/XenForo/ControllerPublic/Member.php' => 'ae4d5c65052d06cdf8b0a657aa75b44b',
                'library/ThemeHouse/ForceIgnore/Extend/XenForo/Model/User.php' => '87180fc18c7ed7d7f05c5922164bc37a',
                'library/ThemeHouse/ForceIgnore/Install/Controller.php' => '49667884a239748859d8021e2cfb6533',
                'library/ThemeHouse/ForceIgnore/Listener/ControllerPreDispatch.php' => '1c23a7c75823dcece03bc34b78d78cc9',
                'library/ThemeHouse/ForceIgnore/Listener/LoadClass.php' => '5181765a3d1da153f4c1637b0c8d4e5f',
                'library/ThemeHouse/ForceIgnore/Model/ForceIgnore.php' => 'd52c83aaf462c0b013fbefdedca78e86',
                'library/ThemeHouse/ForceIgnore/Route/PrefixAdmin/ForceIgnore.php' => 'c7c44d696446d1272aaa47bb372a1cab',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}