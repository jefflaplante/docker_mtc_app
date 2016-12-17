<?php

class Waindigo_Trophies_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/Waindigo/Trophies/ControllerAdmin/TrophyCategory.php' => '6c8b8a3ac5dc0236932321a9065e8e31',
                'library/Waindigo/Trophies/CronEntry/Trophy.php' => '1c88a94350b9bbcd54037039966096d5',
                'library/Waindigo/Trophies/DataWriter/TrophyCategory.php' => '22f9798f3b287253f73aaec863c47ff0',
                'library/Waindigo/Trophies/Extend/XenForo/ControllerAdmin/Trophy.php' => '7f6403998e22a52720c4420839f02e26',
                'library/Waindigo/Trophies/Extend/XenForo/ControllerPublic/Account.php' => '59076f1e4d5cfbee15a9e5ffa7df6b9a',
                'library/Waindigo/Trophies/Extend/XenForo/ControllerPublic/Help.php' => 'f27bc2ef1e0b25f4aea0fc4e232771e1',
                'library/Waindigo/Trophies/Extend/XenForo/ControllerPublic/Member.php' => 'e3bd607ca75c67d5e21a802417821cd4',
                'library/Waindigo/Trophies/Extend/XenForo/ControllerPublic/Thread.php' => 'dad894756e8d176a6b2507599e736a7d',
                'library/Waindigo/Trophies/Extend/XenForo/DataWriter/Trophy.php' => '441e317ff3427881959800f857471c65',
                'library/Waindigo/Trophies/Extend/XenForo/DataWriter/User.php' => 'd013f9e9799b054fc56ddc0634b81e00',
                'library/Waindigo/Trophies/Extend/XenForo/Model/Post.php' => '02d93214271b5e5dac7c8365c608c795',
                'library/Waindigo/Trophies/Extend/XenForo/Model/Trophy.php' => '77f8fbec7a8ca3ab461fe24e6297ca37',
                'library/Waindigo/Trophies/Install/Controller.php' => '3e622aed22860811593af498a2be6713',
                'library/Waindigo/Trophies/Listener/LoadClass.php' => 'a73844b36a8345dcdd6dae6f209477e1',
                'library/Waindigo/Trophies/Listener/TemplateCreate.php' => '5488f9e72b86cd9ac014b1b04cdf7fd2',
                'library/Waindigo/Trophies/Listener/TemplatePostRender.php' => 'e1626f577db2d39d77dbc39ecd0cbaf7',
                'library/Waindigo/Trophies/Model/TrophyCategory.php' => '79928249da1033240a304d8083464c34',
                'library/Waindigo/Trophies/Model/TrophyCombination.php' => 'd485f64d34fb60de5c9c0130a9547b0c',
                'library/Waindigo/Trophies/Route/PrefixAdmin/TrophyCategories.php' => 'e8d60664e8eb2108b8351f07ff67b96f',
                'library/Waindigo/Trophies/ViewAdmin/Trophies/Export.php' => '22c35f71f7e680f548f747fead292edb',
                'library/Waindigo/Install.php' => '00d8b93ea3458f18752c348a09a16c50',
                'library/Waindigo/Install/20150313.php' => '0acd9a035aaa29f2ed22cb3754a696f0',
                'library/Waindigo/Deferred.php' => '4649953c0a44928b5e2d4a86e7d3f48a',
                'library/Waindigo/Deferred/20150106.php' => 'c886ad117aa0d601292bc1fa0b156544',
                'library/Waindigo/Listener/ControllerPreDispatch.php' => 'f51aeb4ef6c4acbce629188b04cd3643',
                'library/Waindigo/Listener/ControllerPreDispatch/20150212.php' => 'a2f05f1e44689d39d1ce95ad461eb4c5',
                'library/Waindigo/Listener/InitDependencies.php' => '5b755bcc0e553351c40871f4181ce5b0',
                'library/Waindigo/Listener/InitDependencies/20150212.php' => '2c5d6ecedd94347715d4866d9b03112c',
                'library/Waindigo/Listener/LoadClass.php' => 'bfdfe90f8d484d81b05889037a4fb091',
                'library/Waindigo/Listener/LoadClass/20150518.php' => 'ea1b8d0d95b2ea3566fdfb7fd359a4b4',
                'library/Waindigo/Listener/Template.php' => 'b52cba9c298d9702b4536146d3ac4312',
                'library/Waindigo/Listener/Template/20150106.php' => '2bbe04f8b858a9dd2834a1ea6558d7b7',
                'library/Waindigo/Listener/TemplateCreate.php' => 'db5c0d5eb8c65b1840dd437e5cca69d6',
                'library/Waindigo/Listener/TemplateCreate/20150106.php' => '197a5be81b03099661da027fa4370312',
                'library/Waindigo/Listener/TemplatePostRender.php' => '820870f6c332a112de0df78a84121285',
                'library/Waindigo/Listener/TemplatePostRender/20150106.php' => '41fc17661980130f039d011cc419fc9f',
                'library/Waindigo/Deferred/20130725.php' => '699fb7a47bd443d53cb14f524321175a',
            ));
    }
}