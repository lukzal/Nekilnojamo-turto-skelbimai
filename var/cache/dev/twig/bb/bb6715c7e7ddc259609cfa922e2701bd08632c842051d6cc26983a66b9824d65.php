<?php

/* profile/edit.html.twig */
class __TwigTemplate_e5096ef3b28d2fdaf3cc02af66298b69848431ed6843a2f4999514fa10f26396 extends Twig_Template
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
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "        <p class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "text", array()), "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        <form role=\"form\" action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile_proc");
        echo "\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"email\">E-mail</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 24, $this->source); })()), "email", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"name\">Vardas</label>
            <input name=\"form[name]\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Vardas\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 28, $this->source); })()), "name", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"surname\">Pavarde</label>
            <input name=\"form[surname]\" type=\"text\" class=\"form-control\" id=\"surname\" placeholder=\"Pavarde\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 32, $this->source); })()), "surname", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"old_password\">Senas Slaptažodis</label>
            <input name=\"form[old_password]\" type=\"password\" class=\"form-control\" id=\"old_password\" placeholder=\"Senas Slaptažodis\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->source); })()), "old_password", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"new_password\">Naujas Slaptažodis</label>
            <input name=\"form[new_password]\" type=\"password\" class=\"form-control\" id=\"new_password\" placeholder=\"Naujas Slaptažodis\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 40, $this->source); })()), "new_password", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti naują slaptažodį</label>
            <input name=\"form[passwordAgain]\" type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 44, $this->source); })()), "passwordAgain", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"form-group\">
              <label for=\"code\">Asmens kodas</label>
              <input name=\"form[code]\" type=\"number\" class=\"form-control\" id=\"code\" placeholder=\"Asmens kodas\"  value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 48, $this->source); })()), "code", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
              <label for=\"phone\">Telefono nr.</label>
              <input name=\"form[phone]\" type=\"text\" class=\"form-control\" id=\"phone\" placeholder=\"Asmens kodas\"  value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 52, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">
            </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Keisti
          </button>
          <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-secondary\">Atšaukti</a>
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
        return array (  160 => 57,  152 => 52,  145 => 48,  138 => 44,  131 => 40,  124 => 36,  117 => 32,  110 => 28,  103 => 24,  97 => 21,  94 => 20,  85 => 18,  81 => 17,  72 => 10,  66 => 9,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
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
        {% for error in errors %}
        <p class=\"badge badge-danger\">{{ error.text }}</p>
      {% endfor %}

        <form role=\"form\" action=\"{{ path('edit_profile_proc') }}\" method=\"POST\">
          <div class=\"form-group\">
            <label for=\"email\">E-mail</label>
            <input name=\"form[email]\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\" value=\"{{ data.email }}\">
          </div>
          <div class=\"form-group\">
            <label for=\"name\">Vardas</label>
            <input name=\"form[name]\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Vardas\" value=\"{{ data.name }}\">
          </div>
          <div class=\"form-group\">
            <label for=\"surname\">Pavarde</label>
            <input name=\"form[surname]\" type=\"text\" class=\"form-control\" id=\"surname\" placeholder=\"Pavarde\" value=\"{{ data.surname }}\">
          </div>
          <div class=\"form-group\">
            <label for=\"old_password\">Senas Slaptažodis</label>
            <input name=\"form[old_password]\" type=\"password\" class=\"form-control\" id=\"old_password\" placeholder=\"Senas Slaptažodis\" value=\"{{ data.old_password }}\">
          </div>
          <div class=\"form-group\">
            <label for=\"new_password\">Naujas Slaptažodis</label>
            <input name=\"form[new_password]\" type=\"password\" class=\"form-control\" id=\"new_password\" placeholder=\"Naujas Slaptažodis\" value=\"{{ data.new_password }}\">
          </div>
          <div class=\"form-group\">
            <label for=\"passwordAgain\">Pakartoti naują slaptažodį</label>
            <input name=\"form[passwordAgain]\" type=\"password\" class=\"form-control\" id=\"passwordAgain\" placeholder=\"Pakartoti\" value=\"{{ data.passwordAgain }}\">
          </div>
          <div class=\"form-group\">
              <label for=\"code\">Asmens kodas</label>
              <input name=\"form[code]\" type=\"number\" class=\"form-control\" id=\"code\" placeholder=\"Asmens kodas\"  value=\"{{ data.code }}\">
            </div>
            <div class=\"form-group\">
              <label for=\"phone\">Telefono nr.</label>
              <input name=\"form[phone]\" type=\"text\" class=\"form-control\" id=\"phone\" placeholder=\"Asmens kodas\"  value=\"{{ data.phone }}\">
            </div>
          <button type=\"submit\" class=\"btn btn btn-primary\">
            Keisti
          </button>
          <a href=\"{{ path(\"home\") }}\" class=\"btn btn-secondary\">Atšaukti</a>
        </form>
      
      </div>
      
    </div>
  </div>

{% endblock %}
", "profile/edit.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\profile\\edit.html.twig");
    }
}
