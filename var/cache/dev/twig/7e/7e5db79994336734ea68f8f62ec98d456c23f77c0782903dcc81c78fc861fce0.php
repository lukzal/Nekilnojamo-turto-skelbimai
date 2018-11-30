<?php

/* base.html.twig */
class __TwigTemplate_87218dac96ce539145d753cf6f5a3f18271d6640a23802f2dfb09581a35b38d0 extends Twig_Template
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
        // line 50
        echo "

        <!-- End Top Nav Bar -->
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
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
                            <li class=\"nav-item\">
                                    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"nav-link\">Prisijungti</a>
                            </li>\t
                            <li class=\"nav-item\">
                                   <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\" class=\"nav-link\">Registruotis</a>
                            </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Naudotojo Meniu</a>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">Redaguoti Profilį</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_ads");
        echo "\">Mano skelbimai</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_add");
        echo "\">Naujas skelbimas</a>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"nav-link\">Atsijungti</a>
                                </li>
                        </ul>   
                </div>
        </nav>
        <br>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('ads', $context, $blocks);
        // line 58
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_ads($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ads"));

        // line 56
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
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
        return array (  202 => 60,  194 => 56,  188 => 55,  180 => 58,  178 => 55,  175 => 54,  169 => 53,  155 => 43,  148 => 39,  144 => 38,  140 => 37,  132 => 32,  126 => 29,  118 => 24,  108 => 17,  105 => 16,  99 => 15,  92 => 11,  86 => 10,  74 => 5,  65 => 61,  62 => 60,  60 => 53,  55 => 50,  53 => 15,  48 => 12,  46 => 10,  38 => 5,  32 => 1,);
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
                            <li class=\"nav-item\">
                                    <a href=\"{{ path(\"login\") }}\" class=\"nav-link\">Prisijungti</a>
                            </li>\t
                            <li class=\"nav-item\">
                                   <a href=\"{{ path(\"registration\") }}\" class=\"nav-link\">Registruotis</a>
                            </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Naudotojo Meniu</a>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"{{ path(\"edit_profile\") }}\">Redaguoti Profilį</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"user_ads\") }}\">Mano skelbimai</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(\"new_add\") }}\">Naujas skelbimas</a>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path(\"logout\") }}\" class=\"nav-link\">Atsijungti</a>
                                </li>
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
", "base.html.twig", "C:\\xampp\\htdocs\\templates\\base.html.twig");
    }
}
