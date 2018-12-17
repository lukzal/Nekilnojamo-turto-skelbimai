<?php

/* moderator/index.html.twig */
class __TwigTemplate_384b670e6f1fe8b89d0689311107452179d84e4d1212b817fd5292bc05139e79 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "moderator/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "moderator/index.html.twig"));

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
<div class=\"container\">
<form role=\"form\" action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filtruoti");
        echo "\" method=\"post\">
Fitruoti pagal:
<div class=\"row\">
        <div class=\"table-responsive col-md-8\">
         <table id=\"sort\" class=\"table table-bordered\">
            <tbody>
                <tr>
                    <td><div class=\"form-group\">
                    <label for=\"dnuo\">Data nuo:</label>
                    <input name=\"form[dnuo]\" type=\"Date\" class=\"form-control\" id=\"dnuo\">
                    </div></td>
                    <td> <div class=\"form-group\">
                    <label for=\"diki\">Data iki:</label>
                    <input name=\"form[diki]\" type=\"Date\" class=\"form-control\" id=\"diki\">
                    </div></td>
                </tr>
                <tr>       
                    <td><div class=\"form-group\">
                    <label for=\"inuo\">ID nuo:</label>
                    <input name=\"form[inuo]\" type=\"number\" class=\"form-control\" id=\"inuo\">
                    </div></td>
                    <td><div class=\"form-group\">
                    <label for=\"iiki\">ID iki:</label>
                    <input name=\"form[iiki]\" type=\"number\" class=\"form-control\" id=\"iiki\">
                    </div></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
<button type=\"submit\" class=\"btn btn btn-primary\">Fitruoti</button></form>
 <br>
 </br>
<div class=\"container\">
<form role=\"form\" action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rikiuoti");
        echo "\" method=\"post\">
          <div class=\"form-group\">
            Rikiuoti pagal:
            <center><select class=\"browser-default custom-select\" name=\"form[rikiavimas]\">
                                <option value=\"id_maz\">ID ↓</option>
                                <option value=\"id_did\">ID ↑</option>
                                <option value=\"data_maz\">Data ↓</option>
                                <option value=\"data_did\">Data ↑</option>
                            </select></center>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">Rikiuoti</button></form>
          </br>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Sutarties numeris</th><th>Pasirašymo data</th><th>Papildomos sąlygos</th></tr>
            </thead>
            <tbody>
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sutartys"]) || array_key_exists("sutartys", $context) ? $context["sutartys"] : (function () { throw new Twig_Error_Runtime('Variable "sutartys" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sutartis"]) {
            // line 75
            echo "                <tr>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "data", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sutartis"], "papildomossalygos", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sutartis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
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
        return "moderator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 81,  148 => 78,  144 => 77,  140 => 76,  137 => 75,  133 => 74,  110 => 54,  73 => 20,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
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
<div class=\"container\">
<form role=\"form\" action=\"{{ path('filtruoti') }}\" method=\"post\">
Fitruoti pagal:
<div class=\"row\">
        <div class=\"table-responsive col-md-8\">
         <table id=\"sort\" class=\"table table-bordered\">
            <tbody>
                <tr>
                    <td><div class=\"form-group\">
                    <label for=\"dnuo\">Data nuo:</label>
                    <input name=\"form[dnuo]\" type=\"Date\" class=\"form-control\" id=\"dnuo\">
                    </div></td>
                    <td> <div class=\"form-group\">
                    <label for=\"diki\">Data iki:</label>
                    <input name=\"form[diki]\" type=\"Date\" class=\"form-control\" id=\"diki\">
                    </div></td>
                </tr>
                <tr>       
                    <td><div class=\"form-group\">
                    <label for=\"inuo\">ID nuo:</label>
                    <input name=\"form[inuo]\" type=\"number\" class=\"form-control\" id=\"inuo\">
                    </div></td>
                    <td><div class=\"form-group\">
                    <label for=\"iiki\">ID iki:</label>
                    <input name=\"form[iiki]\" type=\"number\" class=\"form-control\" id=\"iiki\">
                    </div></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
<button type=\"submit\" class=\"btn btn btn-primary\">Fitruoti</button></form>
 <br>
 </br>
<div class=\"container\">
<form role=\"form\" action=\"{{ path('rikiuoti') }}\" method=\"post\">
          <div class=\"form-group\">
            Rikiuoti pagal:
            <center><select class=\"browser-default custom-select\" name=\"form[rikiavimas]\">
                                <option value=\"id_maz\">ID ↓</option>
                                <option value=\"id_did\">ID ↑</option>
                                <option value=\"data_maz\">Data ↓</option>
                                <option value=\"data_did\">Data ↑</option>
                            </select></center>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">Rikiuoti</button></form>
          </br>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Sutarties numeris</th><th>Pasirašymo data</th><th>Papildomos sąlygos</th></tr>
            </thead>
            <tbody>
            {% for sutartis in sutartys%}
                <tr>
                    <td>{{ sutartis.id }}</td>
                    <td>{{ sutartis.data }}</td>
                    <td>{{ sutartis.papildomossalygos }}</td>
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
", "moderator/index.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\moderator\\index.html.twig");
    }
}
