<?php

/* skelbimai/newskelbimas.html.twig */
class __TwigTemplate_442961323c3575a6c07a25795c6087eff32a33e48e797762cd68d96a25a69a58 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "skelbimai/newskelbimas.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skelbimai/newskelbimas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Naujas Skelbimas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
        <h1>Naujas skelbimas</h1>
    <form role=\"form\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newskelbimasproc");
        echo "\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"pavadinimas\">Pavadinimas</label>
            <input name=\"form[pavadinimas]\" type=\"text\" class=\"form-control\" id=\"pavadinimas\" placeholder=\"Pavadinimas\">
          </div>
          <div class=\"form-group\">
            <label for=\"skelbimas\">Skelbimo parašymas</label>
            <input name=\"form[skelbimas]\" type=\"text\" class=\"form-control\" id=\"skelbimas\" placeholder=\"Skelbimo aprašymas\">
          </div>
          <div class=\"form-group\">
            <label for=\"kaina\">Kaina</label>
            <input name=\"form[kaina]\" type=\"decimal\" class=\"form-control\" id=\"kaina\" placeholder=\"Kaina\">
          </div>
          <div class=\"form-group\">
            <label for=\"namonumeris\">Namo numeris</label>
            <input name=\"form[namonumeris]\" type=\"text\" class=\"form-control\" id=\"namonumeris\" placeholder=\"Namo numeris\">
          </div>
          <div class=\"form-group\">
            <label for=\"plotas\">Plotas</label>
            <input name=\"form[plotas]\" type=\"decimal\" class=\"form-control\" id=\"plotas\" placeholder=\"Plotas\">
          </div>
          <div class=\"form-group\">
            <label for=\"metai\">Metai</label>
            <input name=\"form[metai]\" type=\"DateTime\" class=\"form-control\" id=\"metai\" placeholder=\"Metai\">
          </div>
          <div class=\"form-group\">
            <label for=\"gatvesnumeris\">Gatvės pavadinimas</label>
            <input name=\"form[gatvesnumeris]\" type=\"text\" class=\"form-control\" id=\"gatvesnumeris\" placeholder=\"Gatvės pavadinimas\">
          </div>
          <div class=\"form-group\">
            <label for=\"miestas\">Mietas</label>
            <input name=\"form[miestas]\" type=\"text\" class=\"form-control\" id=\"miestas\" placeholder=\"Miestas\">
          </div>
        <button type=\"submit\" class=\"btn btn btn-primary\">Sukurti</button>
            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skelbimai");
        echo "\" class=\"btn btn-secondary\">Atšaukti</a>
          </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "skelbimai/newskelbimas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  61 => 8,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Naujas Skelbimas{% endblock %}

{% block body %}
<div class=\"container\">
        <h1>Naujas skelbimas</h1>
    <form role=\"form\" action=\"{{ path('newskelbimasproc') }}\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"pavadinimas\">Pavadinimas</label>
            <input name=\"form[pavadinimas]\" type=\"text\" class=\"form-control\" id=\"pavadinimas\" placeholder=\"Pavadinimas\">
          </div>
          <div class=\"form-group\">
            <label for=\"skelbimas\">Skelbimo parašymas</label>
            <input name=\"form[skelbimas]\" type=\"text\" class=\"form-control\" id=\"skelbimas\" placeholder=\"Skelbimo aprašymas\">
          </div>
          <div class=\"form-group\">
            <label for=\"kaina\">Kaina</label>
            <input name=\"form[kaina]\" type=\"decimal\" class=\"form-control\" id=\"kaina\" placeholder=\"Kaina\">
          </div>
          <div class=\"form-group\">
            <label for=\"namonumeris\">Namo numeris</label>
            <input name=\"form[namonumeris]\" type=\"text\" class=\"form-control\" id=\"namonumeris\" placeholder=\"Namo numeris\">
          </div>
          <div class=\"form-group\">
            <label for=\"plotas\">Plotas</label>
            <input name=\"form[plotas]\" type=\"decimal\" class=\"form-control\" id=\"plotas\" placeholder=\"Plotas\">
          </div>
          <div class=\"form-group\">
            <label for=\"metai\">Metai</label>
            <input name=\"form[metai]\" type=\"DateTime\" class=\"form-control\" id=\"metai\" placeholder=\"Metai\">
          </div>
          <div class=\"form-group\">
            <label for=\"gatvesnumeris\">Gatvės pavadinimas</label>
            <input name=\"form[gatvesnumeris]\" type=\"text\" class=\"form-control\" id=\"gatvesnumeris\" placeholder=\"Gatvės pavadinimas\">
          </div>
          <div class=\"form-group\">
            <label for=\"miestas\">Mietas</label>
            <input name=\"form[miestas]\" type=\"text\" class=\"form-control\" id=\"miestas\" placeholder=\"Miestas\">
          </div>
        <button type=\"submit\" class=\"btn btn btn-primary\">Sukurti</button>
            <a href=\"{{ path(\"skelbimai\") }}\" class=\"btn btn-secondary\">Atšaukti</a>
          </div>
{% endblock %}

", "skelbimai/newskelbimas.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\skelbimai\\newskelbimas.html.twig");
    }
}
