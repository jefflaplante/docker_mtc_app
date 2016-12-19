<?php

class bdCache_Helper_Amp
{
    protected static $_canonicalHref = '';
    protected static $_metaTags = array();
    protected static $_images = array();
    protected static $_customElements = array();
    protected static $_customStylesheets = '';

    public static function renderCustomElementScript($contents, array $params)
    {
        if (empty($params['element'])
            || empty($params['date'])
        ) {
            return;
        }

        $element = $params['element'];
        $date = $params['date'];
        if (isset(self::$_customElements[$element])) {
            if ($date < self::$_customElements[$element]['date']) {
                return;
            }
        }

        self::$_customElements[$element] = array(
            'element' => $element,
            'date' => $date,
            'script' => trim($contents),
        );
    }

    public static function renderCustomStylesheet($contents)
    {
        self::$_customStylesheets .= $contents;
    }

    public static function finalize(
        /** @noinspection PhpUnusedParameterInspection */
        $templateName,
        &$content,
        array &$containerData,
        XenForo_Template_Abstract $template
    ) {
        $customStylesheet = self::_finalize_getCustomStylesheet($content, $template);

        $customHtml = '';
        foreach (self::$_customElements as $customElement) {
            $customHtml .= $customElement['script'];
        }

        if (strpos($content, 'application/ld+json') === false) {
            $customHtml .= self::_finalize_getStructuredData($content);
        }

        /** @noinspection HtmlUnknownAttribute */
        $search = '<style amp-custom>';
        $content = str_replace($search, $customHtml . $search . $customStylesheet, $content);
    }

    protected static function _finalize_getCustomStylesheet($html, XenForo_Template_Abstract $template)
    {
        $stylesheets = array('xenforo', 'form', 'public');

        $css = $template->getRequiredExternals('css');
        if (!empty($css['stylesheets'])) {
            foreach ($css['stylesheets'] as $stylesheet) {
                $stylesheets[] = $stylesheet;
            }
        }

        // load AMP-specific stylesheet last so its rules may override other rules
        $stylesheets[] = 'bdcache_amp';

        XenForo_Template_Abstract::setLanguageId(0);
        $templates = array();
        foreach ($stylesheets AS $stylesheet) {
            $templateName = $stylesheet . '.css';
            if (!isset($templates[$templateName])) {
                $templates[$templateName] = $template->create($templateName, $template->getParams());
            }
        }

        $css = XenForo_CssOutput::renderCssFromObjects($templates);
        $css .= self::$_customStylesheets;

        $css = XenForo_CssOutput::prepareCssForOutput($css, 'LTR');

        $css = str_replace('@charset "UTF-8";', '', $css);
        $css = str_replace('*zoom: 1;', '', $css);
        // https://xenforo.com/community/threads/1-5-6-invalid-css.113655/
        $css = str_replace('overflow; hidden;', 'overflow: hidden;', $css);

        $css = preg_replace('#\s{2,}#', "\n", $css);

        $css = bdCache_Helper_Css::cleanUpStylesheet($css, $html);
        $css = bdCache_Helper_Css::fixUrls($css);

        return $css;
    }

