<?php

/* admin_panel/users.html.twig */
class __TwigTemplate_31e657af0fc6e5c4ece72781073d49ef1e464e383427a77f6cdc710c1ea8d8e5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin_panel/users.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_panel/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administratoriaus Panele";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .form-control-borderless {
        border: none;
    }
    
    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

</style>
<link href=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Contents/bootstrap-sortable.css\" rel=\"stylesheet\" type=\"text/css\">
<div class=\"container\">
    <br/>
\t<div class=\"row justify-content-center\">
                        <div class=\"col-12 col-md-8 col-lg-8\">
                            <form class=\"card card-sm\">
                                <div class=\"card-body row no-gutters align-items-center\">
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-search h4 text-body\"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col\">
                                        <input class=\"form-control form-control-lg form-control-borderless\" type=\"search\" placeholder=\"Ieškoti vartotojų\">
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col-auto\">
                                        <button class=\"btn btn-lg btn-success\" type=\"submit\">Ieškoti</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
<br>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Vart. ID</th><th>Vart. Vardas</th><th>Vart. El. Paštas</th><th>Tipas</th><th>Būsena</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>varpav</td>
                    <td>avarpav@gmail.com</td>
                    <td>Paprastas vart.</td>
                    <td>Neužblokuotas</td>
                    <td><button class=\"btn btn-primary btn-sm btn-block\">Šalinti</button>
                        <button class=\"btn btn-primary btn-sm btn-block\">Blokuoti / Atblokuoti</button>
                        <button class=\"btn btn-primary btn-sm btn-block\">Keisti tipą</button></td>
                </tr>
                <tr>
                        <td>1234</td>
                        <td>varpaav</td>
                        <td>avarpav@gmail.com</td>
                        <td>Paprastas vart.</td>
                        <td>Neužblokuotas</td>
                        <td><button class=\"btn btn-primary btn-sm btn-block\">Šalinti</button>
                            <button class=\"btn btn-primary btn-sm btn-block\">Blokuoti / Atblokuoti</button>
                            <button class=\"btn btn-primary btn-sm btn-block\">Keisti tipą</button></td>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script> 
<script src=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Scripts/bootstrap-sortable.js\"></script> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin_panel/users.html.twig";
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

{% block title %}Administratoriaus Panele{% endblock %}

{% block body %}
<style>
    .form-control-borderless {
        border: none;
    }
    
    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

</style>
<link href=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Contents/bootstrap-sortable.css\" rel=\"stylesheet\" type=\"text/css\">
<div class=\"container\">
    <br/>
\t<div class=\"row justify-content-center\">
                        <div class=\"col-12 col-md-8 col-lg-8\">
                            <form class=\"card card-sm\">
                                <div class=\"card-body row no-gutters align-items-center\">
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-search h4 text-body\"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col\">
                                        <input class=\"form-control form-control-lg form-control-borderless\" type=\"search\" placeholder=\"Ieškoti vartotojų\">
                                    </div>
                                    <!--end of col-->
                                    <div class=\"col-auto\">
                                        <button class=\"btn btn-lg btn-success\" type=\"submit\">Ieškoti</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
<br>
<div class=\"container\">
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Vart. ID</th><th>Vart. Vardas</th><th>Vart. El. Paštas</th><th>Tipas</th><th>Būsena</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>varpav</td>
                    <td>avarpav@gmail.com</td>
                    <td>Paprastas vart.</td>
                    <td>Neužblokuotas</td>
                    <td><button class=\"btn btn-primary btn-sm btn-block\">Šalinti</button>
                        <button class=\"btn btn-primary btn-sm btn-block\">Blokuoti / Atblokuoti</button>
                        <button class=\"btn btn-primary btn-sm btn-block\">Keisti tipą</button></td>
                </tr>
                <tr>
                        <td>1234</td>
                        <td>varpaav</td>
                        <td>avarpav@gmail.com</td>
                        <td>Paprastas vart.</td>
                        <td>Neužblokuotas</td>
                        <td><button class=\"btn btn-primary btn-sm btn-block\">Šalinti</button>
                            <button class=\"btn btn-primary btn-sm btn-block\">Blokuoti / Atblokuoti</button>
                            <button class=\"btn btn-primary btn-sm btn-block\">Keisti tipą</button></td>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script> 
<script src=\"https://www.jqueryscript.net/demo/jQuery-Plugin-For-Sortable-Bootstrap-Tables-Bootstrap-Sortable/Scripts/bootstrap-sortable.js\"></script> 

{% endblock %}
", "admin_panel/users.html.twig", "C:\\xampp\\htdocs\\templates\\admin_panel\\users.html.twig");
    }
}
