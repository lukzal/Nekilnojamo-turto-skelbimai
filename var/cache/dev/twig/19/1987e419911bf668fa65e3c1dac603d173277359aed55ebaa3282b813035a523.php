<?php

/* js/galleria/themes/fullscreen/galleria.fullscreen.css */
class __TwigTemplate_d265aa75eb9f9cf1f81b632d0a10e1c328bce4b796849517c37bb93c22d3450a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/themes/fullscreen/galleria.fullscreen.css"));

        // line 1
        echo "/**
 * Galleria Classic Theme 2017-02-27
 * http://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed 2017-02-27 under the MIT license
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

#galleria-loader{height:1px!important}

html,
body { background: #000 }
.galleria-theme-fullscreen {
    height: 100%;
    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #000;
    -webkit-font-smoothing: antialiased;
}
.galleria-theme-fullscreen img {
    -moz-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
}
.galleria-theme-fullscreen .galleria-stage {
    width: 100%;
    height: 100%;
    position: absolute;
}
.galleria-theme-fullscreen .galleria-thumbnails-container {
    position: absolute;
    bottom: 0;
    z-index: 2;
    padding-top: 16px;
    width: 100%;
}
.galleria-theme-fullscreen.videoplay .galleria-thumbnails-container { display:none!important; }
.galleria-theme-fullscreen.videoplay .galleria-image-nav { top:80px; bottom:80px; height:auto; }

.galleria-theme-fullscreen .galleria-thumbnails-tab {
    opacity: .7;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)\";
    filter: alpha(opacity=70);
    position: absolute;
    left: 50%;
    margin-left: -50px;
    top: 0;
    height: 16px;
    width: 100px;
    background: #000 url(up.gif) no-repeat 50% 5px;
    cursor: pointer;
    -moz-border-radius-topleft: 4px;
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    -webkit-border-top-left-radius: 4px;
}
.galleria-theme-fullscreen.light .galleria-thumbnails-tab {
    background:#fff url(up-neg.gif) no-repeat 50% 50%;
    opacity: 1;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
    filter: alpha(opacity=100);
}
.galleria-theme-fullscreen .galleria-thumbnails-tab:hover {
    opacity: 1;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
    filter: alpha(opacity=100);
}
.galleria-theme-fullscreen .galleria-thumbnails-tab.open,
.galleria-theme-fullscreen .galleria-thumbnails-tab.open:hover {
    background-image: url(down.gif);
    opacity: 1;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
    filter: alpha(opacity=100);
}
.galleria-theme-fullscreen.light .galleria-thumbnails-tab.open,
.galleria-theme-fullscreen.light .galleria-thumbnails-tab.open:hover {
    background-image: url(down-neg.gif);
}
.galleria-theme-fullscreen .galleria-thumbnails {
    background: #000;
    overflow: hidden;
}
.galleria-theme-fullscreen .galleria-thumbnails-list {
    background: #000;
    padding-top: 5px;
    padding-bottom: 5px;
    overflow: hidden;
}
.galleria-theme-fullscreen.light .galleria-thumbnails,
.galleria-theme-fullscreen.light .galleria-thumbnails-list {
    background:#fff;
}
.galleria-theme-fullscreen .galleria-thumbnails .galleria-image {
    width: 80px;
    height: 50px;
    float: left;
    cursor: pointer;
    margin-right: 5px;
}
.galleria-theme-fullscreen .galleria-thumbnails .galleria-image img { background: #000 }
.galleria-theme-fullscreen .galleria-thumbnails .active { cursor: default }
.galleria-theme-fullscreen .galleria-carousel .galleria-thumbnails-list {
    border-left: 30px solid #000;
    border-right: 30px solid #000;
}
.galleria-theme-fullscreen.light .galleria-carousel .galleria-thumbnails-list {
    border-color: #fff;
}
.galleria-theme-fullscreen .galleria-image-nav {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
.galleria-theme-fullscreen .galleria-image-nav-right,
.galleria-theme-fullscreen .galleria-image-nav-left {
    width: 100px;
    right: 0;
    top: 0;
    bottom: 0;
    background: url(r.gif) no-repeat 50% 50%;
    position: absolute;
    cursor: pointer;
    z-index: 2;
    display: none;
}
.galleria-theme-fullscreen.smallarrows .galleria-image-nav-right {
    background-image: url(r-neg.png);
}
.galleria-theme-fullscreen .galleria-image-nav-left {
    left: 0;
    right: auto;
    background-image: url(l.gif);
}
.galleria-theme-fullscreen.smallarrows .galleria-image-nav-left {
    background-image: url(l-neg.png);
}
.galleria-theme-fullscreen .galleria-loader {
    width: 30px;
    height: 30px;
    background: #fff url(loader.gif) no-repeat 50% 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -15px;
    margin-left: -15px;
    z-index: 3;
}
.galleria-theme-fullscreen .galleria-info {
    z-index: 4;
    font: 13px/1.4 helvetica,arial,sans-serif;
    color: #fff;
    position: absolute;
    top: 0;
    width: 100%;
    border-top: 2px solid #000;
    display: none;
    text-align: center;
    padding: 10px 0;
    background: rgba(0,0,0,.5);
    border-bottom:1px solid rgba(0,0,0,.1);
}
.galleria-theme-fullscreen.light .galleria-info{background:rgba(255,255,255,.5);color:#000;}
.galleria-theme-fullscreen .galleria-info-text {
    width: 50%;
    margin: 0 auto;
}
.galleria-theme-fullscreen .galleria-info-title { font-weight: bold; display: inline-block; margin-right:10px; }
.galleria-theme-fullscreen .galleria-info-description { display:inline-block; }
.galleria-theme-fullscreen .galleria-thumb-nav-left,
.galleria-theme-fullscreen .galleria-thumb-nav-right {
    cursor: pointer;
    display: none;
    background: url(p.gif) no-repeat 50% 50%;
    position: absolute;
    left: 5px;
    top: 21px;
    bottom: 5px;
    width: 20px;
    z-index: 3;
    opacity: .8;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)\";
    filter: alpha(opacity=80);
}
.galleria-theme-fullscreen.light .galleria-thumb-nav-left{
    background-image: url(p-neg.png);
}
.galleria-theme-fullscreen .galleria-thumb-nav-right {
    background-image: url(n.gif);
    left: auto;
    right: 5px;
}
.galleria-theme-fullscreen.light .galleria-thumb-nav-right{
    background-image: url(n-neg.png);
}
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-left,
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-right { display: block }
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-left:hover,
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-right:hover { background-color: #222 }
.galleria-theme-fullscreen .galleria-thumb-nav-left.disabled,
.galleria-theme-fullscreen .galleria-thumb-nav-right.disabled,
.galleria-theme-fullscreen .galleria-thumb-nav-left.disabled:hover,
.galleria-theme-fullscreen .galleria-thumb-nav-right.disabled:hover {
    opacity: .2;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=20)\";
    filter: alpha(opacity=20);
    cursor: default;
}
.galleria-theme-fullscreen.light .galleria-carousel .galleria-thumb-nav-left:hover,
.galleria-theme-fullscreen.light .galleria-carousel .galleria-thumb-nav-right:hover { background-color: #ddd }

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/themes/fullscreen/galleria.fullscreen.css";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Galleria Classic Theme 2017-02-27
 * http://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed 2017-02-27 under the MIT license
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

#galleria-loader{height:1px!important}

html,
body { background: #000 }
.galleria-theme-fullscreen {
    height: 100%;
    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #000;
    -webkit-font-smoothing: antialiased;
}
.galleria-theme-fullscreen img {
    -moz-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
}
.galleria-theme-fullscreen .galleria-stage {
    width: 100%;
    height: 100%;
    position: absolute;
}
.galleria-theme-fullscreen .galleria-thumbnails-container {
    position: absolute;
    bottom: 0;
    z-index: 2;
    padding-top: 16px;
    width: 100%;
}
.galleria-theme-fullscreen.videoplay .galleria-thumbnails-container { display:none!important; }
.galleria-theme-fullscreen.videoplay .galleria-image-nav { top:80px; bottom:80px; height:auto; }

.galleria-theme-fullscreen .galleria-thumbnails-tab {
    opacity: .7;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)\";
    filter: alpha(opacity=70);
    position: absolute;
    left: 50%;
    margin-left: -50px;
    top: 0;
    height: 16px;
    width: 100px;
    background: #000 url(up.gif) no-repeat 50% 5px;
    cursor: pointer;
    -moz-border-radius-topleft: 4px;
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    -webkit-border-top-left-radius: 4px;
}
.galleria-theme-fullscreen.light .galleria-thumbnails-tab {
    background:#fff url(up-neg.gif) no-repeat 50% 50%;
    opacity: 1;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
    filter: alpha(opacity=100);
}
.galleria-theme-fullscreen .galleria-thumbnails-tab:hover {
    opacity: 1;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
    filter: alpha(opacity=100);
}
.galleria-theme-fullscreen .galleria-thumbnails-tab.open,
.galleria-theme-fullscreen .galleria-thumbnails-tab.open:hover {
    background-image: url(down.gif);
    opacity: 1;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
    filter: alpha(opacity=100);
}
.galleria-theme-fullscreen.light .galleria-thumbnails-tab.open,
.galleria-theme-fullscreen.light .galleria-thumbnails-tab.open:hover {
    background-image: url(down-neg.gif);
}
.galleria-theme-fullscreen .galleria-thumbnails {
    background: #000;
    overflow: hidden;
}
.galleria-theme-fullscreen .galleria-thumbnails-list {
    background: #000;
    padding-top: 5px;
    padding-bottom: 5px;
    overflow: hidden;
}
.galleria-theme-fullscreen.light .galleria-thumbnails,
.galleria-theme-fullscreen.light .galleria-thumbnails-list {
    background:#fff;
}
.galleria-theme-fullscreen .galleria-thumbnails .galleria-image {
    width: 80px;
    height: 50px;
    float: left;
    cursor: pointer;
    margin-right: 5px;
}
.galleria-theme-fullscreen .galleria-thumbnails .galleria-image img { background: #000 }
.galleria-theme-fullscreen .galleria-thumbnails .active { cursor: default }
.galleria-theme-fullscreen .galleria-carousel .galleria-thumbnails-list {
    border-left: 30px solid #000;
    border-right: 30px solid #000;
}
.galleria-theme-fullscreen.light .galleria-carousel .galleria-thumbnails-list {
    border-color: #fff;
}
.galleria-theme-fullscreen .galleria-image-nav {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
.galleria-theme-fullscreen .galleria-image-nav-right,
.galleria-theme-fullscreen .galleria-image-nav-left {
    width: 100px;
    right: 0;
    top: 0;
    bottom: 0;
    background: url(r.gif) no-repeat 50% 50%;
    position: absolute;
    cursor: pointer;
    z-index: 2;
    display: none;
}
.galleria-theme-fullscreen.smallarrows .galleria-image-nav-right {
    background-image: url(r-neg.png);
}
.galleria-theme-fullscreen .galleria-image-nav-left {
    left: 0;
    right: auto;
    background-image: url(l.gif);
}
.galleria-theme-fullscreen.smallarrows .galleria-image-nav-left {
    background-image: url(l-neg.png);
}
.galleria-theme-fullscreen .galleria-loader {
    width: 30px;
    height: 30px;
    background: #fff url(loader.gif) no-repeat 50% 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -15px;
    margin-left: -15px;
    z-index: 3;
}
.galleria-theme-fullscreen .galleria-info {
    z-index: 4;
    font: 13px/1.4 helvetica,arial,sans-serif;
    color: #fff;
    position: absolute;
    top: 0;
    width: 100%;
    border-top: 2px solid #000;
    display: none;
    text-align: center;
    padding: 10px 0;
    background: rgba(0,0,0,.5);
    border-bottom:1px solid rgba(0,0,0,.1);
}
.galleria-theme-fullscreen.light .galleria-info{background:rgba(255,255,255,.5);color:#000;}
.galleria-theme-fullscreen .galleria-info-text {
    width: 50%;
    margin: 0 auto;
}
.galleria-theme-fullscreen .galleria-info-title { font-weight: bold; display: inline-block; margin-right:10px; }
.galleria-theme-fullscreen .galleria-info-description { display:inline-block; }
.galleria-theme-fullscreen .galleria-thumb-nav-left,
.galleria-theme-fullscreen .galleria-thumb-nav-right {
    cursor: pointer;
    display: none;
    background: url(p.gif) no-repeat 50% 50%;
    position: absolute;
    left: 5px;
    top: 21px;
    bottom: 5px;
    width: 20px;
    z-index: 3;
    opacity: .8;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)\";
    filter: alpha(opacity=80);
}
.galleria-theme-fullscreen.light .galleria-thumb-nav-left{
    background-image: url(p-neg.png);
}
.galleria-theme-fullscreen .galleria-thumb-nav-right {
    background-image: url(n.gif);
    left: auto;
    right: 5px;
}
.galleria-theme-fullscreen.light .galleria-thumb-nav-right{
    background-image: url(n-neg.png);
}
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-left,
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-right { display: block }
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-left:hover,
.galleria-theme-fullscreen .galleria-carousel .galleria-thumb-nav-right:hover { background-color: #222 }
.galleria-theme-fullscreen .galleria-thumb-nav-left.disabled,
.galleria-theme-fullscreen .galleria-thumb-nav-right.disabled,
.galleria-theme-fullscreen .galleria-thumb-nav-left.disabled:hover,
.galleria-theme-fullscreen .galleria-thumb-nav-right.disabled:hover {
    opacity: .2;
    -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=20)\";
    filter: alpha(opacity=20);
    cursor: default;
}
.galleria-theme-fullscreen.light .galleria-carousel .galleria-thumb-nav-left:hover,
.galleria-theme-fullscreen.light .galleria-carousel .galleria-thumb-nav-right:hover { background-color: #ddd }

", "js/galleria/themes/fullscreen/galleria.fullscreen.css", "C:\\xampp\\htdocs\\templates\\js\\galleria\\themes\\fullscreen\\galleria.fullscreen.css");
    }
}
