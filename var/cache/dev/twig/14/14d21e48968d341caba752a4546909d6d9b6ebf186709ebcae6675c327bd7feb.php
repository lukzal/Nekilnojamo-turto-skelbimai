<?php

/* registration/index.html.twig */
class __TwigTemplate_37dc4707e5cdeb2b8bfe1d3d850cc3f570842635ed9a18a6c545f37874d16f39 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registracija";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_includes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includes"));

        // line 6
        echo "<link href=\"/templates/registration/style.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"container bootstrap snippet\">
    <div class=\"row\">
  
      <div class=\"main\">
  
        <h3>Naudotojo Registracija</h3>
  
        <form role=\"form\">
          <div class=\"form-group\">
            <label for=\"username\">Vartotojo vardas</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Vartotojo vardas\">
          </div>
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
            <label for=\"password\">Slaptažodis</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Slaptažodis\">
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti slaptažodį</label>
            <input type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\">
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Registruotis
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
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  66 => 8,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Registracija{% endblock %}

{% block includes %}
<link href=\"/templates/registration/style.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"container bootstrap snippet\">
    <div class=\"row\">
  
      <div class=\"main\">
  
        <h3>Naudotojo Registracija</h3>
  
        <form role=\"form\">
          <div class=\"form-group\">
            <label for=\"username\">Vartotojo vardas</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Vartotojo vardas\">
          </div>
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
            <label for=\"password\">Slaptažodis</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Slaptažodis\">
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti slaptažodį</label>
            <input type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\">
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Registruotis
          </button>
        </form>
      
      </div>
      
    </div>
  </div>
{% endblock %}
", "registration/index.html.twig", "C:\\xampp\\htdocs\\templates\\registration\\index.html.twig");
    }
}
