<?php

/* js/galleria/themes/fullscreen/galleria.fullscreen.js */
class __TwigTemplate_878ea0afacbd8b6f5daa9195adc5417ec788d12a9f2487ea4dcc9364714e2c7a extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/themes/fullscreen/galleria.fullscreen.js"));

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

(function(\$) {

/*global jQuery, Galleria, window */

Galleria.addTheme({
    name: 'fullscreen',
    version: '1.5.4',
    author: 'Galleria',
    css: 'galleria.fullscreen.css',
    // begin site script
    defaults: {
        transition: 'none',
        imageCrop: true,
        thumbCrop: 'height',
        easing: 'galleriaOut',
        trueFullscreen: false,

        // set this to false if you want to keep the thumbnails:
        _hideDock: Galleria.TOUCH ? false : true,

        // set this to true if you want to shrink the carousel when clicking a thumbnail:
        _closeOnClick: false
    },
    init: function(options) {

        Galleria.requires( 1.5, 'This version of Fullscreen theme requires Galleria version 1.5 or later');

        this.addElement('thumbnails-tab');
        this.appendChild('thumbnails-container', 'thumbnails-tab');

        var tab      = this.\$('thumbnails-tab'),
            loader   = this.\$('loader'),
            thumbs   = this.\$('thumbnails-container'),
            list     = this.\$('thumbnails-list'),
            infotext = this.\$('info-text'),
            info     = this.\$('info'),
            OPEN     = !options._hideDock,
            POS      = 0;
            
        if (Galleria.IE) {
            this.addElement('iefix');
            this.appendChild('container', 'iefix');
            this.\$('iefix').css({
                zIndex: 3,
                position: 'absolute',
                backgroundColor: this.hasVariation('light') ? '#fff' : '#000',
                opacity: 0.4,
                top: 0
            });
        }

        if ( options.thumbnails === false ) {
            thumbs.hide();
        }

        var fixCaption = this.proxy(function(img) {

            var w = img.width || \$(img).width();

            if (!(img || w)) {
                return;
            }
            w = Math.min(w, \$(window).width());
            infotext.width(w - 40);
            if (Galleria.IE && this.getOptions('showInfo')) {
                this.\$('iefix').width(info.outerWidth()).height(info.outerHeight());
            }
        });

        this.bind('rescale', function() {
            POS = this.getStageHeight() - tab.height() - 2;
            thumbs.css('top', OPEN ? POS - list.outerHeight() + 2 : POS);
            var img = this.getActiveImage();
            if (img) {
                fixCaption(img);
            }
        });

        this.bind('loadstart', function(e) {
            if (!e.cached) {
                loader.show().fadeTo(100, 1);
            }
            \$(e.thumbTarget).css('opacity', 1).parent().siblings().children().css('opacity', 0.6);
        });

        this.bind('loadfinish', function(e) {
            loader.fadeOut(300);
            this.\$('info, iefix').toggle(this.hasInfo());
        });

        this.bind('image', function(e) {
            e.imageTarget && fixCaption(e.imageTarget);
        });

        this.bind('thumbnail', function(e) {
            \$(e.thumbTarget).parent(':not(.active)').children().css('opacity', 0.6);
            \$(e.thumbTarget).on('click:fast', function() {
                if (OPEN && options._closeOnClick) {
                    tab.trigger('click:fast');
                }
            });
        });

        this.trigger('rescale');

        if ( !Galleria.TOUCH ) {

            this.addIdleState(thumbs, { opacity: 0 });
            this.addIdleState(this.get('info'), { opacity: 0 });

            this.\$('image-nav-left, image-nav-right').css('opacity', 0.01).hover(function() {
                \$(this).animate({opacity: 1}, 100);
            }, function() {
                \$(this).animate({opacity: 0});
            }).show();

        }

        if (Galleria.IE) {
            this.addIdleState(this.get('iefix'), { opacity: 0 });
        }

        if (options._hideDock) {
            tab.on('click:fast', this.proxy(function() {
                tab.toggleClass('open', !OPEN);
                if (!OPEN) {
                    thumbs.animate({
                        top: POS - list.outerHeight() + 2
                    }, 400, options.easing);
                } else {
                    thumbs.animate({
                        top: POS
                    }, 400, options.easing);
                }
                OPEN = !OPEN;
            }));
        } else {
            this.bind('thumbnail', function() {
                thumbs.css('top', POS - list.outerHeight() + 2);
            });
            tab.css('visibility', 'hidden');
        }

        this.\$('thumbnails').children().hover(function() {
            \$(this).not('.active').children().stop().fadeTo(100, 1);
        }, function() {
            \$(this).not('.active').children().stop().fadeTo(400, 0.6);
        });

        this.enterFullscreen();
        this.attachKeyboard({
            escape: function(e) {
                return false;
            },
            up: function(e) {
                if (!OPEN) {
                    tab.trigger('click:fast');
                }
                e.preventDefault();
            },
            down: function(e) {
                if (OPEN) {
                    tab.trigger('click:fast');
                }
                e.preventDefault();
            }
        });
    }
    // end site script
});

}(jQuery));
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/themes/fullscreen/galleria.fullscreen.js";
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

