<?php

/* js/galleria/themes/classic/galleria.classic.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js */
class __TwigTemplate_e7a78d0bba9a96474eb2a5207555d4228b82c40b216b0fea481c9a76bc1fd177 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/themes/classic/galleria.classic.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js"));

        // line 1
        echo "!function(a){Galleria.addTheme({name:\"classic\",version:1.5,author:\"Galleria\",css:\"galleria.classic.css\",defaults:{transition:\"slide\",thumbCrop:\"height\",_toggleInfo:!0},init:function(b){Galleria.requires(1.4,\"This version of Classic theme requires Galleria 1.4 or later\"),this.addElement(\"info-link\",\"info-close\"),this.append({info:[\"info-link\",\"info-close\"]});var c=this.\$(\"info-link,info-close,info-text\"),d=Galleria.TOUCH;this.\$(\"loader,counter\").show().css(\"opacity\",.4),d||(this.addIdleState(this.get(\"image-nav-left\"),{left:-50}),this.addIdleState(this.get(\"image-nav-right\"),{right:-50}),this.addIdleState(this.get(\"counter\"),{opacity:0})),b._toggleInfo===!0?c.bind(\"click:fast\",function(){c.toggle()}):(c.show(),this.\$(\"info-link, info-close\").hide()),this.bind(\"thumbnail\",function(b){d?a(b.thumbTarget).css(\"opacity\",this.getIndex()?1:.6).bind(\"click:fast\",function(){a(this).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)}):(a(b.thumbTarget).css(\"opacity\",.6).parent().hover(function(){a(this).not(\".active\").children().stop().fadeTo(100,1)},function(){a(this).not(\".active\").children().stop().fadeTo(400,.6)}),b.index===this.getIndex()&&a(b.thumbTarget).css(\"opacity\",1))});var e=function(b){a(b.thumbTarget).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)};this.bind(\"loadstart\",function(a){a.cached||this.\$(\"loader\").show().fadeTo(200,.4),window.setTimeout(function(){e(a)},d?300:0),this.\$(\"info\").toggle(this.hasInfo())}),this.bind(\"loadfinish\",function(a){this.\$(\"loader\").fadeOut(200)})}})}(jQuery);";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/themes/classic/galleria.classic.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("!function(a){Galleria.addTheme({name:\"classic\",version:1.5,author:\"Galleria\",css:\"galleria.classic.css\",defaults:{transition:\"slide\",thumbCrop:\"height\",_toggleInfo:!0},init:function(b){Galleria.requires(1.4,\"This version of Classic theme requires Galleria 1.4 or later\"),this.addElement(\"info-link\",\"info-close\"),this.append({info:[\"info-link\",\"info-close\"]});var c=this.\$(\"info-link,info-close,info-text\"),d=Galleria.TOUCH;this.\$(\"loader,counter\").show().css(\"opacity\",.4),d||(this.addIdleState(this.get(\"image-nav-left\"),{left:-50}),this.addIdleState(this.get(\"image-nav-right\"),{right:-50}),this.addIdleState(this.get(\"counter\"),{opacity:0})),b._toggleInfo===!0?c.bind(\"click:fast\",function(){c.toggle()}):(c.show(),this.\$(\"info-link, info-close\").hide()),this.bind(\"thumbnail\",function(b){d?a(b.thumbTarget).css(\"opacity\",this.getIndex()?1:.6).bind(\"click:fast\",function(){a(this).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)}):(a(b.thumbTarget).css(\"opacity\",.6).parent().hover(function(){a(this).not(\".active\").children().stop().fadeTo(100,1)},function(){a(this).not(\".active\").children().stop().fadeTo(400,.6)}),b.index===this.getIndex()&&a(b.thumbTarget).css(\"opacity\",1))});var e=function(b){a(b.thumbTarget).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)};this.bind(\"loadstart\",function(a){a.cached||this.\$(\"loader\").show().fadeTo(200,.4),window.setTimeout(function(){e(a)},d?300:0),this.\$(\"info\").toggle(this.hasInfo())}),this.bind(\"loadfinish\",function(a){this.\$(\"loader\").fadeOut(200)})}})}(jQuery);", "js/galleria/themes/classic/galleria.classic.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\js\\galleria\\themes\\classic\\galleria.classic.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js");
    }
}