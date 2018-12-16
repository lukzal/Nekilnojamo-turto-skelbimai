<?php

/* send_email/index.html.twig */
class __TwigTemplate_1b17dfab86e55d721090019081bc4f11c69167ad0072e5f457a9a272a081a337 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "send_email/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "send_email/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Siųsti sutarties kopiją";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_includes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includes"));

        // line 5
        echo "<link href=\"/templates/send_email/style.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container bootstrap snippet\">
    <div class=\"row\">
      <div class=\"main\">
        <h3>Sutarties kopijos siuntimas</h3>
        <form role=\"form\" action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_email_proc");
        echo "\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"inputEmail\">Jūsų elektroninio pašto adresas</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" required>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Siųsti
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
        return "send_email/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 8,  66 => 7,  58 => 5,  52 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Siųsti sutarties kopiją{% endblock %}
{% block includes %}
<link href=\"/templates/send_email/style.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"container bootstrap snippet\">
    <div class=\"row\">
      <div class=\"main\">
        <h3>Sutarties kopijos siuntimas</h3>
        <form role=\"form\" action=\"{{ path(\"send_email_proc\") }}\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"inputEmail\">Jūsų elektroninio pašto adresas</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" required>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Siųsti
          </button>
        </form>
      
      </div>
      
    </div>
  </div>
{% endblock %}
", "send_email/index.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\send_email\\index.html.twig");
    }
}
