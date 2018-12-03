<?php

/* js/galleria/themes/classic/galleria.classic.css */
class __TwigTemplate_4bf2c2cfb24dab6f32818191d340fb353edf13484bf6cbfe40e90be7b614d1eb extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/themes/classic/galleria.classic.css"));

        // line 1
        echo "/**
 * Galleria Classic Theme 2017-02-13
 * http://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed under the MIT license
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

#galleria-loader{height:1px!important}

.galleria-theme-classic {
    position: relative;
    overflow: hidden;
    background: #fff;
    border: 1px solid #e0eded;
}
.galleria-theme-classic img {
    -moz-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
}
.galleria-theme-classic .galleria-stage {
    position: absolute;
    top: 10px;
    bottom: 60px;
    left: 10px;
    right: 10px;
    overflow:hidden;
}
.galleria-theme-classic .galleria-thumbnails-container {
    height: 50px;
    bottom: 0;
    position: absolute;
    left: 10px;
    right: 10px;
    z-index: 2;
}
.galleria-theme-classic .galleria-carousel .galleria-thumbnails-list {
    margin-left: 30px;
    margin-right: 30px;
}
.galleria-theme-classic .galleria-thumbnails .galleria-image {
    height: 40px;
    width: 60px;
    background: #000;
    margin: 0 5px 0 0;
    border: 1px solid #000;
    float: left;
    cursor: pointer;
}
.galleria-theme-classic .galleria-counter {
    position: absolute;
    bottom: 10px;
    left: 10px;
    text-align: right;
    color: #fff;
    font: normal 11px/1 arial,sans-serif;
    z-index: 1;
}
.galleria-theme-classic .galleria-loader {
    background: #000;
    width: 20px;
    height: 20px;
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 2;
    display: none;
    background: url(classic-loader.gif) no-repeat 2px 2px;
}
.galleria-theme-classic .galleria-info {
    width: 50%;
    top: 15px;
    left: 15px;
    z-index: 2;
    position: absolute;
}
.galleria-theme-classic .galleria-info-text {
    background-color: #000;
    padding: 12px;
    display: none;
    /* IE7 */ zoom:1;
}
.galleria-theme-classic .galleria-info-title {
    font: bold 12px/1.1 arial,sans-serif;
    margin: 0;
    color: #fff;
    margin-bottom: 7px;
}
.galleria-theme-classic .galleria-info-description {
    font: italic 12px/1.4 georgia,serif;
    margin: 0;
    color: #bbb;
}
.galleria-theme-classic .galleria-info-close {
    width: 9px;
    height: 9px;
    position: absolute;
    top: 5px;
    right: 5px;
    background-position: -753px -11px;
    opacity: .5;
    filter: alpha(opacity=50);
    cursor: pointer;
    display: none;
}
.galleria-theme-classic .notouch .galleria-info-close:hover{
    opacity:1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .touch .galleria-info-close:active{
    opacity:1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .galleria-info-link {
    background-position: -669px -5px;
    opacity: .7;
    filter: alpha(opacity=70);
    position: absolute;
    width: 20px;
    height: 20px;
    cursor: pointer;
    background-color: #000;
}
.galleria-theme-classic.notouch .galleria-info-link:hover {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic.touch .galleria-info-link:active {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .galleria-image-nav {
    position: absolute;
    top: 50%;
    margin-top: -62px;
    width: 100%;
    height: 62px;
    left: 0;
}
.galleria-theme-classic .galleria-image-nav-left,
.galleria-theme-classic .galleria-image-nav-right {
    opacity: .3;
    filter: alpha(opacity=30);
    cursor: pointer;
    width: 62px;
    height: 124px;
    position: absolute;
    left: 10px;
    z-index: 2;
    background-position: 0 46px;
}
.galleria-theme-classic .galleria-image-nav-right {
    left: auto;
    right: 10px;
    background-position: -254px 46px;
    z-index: 2;
}
.galleria-theme-classic.notouch .galleria-image-nav-left:hover,
.galleria-theme-classic.notouch .galleria-image-nav-right:hover {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic.touch .galleria-image-nav-left:active,
.galleria-theme-classic.touch .galleria-image-nav-right:active {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .galleria-thumb-nav-left,
.galleria-theme-classic .galleria-thumb-nav-right {
    cursor: pointer;
    display: none;
    background-position: -495px 5px;
    position: absolute;
    left: 0;
    top: 0;
    height: 40px;
    width: 23px;
    z-index: 3;
    opacity: .8;
    filter: alpha(opacity=80);
}
.galleria-theme-classic .galleria-thumb-nav-right {
    background-position: -578px 5px;
    border-right: none;
    right: 0;
    left: auto;
}
.galleria-theme-classic .galleria-thumbnails-container .disabled {
    opacity: .2;
    filter: alpha(opacity=20);
    cursor: default;
}
.galleria-theme-classic.notouch .galleria-thumb-nav-left:hover,
.galleria-theme-classic.notouch .galleria-thumb-nav-right:hover {
    opacity: 1;
    filter: alpha(opacity=100);
    background-color: #111;
}
.galleria-theme-classic.touch .galleria-thumb-nav-left:active,
.galleria-theme-classic.touch .galleria-thumb-nav-right:active {
    opacity: 1;
    filter: alpha(opacity=100);
    background-color: #111;
}
.galleria-theme-classic.notouch .galleria-thumbnails-container .disabled:hover {
    opacity: .2;
    filter: alpha(opacity=20);
    background-color: transparent;
}

.galleria-theme-classic .galleria-carousel .galleria-thumb-nav-left,
.galleria-theme-classic .galleria-carousel .galleria-thumb-nav-right {
    display: block;
}
.galleria-theme-classic .galleria-thumb-nav-left,
.galleria-theme-classic .galleria-thumb-nav-right,
.galleria-theme-classic .galleria-info-link,
.galleria-theme-classic .galleria-info-close,
.galleria-theme-classic .galleria-image-nav-left,
.galleria-theme-classic .galleria-image-nav-right {
    background-image: url(classic-map.png);
    background-repeat: no-repeat;
}
.galleria-theme-classic.galleria-container.videoplay .galleria-info,
.galleria-theme-classic.galleria-container.videoplay .galleria-counter{ display:none!important; }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/themes/classic/galleria.classic.css";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Galleria Classic Theme 2017-02-13
 * http://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed under the MIT license
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

#galleria-loader{height:1px!important}

.galleria-theme-classic {
    position: relative;
    overflow: hidden;
    background: #fff;
    border: 1px solid #e0eded;
}
.galleria-theme-classic img {
    -moz-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
}
.galleria-theme-classic .galleria-stage {
    position: absolute;
    top: 10px;
    bottom: 60px;
    left: 10px;
    right: 10px;
    overflow:hidden;
}
.galleria-theme-classic .galleria-thumbnails-container {
    height: 50px;
    bottom: 0;
    position: absolute;
    left: 10px;
    right: 10px;
    z-index: 2;
}
.galleria-theme-classic .galleria-carousel .galleria-thumbnails-list {
    margin-left: 30px;
    margin-right: 30px;
}
.galleria-theme-classic .galleria-thumbnails .galleria-image {
    height: 40px;
    width: 60px;
    background: #000;
    margin: 0 5px 0 0;
    border: 1px solid #000;
    float: left;
    cursor: pointer;
}
.galleria-theme-classic .galleria-counter {
    position: absolute;
    bottom: 10px;
    left: 10px;
    text-align: right;
    color: #fff;
    font: normal 11px/1 arial,sans-serif;
    z-index: 1;
}
.galleria-theme-classic .galleria-loader {
    background: #000;
    width: 20px;
    height: 20px;
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 2;
    display: none;
    background: url(classic-loader.gif) no-repeat 2px 2px;
}
.galleria-theme-classic .galleria-info {
    width: 50%;
    top: 15px;
    left: 15px;
    z-index: 2;
    position: absolute;
}
.galleria-theme-classic .galleria-info-text {
    background-color: #000;
    padding: 12px;
    display: none;
    /* IE7 */ zoom:1;
}
.galleria-theme-classic .galleria-info-title {
    font: bold 12px/1.1 arial,sans-serif;
    margin: 0;
    color: #fff;
    margin-bottom: 7px;
}
.galleria-theme-classic .galleria-info-description {
    font: italic 12px/1.4 georgia,serif;
    margin: 0;
    color: #bbb;
}
.galleria-theme-classic .galleria-info-close {
    width: 9px;
    height: 9px;
    position: absolute;
    top: 5px;
    right: 5px;
    background-position: -753px -11px;
    opacity: .5;
    filter: alpha(opacity=50);
    cursor: pointer;
    display: none;
}
.galleria-theme-classic .notouch .galleria-info-close:hover{
    opacity:1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .touch .galleria-info-close:active{
    opacity:1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .galleria-info-link {
    background-position: -669px -5px;
    opacity: .7;
    filter: alpha(opacity=70);
    position: absolute;
    width: 20px;
    height: 20px;
    cursor: pointer;
    background-color: #000;
}
.galleria-theme-classic.notouch .galleria-info-link:hover {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic.touch .galleria-info-link:active {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .galleria-image-nav {
    position: absolute;
    top: 50%;
    margin-top: -62px;
    width: 100%;
    height: 62px;
    left: 0;
}
.galleria-theme-classic .galleria-image-nav-left,
.galleria-theme-classic .galleria-image-nav-right {
    opacity: .3;
    filter: alpha(opacity=30);
    cursor: pointer;
    width: 62px;
    height: 124px;
    position: absolute;
    left: 10px;
    z-index: 2;
    background-position: 0 46px;
}
.galleria-theme-classic .galleria-image-nav-right {
    left: auto;
    right: 10px;
    background-position: -254px 46px;
    z-index: 2;
}
.galleria-theme-classic.notouch .galleria-image-nav-left:hover,
.galleria-theme-classic.notouch .galleria-image-nav-right:hover {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic.touch .galleria-image-nav-left:active,
.galleria-theme-classic.touch .galleria-image-nav-right:active {
    opacity: 1;
    filter: alpha(opacity=100);
}
.galleria-theme-classic .galleria-thumb-nav-left,
.galleria-theme-classic .galleria-thumb-nav-right {
    cursor: pointer;
    display: none;
    background-position: -495px 5px;
    position: absolute;
    left: 0;
    top: 0;
    height: 40px;
    width: 23px;
    z-index: 3;
    opacity: .8;
    filter: alpha(opacity=80);
}
.galleria-theme-classic .galleria-thumb-nav-right {
    background-position: -578px 5px;
    border-right: none;
    right: 0;
    left: auto;
}
.galleria-theme-classic .galleria-thumbnails-container .disabled {
    opacity: .2;
    filter: alpha(opacity=20);
    cursor: default;
}
.galleria-theme-classic.notouch .galleria-thumb-nav-left:hover,
.galleria-theme-classic.notouch .galleria-thumb-nav-right:hover {
    opacity: 1;
    filter: alpha(opacity=100);
    background-color: #111;
}
.galleria-theme-classic.touch .galleria-thumb-nav-left:active,
.galleria-theme-classic.touch .galleria-thumb-nav-right:active {
    opacity: 1;
    filter: alpha(opacity=100);
    background-color: #111;
}
.galleria-theme-classic.notouch .galleria-thumbnails-container .disabled:hover {
    opacity: .2;
    filter: alpha(opacity=20);
    background-color: transparent;
}

.galleria-theme-classic .galleria-carousel .galleria-thumb-nav-left,
.galleria-theme-classic .galleria-carousel .galleria-thumb-nav-right {
    display: block;
}
.galleria-theme-classic .galleria-thumb-nav-left,
.galleria-theme-classic .galleria-thumb-nav-right,
.galleria-theme-classic .galleria-info-link,
.galleria-theme-classic .galleria-info-close,
.galleria-theme-classic .galleria-image-nav-left,
.galleria-theme-classic .galleria-image-nav-right {
    background-image: url(classic-map.png);
    background-repeat: no-repeat;
}
.galleria-theme-classic.galleria-container.videoplay .galleria-info,
.galleria-theme-classic.galleria-container.videoplay .galleria-counter{ display:none!important; }
", "js/galleria/themes/classic/galleria.classic.css", "C:\\xampp\\htdocs\\templates\\js\\galleria\\themes\\classic\\galleria.classic.css");
    }
}
