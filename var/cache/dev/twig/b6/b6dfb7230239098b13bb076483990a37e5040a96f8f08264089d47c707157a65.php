<?php

/* js/galleria/plugins/picasa/galleria.picasa.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js */
class __TwigTemplate_7272fa87471405734978703135578cf3fd53c4e738673fc7603a9a8de5002e69 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/plugins/picasa/galleria.picasa.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js"));

        // line 1
        echo "!function(a){Galleria.requires(1.25,\"The Picasa Plugin requires Galleria version 1.2.5 or later.\");var b=Galleria.utils.getScriptPath();Galleria.Picasa=function(){this.options={max:30,imageSize:\"medium\",thumbSize:\"thumb\",complete:function(){}}},Galleria.Picasa.prototype={constructor:Galleria.Picasa,search:function(a,b){return this._call(\"search\",\"all\",{q:a},b)},user:function(a,b){return this._call(\"user\",\"user/\"+a,b)},useralbum:function(a,b,c){return this._call(\"useralbum\",\"user/\"+a+\"/album/\"+b,c)},setOptions:function(b){return a.extend(this.options,b),this},_call:function(b,c,d,e){c=\"https://picasaweb.google.com/data/feed/api/\"+c+\"?\",\"function\"==typeof d&&(e=d,d={});var f=this;d=a.extend({kind:\"photo\",access:\"public\",\"max-results\":this.options.max,thumbsize:this._getSizes().join(\",\"),alt:\"json-in-script\",callback:\"?\"},d),a.each(d,function(a,b){c+=\"&\"+a+\"=\"+b});var g=!1;return Galleria.utils.wait({until:function(){return g},success:function(){f._parse.call(f,g.feed.entry,e)},error:function(){var a=\"\";\"user\"==b?a=\"user not found.\":\"useralbum\"==b&&(a=\"album or user not found.\"),Galleria.raise(\"Picasa request failed\"+(a?\": \"+a:\".\"))},timeout:5e3}),a.getJSON(c,function(a){g=a}),f},_getSizes:function(){var b,c=this,d={small:\"72c\",thumb:\"104u\",medium:\"640u\",big:\"1024u\",original:\"1600u\"},e=c.options,f={},g=[32,48,64,72,94,104,110,128,144,150,160,200,220,288,320,400,512,576,640,720,800,912,1024,1152,1280,1440,1600];return a([\"thumbSize\",\"imageSize\"]).each(function(){e[this]in d?f[this]=d[e[this]]:(b=Galleria.utils.parseValue(e[this]),b>1600?b=1600:a.each(g,function(a){if(b<this)return b=g[a-1],!1}),f[this]=b)}),[f.thumbSize,f.imageSize,\"1280u\"]},_parse:function(b,c){var d,e=[];a.each(b,function(){d=this.media\$group.media\$thumbnail,e.push({thumb:d[0].url,image:d[1].url,big:d[2].url,title:this.summary.\$t})}),c.call(this,e)}};var c=Galleria.prototype.load;Galleria.prototype.load=function(){if(arguments.length||\"string\"!=typeof this._options.picasa)return void c.apply(this,Galleria.utils.array(arguments));var d,e=this,f=Galleria.utils.array(arguments),g=this._options.picasa.split(\":\"),h=a.extend({},e._options.picasaOptions),i=\"undefined\"!=typeof h.loader?h.loader:a(\"<div>\").css({width:48,height:48,opacity:.7,background:\"#000 url(\"+b+\"loader.gif) no-repeat 50% 50%\"});if(g.length){if(\"function\"!=typeof Galleria.Picasa.prototype[g[0]])return Galleria.raise(g[0]+\" method not found in Picasa plugin\"),c.apply(this,f);if(!g[1])return Galleria.raise(\"No picasa argument found\"),c.apply(this,f);window.setTimeout(function(){e.\$(\"target\").append(i)},100),d=new Galleria.Picasa,\"object\"==typeof e._options.picasaOptions&&d.setOptions(e._options.picasaOptions);var j=[];if(\"useralbum\"==g[0]){if(j=g[1].split(\"/\"),2!=j.length)return void Galleria.raise(\"Picasa useralbum not correctly formatted (should be [user]/[album])\")}else j.push(g[1]);j.push(function(a){e._data=a,i.remove(),e.trigger(Galleria.DATA),d.options.complete.call(d,a)}),d[g[0]].apply(d,j)}else c.apply(this,f)}}(jQuery);";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/plugins/picasa/galleria.picasa.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("!function(a){Galleria.requires(1.25,\"The Picasa Plugin requires Galleria version 1.2.5 or later.\");var b=Galleria.utils.getScriptPath();Galleria.Picasa=function(){this.options={max:30,imageSize:\"medium\",thumbSize:\"thumb\",complete:function(){}}},Galleria.Picasa.prototype={constructor:Galleria.Picasa,search:function(a,b){return this._call(\"search\",\"all\",{q:a},b)},user:function(a,b){return this._call(\"user\",\"user/\"+a,b)},useralbum:function(a,b,c){return this._call(\"useralbum\",\"user/\"+a+\"/album/\"+b,c)},setOptions:function(b){return a.extend(this.options,b),this},_call:function(b,c,d,e){c=\"https://picasaweb.google.com/data/feed/api/\"+c+\"?\",\"function\"==typeof d&&(e=d,d={});var f=this;d=a.extend({kind:\"photo\",access:\"public\",\"max-results\":this.options.max,thumbsize:this._getSizes().join(\",\"),alt:\"json-in-script\",callback:\"?\"},d),a.each(d,function(a,b){c+=\"&\"+a+\"=\"+b});var g=!1;return Galleria.utils.wait({until:function(){return g},success:function(){f._parse.call(f,g.feed.entry,e)},error:function(){var a=\"\";\"user\"==b?a=\"user not found.\":\"useralbum\"==b&&(a=\"album or user not found.\"),Galleria.raise(\"Picasa request failed\"+(a?\": \"+a:\".\"))},timeout:5e3}),a.getJSON(c,function(a){g=a}),f},_getSizes:function(){var b,c=this,d={small:\"72c\",thumb:\"104u\",medium:\"640u\",big:\"1024u\",original:\"1600u\"},e=c.options,f={},g=[32,48,64,72,94,104,110,128,144,150,160,200,220,288,320,400,512,576,640,720,800,912,1024,1152,1280,1440,1600];return a([\"thumbSize\",\"imageSize\"]).each(function(){e[this]in d?f[this]=d[e[this]]:(b=Galleria.utils.parseValue(e[this]),b>1600?b=1600:a.each(g,function(a){if(b<this)return b=g[a-1],!1}),f[this]=b)}),[f.thumbSize,f.imageSize,\"1280u\"]},_parse:function(b,c){var d,e=[];a.each(b,function(){d=this.media\$group.media\$thumbnail,e.push({thumb:d[0].url,image:d[1].url,big:d[2].url,title:this.summary.\$t})}),c.call(this,e)}};var c=Galleria.prototype.load;Galleria.prototype.load=function(){if(arguments.length||\"string\"!=typeof this._options.picasa)return void c.apply(this,Galleria.utils.array(arguments));var d,e=this,f=Galleria.utils.array(arguments),g=this._options.picasa.split(\":\"),h=a.extend({},e._options.picasaOptions),i=\"undefined\"!=typeof h.loader?h.loader:a(\"<div>\").css({width:48,height:48,opacity:.7,background:\"#000 url(\"+b+\"loader.gif) no-repeat 50% 50%\"});if(g.length){if(\"function\"!=typeof Galleria.Picasa.prototype[g[0]])return Galleria.raise(g[0]+\" method not found in Picasa plugin\"),c.apply(this,f);if(!g[1])return Galleria.raise(\"No picasa argument found\"),c.apply(this,f);window.setTimeout(function(){e.\$(\"target\").append(i)},100),d=new Galleria.Picasa,\"object\"==typeof e._options.picasaOptions&&d.setOptions(e._options.picasaOptions);var j=[];if(\"useralbum\"==g[0]){if(j=g[1].split(\"/\"),2!=j.length)return void Galleria.raise(\"Picasa useralbum not correctly formatted (should be [user]/[album])\")}else j.push(g[1]);j.push(function(a){e._data=a,i.remove(),e.trigger(Galleria.DATA),d.options.complete.call(d,a)}),d[g[0]].apply(d,j)}else c.apply(this,f)}}(jQuery);", "js/galleria/plugins/picasa/galleria.picasa.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js", "C:\\xampp\\htdocs\\templates\\js\\galleria\\plugins\\picasa\\galleria.picasa.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).min.js");
    }
}