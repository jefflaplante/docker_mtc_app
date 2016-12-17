<?php

/** 
  * @author Thomas Braunberger
  */


class Awedo_Lmgtfy_Bbcode
{                
    
    /**
     * Returns an array in format: sub domain => search type(s)
     * 
     * @return array
     */
        
    protected static function _getSubDomains()
    {                
        $subDomains = array( 
                'images' => array('image', 'images'),
                'maps' => array('map', 'maps'),
                'video' => array('video', 'videos'),
                'news' => 'news',
                'shopping' => 'shopping',
                'photos' => array('photo', 'photos'),
                'plus' => 'plus',
                'profiles' => array('profile', 'profiles'),
                'finance' => array('finance', 'finances'),
                'scholar' => array('scholar', 'scholars'),
                'bing' => 'bing',
                'snopes' => 'snopes',
                'snopes' => 'wikipedia'                                                        
            );
                
        return $subDomains;        
    }    
    
    
    
    public static function renderTagGoogle(array $tag, array $rendererStates, XenForo_BbCode_Formatter_Base $formatter)
    {                                        
        // get key words
        $keyWords = $formatter->stringifyTree($tag['children']);
        $keyWords = $formatter->filterString($keyWords, $rendererStates);
        $keyWords = urlencode($keyWords);
        
        // get default link text
        $defaultLangId = XenForo_Application::getOptions()->defaultLanguageId;
        $linkText = new XenForo_Phrase('awedo_lmgtfy_link_text', array('keyWords' => $keyWords));
        $linkText->setLanguageId($defaultLangId);        
        
        $optionValue = $tag['option'];
        
        if ($optionValue)
        {
            $args = explode('/', $optionValue, 2);                    
            $arg1 = $args[0];
            
            if(count($args) > 1)
            {                 
                $linkText = $args[1];
            }
                                    
            $subDomain = self::_getSubDomain($arg1);
                                                
            if ($subDomain)
            {
                $subDomain .= '.';
            }
            else   // consider arg1 as link text
            {
                $subDomain = '';
                $linkText = $arg1;            
            }            
        }        
        else
        {
            $subDomain = '';
        }
        
        $url = "http://" . $subDomain . "lmgtfy.com/?q=$keyWords";        
        $link = "<a href='$url' target='_blank'>$linkText</a>";
        
        return $link;        
    }        
            


    protected static function _getSubDomain($searchType)
    {             
        
        $subDomains = self::_getSubDomains();
        
        foreach ($subDomains as $subDomain => $searchTypes)
        {            
            $varType = gettype($searchTypes);
            
            if ($varType == 'string')                
            {
                if ($searchType == $searchTypes)
                {
                    return $subDomain;
                }
            }            
            else if ($varType == 'array')
            {
                if (in_array($searchType, $searchTypes))
                {
                    return $subDomain;
                }                
            }            
            else
            {
                $message = 'Invalid data type.';
                XenForo_Error::logException(new XenForo_Exception($message));
            }                             
        }    
        
        return false;
    }
        
}