(function(\$) {

/*global jQuery, Galleria, window */

Galleria.addTheme({
    name: 'fullscreen',
    version: '1.5.4',
    author: 'Galleria',
    css: 'galleria.fullscreen.css',
    // begin site script
    defaults: {
        transition: 'none',
        imageCrop: true,
        thumbCrop: 'height',
        easing: 'galleriaOut',
        trueFullscreen: false,

        // set this to false if you want to keep the thumbnails:
        _hideDock: Galleria.TOUCH ? false : true,

        // set this to true if you want to shrink the carousel when clicking a thumbnail:
        _closeOnClick: false
    },
    init: function(options) {

        Galleria.requires( 1.5, 'This version of Fullscreen theme requires Galleria version 1.5 or later');

        this.addElement('thumbnails-tab');
        this.appendChild('thumbnails-container', 'thumbnails-tab');

        var tab      = this.\$('thumbnails-tab'),
            loader   = this.\$('loader'),
            thumbs   = this.\$('thumbnails-container'),
            list     = this.\$('thumbnails-list'),
            infotext = this.\$('info-text'),
            info     = this.\$('info'),
            OPEN     = !options._hideDock,
            POS      = 0;
            
        if (Galleria.IE) {
            this.addElement('iefix');
            this.appendChild('container', 'iefix');
            this.\$('iefix').css({
                zIndex: 3,
                position: 'absolute',
                backgroundColor: this.hasVariation('light') ? '#fff' : '#000',
                opacity: 0.4,
                top: 0
            });
        }

        if ( options.thumbnails === false ) {
            thumbs.hide();
        }

        var fixCaption = this.proxy(function(img) {

            var w = img.width || \$(img).width();

            if (!(img || w)) {
                return;
            }
            w = Math.min(w, \$(window).width());
            infotext.width(w - 40);
            if (Galleria.IE && this.getOptions('showInfo')) {
                this.\$('iefix').width(info.outerWidth()).height(info.outerHeight());
            }
        });

        this.bind('rescale', function() {
            POS = this.getStageHeight() - tab.height() - 2;
            thumbs.css('top', OPEN ? POS - list.outerHeight() + 2 : POS);
            var img = this.getActiveImage();
            if (img) {
                fixCaption(img);
            }
        });

        this.bind('loadstart', function(e) {
            if (!e.cached) {
                loader.show().fadeTo(100, 1);
            }
            \$(e.thumbTarget).css('opacity', 1).parent().siblings().children().css('opacity', 0.6);
        });

        this.bind('loadfinish', function(e) {
            loader.fadeOut(300);
            this.\$('info, iefix').toggle(this.hasInfo());
        });

        this.bind('image', function(e) {
            e.imageTarget && fixCaption(e.imageTarget);
        });

        this.bind('thumbnail', function(e) {
            \$(e.thumbTarget).parent(':not(.active)').children().css('opacity', 0.6);
            \$(e.thumbTarget).on('click:fast', function() {
                if (OPEN && options._closeOnClick) {
                    tab.trigger('click:fast');
                }
            });
        });

        this.trigger('rescale');

        if ( !Galleria.TOUCH ) {

            this.addIdleState(thumbs, { opacity: 0 });
            this.addIdleState(this.get('info'), { opacity: 0 });

            this.\$('image-nav-left, image-nav-right').css('opacity', 0.01).hover(function() {
                \$(this).animate({opacity: 1}, 100);
            }, function() {
                \$(this).animate({opacity: 0});
            }).show();

        }

        if (Galleria.IE) {
            this.addIdleState(this.get('iefix'), { opacity: 0 });
        }

        if (options._hideDock) {
            tab.on('click:fast', this.proxy(function() {
                tab.toggleClass('open', !OPEN);
                if (!OPEN) {
                    thumbs.animate({
                        top: POS - list.outerHeight() + 2
                    }, 400, options.easing);
                } else {
                    thumbs.animate({
                        top: POS
                    }, 400, options.easing);
                }
                OPEN = !OPEN;
            }));
        } else {
            this.bind('thumbnail', function() {
                thumbs.css('top', POS - list.outerHeight() + 2);
            });
            tab.css('visibility', 'hidden');
        }

        this.\$('thumbnails').children().hover(function() {
            \$(this).not('.active').children().stop().fadeTo(100, 1);
        }, function() {
            \$(this).not('.active').children().stop().fadeTo(400, 0.6);
        });

        this.enterFullscreen();
        this.attachKeyboard({
            escape: function(e) {
                return false;
            },
            up: function(e) {
                if (!OPEN) {
                    tab.trigger('click:fast');
                }
                e.preventDefault();
            },
            down: function(e) {
                if (OPEN) {
                    tab.trigger('click:fast');
                }
                e.preventDefault();
            }
        });
    }
    // end site script
});

}(jQuery));
", "js/galleria/themes/fullscreen/galleria.fullscreen.js", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\js\\galleria\\themes\\fullscreen\\galleria.fullscreen.js");
    }
}
