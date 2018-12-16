<?php

/* js/galleria/plugins/history/history-demo.html */
class __TwigTemplate_d6c8c2a4df1d9d11394afae9cf1f67e5dc07a0ffb0784d7094077434c9cef729 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/plugins/history/history-demo.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Galleria History Plugin</title>
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
            #galleria{height:320px}

        </style>

        <!-- load jQuery -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js\"></script>

        <!-- load Galleria -->
        <script src=\"../../galleria-1.5.7.min.js\"></script>

        <!-- load the History plugin, no need for further scripting -->
        <script src=\"galleria.history.min.js\"></script>

    </head>
<body>
    <div class=\"content\">
        <h1>Galleria History Plugin</h1>
        <p>Demonstrating a basic history example. Supports most browsers, including FF 3.0+ and IE 7+</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id=\"galleria\">
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Locomotives-Roundhouse2.jpg/800px-Locomotives-Roundhouse2.jpg\">
                <img title=\"Locomotives Roundhouse\"
                     alt=\"Steam locomotives of the Chicago &amp; North Western Railway.\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Locomotives-Roundhouse2.jpg/100px-Locomotives-Roundhouse2.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Icebergs_in_the_High_Arctic_-_20050907.jpg/1000px-Icebergs_in_the_High_Arctic_-_20050907.jpg\">
                <img title=\"Icebergs in the High Arctic\"
                     alt=\"”The debris loading isn't particularly extensive, but the color is usual.”\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Icebergs_in_the_High_Arctic_-_20050907.jpg/100px-Icebergs_in_the_High_Arctic_-_20050907.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg/1000px-Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg\">
                <img title=\"Araña\"
                     alt=\"Xysticus cristatus, A Estrada, Galicia, Spain\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg/100px-Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg/1000px-9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg\">
                <img title=\"Museo storia naturale\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg/100px-9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg/1000px-Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg\">
                <img title=\"Grjótagjá caves in summer 2009\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg/100px-Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg/1000px-20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg\">
                <img title=\"Thermes\"
                     alt=\"Xanthi hot-spa springs, Xanthi Prefecture, Greece\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg/100px-20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Polish_Army_Ko%C5%82obrzeg_077.JPG/1024px-Polish_Army_Ko%C5%82obrzeg_077.JPG\">
                <img title=\"Polish Army Kołobrzeg\"
                     alt=\"A display of the Polish Army. Both the soldier, and the vehicle belong to the 7th Pomeranian Coastal Defence Brigade, a part of the Szczecin-based 12th Mechanized Division ”Bolesław Krzywousty”\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Polish_Army_Ko%C5%82obrzeg_077.JPG/100px-Polish_Army_Ko%C5%82obrzeg_077.JPG\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/20100213_Zlatograd_Bulgaria_3.jpg/1024px-20100213_Zlatograd_Bulgaria_3.jpg\">
                <img title=\"Zlatograd Bulgaria\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/20100213_Zlatograd_Bulgaria_3.jpg/100px-20100213_Zlatograd_Bulgaria_3.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg/1024px-FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg\">
                <img title=\"09-28-2001 in New York City\"
                     alt=\"New York, NY, September 28, 2001 -- Debris on surrounding roofs at the site of the World Trade Center. Photo by Andrea Booher/ FEMA News Photo\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg/100px-FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Antennae%2C_Hubble_images.jpg/1024px-Antennae%2C_Hubble_images.jpg\">
                <img src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Antennae%2C_Hubble_images.jpg/100px-Antennae%2C_Hubble_images.jpg\">
            </a>
        </div>

        <p class=\"cred\">Made by <a href=\"http://galleria.io\">Galleria</a>.</p>
    </div>

    <script>
    \$(function() {
        // Load the classic theme
        Galleria.loadTheme('../../themes/classic/galleria.classic.min.js');

        // Initialize Galleria
        Galleria.run('#galleria');
    });
    </script>
    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/plugins/history/history-demo.html";
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
        <title>Galleria History Plugin</title>
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
            #galleria{height:320px}

        </style>

        <!-- load jQuery -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js\"></script>

        <!-- load Galleria -->
        <script src=\"../../galleria-1.5.7.min.js\"></script>

        <!-- load the History plugin, no need for further scripting -->
        <script src=\"galleria.history.min.js\"></script>

    </head>
