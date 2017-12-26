<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
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
        $__internal_b5beebecc10eb17381a0ebe4567d95870bf62e6998da5af61177ff9aa0738658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5beebecc10eb17381a0ebe4567d95870bf62e6998da5af61177ff9aa0738658->enter($__internal_b5beebecc10eb17381a0ebe4567d95870bf62e6998da5af61177ff9aa0738658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b91b3e43c621970e9df74ddd4ac45f9883963e5c08536871265de5dbecbe3c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91b3e43c621970e9df74ddd4ac45f9883963e5c08536871265de5dbecbe3c23->enter($__internal_b91b3e43c621970e9df74ddd4ac45f9883963e5c08536871265de5dbecbe3c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "\t\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t\t<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-primary\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Sébastien Vallet</a>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" href=\"/\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-graduation-cap\"></span> Mes compétences
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/ppe/1\">PPE1</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/ppe/2\">PPE2</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/ppe/3\">PPE3</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">PPE4</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/stages/1\">Stage première année</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Stage deuxième année</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/grille\">Grille de compétences</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/cv\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-lightbulb-o\"></span> Veille technologique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\"><span class=\"fa fa-envelope\"></span> Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" href=\"/\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-cog\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Administration</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer class=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h3>Mes coordonnées</h3>
\t\t\t\t\t\t\t\t<p><span class=\"fa fa-phone\" aria-hidden=\"true\"></span> <strong>Mon téléphone : </strong> 06 48 89 08 16</p>
\t\t\t\t\t\t\t\t<p><span class=\"fa fa-envelope\" aria-hidden=\"true\"></span> <strong>Mon adresse email : </strong> sebastien.vallet89@gmail.com</p>
\t\t\t\t\t\t\t\t<p><span class=\"fa fa-map-marker\" aria-hidden=\"true\"></span> <strong>Ma localisation :</strong> Dijon / Auxerre</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h3>Où me trouver ?</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-social-icon btn-linkedin text-light\" href=\"https://www.linkedin.com/in/sébastien-vallet-203175131\" target=\"_blank\"><span class=\"fa fa-linkedin\"></span></a>
\t\t\t\t\t\t\t\t\t<a class=\"link-social\" href=\"https://www.linkedin.com/in/sébastien-vallet-203175131\" target=\"_blank\">Linkedin</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formContact.js"), "html", null, true);
        echo "\"></script>
        \t<script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>
