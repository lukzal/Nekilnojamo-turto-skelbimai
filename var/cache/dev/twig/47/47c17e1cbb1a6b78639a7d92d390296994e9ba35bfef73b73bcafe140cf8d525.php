<?php

/* profile/index.html.twig */
class __TwigTemplate_2443e433cb29dbc68e02ee74619eba9aafecfad812383483b5795386db4232b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Naudotojo Profilis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad\" >
          <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\">Vardenis Pavardenis</h3>
            </div>
            <div class=\"panel-body\">
              <div class=\"row\">
                <div class=\"col-md-3 col-lg-3 \" align=\"center\"> <img alt=\"User Pic\" src=\"http://s3.amazonaws.com/nvest/Blank_Club_Website_Avatar_Gray.jpg\" class=\"img-circle img-responsive\"> </div>

                <div class=\" col-md-9 col-lg-9 \"> 
                  <table class=\"table table-user-information\">
                    <tbody>
                        <tr>
                            <td>Vartotojo vardas</td>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 22, $this->source); })()), "username", array()), "html", null, true);
        echo "</td>
                          </tr>
                        <tr>
                            <td>Vardas</td>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 26, $this->source); })()), "name", array()), "html", null, true);
        echo "</td>
                          </tr>
                        <tr>
                            <td>Pavardė</td>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 30, $this->source); })()), "surname", array()), "html", null, true);
        echo "</td>
                          </tr>
                        <tr>
                        <td>Asmens kodas</td>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->source); })()), "code", array()), "html", null, true);
        echo "</td>
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td><a href=\"mailto:";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 38, $this->source); })()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 38, $this->source); })()), "email", array()), "html", null, true);
        echo "</a></td>
                      </tr>
                        <td>Telefono numeris</td>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 41, $this->source); })()), "phone", array()), "html", null, true);
        echo "</td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
            <center><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-primary\">Susisiekti</a></center>
            <br>
          </div>
        </div>
      </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  112 => 41,  104 => 38,  97 => 34,  90 => 30,  83 => 26,  76 => 22,  57 => 5,  51 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Naudotojo Profilis{% endblock %}
{% block body %}

<div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad\" >
          <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\">Vardenis Pavardenis</h3>
            </div>
            <div class=\"panel-body\">
              <div class=\"row\">
                <div class=\"col-md-3 col-lg-3 \" align=\"center\"> <img alt=\"User Pic\" src=\"http://s3.amazonaws.com/nvest/Blank_Club_Website_Avatar_Gray.jpg\" class=\"img-circle img-responsive\"> </div>

                <div class=\" col-md-9 col-lg-9 \"> 
                  <table class=\"table table-user-information\">
                    <tbody>
                        <tr>
                            <td>Vartotojo vardas</td>
                            <td>{{ data.username }}</td>
                          </tr>
                        <tr>
                            <td>Vardas</td>
                            <td>{{ data.name }}</td>
                          </tr>
                        <tr>
                            <td>Pavardė</td>
                            <td>{{ data.surname }}</td>
                          </tr>
                        <tr>
                        <td>Asmens kodas</td>
                        <td>{{ data.code }}</td>
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td><a href=\"mailto:{{ data.email }}\">{{ data.email }}</a></td>
                      </tr>
                        <td>Telefono numeris</td>
                        <td>{{ data.phone }}</td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
            <center><a href=\"{{ path(\"contact\") }}\" class=\"btn btn-primary\">Susisiekti</a></center>
            <br>
          </div>
        </div>
      </div>
    </div>

{% endblock %}
", "profile/index.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\profile\\index.html.twig");
    }
}
