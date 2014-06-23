<?php
namespace Kwi;

abstract class UrlLinker
{
    public static function htmlEscapeAndLinkUrls($text)
    {
        return htmlEscapeAndLinkUrls($text);
    }
};

require_once __DIR__.'/urllinker/UrlLinker.php';
?>