";
        
        $__internal_b5beebecc10eb17381a0ebe4567d95870bf62e6998da5af61177ff9aa0738658->leave($__internal_b5beebecc10eb17381a0ebe4567d95870bf62e6998da5af61177ff9aa0738658_prof);

        
        $__internal_b91b3e43c621970e9df74ddd4ac45f9883963e5c08536871265de5dbecbe3c23->leave($__internal_b91b3e43c621970e9df74ddd4ac45f9883963e5c08536871265de5dbecbe3c23_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ca156d17ef42292caee5c97b2022b56b0668cebafc4e04a8f77ce7d29eddd33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca156d17ef42292caee5c97b2022b56b0668cebafc4e04a8f77ce7d29eddd33->enter($__internal_4ca156d17ef42292caee5c97b2022b56b0668cebafc4e04a8f77ce7d29eddd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7fa6429f565c54e38d1c1330de20978d5239301b2c6c069aa00d8e2af302f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fa6429f565c54e38d1c1330de20978d5239301b2c6c069aa00d8e2af302f97->enter($__internal_f7fa6429f565c54e38d1c1330de20978d5239301b2c6c069aa00d8e2af302f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_f7fa6429f565c54e38d1c1330de20978d5239301b2c6c069aa00d8e2af302f97->leave($__internal_f7fa6429f565c54e38d1c1330de20978d5239301b2c6c069aa00d8e2af302f97_prof);

        
        $__internal_4ca156d17ef42292caee5c97b2022b56b0668cebafc4e04a8f77ce7d29eddd33->leave($__internal_4ca156d17ef42292caee5c97b2022b56b0668cebafc4e04a8f77ce7d29eddd33_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8963c05bc46688a3dde82204581dc3b173f798273b9761377c6cf6f2c736e99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8963c05bc46688a3dde82204581dc3b173f798273b9761377c6cf6f2c736e99a->enter($__internal_8963c05bc46688a3dde82204581dc3b173f798273b9761377c6cf6f2c736e99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31e99682f1c890cfa78c5341d070aee1a372abac420c31fd8bfee65f327ec879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e99682f1c890cfa78c5341d070aee1a372abac420c31fd8bfee65f327ec879->enter($__internal_31e99682f1c890cfa78c5341d070aee1a372abac420c31fd8bfee65f327ec879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-social.css"), "html", null, true);
        echo "\">
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t\t";
        
        $__internal_31e99682f1c890cfa78c5341d070aee1a372abac420c31fd8bfee65f327ec879->leave($__internal_31e99682f1c890cfa78c5341d070aee1a372abac420c31fd8bfee65f327ec879_prof);

        
        $__internal_8963c05bc46688a3dde82204581dc3b173f798273b9761377c6cf6f2c736e99a->leave($__internal_8963c05bc46688a3dde82204581dc3b173f798273b9761377c6cf6f2c736e99a_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6c8dfeca116c98b5217cb53fc211a4aa784cd2051d6998185f96bb3572eb75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c8dfeca116c98b5217cb53fc211a4aa784cd2051d6998185f96bb3572eb75d->enter($__internal_b6c8dfeca116c98b5217cb53fc211a4aa784cd2051d6998185f96bb3572eb75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_334f49cb10ec1b8f4d48457274265052586be34190165506a081b9de4b6589fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334f49cb10ec1b8f4d48457274265052586be34190165506a081b9de4b6589fa->enter($__internal_334f49cb10ec1b8f4d48457274265052586be34190165506a081b9de4b6589fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_334f49cb10ec1b8f4d48457274265052586be34190165506a081b9de4b6589fa->leave($__internal_334f49cb10ec1b8f4d48457274265052586be34190165506a081b9de4b6589fa_prof);

        
        $__internal_b6c8dfeca116c98b5217cb53fc211a4aa784cd2051d6998185f96bb3572eb75d->leave($__internal_b6c8dfeca116c98b5217cb53fc211a4aa784cd2051d6998185f96bb3572eb75d_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bf4dbeea6ee285e58825cff8aa46ad84cf2b995e78155fc426aa83e9333859d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf4dbeea6ee285e58825cff8aa46ad84cf2b995e78155fc426aa83e9333859d->enter($__internal_6bf4dbeea6ee285e58825cff8aa46ad84cf2b995e78155fc426aa83e9333859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e306055c8e868ad7da637d40d35d70a4aadca32d5c2ec29573353e1344208c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e306055c8e868ad7da637d40d35d70a4aadca32d5c2ec29573353e1344208c12->enter($__internal_e306055c8e868ad7da637d40d35d70a4aadca32d5c2ec29573353e1344208c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "\t
\t\t\t";
        
        $__internal_e306055c8e868ad7da637d40d35d70a4aadca32d5c2ec29573353e1344208c12->leave($__internal_e306055c8e868ad7da637d40d35d70a4aadca32d5c2ec29573353e1344208c12_prof);

        
        $__internal_6bf4dbeea6ee285e58825cff8aa46ad84cf2b995e78155fc426aa83e9333859d->leave($__internal_6bf4dbeea6ee285e58825cff8aa46ad84cf2b995e78155fc426aa83e9333859d_prof);

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
        return array (  219 => 93,  202 => 64,  190 => 10,  186 => 9,  182 => 8,  177 => 7,  168 => 6,  150 => 5,  134 => 95,  132 => 93,  128 => 92,  99 => 65,  97 => 64,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
\t\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-social.css')}}\">
\t\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
\t\t\t{% endblock %}
\t\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t\t\t<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-primary\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Sébastien Vallet</a>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" href=\"/\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-graduation-cap\"></span> Mes compétences
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/ppe/1\">PPE1</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/ppe/2\">PPE2</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/ppe/3\">PPE3</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">PPE4</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/stages/1\">Stage première année</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Stage deuxième année</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/grille\">Grille de compétences</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/cv\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-lightbulb-o\"></span> Veille technologique</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\"><span class=\"fa fa-envelope\"></span> Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" href=\"/\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-cog\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Administration</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer class=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h3>Mes coordonnées</h3>
\t\t\t\t\t\t\t\t<p><span class=\"fa fa-phone\" aria-hidden=\"true\"></span> <strong>Mon téléphone : </strong> 06 48 89 08 16</p>
\t\t\t\t\t\t\t\t<p><span class=\"fa fa-envelope\" aria-hidden=\"true\"></span> <strong>Mon adresse email : </strong> sebastien.vallet89@gmail.com</p>
\t\t\t\t\t\t\t\t<p><span class=\"fa fa-map-marker\" aria-hidden=\"true\"></span> <strong>Ma localisation :</strong> Dijon / Auxerre</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h3>Où me trouver ?</h3>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-social-icon btn-linkedin text-light\" href=\"https://www.linkedin.com/in/sébastien-vallet-203175131\" target=\"_blank\"><span class=\"fa fa-linkedin\"></span></a>
\t\t\t\t\t\t\t\t\t<a class=\"link-social\" href=\"https://www.linkedin.com/in/sébastien-vallet-203175131\" target=\"_blank\">Linkedin</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t\t\t{% block javascripts %}\t
\t\t\t{% endblock %}
\t\t\t<script src=\"{{asset('js/formContact.js')}}\"></script>
        \t<script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>
", "base.html.twig", "/media/data/User/Google Drive/Programmation/Symfony/folio/app/Resources/views/base.html.twig");
    }
}
