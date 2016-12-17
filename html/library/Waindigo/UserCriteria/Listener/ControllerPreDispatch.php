<?php

class Waindigo_UserCriteria_Listener_ControllerPreDispatch extends Waindigo_Listener_ControllerPreDispatch
{

    public function run()
    {
        if (self::$_controller instanceof XenForo_ControllerPublic_Help) {
            self::$_showCopyright = true;
        }

        parent::run();
    }

    public static function controllerPreDispatch(XenForo_Controller $controller, $action)
    {
        $controllerPreDispatch = new Waindigo_UserCriteria_Listener_ControllerPreDispatch($controller, $action);
        $controllerPreDispatch->run();
    }
}