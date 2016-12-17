<?php

/**
 * KL_InlineSpoiler_BBCode_Formatter_InlineSpoiler
 *
 * @author: Nerian
 * @last_edit:    17.09.2015
 */

class KL_InlineSpoiler_BBCode_Formatter_InlineSpoiler {

    /* 
     * @last_edit:	15.09.2015
     * @params: array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter
     * @return: string
     */
    public static function renderTagInlineSpoiler(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter) {
        $tag = self::_resolveChildren($tag);
        
        $content = '<span class="iSpoiler" onclick="$(this).toggleClass(\'shown\');"><span class="plus">+</span><span class="hiddenContent">'.$formatter->renderSubTree($tag['children'], $rendererStates).'</span></span>'; 
        
        return $content;
    }
    
    /* 
     * @last_edit:	15.09.2015
     * @params: array $tag, array $resolveArray
     * @return: array
     */
    private static function _resolveChildren($tag, $resolveArray = array('b', 'i', 's', 'ispoiler', 'u')) {
        if(is_array($tag) && !in_array($tag['tag'], $resolveArray)) {
            return null;
        }
        else {
            if(is_array($tag)) {
                foreach($tag['children'] as $key => $child) {
                        $tag['children'][$key] = self::_resolveChildren($child);
                }
            }
        }
        
        return $tag;
    }
}