    protected static function _finalize_getStructuredData($html)
    {
        if (empty(self::$_canonicalHref)) {
            if (XenForo_Application::debugMode()) {
                return '<meta name="error" content="No canonical URL" />';
            }

            return '';
        }

        $title = '';
        if (empty($title)
            && isset(self::$_metaTags['og:title'])
        ) {
            $title = html_entity_decode(end(self::$_metaTags['og:title']));
        }
        if (empty($title)) {
            if (XenForo_Application::debugMode()) {
                return '<meta name="error" content="No title" />';
            }

            return '';
        }

        $description = '';
        if (empty($description)
            && isset(self::$_metaTags['og:description'])
        ) {
            $description = html_entity_decode(end(self::$_metaTags['og:description']));
        }
        if (empty($description)) {
            if (XenForo_Application::debugMode()) {
                return '<meta name="error" content="No description" />';
            }

            return '';
        }

        $imageUrl = '';
        $imageSize = null;
        if (empty($imageUrl)
            && isset(self::$_metaTags['og:image'])
        ) {
            foreach (self::$_metaTags['og:image'] as $_metaImage) {
                $_metaImageUrl = html_entity_decode($_metaImage);
                $_metaImageSize = bdCache_Helper_Image::getSize($_metaImageUrl);
                if (empty($_metaImageSize['width'])
                    || empty($_metaImageSize['height'])
                    || $_metaImageSize['width'] < 696
                ) {
                    continue;
                }

                if ($imageSize == null
                    || ($imageSize['width'] * $imageSize['height'] < $_metaImageSize['width'] * $_metaImageSize['height'])
                ) {
                    $imageUrl = $_metaImageUrl;
                    $imageSize = $_metaImageSize;
                }
            }
        }
        if (empty($imageUrl)) {
            foreach (self::$_images as $_image) {
                if (empty($_image['width'])
                    || empty($_image['height'])
                    || $_image['width'] < 696
                ) {
                    continue;
                }

                if ($imageSize == null
                    || ($imageSize['width'] * $imageSize['height'] < $_image['width'] * $_image['height'])
                ) {
                    $imageUrl = $_image['src'];
                    $imageSize = $_image;
                }
            }
        }
        if (empty($imageUrl)) {
            if (XenForo_Application::debugMode()) {
                return '<meta name="error" content="No image" />';
            }

            return '';
        }

        if (empty($imageSize['height'])
            || empty($imageSize['width'])
        ) {
            if (XenForo_Application::debugMode()) {
                return sprintf('<meta name="error" content="No image size (%s)" />',
                    htmlentities($imageUrl));
            }

            return '';
        }

        $datePublished = '';
        if (preg_match('#\sdata-time=("|\')(?<time>.+?)\\1#', $html, $matches)) {
            $datePublished = bdCache_Helper_Amp::getIso8601Date($matches['time']);
        }
        if (empty($datePublished)) {
            // thread_view: thread that is too old won't have this info
            $datePublished = bdCache_Helper_Amp::getIso8601Date(XenForo_Application::$time);
        }

        $author = '';
        if (preg_match('#\sdata-author=("|\')(?<author>.+?)\\1#', $html, $matches)) {
            $author = html_entity_decode($matches['author']);
        }
        if (empty($author)) {
            if (XenForo_Application::debugMode()) {
                return '<meta name="error" content="No author" />';
            }

            return '';
        }

        $logoUrl = sprintf('%s/bdCache/amp_logo.png',
            XenForo_Template_Helper_Core::styleProperty('imagePath'));
        $logoSize = bdCache_Helper_Image::getSize($logoUrl);
        if (empty($logoSize['height'])
            || empty($logoSize['width'])
        ) {
            if (XenForo_Application::debugMode()) {
                return sprintf('<meta name="error" content="No logo size (%s)" />',
                    htmlentities($logoUrl));
            }

            return '';
        }

        $structuredData = array(
            '@context' => 'http://schema.org',
            '@type' => 'NewsArticle',
            'mainEntityOfPage' => array(
                '@type' => 'WebPage',
                '@id' => self::$_canonicalHref,
            ),
            'headline' => $title,
            'description' => $description,
            'image' => array(
                '@type' => 'ImageObject',
                'url' => $imageUrl,
                'width' => $imageSize['width'],
                'height' => $imageSize['height'],
            ),
            'datePublished' => $datePublished,
            'dateModified' => $datePublished,
            'author' => array(
                '@type' => 'Person',
                'name' => $author,
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => XenForo_Application::getOptions()->get('boardTitle'),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => XenForo_Link::convertUriToAbsoluteUri($logoUrl, true),
                    'width' => $logoSize['width'],
                    'height' => $logoSize['height'],
                ),
            ),
        );

