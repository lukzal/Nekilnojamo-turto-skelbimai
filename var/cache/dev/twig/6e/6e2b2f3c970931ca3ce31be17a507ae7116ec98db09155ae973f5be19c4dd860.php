<?php

/* add/userAds.html.twig */
class __TwigTemplate_d3a86c366445110a01e3c4ff5720eb10d60544b6fb6d93c1a5d676e8589d464a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "add/userAds.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add/userAds.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administratoriaus Panele";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .form-control-borderless {
        border: none;
    }
    
    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

</style>
<link href=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Contents/bootstrap-sortable.css\" rel=\"stylesheet\" type=\"text/css\">
<form>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Skel. ID</th><th>Pavadinimas</th><th>Data</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>pavadinimas</td>
                    <td>2018-09-22</td>
                    <td><button onclick=\"confirm('Patvirtinkite trynimą')\" class=\"btn btn-primary btn-sm btn-block\" name=\"del\" type=\"submit\">Šalinti</button>
                        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_add");
        echo "\" class=\"btn btn-primary btn-sm btn-block\">Redaguoti</a></td>
                </tr>
                <tr>
                        <td>1234</td>
                        <td>pavadinimas2</td>
                        <td>2018-11-03</td>
                        <td><button onclick=\"confirm('Patvirtinkite trynimą')\" class=\"btn btn-primary btn-sm btn-block\" name=\"del\" type=\"submit\">Šalinti</button>
                            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_add");
        echo "\" class=\"btn btn-primary btn-sm btn-block\">Redaguoti</a></td>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script> 
<script src=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Scripts/bootstrap-sortable.js\"></script> 
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "add/userAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  86 => 33,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Administratoriaus Panele{% endblock %}

{% block body %}
<style>
    .form-control-borderless {
        border: none;
    }
    
    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

</style>
<link href=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Contents/bootstrap-sortable.css\" rel=\"stylesheet\" type=\"text/css\">
<form>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Skel. ID</th><th>Pavadinimas</th><th>Data</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>pavadinimas</td>
                    <td>2018-09-22</td>
                    <td><button onclick=\"confirm('Patvirtinkite trynimą')\" class=\"btn btn-primary btn-sm btn-block\" name=\"del\" type=\"submit\">Šalinti</button>
                        <a href=\"{{ path(\"edit_add\") }}\" class=\"btn btn-primary btn-sm btn-block\">Redaguoti</a></td>
                </tr>
                <tr>
                        <td>1234</td>
                        <td>pavadinimas2</td>
                        <td>2018-11-03</td>
                        <td><button onclick=\"confirm('Patvirtinkite trynimą')\" class=\"btn btn-primary btn-sm btn-block\" name=\"del\" type=\"submit\">Šalinti</button>
                            <a href=\"{{ path(\"edit_add\") }}\" class=\"btn btn-primary btn-sm btn-block\">Redaguoti</a></td>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script> 
<script src=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Scripts/bootstrap-sortable.js\"></script> 
</form>
{% endblock %}
", "add/userAds.html.twig", "C:\\xampp\\htdocs\\templates\\add\\userAds.html.twig");
    }
}
