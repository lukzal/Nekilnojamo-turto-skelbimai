<?php

/* base.html.twig */
class __TwigTemplate_f447c3fb1aac4e4a38feb96591de1c6b9985dc99686641aac8396f449633de83 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'includes' => array($this, 'block_includes'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'ads' => array($this, 'block_ads'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://bootswatch.com/4/lux/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
        <script src=\"/templates/js/galleria/galleria-1.5.7.min.js\"></script>
        ";
        // line 10
        $this->displayBlock('includes', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <!--Top Nav Bar -->
        ";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 61
        echo "

        <!-- End Top Nav Bar -->
        ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagrindinis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_includes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includes"));

        // line 11
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 16
        echo "        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"navbar-brand\">Nekilnojamo Turto Skelbimai</a>
                <button class=\"navbar-toggler\" data-target=\"#navigation\" data-control=\"navigation\" data-toggle=\"collapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navigation\">
                    <ul class=\"nav navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">Pagrindinis</a>
                        </li>\t\t\t\t\t
                    </ul>
                    <ul class=\"navbar-nav\">
                            ";
        // line 28
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "session", array()), "get", array(0 => "userEmail"), "method"))) {
            // line 29
            echo "                            <li class=\"nav-item\">
                                    <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link\">Prisijungti</a>
                            </li>\t
                            <li class=\"nav-item\">
                                   <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"nav-link\">Registruotis</a>
                            </li>
                            ";
        }
        // line 36
        echo "                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->source); })()), "session", array()), "get", array(0 => "userEmail"), "method"))) {
            // line 37
            echo "                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Naudotojo Meniu</a>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
            echo "\">Redaguoti Profilį</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skelbimai");
            echo "\">Mano skelbimai</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contracts");
            echo "\">Mano sutartys</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newskelbimas");
            echo "\">Naujas skelbimas</a>
                                        ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "session", array()), "get", array(0 => "userType"), "method") == "3")) {
                // line 45
                echo "                                        <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel");
                echo "\">Administratoriaus panele</a>
                                        ";
            }
            // line 47
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->source); })()), "session", array()), "get", array(0 => "userType"), "method") == "2")) {
                // line 48
                echo "                                        <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "\">Visos sutartys</a>
                                        ";
            }
            // line 50
            echo "                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link\">Atsijungti</a>
                                </li>
                                ";
        }
        // line 56
        echo "                        </ul>   
                </div>
        </nav>
        <br>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('ads', $context, $blocks);
        // line 69
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_ads($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ads"));

        // line 67
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 71,  230 => 67,  224 => 66,  216 => 69,  214 => 66,  211 => 65,  205 => 64,  194 => 56,  188 => 53,  183 => 50,  177 => 48,  174 => 47,  168 => 45,  166 => 44,  162 => 43,  158 => 42,  154 => 41,  150 => 40,  145 => 37,  142 => 36,  136 => 33,  130 => 30,  127 => 29,  125 => 28,  118 => 24,  108 => 17,  105 => 16,  99 => 15,  92 => 11,  86 => 10,  74 => 5,  65 => 72,  62 => 71,  60 => 64,  55 => 61,  53 => 15,  48 => 12,  46 => 10,  38 => 5,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Pagrindinis{% endblock %}</title>
        <link href=\"https://bootswatch.com/4/lux/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
        <script src=\"/templates/js/galleria/galleria-1.5.7.min.js\"></script>
        {% block includes %}
        {% endblock %}
    </head>
    <body>
        <!--Top Nav Bar -->
        {% block navbar %}
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a href=\"{{ path('home') }}\" class=\"navbar-brand\">Nekilnojamo Turto Skelbimai</a>
                <button class=\"navbar-toggler\" data-target=\"#navigation\" data-control=\"navigation\" data-toggle=\"collapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navigation\">
                    <ul class=\"nav navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a href=\"{{ path(\"home\") }}\" class=\"nav-link\">Pagrindinis</a>
                        </li>\t\t\t\t\t
                    </ul>
                    <ul class=\"navbar-nav\">
                            {% if app.session.get('userEmail') is empty %}
                            <li class=\"nav-item\">
                                    <a href=\"{{ path(\"login\") }}\" class=\"nav-link\">Prisijungti</a>
                            </li>\t
                            <li class=\"nav-item\">
                                   <a href=\"{{ path(\"registration\") }}\" class=\"nav-link\">Registruotis</a>
                            </li>
                            {% endif %}
                            {% if app.session.get('userEmail') is not empty %}
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Naudotojo Meniu</a>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"{{ path(\"edit_profile\") }}\">Redaguoti Profilį</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"skelbimai\") }}\">Mano skelbimai</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"contracts\") }}\">Mano sutartys</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"newskelbimas\") }}\">Naujas skelbimas</a>
                                        {% if app.session.get('userType') == \"3\" %}
                                        <a class=\"dropdown-item\" href=\"{{ path(\"admin_panel\") }}\">Administratoriaus panele</a>
                                        {% endif %}
                                        {% if app.session.get('userType') == \"2\" %}
                                        <a class=\"dropdown-item\" href=\"{{ path(\"index\") }}\">Visos sutartys</a>
                                        {% endif %}
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path(\"logout\") }}\" class=\"nav-link\">Atsijungti</a>
                                </li>
                                {% endif %}
                        </ul>   
                </div>
        </nav>
        <br>
        {% endblock %}


        <!-- End Top Nav Bar -->
        {% block body %}

        {% block ads %}

        {% endblock %}

        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\base.html.twig");
    }
}
