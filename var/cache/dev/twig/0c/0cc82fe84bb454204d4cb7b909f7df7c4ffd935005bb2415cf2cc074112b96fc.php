<?php

/* login/index.html.twig */
class __TwigTemplate_02b30512f552c42353595d27f5f62b6d6af0231df825f8ce84cff308820b1d5d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prisijungimas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_includes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includes"));

        // line 5
        echo "<link href=\"/templates/login/style.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container bootstrap snippet\">
    <div class=\"row\">
  
      <div class=\"main\">
  
        <h3>Prisijungimas</h3>
  
        <form role=\"form\">
          <div class=\"form-group\">
            <label for=\"inputUsernameEmail\">E-mail</label>
            <input type=\"email\" class=\"form-control\" id=\"email\">
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword\">Slaptažodis</label><br>
            <a class=\"pull-right\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remember_pass");
        echo "\">Pamiršau slaptažodį</a>
            <input type=\"password\" class=\"form-control\" id=\"password\">
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Prisijungti
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
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  72 => 8,  66 => 7,  58 => 5,  52 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Prisijungimas{% endblock %}
{% block includes %}
<link href=\"/templates/login/style.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}

<div class=\"container bootstrap snippet\">
    <div class=\"row\">
  
      <div class=\"main\">
  
        <h3>Prisijungimas</h3>
  
        <form role=\"form\">
          <div class=\"form-group\">
            <label for=\"inputUsernameEmail\">E-mail</label>
            <input type=\"email\" class=\"form-control\" id=\"email\">
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword\">Slaptažodis</label><br>
            <a class=\"pull-right\" href=\"{{ path(\"remember_pass\") }}\">Pamiršau slaptažodį</a>
            <input type=\"password\" class=\"form-control\" id=\"password\">
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Prisijungti
          </button>
        </form>
      
      </div>
      
    </div>
  </div>
{% endblock %}
", "login/index.html.twig", "C:\\xampp\\htdocs\\templates\\login\\index.html.twig");
    }
}
