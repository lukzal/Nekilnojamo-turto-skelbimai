<?php

/* js/galleria/plugins/history/galleria.history.js */
class __TwigTemplate_8828fad857530b81e81e9fa501be18266c98a73064850d821a56cb155414e88e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/plugins/history/galleria.history.js"));

        // line 1
        echo "/**
 * Galleria History Plugin 2016-09-03
 * http://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed under the MIT license
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

(function( \$, window ) {

/*global jQuery, Galleria, window */

Galleria.requires(1.25, 'The History Plugin requires Galleria version 1.2.5 or later.');

Galleria.History = (function() {

    var onloads = [],

        init = false,

        loc = window.location,

        doc = window.document,

        ie = Galleria.IE,

        support = 'onhashchange' in window && ( doc.mode === undefined || doc.mode > 7 ),

        iframe,

        get = function( winloc ) {
            if( iframe && !support && Galleria.IE ) {
                winloc = winloc || iframe.location;
            }  else {
                winloc = loc;
            }
            return parseInt( winloc.hash.substr(2), 10 );
        },

        saved = get( loc ),

        callbacks = [],

        onchange = function() {
            \$.each( callbacks, function( i, fn ) {
                fn.call( window, get() );
            });
        },

        ready = function() {
            \$.each( onloads, function(i, fn) {
                fn();
            });

            init = true;
        },

        setHash = function( val ) {
            return '/' + val;
        };

    // always remove support if IE < 8
    if ( support && ie < 8 ) {
        support = false;
    }

    if ( !support ) {

        \$(function() {

            var interval = window.setInterval(function() {

                var hash = get();

                if ( !isNaN( hash ) && hash != saved ) {
                    saved = hash;
                    loc.hash = setHash( hash );
                    onchange();
                }

            }, 50);

            if ( ie ) {

                \$('<iframe tabindex=\"-1\" title=\"empty\">').hide().attr( 'src', 'about:blank' ).one('load', function() {

                    iframe = this.contentWindow;

                    ready();

                }).insertAfter(doc.body);

            } else {
                ready();
            }
        });
    } else {
        ready();
    }

    return {

        change: function( fn ) {

            callbacks.push( fn );

            if( support ) {
                window.onhashchange = onchange;
            }
        },

        set: function( val ) {

            if ( isNaN( val ) ) {
                return;
            }

            if ( !support && ie ) {

                this.ready(function() {

                    var idoc = iframe.document;
                    idoc.open();
                    idoc.close();

                    iframe.location.hash = setHash( val );

                });
            }

            loc.hash = setHash( val );
        },

        ready: function(fn) {
            if (!init) {
                onloads.push(fn);
            } else {
                fn();
            }
        }
    };
}());

}( jQuery, this ));

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/plugins/history/galleria.history.js";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Galleria History Plugin 2016-09-03
 * http://galleria.io
 *
 * Copyright (c) 2010 - 2017 worse is better UG
 * Licensed under the MIT license
 * https://raw.github.com/worseisbetter/galleria/master/LICENSE
 *
 */

(function( \$, window ) {

/*global jQuery, Galleria, window */

Galleria.requires(1.25, 'The History Plugin requires Galleria version 1.2.5 or later.');

Galleria.History = (function() {

    var onloads = [],

        init = false,

        loc = window.location,

        doc = window.document,

        ie = Galleria.IE,

        support = 'onhashchange' in window && ( doc.mode === undefined || doc.mode > 7 ),

        iframe,

        get = function( winloc ) {
            if( iframe && !support && Galleria.IE ) {
                winloc = winloc || iframe.location;
            }  else {
                winloc = loc;
            }
            return parseInt( winloc.hash.substr(2), 10 );
        },

        saved = get( loc ),

        callbacks = [],

        onchange = function() {
            \$.each( callbacks, function( i, fn ) {
                fn.call( window, get() );
            });
        },

        ready = function() {
            \$.each( onloads, function(i, fn) {
                fn();
            });

            init = true;
        },

        setHash = function( val ) {
            return '/' + val;
        };

    // always remove support if IE < 8
    if ( support && ie < 8 ) {
        support = false;
    }

    if ( !support ) {

        \$(function() {

            var interval = window.setInterval(function() {

                var hash = get();

                if ( !isNaN( hash ) && hash != saved ) {
                    saved = hash;
                    loc.hash = setHash( hash );
                    onchange();
                }

            }, 50);

            if ( ie ) {

                \$('<iframe tabindex=\"-1\" title=\"empty\">').hide().attr( 'src', 'about:blank' ).one('load', function() {

                    iframe = this.contentWindow;

                    ready();

                }).insertAfter(doc.body);

            } else {
                ready();
            }
        });
    } else {
        ready();
    }

    return {

        change: function( fn ) {

            callbacks.push( fn );

            if( support ) {
                window.onhashchange = onchange;
            }
        },

        set: function( val ) {

            if ( isNaN( val ) ) {
                return;
            }

            if ( !support && ie ) {

                this.ready(function() {

                    var idoc = iframe.document;
                    idoc.open();
                    idoc.close();

                    iframe.location.hash = setHash( val );

                });
            }

            loc.hash = setHash( val );
        },

        ready: function(fn) {
            if (!init) {
                onloads.push(fn);
            } else {
                fn();
            }
        }
    };
}());

}( jQuery, this ));

", "js/galleria/plugins/history/galleria.history.js", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\js\\galleria\\plugins\\history\\galleria.history.js");
    }
}
