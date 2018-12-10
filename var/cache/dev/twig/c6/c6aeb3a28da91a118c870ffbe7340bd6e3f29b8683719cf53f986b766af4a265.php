<?php

/* js/galleria/plugins/flickr/galleria.flickr.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js */
class __TwigTemplate_f2de1797d31cfdff4bc78d92a47b5f392d71ff9fba70e07f2a8ccb183002fb21 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/plugins/flickr/galleria.flickr.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js"));

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

!function(a){Galleria.requires(1.25,\"The Flickr Plugin requires Galleria version 1.2.5 or later.\");var b=Galleria.utils.getScriptPath();Galleria.Flickr=function(a){this.api_key=a||\"2a2ce06c15780ebeb0b706650fc890b2\",this.options={max:30,imageSize:\"medium\",thumbSize:\"thumb\",sort:\"interestingness-desc\",description:!1,complete:function(){},backlink:!1}},Galleria.Flickr.prototype={constructor:Galleria.Flickr,search:function(a,b){return this._find({text:a},b)},tags:function(a,b){return this._find({tags:a},b)},user:function(a,b){return this._call({method:\"flickr.urls.lookupUser\",url:\"flickr.com/photos/\"+a},function(a){this._find({user_id:a.user.id,method:\"flickr.people.getPublicPhotos\"},b)})},set:function(a,b){return this._find({photoset_id:a,method:\"flickr.photosets.getPhotos\"},b)},gallery:function(a,b){return this._find({gallery_id:a,method:\"flickr.galleries.getPhotos\"},b)},groupsearch:function(a,b){return this._call({text:a,method:\"flickr.groups.search\"},function(a){this.group(a.groups.group[0].nsid,b)})},group:function(a,b){return this._find({group_id:a,method:\"flickr.groups.pools.getPhotos\"},b)},setOptions:function(b){return a.extend(this.options,b),this},_call:function(b,c){var d=\"https://api.flickr.com/services/rest/?\",e=this;return b=a.extend({format:\"json\",jsoncallback:\"?\",api_key:this.api_key},b),a.each(b,function(a,b){d+=\"&\"+a+\"=\"+b}),a.getJSON(d,function(a){\"ok\"===a.stat?c.call(e,a):Galleria.raise(a.code.toString()+\" \"+a.stat+\": \"+a.message,!0)}),e},_getBig:function(a){return a.url_l?a.url_l:parseInt(a.width_o,10)>1280?\"https://farm\"+a.farm+\".static.flickr.com/\"+a.server+\"/\"+a.id+\"_\"+a.secret+\"_b.jpg\":a.url_o||a.url_z||a.url_m},_getSize:function(a,b){var c;switch(b){case\"thumb\":c=a.url_t;break;case\"small\":c=a.url_s;break;case\"big\":c=this._getBig(a);break;case\"original\":c=a.url_o?a.url_o:this._getBig(a);break;default:c=a.url_z||a.url_m}return c},_find:function(b,c){return b=a.extend({method:\"flickr.photos.search\",extras:\"url_t,url_m,url_o,url_s,url_l,url_z,description\",sort:this.options.sort,per_page:Math.min(this.options.max,500)},b),this._call(b,function(a){var b,d,e=[],f=a.photos?a.photos.photo:a.photoset.photo,g=f.length;for(d=0;d<g;d++)b=f[d],e.push({thumb:this._getSize(b,this.options.thumbSize),image:this._getSize(b,this.options.imageSize),big:this._getBig(b),title:f[d].title,description:this.options.description&&f[d].description?f[d].description._content:\"\",link:this.options.backlink?\"https://flickr.com/photos/\"+b.owner+\"/\"+b.id:\"\"});c.call(this,e)})}};var c=Galleria.prototype.load;Galleria.prototype.load=function(){if(arguments.length||\"string\"!=typeof this._options.flickr)return void c.apply(this,Galleria.utils.array(arguments));var d,e=this,f=Galleria.utils.array(arguments),g=this._options.flickr.split(\":\"),h=a.extend({},e._options.flickrOptions),i=\"undefined\"!=typeof h.loader?h.loader:a(\"<div>\").css({width:48,height:48,opacity:.7,background:\"#000 url(\"+b+\"loader.gif) no-repeat 50% 50%\"});if(g.length){if(\"function\"!=typeof Galleria.Flickr.prototype[g[0]])return Galleria.raise(g[0]+\" method not found in Flickr plugin\"),c.apply(this,f);if(!g[1])return Galleria.raise(\"No flickr argument found\"),c.apply(this,f);window.setTimeout(function(){e.\$(\"target\").append(i)},100),d=new Galleria.Flickr,\"object\"==typeof e._options.flickrOptions&&d.setOptions(e._options.flickrOptions),d[g[0]](g[1],function(a){e._data=a,i.remove(),e.trigger(Galleria.DATA),d.options.complete.call(d,a)})}else c.apply(this,f)}}(jQuery);";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/plugins/flickr/galleria.flickr.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js";
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

!function(a){Galleria.requires(1.25,\"The Flickr Plugin requires Galleria version 1.2.5 or later.\");var b=Galleria.utils.getScriptPath();Galleria.Flickr=function(a){this.api_key=a||\"2a2ce06c15780ebeb0b706650fc890b2\",this.options={max:30,imageSize:\"medium\",thumbSize:\"thumb\",sort:\"interestingness-desc\",description:!1,complete:function(){},backlink:!1}},Galleria.Flickr.prototype={constructor:Galleria.Flickr,search:function(a,b){return this._find({text:a},b)},tags:function(a,b){return this._find({tags:a},b)},user:function(a,b){return this._call({method:\"flickr.urls.lookupUser\",url:\"flickr.com/photos/\"+a},function(a){this._find({user_id:a.user.id,method:\"flickr.people.getPublicPhotos\"},b)})},set:function(a,b){return this._find({photoset_id:a,method:\"flickr.photosets.getPhotos\"},b)},gallery:function(a,b){return this._find({gallery_id:a,method:\"flickr.galleries.getPhotos\"},b)},groupsearch:function(a,b){return this._call({text:a,method:\"flickr.groups.search\"},function(a){this.group(a.groups.group[0].nsid,b)})},group:function(a,b){return this._find({group_id:a,method:\"flickr.groups.pools.getPhotos\"},b)},setOptions:function(b){return a.extend(this.options,b),this},_call:function(b,c){var d=\"https://api.flickr.com/services/rest/?\",e=this;return b=a.extend({format:\"json\",jsoncallback:\"?\",api_key:this.api_key},b),a.each(b,function(a,b){d+=\"&\"+a+\"=\"+b}),a.getJSON(d,function(a){\"ok\"===a.stat?c.call(e,a):Galleria.raise(a.code.toString()+\" \"+a.stat+\": \"+a.message,!0)}),e},_getBig:function(a){return a.url_l?a.url_l:parseInt(a.width_o,10)>1280?\"https://farm\"+a.farm+\".static.flickr.com/\"+a.server+\"/\"+a.id+\"_\"+a.secret+\"_b.jpg\":a.url_o||a.url_z||a.url_m},_getSize:function(a,b){var c;switch(b){case\"thumb\":c=a.url_t;break;case\"small\":c=a.url_s;break;case\"big\":c=this._getBig(a);break;case\"original\":c=a.url_o?a.url_o:this._getBig(a);break;default:c=a.url_z||a.url_m}return c},_find:function(b,c){return b=a.extend({method:\"flickr.photos.search\",extras:\"url_t,url_m,url_o,url_s,url_l,url_z,description\",sort:this.options.sort,per_page:Math.min(this.options.max,500)},b),this._call(b,function(a){var b,d,e=[],f=a.photos?a.photos.photo:a.photoset.photo,g=f.length;for(d=0;d<g;d++)b=f[d],e.push({thumb:this._getSize(b,this.options.thumbSize),image:this._getSize(b,this.options.imageSize),big:this._getBig(b),title:f[d].title,description:this.options.description&&f[d].description?f[d].description._content:\"\",link:this.options.backlink?\"https://flickr.com/photos/\"+b.owner+\"/\"+b.id:\"\"});c.call(this,e)})}};var c=Galleria.prototype.load;Galleria.prototype.load=function(){if(arguments.length||\"string\"!=typeof this._options.flickr)return void c.apply(this,Galleria.utils.array(arguments));var d,e=this,f=Galleria.utils.array(arguments),g=this._options.flickr.split(\":\"),h=a.extend({},e._options.flickrOptions),i=\"undefined\"!=typeof h.loader?h.loader:a(\"<div>\").css({width:48,height:48,opacity:.7,background:\"#000 url(\"+b+\"loader.gif) no-repeat 50% 50%\"});if(g.length){if(\"function\"!=typeof Galleria.Flickr.prototype[g[0]])return Galleria.raise(g[0]+\" method not found in Flickr plugin\"),c.apply(this,f);if(!g[1])return Galleria.raise(\"No flickr argument found\"),c.apply(this,f);window.setTimeout(function(){e.\$(\"target\").append(i)},100),d=new Galleria.Flickr,\"object\"==typeof e._options.flickrOptions&&d.setOptions(e._options.flickrOptions),d[g[0]](g[1],function(a){e._data=a,i.remove(),e.trigger(Galleria.DATA),d.options.complete.call(d,a)})}else c.apply(this,f)}}(jQuery);", "js/galleria/plugins/flickr/galleria.flickr.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\js\\galleria\\plugins\\flickr\\galleria.flickr.min (SFConflict me@a1b0n.com 2017-02-12-23-35-56).js");
    }
}
