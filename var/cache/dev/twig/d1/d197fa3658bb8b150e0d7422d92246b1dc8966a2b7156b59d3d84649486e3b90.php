<?php

/* skelbimai/editskelbimas.html.twig */
class __TwigTemplate_3674e9b85263f07dad58f7f71f1f895d65ecbe7cbd35faa3f29500834080b9be extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "skelbimai/editskelbimas.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skelbimai/editskelbimas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skelbimo Redagavimas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
        <h1>Skelbimo redagavimas</h1>
    <form role=\"form\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editskelbimasproc");
        echo "\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"pavadinimas\">Pavadinimas</label>
            <input name=\"form[pavadinimas]\" type=\"text\" class=\"form-control\" id=\"pavadinimas\" placeholder=\"Pavadinimas\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 11, $this->source); })()), "pavadinimas", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"skelbimas\">Skelbimas</label>
            <input name=\"form[skelbimas]\" type=\"text\" class=\"form-control\" id=\"skelbimas\" placeholder=\"Skelbimas\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 15, $this->source); })()), "skelbimas", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"kaina\">Kaina</label>
            <input name=\"form[kaina]\" type=\"text\" class=\"form-control\" id=\"kaina\" placeholder=\"Kaina\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 19, $this->source); })()), "kaina", array()), "html", null, true);
        echo "\">
          </div>
        <button type=\"submit\" class=\"btn btn btn-primary\">Keisti</button>
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contracts");
        echo "\" class=\"btn btn-secondary\">Atšaukti</a>
          </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "skelbimai/editskelbimas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  81 => 19,  74 => 15,  67 => 11,  61 => 8,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Skelbimo Redagavimas{% endblock %}

{% block body %}
<div class=\"container\">
        <h1>Skelbimo redagavimas</h1>
    <form role=\"form\" action=\"{{ path('editskelbimasproc') }}\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"pavadinimas\">Pavadinimas</label>
            <input name=\"form[pavadinimas]\" type=\"text\" class=\"form-control\" id=\"pavadinimas\" placeholder=\"Pavadinimas\" value=\"{{ data.pavadinimas }}\">
          </div>
          <div class=\"form-group\">
            <label for=\"skelbimas\">Skelbimas</label>
            <input name=\"form[skelbimas]\" type=\"text\" class=\"form-control\" id=\"skelbimas\" placeholder=\"Skelbimas\" value=\"{{ data.skelbimas }}\">
          </div>
          <div class=\"form-group\">
            <label for=\"kaina\">Kaina</label>
            <input name=\"form[kaina]\" type=\"text\" class=\"form-control\" id=\"kaina\" placeholder=\"Kaina\" value=\"{{ data.kaina }}\">
          </div>
        <button type=\"submit\" class=\"btn btn btn-primary\">Keisti</button>
            <a href=\"{{ path(\"contracts\") }}\" class=\"btn btn-secondary\">Atšaukti</a>
          </div>
{% endblock %}
", "skelbimai/editskelbimas.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\skelbimai\\editskelbimas.html.twig");
    }
}
