<?php

/* contract/sign.html.twig */
class __TwigTemplate_b0b0845bb6523eb7fdea622c9b5257b0c0ac5e46cd0acfc76e89d65d8f03ab1d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contract/sign.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contract/sign.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pasirašyti sutartį";
        
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
        <h1>Sutarties pasirašymas</h1>
        <h6>Visa kita informacija bus pridėta automatiškai</h6><br>
    <form>
      <div class=\"form-group col-lg-12\">
        <textarea type=\"text\" name=\"message\" rows=\"5\" class=\"form-control textarea input-normal\" placeholder=\"Papildomos sutarties sąlygos\" required></textarea>
      </div>
      <div class=\"form-group col-lg-12\">
      <input type=\"checkbox\" name=\"contract\"> Sutinku pasirašyti sutartį<br>
      </div>
      <div class=\"form-group col-lg-12\">
      <button type=\"submit\" class=\"btn btn-primary btn-block\">Pasirašyti</button>
      </div>
    </form>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contract/sign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Pasirašyti sutartį{% endblock %}

{% block body %}

<div class=\"container\">
        <h1>Sutarties pasirašymas</h1>
        <h6>Visa kita informacija bus pridėta automatiškai</h6><br>
    <form>
      <div class=\"form-group col-lg-12\">
        <textarea type=\"text\" name=\"message\" rows=\"5\" class=\"form-control textarea input-normal\" placeholder=\"Papildomos sutarties sąlygos\" required></textarea>
      </div>
      <div class=\"form-group col-lg-12\">
      <input type=\"checkbox\" name=\"contract\"> Sutinku pasirašyti sutartį<br>
      </div>
      <div class=\"form-group col-lg-12\">
      <button type=\"submit\" class=\"btn btn-primary btn-block\">Pasirašyti</button>
      </div>
    </form>
        </div>

{% endblock %}
", "contract/sign.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\contract\\sign.html.twig");
    }
}
