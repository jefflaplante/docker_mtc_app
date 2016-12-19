<?php

class bdCache_CronEntry_CleanUp
{
    public static function runCssHouseKeeping()
    {
        bdCache_Css::doHouseKeeping();
    }
}