        return sprintf('<script type="application/ld+json">%s</script>', json_encode($structuredData));
    }

    public static function getHead($contents)
    {
        $contents = preg_replace_callback('#<link[^>]+>#', array(__CLASS__, '_getHead_linkCallback'), $contents);
        $contents = preg_replace_callback('#<meta[^>]+>#', array(__CLASS__, '_getHead_metaCallback'), $contents);
        $contents = preg_replace('#<style.+?</style>#s', '', $contents);
        $contents = preg_replace_callback('#<script.+?</script>#s',
            array(__CLASS__, '_getHead_scriptCallback'), $contents);

        if (empty(self::$_canonicalHref)
            && isset(self::$_metaTags['og:url'])
        ) {
            self::$_canonicalHref = html_entity_decode(end(self::$_metaTags['og:url']));

            /** @noinspection HtmlUnknownTarget */
            $contents .= sprintf('<link rel="canonical" href="%s" />', htmlentities(self::$_canonicalHref));
        }

        return $contents;
    }

    protected static function _getHead_linkCallback(array $matches)
    {
        $link = $matches[0];
        if (!preg_match('#\srel=("|\')(?<rel>.+?)\\1#', $link, $matches)) {
            return '';
        }

        $rel = $matches['rel'];
        switch ($rel) {
            case 'canonical':
                if (!preg_match('#\shref=("|\')(?<href>.+?)\\1#', $link, $matches)) {
                    return '';
                }

                self::$_canonicalHref = html_entity_decode($matches['href']);
                break;
            case 'stylesheet':
                if (!preg_match('#https://(?<host>[^/]+?)/#', $link, $matches)) {
                    return '';
                }
                $host = $matches['host'];
                switch ($host) {
                    case 'fast.fonts.net':
                    case 'fonts.googleapis.com':
                        // good providers
                        break;
                    default:
                        return '';
                }
                break;
            case 'preconnect':
            case 'prerender':
            case 'prefectch':
                return '';
        }

        return $link;
    }

    protected static function _getHead_metaCallback(array $matches)
    {
        $meta = $matches[0];

        if (strpos($meta, 'http-equiv') !== false) {
            return '';
        }
        if (strpos($meta, 'charset="utf-8"')) {
            return $meta;
        }

        if (!preg_match('#\s(name|property)=("|\')(?<name>.+?)\\2#', $meta, $matches)) {
            return '';
        }
        $name = $matches['name'];

        if (!preg_match('#\scontent=("|\')(?<content>.+?)\\1#s', $meta, $matches)) {
            return '';
        }
        $content = $matches['content'];

        if (!isset(self::$_metaTags[$name])) {
            self::$_metaTags[$name] = array();
        }
        self::$_metaTags[$name][] = $content;

        return $meta;
    }

    protected static function _getHead_scriptCallback(array $matches)
    {
        $script = $matches[0];

        if (strpos($script, 'type="application/ld+json"') !== false) {
            return $script;
        }

        if (!preg_match('#<script[^>]+async[^>]+>#', $script, $matches)) {
            return '';
        }
        if (!preg_match('#<script[^>]+src="https://cdn.ampproject.org/[^>]+>#', $script, $matches)) {
            return '';
        }

        return $script;
    }

    public static function getBody($contents)
    {
        // https://github.com/ampproject/amphtml/blob/master/spec/amp-html-format.md#html-tags
        $contents = preg_replace('#<style.+?</style>#s', '', $contents);
        $contents = preg_replace('#<script.+?</script>#s', '', $contents);
        $contents = preg_replace('#</?(base|frame|frameset|object|param|applet|embed|'
            . 'form|input|textarea|select|option|label|fieldset|'
            . 'canvas)[^>]*>#', '', $contents);

        $contents = preg_replace('#\sstyle=("|\').*?\\1#', '', $contents);
        $contents = preg_replace('#<(table|tbody|th|tr|td).+?>#', '<$1>', $contents);

        $contents = preg_replace_callback('#<img[^>]+/>#', array(__CLASS__, '_getBody_imgCallback'), $contents);
        $contents = preg_replace_callback('#<iframe.+?</iframe>#s', array(__CLASS__, '_getBody_iframeCallback'),
            $contents);
        $contents = preg_replace('#<(/?)(video|audio)#', '<$1amp-$2', $contents);
        $contents = preg_replace_callback('#<a.+?</a>#s', array(__CLASS__, '_getBody_linkCallback'), $contents);

        $contents = preg_replace('#\s{2,}#', "\n", $contents);

        return $contents;
    }

    protected static function _getBody_imgCallback(array $matches)
    {
        $src = '';
        $width = 0;
        $height = 0;
        $layout = 'responsive';
        $otherAttributes = array();

        $offset = 0;
        $img = $matches[0];

        if (strpos($img, 'mceSmilie') !== false) {
            // this is a smilie, use the text version or do not render at all
            if (!preg_match('#alt="(?<text>.+?)"#', $img, $matches)) {
                return '';
            }

            return $matches['text'];
        }

        while (true) {
            if (preg_match('#([^\s]+?)=("|\')(.*?)\\2#s', $img, $matches, PREG_OFFSET_CAPTURE, $offset)) {
                $attrKey = $matches[1][0];
                $attrValue = $matches[3][0];
                switch ($attrKey) {
                    case 'src':
                    case 'width':
                    case 'height':
                    case 'layout':
                        $$attrKey = $attrValue;
                        break;
                    default:
                        $otherAttributes[] = $matches[0][0];
                }
                $offset = $matches[0][1] + strlen($matches[0][0]);
            } else {
                break;
            }
        }

        if (substr($src, 0, 5) === 'data:') {
            // TODO: parse width and height from data uri
            return '';
        }

        if (!empty($src)) {
            $absoluteUri = XenForo_Link::convertUriToAbsoluteUri(html_entity_decode($src), true);
            $imageSize = null;

            if (empty($width) || empty($height)) {
                if ($absoluteUri != $src) {
                    // local file
                    if (strpos($src, 'proxy.php?') === 0) {
                        // proxied image
                        $queryString = substr($src, 10);
                        parse_str($queryString, $queryStringParams);
                        if (!empty($queryStringParams['image'])) {
                            $src = $queryStringParams['image'];
                        }
                    }

                    // remove query string if any
                    $src = preg_replace('#\?.+$#', '', $src);

                    $imageSize = bdCache_Helper_Image::getSize($src);
                }

                if (empty($imageSize['width']) || empty($imageSize['height'])) {
                    // remote file
                    $imageSize = bdCache_Helper_Image::getSize($absoluteUri);
                }

                if (!empty($imageSize['width']) && !empty($imageSize['height'])) {
                    $width = $imageSize['width'];
                    $height = $imageSize['height'];
                }
            }
        }

        if (empty($absoluteUri) || empty($width) || empty($height)) {
            return '';
        }

        self::$_images[] = array(
            'src' => $absoluteUri,
            'width' => $width,
            'height' => $height,
        );

        return sprintf('<amp-img src="%s" width="%d" height="%d" layout="%s" %s></amp-img>',
            htmlentities($absoluteUri), $width, $height, $layout, implode(' ', $otherAttributes));
    }

    protected static function _getBody_iframeCallback(array $matches)
    {
        $src = '';
        $width = 0;
        $height = 0;
        $layout = 'responsive';
        $sandbox = 'allow-scripts allow-same-origin';
        $otherAttributes = array();

        $iframe = $matches[0];
        if (!preg_match('#^<iframe.+?>#', $iframe, $matches)) {
            return '';
        }
        $openingTag = $matches[0];

        $offset = 0;
        while (true) {
            if (preg_match('#([^\s]+?)=("|\')(.+?)\\2#s', $openingTag, $matches, PREG_OFFSET_CAPTURE, $offset)) {
                $attrKey = $matches[1][0];
                $attrValue = $matches[3][0];
                switch ($attrKey) {
                    case 'src':
                    case 'width':
                    case 'height':
                    case 'layout':
                    case 'sandbox':
                        $$attrKey = $attrValue;
                        break;
                    default:
                        $otherAttributes[] = $matches[0][0];
                }
                $offset = $matches[0][1] + strlen($matches[0][0]);
            } else {
                break;
            }
        }

        if (empty($src) || empty($width) || empty($height)) {
            return '';
        }

        if (preg_match('#youtube.com/embed/(?<id>.+?)(\?|$)#', $src, $matches)) {
            $videoId = $matches['id'];

            self::renderCustomElementScript('<script async custom-element="amp-youtube" '
                . 'src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>', array(
                'element' => 'youtube',
                'date' => 201603130552,
            ));

            return sprintf('<amp-youtube data-videoid="%s" width="%d" height="%d" layout="%s"></amp-youtube>',
                $videoId, $width, $height, $layout);
        }

        self::renderCustomElementScript('<script async custom-element="amp-iframe" '
            . 'src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>', array(
            'element' => 'iframe',
            'date' => 201603130552,
        ));

        return sprintf('<amp-iframe src="%s" width="%d" height="%d" layout="%s" sandbox="%s" %s></amp-iframe>',
            $src, $width, $height, $layout, $sandbox, implode(' ', $otherAttributes));
    }

    protected static function _getBody_linkCallback(array $matches)
    {
        $link = $matches[0];

        if (!preg_match('#<a[^>]*\shref=("|\')(?<href>[^>]+?)\\1#', $link, $matches)) {
            return '';
        }

        $href = $matches['href'];
        if (substr($href, 0, 2) === '//') {
            // good
        } elseif (substr($href, 0, 11) === 'javascript:') {
            return '';
        } else {
            $absoluteUri = XenForo_Link::convertUriToAbsoluteUri(html_entity_decode($href), true);
            $scheme = parse_url($absoluteUri, PHP_URL_SCHEME);
            switch ($scheme) {
                case 'http':
                case 'https':
                    $link = str_replace($href, htmlentities($absoluteUri), $link);
                    break;
                default:
                    return '';
            }
        }

        // TODO: find a better way to filter a[rel] values
        $link = str_replace('rel="Menu"', '', $link);

        return $link;
    }

    public static function getAnalytics()
    {
        $googleId = XenForo_Application::getOptions()->get('googleAnalyticsWebPropertyId');
        if (empty($googleId)) {
            return '';
        }

        self::renderCustomElementScript('<script async custom-element="amp-analytics" '
            . 'src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>', array(
            'element' => 'analytics',
            'date' => 201603130552,
        ));

        return sprintf('<amp-analytics type="googleanalytics" id="%s">'
            . '<script type="application/json">%s</script></amp-analytics>',
            htmlentities($googleId), json_encode(array(
                'vars' => array('account' => $googleId),
                'triggers' => array(
                    'trackPageview' => array(
                        'on' => 'visible',
                        'request' => 'pageview',
                    ),
                ),
            ))
        );
    }

    public static function template_hook_share_page_options(
        /** @noinspection PhpUnusedParameterInspection */
        $name,
        &$contents,
        array $params,
        XenForo_Template_Abstract $template
    ) {
        if (!in_array($name, array('bdcache_amp_share_page', 'bdcache_amp_sidebar_share_page'))
            || strpos($contents, 'amp-social-share') !== false
        ) {
            // some add-on has already rendered AMP-compatible social share buttons
            // do nothing here
            return;
        }

        $ourTemplate = $template->create('bdcache_amp_share_page_options', $template->getParams());
        $ourTemplate->setParam('url', $params['url']);

        $contents = $ourTemplate->render();
    }

    public static function getIso8601Date($timestamp)
    {
        return gmdate('c', $timestamp);
    }
}