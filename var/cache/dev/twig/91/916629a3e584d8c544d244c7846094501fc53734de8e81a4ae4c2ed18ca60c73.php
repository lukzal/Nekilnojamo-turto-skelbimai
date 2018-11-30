<?php

/* profile/index.html.twig */
class __TwigTemplate_3811a55bd4dd9326d19d9e4b068f223a27c4e053677654306c4dbf0645ab1261 extends Twig_Template
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
                            <td>varpav</td>
                          </tr>
                        <tr>
                            <td>Vardas</td>
                            <td>Vardenis</td>
                          </tr>
                        <tr>
                            <td>Pavardė</td>
                            <td>Pavardenis</td>
                          </tr>
                      <tr>
                        <td>Gimimo metai</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Lytis</td>
                        <td>Vyras</td>
                      </tr>
                        <tr>
                        <td>Adresas</td>
                        <td>Kaunas</td>
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td><a href=\"mailto:info@support.com\">info@support.com</a></td>
                      </tr>
                        <td>Telefono numeris</td>
                        <td>+37012345678
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
            <center><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-primary\">Susisiekti</a>
              <a href=\"#\" class=\"btn btn-primary\">Pasirašyti sutarti</a></center>
            <br>
            <center>
                 <div class=\"panel-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Naikinti Naudotoją</a>
                        <a href=\"#\" class=\"btn btn-primary\">Blokuoti Naudotoją</a>
                        </span>
                    </div>
                </center>
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
        return array (  117 => 63,  57 => 5,  51 => 4,  39 => 3,  15 => 1,);
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
                            <td>varpav</td>
                          </tr>
                        <tr>
                            <td>Vardas</td>
                            <td>Vardenis</td>
                          </tr>
                        <tr>
                            <td>Pavardė</td>
                            <td>Pavardenis</td>
                          </tr>
                      <tr>
                        <td>Gimimo metai</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Lytis</td>
                        <td>Vyras</td>
                      </tr>
                        <tr>
                        <td>Adresas</td>
                        <td>Kaunas</td>
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td><a href=\"mailto:info@support.com\">info@support.com</a></td>
                      </tr>
                        <td>Telefono numeris</td>
                        <td>+37012345678
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
            <center><a href=\"{{ path(\"contact\") }}\" class=\"btn btn-primary\">Susisiekti</a>
              <a href=\"#\" class=\"btn btn-primary\">Pasirašyti sutarti</a></center>
            <br>
            <center>
                 <div class=\"panel-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Naikinti Naudotoją</a>
                        <a href=\"#\" class=\"btn btn-primary\">Blokuoti Naudotoją</a>
                        </span>
                    </div>
                </center>
          </div>
        </div>
      </div>
    </div>

{% endblock %}
", "profile/index.html.twig", "C:\\xampp\\htdocs\\templates\\profile\\index.html.twig");
    }
}
