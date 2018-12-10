<?php

/* add/index.html.twig */
class __TwigTemplate_e2d1cb8b4f7d2db8f39f10fcba14ddc7025794add28b7e188b01bcb483274384 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "add/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'images' => array($this, 'block_images'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Skelbimas ";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<style>
    .galleria{ max-width: 600px; height: 600px; background: #fff }
</style>

<link href=\"/templates/add/style.css\" rel=\"stylesheet\">
<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<div class=\"estate\">
<div class=\"container bootstrap snippet\">
    <div class=\"row\">
        <div class=\"col-md-12\">
       <div class=\"row\">
            <div class=\"col-md-7\">
                <div class=\"product-gallery\">
                    <div class=\"galleria\">
                        ";
        // line 24
        $this->displayBlock('images', $context, $blocks);
        // line 29
        echo "                    </div>
                    <script>
                        (function() { 
                                Galleria.loadTheme('/templates/js/galleria/themes/classic/galleria.classic.min.js');
                                Galleria.run('.galleria');
                            }());
                    </script>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"product-info\">
                    <h3>Skelbimo Pavadinimas</h3>
                    <span><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", array("id" => 14));
        echo "\">Vardas pavarde</a></span>
                    <div class=\"wp-block property list no-border\">
                        <div class=\"wp-block-content clearfix\">
                            <p class=\"description mb-15\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</p>
                            <span class=\"pull-left\">
                                <span class=\"price\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["kaina"]) || array_key_exists("kaina", $context) ? $context["kaina"] : (function () { throw new Twig_Error_Runtime('Variable "kaina" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " €</span> 
                                <span class=\"period\">per mėnesį</span>
                            </span>
                        </div>
                        <div class=\"wp-block-footer style2 mt-15\">
                            <ul class=\"aux-info\">
                                <li><i class=\"fa fa-building\"></i>2300 m<sup>2</sup></li>
                                <li><i class=\"fa fa-user\"></i> 5 Kambariai</li>
                                <li><i class=\"fa fa-tint\"></i> 2 Tuoletai</li>
                                <li><i class=\"fa fa-car\"></i> 3 Garažai</li>
                            </ul>
                        </div>
                    </div>
                    <span class=\"clearfix\"></span> 
                    
                </div>
            </div>
        </div>

        <!-- PROPERTY DESCRIPTION -->
        <br>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"tabs-framed boxed\">
                    <ul class=\"tabs clearfix\">
                        <center><h4 style=\"margin-top: 10px;\">Papildoma Informacija</h4></center>
                    </ul>

                    <div class=\"tab-content\">
                            <div class=\"tab-body\">
                                <div class=\"section-title-wr\">
                                    <h5 class=\"section-title left\">Aprašymas</h5>
                                </div>
                                <p>
                                        ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "
                                </p>

                                <div class=\"section-title-wr\">
                                    <h5 class=\"section-title left\">Papildomi Duomenys</h5>
                                </div>
                                <table class=\"table table-bordered table-striped table-hover table-responsive\">
                                    <tbody>
                                        <tr>
                                            <td><strong>Namo numeris:</strong> 1 </td>
                                            <td><strong>Buto numeris:</strong> 2 </td>
                                            <td><strong>Plotas:</strong> 230 m<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kambarių sk.:</strong> 5</td>
                                            <td><strong>Metai:</strong> 4</td>
                                            <td><strong>Pastato tipas:</strong> mūrinis </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Šildymas:</strong> Dujinis </td>
                                        </tr>
                                    </tbody>
                                </table>
                            

                            <h5 class=\"section-title left\">Komentarai</h5>
                            <link href=\"/templates/add/comments_style.css\" rel=\"stylesheet\">
                            <div class=\"container bootstrap snippet\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"blog-comment\">
                                            <ul class=\"comments\">
                                            <li class=\"clearfix\">
                                              <img src=\"https://bootdey.com/img/Content/user_1.jpg\" class=\"avatar\" alt=\"\">    
                                              <form>
                                              <div class=\"post-comments\"> 
                                                  <p class=\"meta\">2018-08-15 <a href=\"#\">Jonas</a> rašė : <i class=\"pull-right\">Reitingas: 0 
                                                        <button class=\"btn-secondary\" type=\"submit\" name=\"up\"><small>+</small></button><button class=\"btn-secondary\" type=\"submit\" name=\"down\"><small>-</small></button></i></p>
                                                    
                                                </p>
                                                  <p>
                                                    Komentaras
                                                  </p>
                                                  <button onclick=\"location.href = '/public/comment/edit';\" class=\"btn btn-sm\" name=\"edit_com\" type=\"submit\">Redaguoti</button>
                                              </div>
                                            </form>
                                            </li>
                                            <li class=\"clearfix\">
                                              <img src=\"https://bootdey.com/img/Content/user_2.jpg\" class=\"avatar\" alt=\"\">
                                              <form>
                                              <div class=\"post-comments\">
                                                  <p class=\"meta\">2018-09-05 <a href=\"#\">Maryte</a> rašė : <i class=\"pull-right\">Reitingas: 0 
                                                      <button class=\"btn-secondary\" type=\"submit\" name=\"up\"><small>+</small></button><button class=\"btn-secondary\" type=\"submit\" name=\"down\"><small>-</small></button></i></p>
                                                  <p>
                                                    Komentaras
                                                  </p>
                                                  
                                                  <button onclick=\"confirm('Pranešti apie netinkamą komentarą?')\" class=\"btn btn-sm\"  name=\"edit_com\" type=\"submit\">Pranešti</button>
                                              </div> 
                                            </form>
                                            </li>
                                            <center>
                                            <a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment");
        echo "\" class=\"btn btn-primary btn-sm\">Naujas komentaras</a>
                                            
                                            <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign_contracts");
        echo "\" class=\"btn btn-primary btn-sm\">Pasirašyti sutarti</a>
                                        </center>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
\t</div>
</div>
</div>                

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_images($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "images"));

        // line 25
        echo "                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Hopetoun_falls.jpg/1280px-Hopetoun_falls.jpg\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Bachalpsee_reflection.jpg/1280px-Bachalpsee_reflection.jpg\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/5/57/Galunggung.jpg\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "add/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 25,  247 => 24,  222 => 144,  217 => 142,  152 => 80,  115 => 46,  110 => 44,  104 => 41,  90 => 29,  88 => 24,  71 => 9,  65 => 8,  54 => 5,  41 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Skelbimas {{ id }}{% endblock %}

