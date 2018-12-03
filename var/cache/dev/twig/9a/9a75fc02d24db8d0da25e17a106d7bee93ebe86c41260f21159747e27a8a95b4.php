<?php

/* js/galleria/themes/classic/galleria.classic.min.js */
class __TwigTemplate_24f24d7bd5602f015942593180d520b5947eb4370924cfa2d64f3579c9af6189 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/themes/classic/galleria.classic.min.js"));

        // line 1
        echo "(function(\$){Galleria.addTheme({name:\"classic\",version:1.5,author:\"Galleria\",css:\"galleria.classic.css\",defaults:{transition:\"slide\",thumbCrop:\"height\",_toggleInfo:true},init:function(options){Galleria.requires(1.4,\"This version of Classic theme requires Galleria 1.4 or later\");this.addElement(\"info-link\",\"info-close\");this.append({info:[\"info-link\",\"info-close\"]});var info=this.\$(\"info-link,info-close,info-text\"),touch=Galleria.TOUCH;this.\$(\"loader,counter\").show().css(\"opacity\",.4);if(!touch){this.addIdleState(this.get(\"image-nav-left\"),{left:-50});this.addIdleState(this.get(\"image-nav-right\"),{right:-50});this.addIdleState(this.get(\"counter\"),{opacity:0})}if(options._toggleInfo===true){info.bind(\"click:fast\",function(){info.toggle()})}else{info.show();this.\$(\"info-link, info-close\").hide()}this.bind(\"thumbnail\",function(e){if(!touch){\$(e.thumbTarget).css(\"opacity\",.6).parent().hover(function(){\$(this).not(\".active\").children().stop().fadeTo(100,1)},function(){\$(this).not(\".active\").children().stop().fadeTo(400,.6)});if(e.index===this.getIndex()){\$(e.thumbTarget).css(\"opacity\",1)}}else{\$(e.thumbTarget).css(\"opacity\",this.getIndex()?1:.6).bind(\"click:fast\",function(){\$(this).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)})}});var activate=function(e){\$(e.thumbTarget).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)};this.bind(\"loadstart\",function(e){if(!e.cached){this.\$(\"loader\").show().fadeTo(200,.4)}window.setTimeout(function(){activate(e)},touch?300:0);this.\$(\"info\").toggle(this.hasInfo())});this.bind(\"loadfinish\",function(e){this.\$(\"loader\").fadeOut(200)})}})})(jQuery);";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/themes/classic/galleria.classic.min.js";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function(\$){Galleria.addTheme({name:\"classic\",version:1.5,author:\"Galleria\",css:\"galleria.classic.css\",defaults:{transition:\"slide\",thumbCrop:\"height\",_toggleInfo:true},init:function(options){Galleria.requires(1.4,\"This version of Classic theme requires Galleria 1.4 or later\");this.addElement(\"info-link\",\"info-close\");this.append({info:[\"info-link\",\"info-close\"]});var info=this.\$(\"info-link,info-close,info-text\"),touch=Galleria.TOUCH;this.\$(\"loader,counter\").show().css(\"opacity\",.4);if(!touch){this.addIdleState(this.get(\"image-nav-left\"),{left:-50});this.addIdleState(this.get(\"image-nav-right\"),{right:-50});this.addIdleState(this.get(\"counter\"),{opacity:0})}if(options._toggleInfo===true){info.bind(\"click:fast\",function(){info.toggle()})}else{info.show();this.\$(\"info-link, info-close\").hide()}this.bind(\"thumbnail\",function(e){if(!touch){\$(e.thumbTarget).css(\"opacity\",.6).parent().hover(function(){\$(this).not(\".active\").children().stop().fadeTo(100,1)},function(){\$(this).not(\".active\").children().stop().fadeTo(400,.6)});if(e.index===this.getIndex()){\$(e.thumbTarget).css(\"opacity\",1)}}else{\$(e.thumbTarget).css(\"opacity\",this.getIndex()?1:.6).bind(\"click:fast\",function(){\$(this).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)})}});var activate=function(e){\$(e.thumbTarget).css(\"opacity\",1).parent().siblings().children().css(\"opacity\",.6)};this.bind(\"loadstart\",function(e){if(!e.cached){this.\$(\"loader\").show().fadeTo(200,.4)}window.setTimeout(function(){activate(e)},touch?300:0);this.\$(\"info\").toggle(this.hasInfo())});this.bind(\"loadfinish\",function(e){this.\$(\"loader\").fadeOut(200)})}})})(jQuery);", "js/galleria/themes/classic/galleria.classic.min.js", "C:\\xampp\\htdocs\\templates\\js\\galleria\\themes\\classic\\galleria.classic.min.js");
    }
}
