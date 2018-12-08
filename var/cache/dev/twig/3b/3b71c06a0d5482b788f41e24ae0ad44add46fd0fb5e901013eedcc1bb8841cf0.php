<?php

/* remember_pass/index.html.twig */
class __TwigTemplate_08353ffaf7b8161f4d7fb05ba30a11eb6e9acd8a61afaec684be2b2a66d2383b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "remember_pass/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "remember_pass/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prisiminti Slaptažodį";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_includes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includes"));

        // line 5
        echo "<link href=\"/templates/remember_pass/style.css\" rel=\"stylesheet\">
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
  
        <h3>Slaptažodžio Priminimas</h3>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 15
            echo "        <p class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "text", array()), "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <form role=\"form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remember_pass_proc");
        echo "\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"inputUsernameEmail\">E-mail</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" required>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Pateikti
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
        return "remember_pass/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  84 => 15,  80 => 14,  72 => 8,  66 => 7,  58 => 5,  52 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Prisiminti Slaptažodį{% endblock %}
{% block includes %}
<link href=\"/templates/remember_pass/style.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"container bootstrap snippet\">
    <div class=\"row\">
  
      <div class=\"main\">
  
        <h3>Slaptažodžio Priminimas</h3>
        {% for error in errors %}
        <p class=\"badge badge-danger\">{{ error.text }}</p>
      {% endfor %}
        <form role=\"form\" action=\"{{ path(\"remember_pass_proc\") }}\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"inputUsernameEmail\">E-mail</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" required>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Pateikti
          </button>
        </form>
      
      </div>
      
    </div>
  </div>
{% endblock %}
", "remember_pass/index.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\remember_pass\\index.html.twig");
    }
}
