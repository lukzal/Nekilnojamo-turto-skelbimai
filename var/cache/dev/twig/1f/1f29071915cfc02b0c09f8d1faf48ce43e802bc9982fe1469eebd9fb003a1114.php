<?php

/* contact/index.html.twig */
class __TwigTemplate_71e03fcecfe28c89fb53255fcb27efc583364459c59596042423d4b663367474 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1>Susisiekti</h1>

<form role=\"form\" class=\"row\">
  <div class=\"form-group col-lg-12\">
    <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Pavadinimas\">
  </div>

  <div class=\"form-group col-lg-12\">
    <textarea type=\"text\" name=\"message\" rows=\"5\" class=\"form-control textarea input-normal\" placeholder=\"Žinutė\"></textarea>
  </div>


  <div class=\"form-group col-lg-12\">
  <button type=\"submit\" class=\"btn btn-primary btn-block\">Siųsti</button>
  </div>
</form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  53 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ controller_name }}!{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Susisiekti</h1>

<form role=\"form\" class=\"row\">
  <div class=\"form-group col-lg-12\">
    <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Pavadinimas\">
  </div>

  <div class=\"form-group col-lg-12\">
    <textarea type=\"text\" name=\"message\" rows=\"5\" class=\"form-control textarea input-normal\" placeholder=\"Žinutė\"></textarea>
  </div>


  <div class=\"form-group col-lg-12\">
  <button type=\"submit\" class=\"btn btn-primary btn-block\">Siųsti</button>
  </div>
</form>
    </div>
{% endblock %}
", "contact/index.html.twig", "C:\\xampp\\htdocs\\templates\\contact\\index.html.twig");
    }
}
