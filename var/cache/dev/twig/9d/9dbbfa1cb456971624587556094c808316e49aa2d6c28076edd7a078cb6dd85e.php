<?php

/* add/comments_style.css */
class __TwigTemplate_c65253db32da152598d65531e1854e86709a4e2f4226c0d5d2be08e4fc15cb71 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "add/comments_style.css"));

        // line 1
        echo "

.blog-comment::before,
.blog-comment::after,
.blog-comment-form::before,
.blog-comment-form::after{
    content: \"\";
\tdisplay: table;
\tclear: both;
}



.blog-comment ul{
\tlist-style-type: none;
\tpadding: 0;
}

.blog-comment img{
\topacity: 1;
\tfilter: Alpha(opacity=100);
\t-webkit-border-radius: 4px;
\t   -moz-border-radius: 4px;
\t  \t -o-border-radius: 4px;
\t\t\tborder-radius: 4px;
}

.blog-comment img.avatar {
\tposition: relative;
\tfloat: left;
\tmargin-left: 0;
\tmargin-top: 0;
\twidth: 65px;
\theight: 65px;
}

.blog-comment .post-comments{
\tborder: 1px solid #eee;
    margin-bottom: 20px;
    margin-left: 85px;
\tmargin-right: 0px;
    padding: 10px 20px;
    position: relative;
    -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
       \t -o-border-radius: 4px;
    \t\tborder-radius: 4px;
\tbackground: #fff;
\tcolor: #6b6e80;
\tposition: relative;
}

.blog-comment .meta {
\tfont-size: 13px;
\tcolor: #aaaaaa;
\tpadding-bottom: 8px;
\tmargin-bottom: 10px !important;
\tborder-bottom: 1px solid #eee;
}

.blog-comment ul.comments ul{
\tlist-style-type: none;
\tpadding: 0;
\tmargin-left: 85px;
}

.blog-comment-form{
\tpadding-left: 15%;
\tpadding-right: 15%;
\tpadding-top: 40px;
}

.blog-comment h3,
.blog-comment-form h3{
\tmargin-bottom: 40px;
\tfont-size: 26px;
\tline-height: 30px;
\tfont-weight: 800;
}";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "add/comments_style.css";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

.blog-comment::before,
.blog-comment::after,
.blog-comment-form::before,
.blog-comment-form::after{
    content: \"\";
\tdisplay: table;
\tclear: both;
}



.blog-comment ul{
\tlist-style-type: none;
\tpadding: 0;
}

.blog-comment img{
\topacity: 1;
\tfilter: Alpha(opacity=100);
\t-webkit-border-radius: 4px;
\t   -moz-border-radius: 4px;
\t  \t -o-border-radius: 4px;
\t\t\tborder-radius: 4px;
}

.blog-comment img.avatar {
\tposition: relative;
\tfloat: left;
\tmargin-left: 0;
\tmargin-top: 0;
\twidth: 65px;
\theight: 65px;
}

.blog-comment .post-comments{
\tborder: 1px solid #eee;
    margin-bottom: 20px;
    margin-left: 85px;
\tmargin-right: 0px;
    padding: 10px 20px;
    position: relative;
    -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
       \t -o-border-radius: 4px;
    \t\tborder-radius: 4px;
\tbackground: #fff;
\tcolor: #6b6e80;
\tposition: relative;
}

.blog-comment .meta {
\tfont-size: 13px;
\tcolor: #aaaaaa;
\tpadding-bottom: 8px;
\tmargin-bottom: 10px !important;
\tborder-bottom: 1px solid #eee;
}

.blog-comment ul.comments ul{
\tlist-style-type: none;
\tpadding: 0;
\tmargin-left: 85px;
}

.blog-comment-form{
\tpadding-left: 15%;
\tpadding-right: 15%;
\tpadding-top: 40px;
}

.blog-comment h3,
.blog-comment-form h3{
\tmargin-bottom: 40px;
\tfont-size: 26px;
\tline-height: 30px;
\tfont-weight: 800;
}", "add/comments_style.css", "C:\\xampp\\htdocs\\templates\\add\\comments_style.css");
    }
}
