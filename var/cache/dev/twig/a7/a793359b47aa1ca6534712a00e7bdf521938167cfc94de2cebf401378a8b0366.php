<?php

/* home/index.html.twig */
class __TwigTemplate_a04ef548cfea26aa77c77fd8fd3cfc53dccf1d49aa53db8ac2ebce5a041a6299 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<form>
    <div class=\"container-fluid bg-light \">
            <div class=\"row align-items-center justify-content-center\">
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Kaina nuo\">
                                    </div>
                                </div>
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Kaina iki\">
                                    </div>
                                </div>
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Min. Plotas\">
                                    </div>
                                </div>
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Min. Kambarių Sk.\">
                                    </div>
                                </div>
                                
                                <div class=\"col-md-2 pt-3\">
                                    <div class=\"form-group \">
                                        <select class=\"form-control\" name=\"sort\">
                                            <option value=\"asc\">A-Z</option>
                                            <option value=\"desc\">Z-A</option>
                                        </select>
                                     </div>
                                 </div>
                                <div class=\"col-md-2\">
                                   <button type=\"submit\" class=\"btn btn-primary btn-block\">Pateikti</button>
                                </div>
                            </div>
        </div></form><br>

<style>
    
    #real-estates-columns .title-realestates-columns h4 a {
        font-weight: 300;
        font-size: 18pt;
        text-decoration: none;
    }
    
    #real-estates-columns .btn.btn-default {
        border-color: #bdc3c7;
        background-color: #bdc3c7;
        border: 1px solid #bdc3c7;
    }
    
    #real-estates-columns img {
        border: 5px solid #ecf0f1;
        max-width: 100%;
        max-height: 300px;
        margin-bottom: 10px;
    }

    .panel{
        padding: 50px;
        -webkit-box-shadow: 10px 10px 96px -23px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 96px -23px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 96px -23px rgba(0,0,0,0.75);
    }

    
</style>

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<div class=\"row bootstrap snippets\" id=\"real-estates-columns\">

    
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                <center><a href=\"#\"><img src=\"https://lorempixel.com/300/300/city/2/\" class=\"img-responsive\"></a></center>
                <div class=\"title-realestates-columns\">
                    <h4><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skelbimai_home", array("id" => 1));
        echo "\"><strong>Skelbimo Pavadinimas</strong></a></h4>
                    <small class=\"badge badge-success\"><i class=\"fa fa-euro\" data-original-title=\"\" title=\"\"></i> 2,989</small>
                    <small class=\"badge badge-danger\"><i class=\"fa fa-square\" data-original-title=\"\" title=\"\"></i> 100 m<sup>2</sup></small>
                    <small class=\"badge badge-warning\"><i class=\"fa fa-home\" data-original-title=\"\" title=\"\"></i> 4 kambariai</small>
                    <hr>
                    <p>Skelbimo aprasymas</p>
                </div>
                <div class=\"footer-realestates-columns\">
                    <div class=\"row\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\" data-original-title=\"\" title=\"\">Susisiekti</a>
                        <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skelbimai_home", array("id" => 1));
        echo "\" class=\"btn btn-secondary btn-block\" data-original-title=\"\" title=\"\">Skaityti daugiau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 92,  124 => 82,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<form>
    <div class=\"container-fluid bg-light \">
            <div class=\"row align-items-center justify-content-center\">
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Kaina nuo\">
                                    </div>
                                </div>
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Kaina iki\">
                                    </div>
                                </div>
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Min. Plotas\">
                                    </div>
                                </div>
                                <div class=\"col-md-2 pt-3\">
                                   <div class=\"form-group \">
                                       <input type=\"number\" class=\"form-control\" placeholder=\"Min. Kambarių Sk.\">
                                    </div>
                                </div>
                                
                                <div class=\"col-md-2 pt-3\">
                                    <div class=\"form-group \">
                                        <select class=\"form-control\" name=\"sort\">
                                            <option value=\"asc\">A-Z</option>
                                            <option value=\"desc\">Z-A</option>
                                        </select>
                                     </div>
                                 </div>
                                <div class=\"col-md-2\">
                                   <button type=\"submit\" class=\"btn btn-primary btn-block\">Pateikti</button>
                                </div>
                            </div>
        </div></form><br>

<style>
    
    #real-estates-columns .title-realestates-columns h4 a {
        font-weight: 300;
        font-size: 18pt;
        text-decoration: none;
    }
    
    #real-estates-columns .btn.btn-default {
        border-color: #bdc3c7;
        background-color: #bdc3c7;
        border: 1px solid #bdc3c7;
    }
    
    #real-estates-columns img {
        border: 5px solid #ecf0f1;
        max-width: 100%;
        max-height: 300px;
        margin-bottom: 10px;
    }

    .panel{
        padding: 50px;
        -webkit-box-shadow: 10px 10px 96px -23px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 96px -23px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 96px -23px rgba(0,0,0,0.75);
    }

    
</style>

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<div class=\"row bootstrap snippets\" id=\"real-estates-columns\">

    
    <div class=\"col-md-4 col-sm-6 col-xs-12\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                <center><a href=\"#\"><img src=\"https://lorempixel.com/300/300/city/2/\" class=\"img-responsive\"></a></center>
                <div class=\"title-realestates-columns\">
                    <h4><a href=\"{{ path(\"skelbimai_home\", {'id': 1} )}}\"><strong>Skelbimo Pavadinimas</strong></a></h4>
                    <small class=\"badge badge-success\"><i class=\"fa fa-euro\" data-original-title=\"\" title=\"\"></i> 2,989</small>
                    <small class=\"badge badge-danger\"><i class=\"fa fa-square\" data-original-title=\"\" title=\"\"></i> 100 m<sup>2</sup></small>
                    <small class=\"badge badge-warning\"><i class=\"fa fa-home\" data-original-title=\"\" title=\"\"></i> 4 kambariai</small>
                    <hr>
                    <p>Skelbimo aprasymas</p>
                </div>
                <div class=\"footer-realestates-columns\">
                    <div class=\"row\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\" data-original-title=\"\" title=\"\">Susisiekti</a>
                        <a href=\"{{ path(\"skelbimai_home\", {'id': 1} )}}\" class=\"btn btn-secondary btn-block\" data-original-title=\"\" title=\"\">Skaityti daugiau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>
    {% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\home\\index.html.twig");
    }
}
