<?php

/* add/new.html.twig */
class __TwigTemplate_02d01697b565b3e938a487b2bef2dd74275da65c459194b70bfe03178303a416 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "add/new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Naujas Skelbimas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<center>
<div class=\"row\">
    <div class=\"col centered\">
<form class=\"form-horizontal\">
    <fieldset>
    
    <h2>Naujas Skelbimas</h2>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_url\">Pavadinimas</label>  
      <div class=\"col-md-4\">
      <input id=\"article_url\" name=\"article_url\" type=\"text\" placeholder=\"Pavadinimas\" class=\"form-control input-md\" required>
        
      </div>
    </div>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_title\">Kaina</label>  
      <div class=\"col-md-4\">
      <input id=\"article_title\" name=\"article_title\" type=\"number\" placeholder=\"Kaina\" class=\"form-control input-md\" required>
        
      </div>
    </div>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_snippet\">Būsto informacija</label>  
      <div class=\"col-md-4\">
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Plotas\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Kambarių skaičius\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"number\" placeholder=\"Metai\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Pastato tipas\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Šildymas\" class=\"form-control input-md\" required>
      </div>
    </div>
    
    ";
        // line 47
        echo "    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"source_description\">Aprašymas</label>
      <div class=\"col-md-4\">                     
        <textarea class=\"form-control\" id=\"source_description\" name=\"source_description\" required></textarea>
      </div>
    </div>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_categories\">Kategorija</label>
      <div class=\"col-md-4\">
        <select id=\"article_categories\" name=\"article_categories\" class=\"form-control\">
            <option value=\"\">Nuoma</option>
            <option value=\"\">Pardavimas</option>
        </select>
      </div>
    </div>
    
    <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Pateikti</button>
    
    </fieldset>
    </form>
</div>
</div>
</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "add/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Naujas Skelbimas{% endblock %}

{% block body %}
<center>
<div class=\"row\">
    <div class=\"col centered\">
<form class=\"form-horizontal\">
    <fieldset>
    
    <h2>Naujas Skelbimas</h2>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_url\">Pavadinimas</label>  
      <div class=\"col-md-4\">
      <input id=\"article_url\" name=\"article_url\" type=\"text\" placeholder=\"Pavadinimas\" class=\"form-control input-md\" required>
        
      </div>
    </div>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_title\">Kaina</label>  
      <div class=\"col-md-4\">
      <input id=\"article_title\" name=\"article_title\" type=\"number\" placeholder=\"Kaina\" class=\"form-control input-md\" required>
        
      </div>
    </div>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_snippet\">Būsto informacija</label>  
      <div class=\"col-md-4\">
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Plotas\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Kambarių skaičius\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"number\" placeholder=\"Metai\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Pastato tipas\" class=\"form-control input-md\" required>
      <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Šildymas\" class=\"form-control input-md\" required>
      </div>
    </div>
    
    {# <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"source_image\">Nuotraukos</label>
      <div class=\"col-md-4\">
        <input id=\"source_image\" name=\"source_image\" class=\"input-file\" type=\"file\" multiple>
      </div>
    </div> #}
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"source_description\">Aprašymas</label>
      <div class=\"col-md-4\">                     
        <textarea class=\"form-control\" id=\"source_description\" name=\"source_description\" required></textarea>
      </div>
    </div>
    
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"article_categories\">Kategorija</label>
      <div class=\"col-md-4\">
        <select id=\"article_categories\" name=\"article_categories\" class=\"form-control\">
            <option value=\"\">Nuoma</option>
            <option value=\"\">Pardavimas</option>
        </select>
      </div>
    </div>
    
    <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">Pateikti</button>
    
    </fieldset>
    </form>
</div>
</div>
</center>
{% endblock %}
", "add/new.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\add\\new.html.twig");
    }
}
