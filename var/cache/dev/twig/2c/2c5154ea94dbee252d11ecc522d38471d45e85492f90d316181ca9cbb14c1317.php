<?php

/* js/galleria/themes/classic/classic-demo-cdn.html */
class __TwigTemplate_c09962e2c5b3a42ef64cbd0bc644d2af2f6b1e7f2643e8ac57671aeb55f74a19 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/galleria/themes/classic/classic-demo-cdn.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Galleria Classic Theme</title>
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
    </head>
<body>
    <div class=\"content\">
        <h1>Galleria Classic Theme</h1>
        <p>Demonstrating a basic gallery example.</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id=\"galleria\">
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/800px-Biandintz_eta_zaldiak_-_modified2.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/100px-Biandintz_eta_zaldiak_-_modified2.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/1280px-Biandintz_eta_zaldiak_-_modified2.jpg\"
                    data-title=\"Biandintz eta zaldiak\"
                    data-description=\"Horses on Bianditz mountain, in Navarre, Spain.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/800px-Athabasca_Rail_at_Brule_Lake.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/100px-Athabasca_Rail_at_Brule_Lake.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/1280px-Athabasca_Rail_at_Brule_Lake.jpg\"
                    data-title=\"Athabasca Rail\"
                    data-description=\"The Athabasca River railroad track at the mouth of Brulé Lake in Alberta, Canada.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/1280px-Back-scattering_crepuscular_rays_panorama_1.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/100px-Back-scattering_crepuscular_rays_panorama_1.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/1400px-Back-scattering_crepuscular_rays_panorama_1.jpg\"
                    data-title=\"Back-scattering crepuscular rays\"
                    data-description=\"Picture of the day on Wikimedia Commons 26 September 2010.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/800px-Interior_convento_3.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/120px-Interior_convento_3.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/1400px-Interior_convento_3.jpg\"
                    data-title=\"Interior convento\"
                    data-description=\"Interior view of Yuriria Convent, founded in 1550.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/800px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/100px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/1280px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg\"
                    data-title=\"Oxbow Bend outlook\"
                    data-description=\"View over the Snake River to the Mount Moran with the Skillet Glacier.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/800px-Hazy_blue_hour_in_Grand_Canyon.JPG\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/100px-Hazy_blue_hour_in_Grand_Canyon.JPG\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/1280px-Hazy_blue_hour_in_Grand_Canyon.JPG\"
                    data-title=\"Hazy blue hour\"
                    data-description=\"Hazy blue hour in Grand Canyon. View from the South Rim.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/800px-2909_vallon_moy_res.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/100px-2909_vallon_moy_res.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/1280px-2909_vallon_moy_res.jpg\"
                    data-title=\"Haute Severaisse valley\"
                    data-description=\"View of Haute Severaisse valley and surrounding summits from the slopes of Les Vernets.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/800px-Bohinjsko_jezero_2.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/100px-Bohinjsko_jezero_2.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/1280px-Bohinjsko_jezero_2.jpg\"
                    data-title=\"Bohinj lake\"
                    data-description=\"Bohinj lake (Triglav National Park, Slovenia) in the morning.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/800px-Bowling_Balls_Beach_2_edit.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/100px-Bowling_Balls_Beach_2_edit.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/1280px-Bowling_Balls_Beach_2_edit.jpg\"
                    data-title=\"Bowling Balls\"
                    data-description=\"Mendocino county, California, USA.\"
                >
            </a>
            <a href=\"https://vimeo.com/25750735\">
                <span class=\"video\">Works for vimeo too.</span>
            </a>
            <a href=\"https://www.youtube.com/watch?v=GOD-RyVB-3Q\">
                <span class=\"video\">Works for youtube too.</span>
            </a>

        </div>
        <p class=\"cred\">Made by <a href=\"http://galleria.io\">Galleria</a>.</p>
    </div>

    <!-- load jQuery -->
    <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js\"></script> -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js\"></script>
    <!-- load Galleria -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js\"></script>
    <script>
        \$(function() {
            Galleria.run('#galleria');
        });
    </script>
    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/galleria/themes/classic/classic-demo-cdn.html";
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
        <title>Galleria Classic Theme</title>
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
    </head>