<body>
    <div class=\"content\">
        <h1>Galleria History Plugin</h1>
        <p>Demonstrating a basic history example. Supports most browsers, including FF 3.0+ and IE 7+</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id=\"galleria\">
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Locomotives-Roundhouse2.jpg/800px-Locomotives-Roundhouse2.jpg\">
                <img title=\"Locomotives Roundhouse\"
                     alt=\"Steam locomotives of the Chicago &amp; North Western Railway.\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Locomotives-Roundhouse2.jpg/100px-Locomotives-Roundhouse2.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Icebergs_in_the_High_Arctic_-_20050907.jpg/1000px-Icebergs_in_the_High_Arctic_-_20050907.jpg\">
                <img title=\"Icebergs in the High Arctic\"
                     alt=\"”The debris loading isn't particularly extensive, but the color is usual.”\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Icebergs_in_the_High_Arctic_-_20050907.jpg/100px-Icebergs_in_the_High_Arctic_-_20050907.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg/1000px-Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg\">
                <img title=\"Araña\"
                     alt=\"Xysticus cristatus, A Estrada, Galicia, Spain\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg/100px-Ara%C3%B1a._A_Estrada%2C_Galiza._02.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg/1000px-9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg\">
                <img title=\"Museo storia naturale\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg/100px-9104_-_Milano_-_Museo_storia_naturale_-_Fluorite_-_Foto_Giovanni_Dall%27Orto_22-Apr-2007.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg/1000px-Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg\">
                <img title=\"Grjótagjá caves in summer 2009\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg/100px-Grj%C3%B3tagj%C3%A1_caves_in_summer_2009_%282%29.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg/1000px-20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg\">
                <img title=\"Thermes\"
                     alt=\"Xanthi hot-spa springs, Xanthi Prefecture, Greece\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg/100px-20091128_Loutra_Thermes_Xanthi_Thrace_Greece_2.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Polish_Army_Ko%C5%82obrzeg_077.JPG/1024px-Polish_Army_Ko%C5%82obrzeg_077.JPG\">
                <img title=\"Polish Army Kołobrzeg\"
                     alt=\"A display of the Polish Army. Both the soldier, and the vehicle belong to the 7th Pomeranian Coastal Defence Brigade, a part of the Szczecin-based 12th Mechanized Division ”Bolesław Krzywousty”\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Polish_Army_Ko%C5%82obrzeg_077.JPG/100px-Polish_Army_Ko%C5%82obrzeg_077.JPG\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/20100213_Zlatograd_Bulgaria_3.jpg/1024px-20100213_Zlatograd_Bulgaria_3.jpg\">
                <img title=\"Zlatograd Bulgaria\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/20100213_Zlatograd_Bulgaria_3.jpg/100px-20100213_Zlatograd_Bulgaria_3.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg/1024px-FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg\">
                <img title=\"09-28-2001 in New York City\"
                     alt=\"New York, NY, September 28, 2001 -- Debris on surrounding roofs at the site of the World Trade Center. Photo by Andrea Booher/ FEMA News Photo\"
                     src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg/100px-FEMA_-_5399_-_Photograph_by_Andrea_Booher_taken_on_09-28-2001_in_New_York.jpg\">
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Antennae%2C_Hubble_images.jpg/1024px-Antennae%2C_Hubble_images.jpg\">
                <img src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Antennae%2C_Hubble_images.jpg/100px-Antennae%2C_Hubble_images.jpg\">
            </a>
        </div>

        <p class=\"cred\">Made by <a href=\"http://galleria.io\">Galleria</a>.</p>
    </div>

    <script>
    \$(function() {
        // Load the classic theme
        Galleria.loadTheme('../../themes/classic/galleria.classic.min.js');

        // Initialize Galleria
        Galleria.run('#galleria');
    });
    </script>
    </body>
</html>", "js/galleria/plugins/history/history-demo.html", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\js\\galleria\\plugins\\history\\history-demo.html");
    }
}