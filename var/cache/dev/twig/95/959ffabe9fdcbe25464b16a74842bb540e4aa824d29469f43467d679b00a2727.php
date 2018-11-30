<?php

/* profile/edit.html.twig */
class __TwigTemplate_78ba7da674c8ef7a36d4d9cbd1a54663fc4348f1fa5c2608d69f56dca70d8c25 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profile/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'includes' => array($this, 'block_includes'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redaguoti Profilį";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_includes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includes"));

        // line 6
        echo "<link href=\"/templates/profile/edit.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<div class=\"container bootstrap snippet\">
    <div class=\"row\">
  
      <div class=\"main\">
  
        <h3>Profilio redagavimas</h3>
  
        <form role=\"form\">
          <div class=\"form-group\">
            <label for=\"email\">E-mail</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\">
          </div>
          <div class=\"form-group\">
            <label for=\"name\">Vardas</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Vardas\">
          </div>
          <div class=\"form-group\">
            <label for=\"surname\">Pavarde</label>
            <input type=\"text\" class=\"form-control\" id=\"surname\" placeholder=\"Pavarde\">
          </div>
          <div class=\"form-group\">
            <label for=\"password\">Senas Slaptažodis</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Senas Slaptažodis\">
          </div>
          <div class=\"form-group\">
            <label for=\"password\">Naujas Slaptažodis</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Naujas Slaptažodis\">
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti naują slaptažodį</label>
            <input type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\">
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Keisti
          </button>
        </form>
      
      </div>
      
    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  66 => 9,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Redaguoti Profilį{% endblock %}

{% block includes %}
<link href=\"/templates/profile/edit.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

<div class=\"container bootstrap snippet\">
    <div class=\"row\">
  
      <div class=\"main\">
  
        <h3>Profilio redagavimas</h3>
  
        <form role=\"form\">
          <div class=\"form-group\">
            <label for=\"email\">E-mail</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\">
          </div>
          <div class=\"form-group\">
            <label for=\"name\">Vardas</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Vardas\">
          </div>
          <div class=\"form-group\">
            <label for=\"surname\">Pavarde</label>
            <input type=\"text\" class=\"form-control\" id=\"surname\" placeholder=\"Pavarde\">
          </div>
          <div class=\"form-group\">
            <label for=\"password\">Senas Slaptažodis</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Senas Slaptažodis\">
          </div>
          <div class=\"form-group\">
            <label for=\"password\">Naujas Slaptažodis</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Naujas Slaptažodis\">
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti naują slaptažodį</label>
            <input type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\">
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Keisti
          </button>
        </form>
      
      </div>
      
    </div>
  </div>

{% endblock %}
", "profile/edit.html.twig", "C:\\xampp\\htdocs\\templates\\profile\\edit.html.twig");
    }
}
