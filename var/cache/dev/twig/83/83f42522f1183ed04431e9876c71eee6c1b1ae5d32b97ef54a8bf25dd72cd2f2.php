<?php

/* js/galleria/plugins/history/galleria.history.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js */
class __TwigTemplate_86b633a62aa4a2c5159f32ef4ab84e39ad84dca80be782c93f9c288097fc5db4 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/plugins/history/galleria.history.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js"));

        // line 1
        echo "/**
 * Galleria - v1.5.3 2017-02-13
 * https://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed under the MIT License.
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

!function(a,b){Galleria.requires(1.25,\"The History Plugin requires Galleria version 1.2.5 or later.\"),Galleria.History=function(){var c,d=[],e=!1,f=b.location,g=b.document,h=Galleria.IE,i=\"onhashchange\"in b&&(void 0===g.mode||g.mode>7),j=function(a){return a=c&&!i&&Galleria.IE?a||c.location:f,parseInt(a.hash.substr(2),10)},k=j(f),l=[],m=function(){a.each(l,function(a,c){c.call(b,j())})},n=function(){a.each(d,function(a,b){b()}),e=!0},o=function(a){return\"/\"+a};return i&&h<8&&(i=!1),i?n():a(function(){b.setInterval(function(){var a=j();isNaN(a)||a==k||(k=a,f.hash=o(a),m())},50);h?a('<iframe tabindex=\"-1\" title=\"empty\">').hide().attr(\"src\",\"about:blank\").one(\"load\",function(){c=this.contentWindow,n()}).insertAfter(g.body):n()}),{change:function(a){l.push(a),i&&(b.onhashchange=m)},set:function(a){isNaN(a)||(!i&&h&&this.ready(function(){var b=c.document;b.open(),b.close(),c.location.hash=o(a)}),f.hash=o(a))},ready:function(a){e?a():d.push(a)}}}()}(jQuery,this);";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/plugins/history/galleria.history.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Galleria - v1.5.3 2017-02-13
 * https://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed under the MIT License.
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

!function(a,b){Galleria.requires(1.25,\"The History Plugin requires Galleria version 1.2.5 or later.\"),Galleria.History=function(){var c,d=[],e=!1,f=b.location,g=b.document,h=Galleria.IE,i=\"onhashchange\"in b&&(void 0===g.mode||g.mode>7),j=function(a){return a=c&&!i&&Galleria.IE?a||c.location:f,parseInt(a.hash.substr(2),10)},k=j(f),l=[],m=function(){a.each(l,function(a,c){c.call(b,j())})},n=function(){a.each(d,function(a,b){b()}),e=!0},o=function(a){return\"/\"+a};return i&&h<8&&(i=!1),i?n():a(function(){b.setInterval(function(){var a=j();isNaN(a)||a==k||(k=a,f.hash=o(a),m())},50);h?a('<iframe tabindex=\"-1\" title=\"empty\">').hide().attr(\"src\",\"about:blank\").one(\"load\",function(){c=this.contentWindow,n()}).insertAfter(g.body):n()}),{change:function(a){l.push(a),i&&(b.onhashchange=m)},set:function(a){isNaN(a)||(!i&&h&&this.ready(function(){var b=c.document;b.open(),b.close(),c.location.hash=o(a)}),f.hash=o(a))},ready:function(a){e?a():d.push(a)}}}()}(jQuery,this);", "js/galleria/plugins/history/galleria.history.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js", "C:\\xampp\\htdocs\\templates\\js\\galleria\\plugins\\history\\galleria.history.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js");
    }
}
