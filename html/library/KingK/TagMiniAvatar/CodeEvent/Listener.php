<?php

class KingK_TagMiniAvatar_CodeEvent_Listener
{
  public static function bbcode($class, array &$extend)
  {
    $extend[] = 'KingK_TagMiniAvatar_BbCode_Formatter_Base';
  }
}