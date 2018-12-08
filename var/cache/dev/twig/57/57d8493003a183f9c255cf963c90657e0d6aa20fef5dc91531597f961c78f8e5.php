<?php

/* registration/index.html.twig */
class __TwigTemplate_07db56d8f307049166105d22bee8db5c6a13423cb7adc65b797c91b431b92c8d extends Twig_Template
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
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 17
            echo "          <p class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "text", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        if ((isset($context["data"]) || array_key_exists("data", $context))) {
            // line 20
            echo "        <form role=\"form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"username\">Vartotojo vardas</label>
            <input name=\"form[username]\" type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Vartotojo vardas\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 23, $this->source); })()), "username", array()), "html", null, true);
            echo "\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"email\">E-mail</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 27, $this->source); })()), "email", array()), "html", null, true);
            echo "\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"name\">Vardas</label>
            <input name=\"form[name]\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Vardas\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 31, $this->source); })()), "name", array()), "html", null, true);
            echo "\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"surname\">Pavarde</label>
            <input name=\"form[surname]\" type=\"text\" class=\"form-control\" id=\"surname\" placeholder=\"Pavarde\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "surname", array()), "html", null, true);
            echo "\" required >
          </div>
          <div class=\"form-group\">
            <label for=\"password\">Slaptažodis</label>
            <input name=\"form[password]\" type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Slaptažodis\"  value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 39, $this->source); })()), "password", array()), "html", null, true);
            echo "\" required minlength=4>
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti slaptažodį</label>
            <input name=\"form[password_again]\" type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\"  value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 43, $this->source); })()), "password", array()), "html", null, true);
            echo "\" required minlength=4>
          </div>
          <div class=\"form-group\">
            <label for=\"code\">Asmens kodas</label>
            <input name=\"form[code]\" type=\"number\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Asmens kodas\" min=\"10000000000\" max=\"99999999999\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 47, $this->source); })()), "code", array()), "html", null, true);
            echo "\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"phone\">Telefono nr.</label>
            <input name=\"form[phone]\" type=\"tel\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Asmens kodas\"  value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 51, $this->source); })()), "phone", array()), "html", null, true);
            echo "\" required minlength=8>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Registruotis
          </button>
        </form>
        ";
        }
        // line 58
        echo "      </div>
      
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
        return array (  163 => 58,  153 => 51,  146 => 47,  139 => 43,  132 => 39,  125 => 35,  118 => 31,  111 => 27,  104 => 23,  97 => 20,  94 => 19,  85 => 17,  81 => 16,  72 => 9,  66 => 8,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
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
        {% for error in errors %}
          <p class=\"badge badge-danger\">{{ error.text }}</p>
        {% endfor %}
        {% if data is defined %}
        <form role=\"form\" action=\"{{ path('register') }}\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"username\">Vartotojo vardas</label>
            <input name=\"form[username]\" type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Vartotojo vardas\" value=\"{{ data.username }}\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"email\">E-mail</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\" value=\"{{ data.email }}\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"name\">Vardas</label>
            <input name=\"form[name]\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Vardas\" value=\"{{ data.name }}\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"surname\">Pavarde</label>
            <input name=\"form[surname]\" type=\"text\" class=\"form-control\" id=\"surname\" placeholder=\"Pavarde\" value=\"{{ data.surname }}\" required >
          </div>
          <div class=\"form-group\">
            <label for=\"password\">Slaptažodis</label>
            <input name=\"form[password]\" type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Slaptažodis\"  value=\"{{ data.password }}\" required minlength=4>
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti slaptažodį</label>
            <input name=\"form[password_again]\" type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\"  value=\"{{ data.password }}\" required minlength=4>
          </div>
          <div class=\"form-group\">
            <label for=\"code\">Asmens kodas</label>
            <input name=\"form[code]\" type=\"number\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Asmens kodas\" min=\"10000000000\" max=\"99999999999\" value=\"{{ data.code }}\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"phone\">Telefono nr.</label>
            <input name=\"form[phone]\" type=\"tel\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Asmens kodas\"  value=\"{{ data.phone }}\" required minlength=8>
          </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Registruotis
          </button>
        </form>
        {% endif %}
      </div>
      
    </div>
  </div>
{% endblock %}
", "registration/index.html.twig", "C:\\xampp\\htdocs\\templates\\registration\\index.html.twig");
    }
}
