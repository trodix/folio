<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a105d95373e0535c3add33e1b5c2289f621ed330c6c14a68f94f43c74933b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a105d95373e0535c3add33e1b5c2289f621ed330c6c14a68f94f43c74933b8b->enter($__internal_8a105d95373e0535c3add33e1b5c2289f621ed330c6c14a68f94f43c74933b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_29e0c5cd4ee22da34cb5152b79145f104b568019d6410138579b27b676be48b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e0c5cd4ee22da34cb5152b79145f104b568019d6410138579b27b676be48b7->enter($__internal_29e0c5cd4ee22da34cb5152b79145f104b568019d6410138579b27b676be48b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t\t<meta charset=\"UTF-8\" />
\t\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-primary\">
\t\t\t<div class=\"container\">
\t\t\t  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t    <span class=\"navbar-toggler-icon\"></span>
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"/\">Sébastien Vallet</a>
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t    <ul class=\"navbar-nav\">
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" href=\"/\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          <span class=\"fa fa-graduation-cap\"></span> Mes compétences
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"/ppe/1\">PPE1</a>
\t\t\t          <a class=\"dropdown-item\" href=\"/ppe/2\">PPE2</a>
\t\t\t          <a class=\"dropdown-item\" href=\"/ppe/3\">PPE3</a>
\t\t\t          <a class=\"dropdown-item\" href=\"/grille\">Grille de compétences</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          <span class=\"fa fa-briefcase\"></span> Mes stages
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Première année</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Dexième année</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t\t    <li class=\"nav-item\">
\t\t\t       \t<a class=\"nav-link\" href=\"#\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
\t\t\t      </li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t       \t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-book\"></span> Veille téchnologique</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item\">
\t\t\t        <a class=\"nav-link\" href=\"#\"><span class=\"fa fa-envelope\"></span> Contact</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          <span class=\"fa fa-cog\"></span>
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Administration</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t    </ul>
\t\t\t  </div>
\t\t\t</div>
\t\t</nav>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "                </div>
            </div>
        </div>

        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>
";
        
        $__internal_8a105d95373e0535c3add33e1b5c2289f621ed330c6c14a68f94f43c74933b8b->leave($__internal_8a105d95373e0535c3add33e1b5c2289f621ed330c6c14a68f94f43c74933b8b_prof);

        
        $__internal_29e0c5cd4ee22da34cb5152b79145f104b568019d6410138579b27b676be48b7->leave($__internal_29e0c5cd4ee22da34cb5152b79145f104b568019d6410138579b27b676be48b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa33fd3c62a5354e97340fa0d9bbf53d90e635ac5cbc0e88fcd51913b84568aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa33fd3c62a5354e97340fa0d9bbf53d90e635ac5cbc0e88fcd51913b84568aa->enter($__internal_fa33fd3c62a5354e97340fa0d9bbf53d90e635ac5cbc0e88fcd51913b84568aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05317c3bf10ec1e6e76526cf8b919c7f34d1b2beb0fe74a46c946d9dbc2b671d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05317c3bf10ec1e6e76526cf8b919c7f34d1b2beb0fe74a46c946d9dbc2b671d->enter($__internal_05317c3bf10ec1e6e76526cf8b919c7f34d1b2beb0fe74a46c946d9dbc2b671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_05317c3bf10ec1e6e76526cf8b919c7f34d1b2beb0fe74a46c946d9dbc2b671d->leave($__internal_05317c3bf10ec1e6e76526cf8b919c7f34d1b2beb0fe74a46c946d9dbc2b671d_prof);

        
        $__internal_fa33fd3c62a5354e97340fa0d9bbf53d90e635ac5cbc0e88fcd51913b84568aa->leave($__internal_fa33fd3c62a5354e97340fa0d9bbf53d90e635ac5cbc0e88fcd51913b84568aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6440da1c3425017e20e306f340355a5f80585f7aa18edc72dc0182aa1078823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6440da1c3425017e20e306f340355a5f80585f7aa18edc72dc0182aa1078823->enter($__internal_d6440da1c3425017e20e306f340355a5f80585f7aa18edc72dc0182aa1078823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07577379d1a1dbb089b485ac671184255b4ba39d3d94547e684882f788f3e889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07577379d1a1dbb089b485ac671184255b4ba39d3d94547e684882f788f3e889->enter($__internal_07577379d1a1dbb089b485ac671184255b4ba39d3d94547e684882f788f3e889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t\t";
        
        $__internal_07577379d1a1dbb089b485ac671184255b4ba39d3d94547e684882f788f3e889->leave($__internal_07577379d1a1dbb089b485ac671184255b4ba39d3d94547e684882f788f3e889_prof);

        
        $__internal_d6440da1c3425017e20e306f340355a5f80585f7aa18edc72dc0182aa1078823->leave($__internal_d6440da1c3425017e20e306f340355a5f80585f7aa18edc72dc0182aa1078823_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f2c0154fca0a2abe8f1d1fe65a3dbfd263a7cd2ed99b02aabc516ef3ca732fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2c0154fca0a2abe8f1d1fe65a3dbfd263a7cd2ed99b02aabc516ef3ca732fe->enter($__internal_1f2c0154fca0a2abe8f1d1fe65a3dbfd263a7cd2ed99b02aabc516ef3ca732fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e08d1d270c38b7a52a624307a6e343fa5fdaaf854de929b9b912604c94fdf52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08d1d270c38b7a52a624307a6e343fa5fdaaf854de929b9b912604c94fdf52e->enter($__internal_e08d1d270c38b7a52a624307a6e343fa5fdaaf854de929b9b912604c94fdf52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e08d1d270c38b7a52a624307a6e343fa5fdaaf854de929b9b912604c94fdf52e->leave($__internal_e08d1d270c38b7a52a624307a6e343fa5fdaaf854de929b9b912604c94fdf52e_prof);

        
        $__internal_1f2c0154fca0a2abe8f1d1fe65a3dbfd263a7cd2ed99b02aabc516ef3ca732fe->leave($__internal_1f2c0154fca0a2abe8f1d1fe65a3dbfd263a7cd2ed99b02aabc516ef3ca732fe_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ebb47df0a302dc77a1603a1e868ba3e370a5c583f9bf8c8e2d36d4391a351f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebb47df0a302dc77a1603a1e868ba3e370a5c583f9bf8c8e2d36d4391a351f7->enter($__internal_1ebb47df0a302dc77a1603a1e868ba3e370a5c583f9bf8c8e2d36d4391a351f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e9465da4dc13e37dc2b5c9ec9f1d37b3f746f6736b89e4b87818c099bc07ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9465da4dc13e37dc2b5c9ec9f1d37b3f746f6736b89e4b87818c099bc07ae9->enter($__internal_9e9465da4dc13e37dc2b5c9ec9f1d37b3f746f6736b89e4b87818c099bc07ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "\t\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t";
        
        $__internal_9e9465da4dc13e37dc2b5c9ec9f1d37b3f746f6736b89e4b87818c099bc07ae9->leave($__internal_9e9465da4dc13e37dc2b5c9ec9f1d37b3f746f6736b89e4b87818c099bc07ae9_prof);

        
        $__internal_1ebb47df0a302dc77a1603a1e868ba3e370a5c583f9bf8c8e2d36d4391a351f7->leave($__internal_1ebb47df0a302dc77a1603a1e868ba3e370a5c583f9bf8c8e2d36d4391a351f7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 75,  197 => 73,  188 => 72,  171 => 67,  159 => 9,  155 => 8,  150 => 7,  141 => 6,  123 => 5,  111 => 77,  109 => 72,  103 => 68,  101 => 67,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
\t\t\t<meta charset=\"UTF-8\" />
\t\t\t<title>{% block title %}Portfolio Sébastien Vallet{% endblock %}</title>
\t\t\t{% block stylesheets %}
\t\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\">
\t\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\">
\t\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
\t\t\t{% endblock %}
\t\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t\t<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-primary\">
\t\t\t<div class=\"container\">
\t\t\t  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t    <span class=\"navbar-toggler-icon\"></span>
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"/\">Sébastien Vallet</a>
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t    <ul class=\"navbar-nav\">
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" href=\"/\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          <span class=\"fa fa-graduation-cap\"></span> Mes compétences
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"/ppe/1\">PPE1</a>
\t\t\t          <a class=\"dropdown-item\" href=\"/ppe/2\">PPE2</a>
\t\t\t          <a class=\"dropdown-item\" href=\"/ppe/3\">PPE3</a>
\t\t\t          <a class=\"dropdown-item\" href=\"/grille\">Grille de compétences</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          <span class=\"fa fa-briefcase\"></span> Mes stages
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Première année</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Dexième année</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t\t    <li class=\"nav-item\">
\t\t\t       \t<a class=\"nav-link\" href=\"#\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
\t\t\t      </li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t       \t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-book\"></span> Veille téchnologique</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item\">
\t\t\t        <a class=\"nav-link\" href=\"#\"><span class=\"fa fa-envelope\"></span> Contact</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          <span class=\"fa fa-cog\"></span>
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Administration</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t    </ul>
\t\t\t  </div>
\t\t\t</div>
\t\t</nav>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>

        {% block javascripts %}
\t\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t\t\t\t{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
