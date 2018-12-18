<?php

/* add/userAds.html.twig */
class __TwigTemplate_86d628499e90671131a6990e4ca41d6d08bce802525dce78cca884f3bd302492 extends Twig_Template
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

        echo "Naudotojo skelbimai";
        
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
                <tr><th>Skel. ID</th><th>Pavadinimas</th><th>Sukūrimo data</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skelbimai"]) || array_key_exists("skelbimai", $context) ? $context["skelbimai"] : (function () { throw new Twig_Error_Runtime('Variable "skelbimai" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skelbimas"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skelbimas"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skelbimas"], "Pavadinimas", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skelbimas"], "SukurimoData", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                      <td><form action=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_skelbimas");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[skelbimas_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skelbimas"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\" onclick=\"confirm('Patvirtinkite trynimą')\" type=\"submit\">Trinti</button></form>
                        <form action=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_add");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[skelbimas_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skelbimas"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Redaguoti</button></form>
                    </td></form>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skelbimas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
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
        return array (  120 => 40,  107 => 35,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  85 => 29,  81 => 28,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Naudotojo skelbimai{% endblock %}

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
                <tr><th>Skel. ID</th><th>Pavadinimas</th><th>Sukūrimo data</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                {% for skelbimas in skelbimai %}
                <tr>
                    <td>{{ skelbimas.id }}</td>
                    <td>{{ skelbimas.Pavadinimas }}</td>
                    <td>{{ skelbimas.SukurimoData|date(\"Y-m-d H:i:s\")}}</td>
                      <td><form action=\"{{ path(\"delete_skelbimas\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[skelbimas_id]\" value=\"{{ skelbimas.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\" onclick=\"confirm('Patvirtinkite trynimą')\" type=\"submit\">Trinti</button></form>
                        <form action=\"{{ path(\"edit_add\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[skelbimas_id]\" value=\"{{ skelbimas.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Redaguoti</button></form>
                    </td></form>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script> 
<script src=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Scripts/bootstrap-sortable.js\"></script> 
</form>
{% endblock %}
", "add/userAds.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\add\\userAds.html.twig");
    }
}