<body>
    <div class=\"content\">
        <h1>Galleria Classic Theme</h1>
        <p>Demonstrating a basic gallery example.</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id=\"galleria\">
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/800px-Biandintz_eta_zaldiak_-_modified2.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/100px-Biandintz_eta_zaldiak_-_modified2.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/1280px-Biandintz_eta_zaldiak_-_modified2.jpg\"
                    data-title=\"Biandintz eta zaldiak\"
                    data-description=\"Horses on Bianditz mountain, in Navarre, Spain.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/800px-Athabasca_Rail_at_Brule_Lake.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/100px-Athabasca_Rail_at_Brule_Lake.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/1280px-Athabasca_Rail_at_Brule_Lake.jpg\"
                    data-title=\"Athabasca Rail\"
                    data-description=\"The Athabasca River railroad track at the mouth of Brulé Lake in Alberta, Canada.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/1280px-Back-scattering_crepuscular_rays_panorama_1.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/100px-Back-scattering_crepuscular_rays_panorama_1.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/1400px-Back-scattering_crepuscular_rays_panorama_1.jpg\"
                    data-title=\"Back-scattering crepuscular rays\"
                    data-description=\"Picture of the day on Wikimedia Commons 26 September 2010.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/800px-Interior_convento_3.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/120px-Interior_convento_3.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/1400px-Interior_convento_3.jpg\"
                    data-title=\"Interior convento\"
                    data-description=\"Interior view of Yuriria Convent, founded in 1550.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/800px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/100px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/1280px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg\"
                    data-title=\"Oxbow Bend outlook\"
                    data-description=\"View over the Snake River to the Mount Moran with the Skillet Glacier.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/800px-Hazy_blue_hour_in_Grand_Canyon.JPG\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/100px-Hazy_blue_hour_in_Grand_Canyon.JPG\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/1280px-Hazy_blue_hour_in_Grand_Canyon.JPG\"
                    data-title=\"Hazy blue hour\"
                    data-description=\"Hazy blue hour in Grand Canyon. View from the South Rim.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/800px-2909_vallon_moy_res.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/100px-2909_vallon_moy_res.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/1280px-2909_vallon_moy_res.jpg\"
                    data-title=\"Haute Severaisse valley\"
                    data-description=\"View of Haute Severaisse valley and surrounding summits from the slopes of Les Vernets.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/800px-Bohinjsko_jezero_2.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/100px-Bohinjsko_jezero_2.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/1280px-Bohinjsko_jezero_2.jpg\"
                    data-title=\"Bohinj lake\"
                    data-description=\"Bohinj lake (Triglav National Park, Slovenia) in the morning.\"
                >
            </a>
            <a href=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/800px-Bowling_Balls_Beach_2_edit.jpg\">
                <img 
                    src=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/100px-Bowling_Balls_Beach_2_edit.jpg\",
                    data-big=\"http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/1280px-Bowling_Balls_Beach_2_edit.jpg\"
                    data-title=\"Bowling Balls\"
                    data-description=\"Mendocino county, California, USA.\"
                >
            </a>
            <a href=\"https://vimeo.com/25750735\">
                <span class=\"video\">Works for vimeo too.</span>
            </a>
            <a href=\"https://www.youtube.com/watch?v=GOD-RyVB-3Q\">
                <span class=\"video\">Works for youtube too.</span>
            </a>

        </div>
        <p class=\"cred\">Made by <a href=\"http://galleria.io\">Galleria</a>.</p>
    </div>

    <!-- load jQuery -->
    <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js\"></script> -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js\"></script>
    <!-- load Galleria -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js\"></script>
    <script>
        \$(function() {
            Galleria.run('#galleria');
        });
    </script>
    </body>
</html>", "js/galleria/themes/classic/classic-demo-cdn.html", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\js\\galleria\\themes\\classic\\classic-demo-cdn.html");
    }
}
