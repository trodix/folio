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
        $__internal_98fcc65c6039412f32fa919d3536cc5f2b0ca0dc93af85079e5ae0a95b2833ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fcc65c6039412f32fa919d3536cc5f2b0ca0dc93af85079e5ae0a95b2833ac->enter($__internal_98fcc65c6039412f32fa919d3536cc5f2b0ca0dc93af85079e5ae0a95b2833ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c9a9e7004e64f201051b160c859a46f1ce0f0770cded1e35899eeeaf27006af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a9e7004e64f201051b160c859a46f1ce0f0770cded1e35899eeeaf27006af3->enter($__internal_c9a9e7004e64f201051b160c859a46f1ce0f0770cded1e35899eeeaf27006af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_98fcc65c6039412f32fa919d3536cc5f2b0ca0dc93af85079e5ae0a95b2833ac->leave($__internal_98fcc65c6039412f32fa919d3536cc5f2b0ca0dc93af85079e5ae0a95b2833ac_prof);

        
        $__internal_c9a9e7004e64f201051b160c859a46f1ce0f0770cded1e35899eeeaf27006af3->leave($__internal_c9a9e7004e64f201051b160c859a46f1ce0f0770cded1e35899eeeaf27006af3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6642ddf7e8b4cc002e8e18c702cc0d1e4950282886a24ac4a132e8bf198bdd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6642ddf7e8b4cc002e8e18c702cc0d1e4950282886a24ac4a132e8bf198bdd8->enter($__internal_a6642ddf7e8b4cc002e8e18c702cc0d1e4950282886a24ac4a132e8bf198bdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8974664156595401b55a7811ed632b2d99295f1fcd6d166786b2690bae340f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8974664156595401b55a7811ed632b2d99295f1fcd6d166786b2690bae340f18->enter($__internal_8974664156595401b55a7811ed632b2d99295f1fcd6d166786b2690bae340f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_8974664156595401b55a7811ed632b2d99295f1fcd6d166786b2690bae340f18->leave($__internal_8974664156595401b55a7811ed632b2d99295f1fcd6d166786b2690bae340f18_prof);

        
        $__internal_a6642ddf7e8b4cc002e8e18c702cc0d1e4950282886a24ac4a132e8bf198bdd8->leave($__internal_a6642ddf7e8b4cc002e8e18c702cc0d1e4950282886a24ac4a132e8bf198bdd8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8341749689d49ac93e0d48033c17c908d5a2387005e7d03708fc1563d3f4f9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8341749689d49ac93e0d48033c17c908d5a2387005e7d03708fc1563d3f4f9c5->enter($__internal_8341749689d49ac93e0d48033c17c908d5a2387005e7d03708fc1563d3f4f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ca09ee73431e60a0b70aa920ad3f1e24df4eb19b3151d7aafc41a9c705ca93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca09ee73431e60a0b70aa920ad3f1e24df4eb19b3151d7aafc41a9c705ca93d->enter($__internal_7ca09ee73431e60a0b70aa920ad3f1e24df4eb19b3151d7aafc41a9c705ca93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7ca09ee73431e60a0b70aa920ad3f1e24df4eb19b3151d7aafc41a9c705ca93d->leave($__internal_7ca09ee73431e60a0b70aa920ad3f1e24df4eb19b3151d7aafc41a9c705ca93d_prof);

        
        $__internal_8341749689d49ac93e0d48033c17c908d5a2387005e7d03708fc1563d3f4f9c5->leave($__internal_8341749689d49ac93e0d48033c17c908d5a2387005e7d03708fc1563d3f4f9c5_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_9444a23ae2129d968ac18f3697c3b4b2a8cd84b1f73962180a31188bff7d13fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9444a23ae2129d968ac18f3697c3b4b2a8cd84b1f73962180a31188bff7d13fa->enter($__internal_9444a23ae2129d968ac18f3697c3b4b2a8cd84b1f73962180a31188bff7d13fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00c45966e71144e5562b9370f8cf7cc44971b23c509feb04d6adb56a6fa45906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c45966e71144e5562b9370f8cf7cc44971b23c509feb04d6adb56a6fa45906->enter($__internal_00c45966e71144e5562b9370f8cf7cc44971b23c509feb04d6adb56a6fa45906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_00c45966e71144e5562b9370f8cf7cc44971b23c509feb04d6adb56a6fa45906->leave($__internal_00c45966e71144e5562b9370f8cf7cc44971b23c509feb04d6adb56a6fa45906_prof);

        
        $__internal_9444a23ae2129d968ac18f3697c3b4b2a8cd84b1f73962180a31188bff7d13fa->leave($__internal_9444a23ae2129d968ac18f3697c3b4b2a8cd84b1f73962180a31188bff7d13fa_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c56bd05fc3f2c468cfc7e652dcbb63ecabde07fb2c066438bfb6893a9a7fabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c56bd05fc3f2c468cfc7e652dcbb63ecabde07fb2c066438bfb6893a9a7fabf->enter($__internal_8c56bd05fc3f2c468cfc7e652dcbb63ecabde07fb2c066438bfb6893a9a7fabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_910d720ce6ab2baba32bef9fd9fb858d96fca33b28c82e227f40ab20f6847d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910d720ce6ab2baba32bef9fd9fb858d96fca33b28c82e227f40ab20f6847d30->enter($__internal_910d720ce6ab2baba32bef9fd9fb858d96fca33b28c82e227f40ab20f6847d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "\t
\t\t\t";
        
        $__internal_910d720ce6ab2baba32bef9fd9fb858d96fca33b28c82e227f40ab20f6847d30->leave($__internal_910d720ce6ab2baba32bef9fd9fb858d96fca33b28c82e227f40ab20f6847d30_prof);

        
        $__internal_8c56bd05fc3f2c468cfc7e652dcbb63ecabde07fb2c066438bfb6893a9a7fabf->leave($__internal_8c56bd05fc3f2c468cfc7e652dcbb63ecabde07fb2c066438bfb6893a9a7fabf_prof);

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
", "base.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
