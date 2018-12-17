<?php

/* contract/edit.html.twig */
class __TwigTemplate_067d9c2798fc209b5131227704fb53c0adc5f9f0e1afbb1d5496ae4e03e37d3f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contract/edit.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contract/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redaguoti sutartį";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
        <h1>Sutarties redagavimas</h1>
        <h6>Visa kita informacija bus pridėta automatiškai</h6><br>
    <form role=\"form\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contracts_proc");
        echo "\" method=\"POST\">
          <div class=\"form-group\">
            <input name=\"form[papildomossalygos]\" rows=\"5\" type=\"text\" class=\"form-control\" id=\"papildomossalygos\" placeholder=\"Papildomos sąlygos\"\">
            <button type=\"submit\" class=\"btn btn btn-primary\">Keisti</button>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contracts");
        echo "\" class=\"btn btn-secondary\">Atšaukti</a>
          </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contract/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  63 => 10,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Redaguoti sutartį{% endblock %}

{% block body %}

<div class=\"container\">
        <h1>Sutarties redagavimas</h1>
        <h6>Visa kita informacija bus pridėta automatiškai</h6><br>
    <form role=\"form\" action=\"{{ path('edit_contracts_proc') }}\" method=\"POST\">
          <div class=\"form-group\">
            <input name=\"form[papildomossalygos]\" rows=\"5\" type=\"text\" class=\"form-control\" id=\"papildomossalygos\" placeholder=\"Papildomos sąlygos\"\">
            <button type=\"submit\" class=\"btn btn btn-primary\">Keisti</button>
            <a href=\"{{ path(\"contracts\") }}\" class=\"btn btn-secondary\">Atšaukti</a>
          </div>
        </div>

{% endblock %}
", "contract/edit.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\contract\\edit.html.twig");
    }
}