{% block stylesheets %}
{% endblock %}

{% block body %}

<style>
    .galleria{ max-width: 600px; height: 600px; background: #fff }
</style>

<link href=\"/templates/add/style.css\" rel=\"stylesheet\">
<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<div class=\"estate\">
<div class=\"container bootstrap snippet\">
    <div class=\"row\">
        <div class=\"col-md-12\">
       <div class=\"row\">
            <div class=\"col-md-7\">
                <div class=\"product-gallery\">
                    <div class=\"galleria\">
                        {% block images %}
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Hopetoun_falls.jpg/1280px-Hopetoun_falls.jpg\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Bachalpsee_reflection.jpg/1280px-Bachalpsee_reflection.jpg\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/5/57/Galunggung.jpg\">
                        {% endblock %}
                    </div>
                    <script>
                        (function() { 
                                Galleria.loadTheme('/templates/js/galleria/themes/classic/galleria.classic.min.js');
                                Galleria.run('.galleria');
                            }());
                    </script>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"product-info\">
                    <h3>Skelbimo Pavadinimas</h3>
                    <span><a href=\"{{ path(\"profile\", { 'id': 14 }) }}\">Vardas pavarde</a></span>
                    <div class=\"wp-block property list no-border\">
                        <div class=\"wp-block-content clearfix\">
                            <p class=\"description mb-15\">{{ description }}</p>
                            <span class=\"pull-left\">
                                <span class=\"price\">{{ kaina }} €</span> 
                                <span class=\"period\">per mėnesį</span>
                            </span>
                        </div>
                        <div class=\"wp-block-footer style2 mt-15\">
                            <ul class=\"aux-info\">
                                <li><i class=\"fa fa-building\"></i>2300 m<sup>2</sup></li>
                                <li><i class=\"fa fa-user\"></i> 5 Kambariai</li>
                                <li><i class=\"fa fa-tint\"></i> 2 Tuoletai</li>
                                <li><i class=\"fa fa-car\"></i> 3 Garažai</li>
                            </ul>
                        </div>
                    </div>
                    <span class=\"clearfix\"></span> 
                    
                </div>
            </div>
        </div>

        <!-- PROPERTY DESCRIPTION -->
        <br>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"tabs-framed boxed\">
                    <ul class=\"tabs clearfix\">
                        <center><h4 style=\"margin-top: 10px;\">Papildoma Informacija</h4></center>
                    </ul>

                    <div class=\"tab-content\">
                            <div class=\"tab-body\">
                                <div class=\"section-title-wr\">
                                    <h5 class=\"section-title left\">Aprašymas</h5>
                                </div>
                                <p>
                                        {{ description }}
                                </p>

                                <div class=\"section-title-wr\">
                                    <h5 class=\"section-title left\">Papildomi Duomenys</h5>
                                </div>
                                <table class=\"table table-bordered table-striped table-hover table-responsive\">
                                    <tbody>
                                        <tr>
                                            <td><strong>Namo numeris:</strong> 1 </td>
                                            <td><strong>Buto numeris:</strong> 2 </td>
                                            <td><strong>Plotas:</strong> 230 m<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kambarių sk.:</strong> 5</td>
                                            <td><strong>Metai:</strong> 4</td>
                                            <td><strong>Pastato tipas:</strong> mūrinis </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Šildymas:</strong> Dujinis </td>
                                        </tr>
                                    </tbody>
                                </table>
                            

                            <h5 class=\"section-title left\">Komentarai</h5>
                            <link href=\"/templates/add/comments_style.css\" rel=\"stylesheet\">
                            <div class=\"container bootstrap snippet\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"blog-comment\">
                                            <ul class=\"comments\">
                                            <li class=\"clearfix\">
                                              <img src=\"https://bootdey.com/img/Content/user_1.jpg\" class=\"avatar\" alt=\"\">    
                                              <form>
                                              <div class=\"post-comments\"> 
                                                  <p class=\"meta\">2018-08-15 <a href=\"#\">Jonas</a> rašė : <i class=\"pull-right\">Reitingas: 0 
                                                        <button class=\"btn-secondary\" type=\"submit\" name=\"up\"><small>+</small></button><button class=\"btn-secondary\" type=\"submit\" name=\"down\"><small>-</small></button></i></p>
                                                    
                                                </p>
                                                  <p>
                                                    Komentaras
                                                  </p>
                                                  <button onclick=\"location.href = '/public/comment/edit';\" class=\"btn btn-sm\" name=\"edit_com\" type=\"submit\">Redaguoti</button>
                                              </div>
                                            </form>
                                            </li>
                                            <li class=\"clearfix\">
                                              <img src=\"https://bootdey.com/img/Content/user_2.jpg\" class=\"avatar\" alt=\"\">
                                              <form>
                                              <div class=\"post-comments\">
                                                  <p class=\"meta\">2018-09-05 <a href=\"#\">Maryte</a> rašė : <i class=\"pull-right\">Reitingas: 0 
                                                      <button class=\"btn-secondary\" type=\"submit\" name=\"up\"><small>+</small></button><button class=\"btn-secondary\" type=\"submit\" name=\"down\"><small>-</small></button></i></p>
                                                  <p>
                                                    Komentaras
                                                  </p>
                                                  
                                                  <button onclick=\"confirm('Pranešti apie netinkamą komentarą?')\" class=\"btn btn-sm\"  name=\"edit_com\" type=\"submit\">Pranešti</button>
                                              </div> 
                                            </form>
                                            </li>
                                            <center>
                                            <a href=\"{{ path(\"comment\") }}\" class=\"btn btn-primary btn-sm\">Naujas komentaras</a>
                                            
                                            <a href=\"{{ path(\"sign_contracts\") }}\" class=\"btn btn-primary btn-sm\">Pasirašyti sutarti</a>
                                        </center>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
\t</div>
</div>
</div>                

{% endblock %}
", "add/index.html.twig", "C:\\xampp\\htdocs\\Nekilnojamo-turto-skelbimai\\templates\\add\\index.html.twig");
    }
}
