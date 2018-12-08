<?php

/* admin_panel/users.html.twig */
class __TwigTemplate_741ba28bc913a1144058fc5ed8f8e0f4988ee240e8d130fef32c38ee556293fa extends Twig_Template
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

<br>
<div class=\"container\">
    <h3>Administruoti Naudotojus</h3><br>

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 25
            echo "    <p class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "text", array()), "html", null, true);
            echo "</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Vart. ID</th><th>Vart. Vardas</th><th>Vart. El. Paštas</th><th>Rolė</th><th>Būsena</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "                <tr>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "banned", array()), "html", null, true);
            echo "</td>
                    <td><form action=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[user_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Šalinti</button></form>
                        <form action=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ban_user");
            echo "\" method=\"POST\"><input type=\"hidden\" name=\"form[user_id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Blokuoti / Atblokuoti</button></form>
                        <form action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_type");
            echo "\" method=\"POST\">  
                        <input type=\"hidden\" name=\"form[user_id]\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Keisti tipą</button>
                        <center><select class=\"browser-default custom-select\" name=\"form[user_type]\">
                                <option value=\"1\">Paprastas</option>
                                <option value=\"2\">Moderatorius</option>
                                <option value=\"3\">Administratorius</option>
                            </select></center>
                    </td></form>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </tbody>
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
        return array (  160 => 56,  144 => 46,  140 => 45,  133 => 43,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  103 => 35,  99 => 34,  90 => 27,  81 => 25,  77 => 24,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
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

<br>
<div class=\"container\">
    <h3>Administruoti Naudotojus</h3><br>

    {% for error in errors %}
    <p class=\"badge badge-danger\">{{ error.text }}</p>
  {% endfor %}
\t<div class=\"row\">
        <div class=\"table-responsive col-md-12\">
        <table id=\"sort2\" class=\"grid table table-bordered sortable\">
            <thead>
                <tr><th>Vart. ID</th><th>Vart. Vardas</th><th>Vart. El. Paštas</th><th>Rolė</th><th>Būsena</th><th>Veiksmai</th></tr>
            </thead>
            <tbody>
                {% for user in users %}
                <tr>
                    <td>{{ user.id }}</td>
                    <td>{{ user.username }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.type }}</td>
                    <td>{{ user.banned }}</td>
                    <td><form action=\"{{ path(\"delete_user\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[user_id]\" value=\"{{ user.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\" type=\"submit\">Šalinti</button></form>
                        <form action=\"{{ path(\"ban_user\") }}\" method=\"POST\"><input type=\"hidden\" name=\"form[user_id]\" value=\"{{ user.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Blokuoti / Atblokuoti</button></form>
                        <form action=\"{{ path(\"user_type\") }}\" method=\"POST\">  
                        <input type=\"hidden\" name=\"form[user_id]\" value=\"{{ user.id }}\">
                        <button class=\"btn btn-primary btn-sm btn-block\">Keisti tipą</button>
                        <center><select class=\"browser-default custom-select\" name=\"form[user_type]\">
                                <option value=\"1\">Paprastas</option>
                                <option value=\"2\">Moderatorius</option>
                                <option value=\"3\">Administratorius</option>
                            </select></center>
                    </td></form>
                </tr>
                {% endfor %}
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
