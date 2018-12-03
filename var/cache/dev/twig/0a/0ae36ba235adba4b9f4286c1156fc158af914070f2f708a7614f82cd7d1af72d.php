<?php

/* registration/style.css */
class __TwigTemplate_defdae1da122d31a7dc9db435b0b3bd99080d7f7dc642d8e06ade531c55198b4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/style.css"));

        // line 1
        echo "
  .main {
    max-width: 500px;
    margin: auto auto;
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  h3 {
    text-align: center;
    line-height: 300%;
  }";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/style.css";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  .main {
    max-width: 500px;
    margin: auto auto;
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  h3 {
    text-align: center;
    line-height: 300%;
  }", "registration/style.css", "C:\\xampp\\htdocs\\templates\\registration\\style.css");
    }
}
