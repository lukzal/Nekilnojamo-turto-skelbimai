<?php

/* contract/index.html.twig */
class __TwigTemplate_b27b85a54f0a52b7b3544060314e19a11f79e5163a1339380ae920dbd320a93b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contract/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contract/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sutartys";
        
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
<br>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Sutarties numeris</th><th>Papildomos sąlygos</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sutartys"]) || array_key_exists("sutartys", $context) ? $context["sutartys"] : (function () { throw new Twig_Error_Runtime('Variable "sutartys" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sutartis"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "papildomossalygos", array()), "html", null, true);
            echo "</td>
                      <td><form action=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_sutartis");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Nutraukti</button></form>
                        <form action=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contracts");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Redaguoti</button></form>
                        <form action=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siusti_kopija");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Siųsti kopiją</button>
                    </form></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sutartis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sutartys1"]) || array_key_exists("sutartys1", $context) ? $context["sutartys1"] : (function () { throw new Twig_Error_Runtime('Variable "sutartys1" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sutartis"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "papildomossalygos", array()), "html", null, true);
            echo "</td>
                      <td><form action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_sutartis");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Nutraukti</button></form>
                        <form action=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contracts");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Redaguoti</button></form>
                        <form action=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siusti_kopija");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Siųsti kopiją</button>
                    </td></form>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sutartis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
        </table>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script> 
<script src=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Scripts/bootstrap-sortable.js\"></script> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contract/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 54,  153 => 49,  146 => 47,  139 => 45,  135 => 44,  131 => 43,  128 => 42,  123 => 41,  110 => 36,  103 => 34,  96 => 32,  92 => 31,  88 => 30,  85 => 29,  81 => 28,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Sutartys{% endblock %}

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
<br>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Sutarties numeris</th><th>Papildomos sąlygos</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
            {% for sutartis in sutartys%}
                <tr>
                    <td>{{ sutartis.id }}</td>
                    <td>{{ sutartis.papildomossalygos }}</td>
                      <td><form action=\"{{ path(\"delete_sutartis\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"{{ sutartis.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Nutraukti</button></form>
                        <form action=\"{{ path(\"edit_contracts\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"{{ sutartis.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Redaguoti</button></form>
                        <form action=\"{{ path(\"siusti_kopija\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"{{ sutartis.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Siųsti kopiją</button>
                    </form></td>
                </tr>
            {% endfor %}
            {% for sutartis in sutartys1%}
                <tr>
                    <td>{{ sutartis.id }}</td>
                    <td>{{ sutartis.papildomossalygos }}</td>
                      <td><form action=\"{{ path(\"delete_sutartis\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"{{ sutartis.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Nutraukti</button></form>
                        <form action=\"{{ path(\"edit_contracts\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"{{ sutartis.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Redaguoti</button></form>
                        <form action=\"{{ path(\"siusti_kopija\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[sutartis_id]\" value=\"{{ sutartis.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Siųsti kopiją</button>
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

{% endblock %}
", "contract/index.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\contract\\index.html.twig");
    }
}
