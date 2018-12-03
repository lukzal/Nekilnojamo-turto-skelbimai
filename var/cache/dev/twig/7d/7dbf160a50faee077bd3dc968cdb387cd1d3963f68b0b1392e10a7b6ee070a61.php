<?php

/* js/galleria/plugins/flickr/flickr-demo.html */
class __TwigTemplate_eb107469e59a448112791d4958fe428e90dcb536f702f8cec6230544d0b18cf8 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/plugins/flickr/flickr-demo.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Galleria Flickr Plugin</title>
        <style>

            /* Demo styles */
            html,body{background:#222;margin:0;}
            body{border-top:4px solid #000;}
            .content{color:#777;font:12px/1.4 \"helvetica neue\",arial,sans-serif;width:620px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px;}

        </style>

        <!-- load jQuery -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js\"></script>

        <!-- load Galleria -->
        <script src=\"../../galleria-1.5.7.min.js\"></script>

        <!-- load flickr plugin -->
        <script src=\"galleria.flickr.min.js\"></script>

    </head>
<body>
    <div class=\"content\">
        <h1>Galleria Flickr Plugin Demo</h1>
        <p>Demonstrating a basic gallery example with a Flickr search.</p>

        <!-- Adding gallery images. This is just a container for the dynamic flickr images -->

        <div id=\"galleria\"></div>

        <p class=\"cred\">Made by <a href=\"http://galleria.io\">Galleria</a>.</p>
        <a href=\"#\" id=\"close\">cloase</a>
    </div>
    <script>
    \$(function() {
        // Load the classic theme
        Galleria.loadTheme('../../themes/classic/galleria.classic.min.js');

        // Initialize Galleria
        Galleria.run('#galleria', {

            // search flickr for \"galleria\"
            flickr: 'search:galleria',

            flickrOptions: {
                // sort by interestingness
                sort: 'interestingness-desc'
            }
        });
    });
    </script>
    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/plugins/flickr/flickr-demo.html";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Galleria Flickr Plugin</title>
        <style>

            /* Demo styles */
            html,body{background:#222;margin:0;}
            body{border-top:4px solid #000;}
            .content{color:#777;font:12px/1.4 \"helvetica neue\",arial,sans-serif;width:620px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px;}

        </style>

        <!-- load jQuery -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js\"></script>

        <!-- load Galleria -->
        <script src=\"../../galleria-1.5.7.min.js\"></script>

        <!-- load flickr plugin -->
        <script src=\"galleria.flickr.min.js\"></script>

    </head>
<body>
    <div class=\"content\">
        <h1>Galleria Flickr Plugin Demo</h1>
        <p>Demonstrating a basic gallery example with a Flickr search.</p>

        <!-- Adding gallery images. This is just a container for the dynamic flickr images -->

        <div id=\"galleria\"></div>

        <p class=\"cred\">Made by <a href=\"http://galleria.io\">Galleria</a>.</p>
        <a href=\"#\" id=\"close\">cloase</a>
    </div>
    <script>
    \$(function() {
        // Load the classic theme
        Galleria.loadTheme('../../themes/classic/galleria.classic.min.js');

        // Initialize Galleria
        Galleria.run('#galleria', {

            // search flickr for \"galleria\"
            flickr: 'search:galleria',

            flickrOptions: {
                // sort by interestingness
                sort: 'interestingness-desc'
            }
        });
    });
    </script>
    </body>
</html>", "js/galleria/plugins/flickr/flickr-demo.html", "C:\\xampp\\htdocs\\templates\\js\\galleria\\plugins\\flickr\\flickr-demo.html");
    }
}
