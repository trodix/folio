<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_c3e44789918fdbe67c3a50c9599bf153d57b9fd6a32fd3dd04af1ea03b1a2731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e44789918fdbe67c3a50c9599bf153d57b9fd6a32fd3dd04af1ea03b1a2731->enter($__internal_c3e44789918fdbe67c3a50c9599bf153d57b9fd6a32fd3dd04af1ea03b1a2731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1c17bd2e1bf631aa7fd08223924eb1814efbee634c0e639233cb9f8bb56f94ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c17bd2e1bf631aa7fd08223924eb1814efbee634c0e639233cb9f8bb56f94ee->enter($__internal_1c17bd2e1bf631aa7fd08223924eb1814efbee634c0e639233cb9f8bb56f94ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Stage première année</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Stage dexième année</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/grille\">Grille de compétences</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-lightbulb-o\"></span> Veille téchnologique</a>
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
        
        $__internal_c3e44789918fdbe67c3a50c9599bf153d57b9fd6a32fd3dd04af1ea03b1a2731->leave($__internal_c3e44789918fdbe67c3a50c9599bf153d57b9fd6a32fd3dd04af1ea03b1a2731_prof);

        
        $__internal_1c17bd2e1bf631aa7fd08223924eb1814efbee634c0e639233cb9f8bb56f94ee->leave($__internal_1c17bd2e1bf631aa7fd08223924eb1814efbee634c0e639233cb9f8bb56f94ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_196756f8ba5c76cafbcbfdf1fdb85772cf7e2dd0e5ed2ee23dc4ddf82124a1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196756f8ba5c76cafbcbfdf1fdb85772cf7e2dd0e5ed2ee23dc4ddf82124a1db->enter($__internal_196756f8ba5c76cafbcbfdf1fdb85772cf7e2dd0e5ed2ee23dc4ddf82124a1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7dde8cd936a2f36818a17520635a37b25f0baa000431791b012082b74df9817e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dde8cd936a2f36818a17520635a37b25f0baa000431791b012082b74df9817e->enter($__internal_7dde8cd936a2f36818a17520635a37b25f0baa000431791b012082b74df9817e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_7dde8cd936a2f36818a17520635a37b25f0baa000431791b012082b74df9817e->leave($__internal_7dde8cd936a2f36818a17520635a37b25f0baa000431791b012082b74df9817e_prof);

        
        $__internal_196756f8ba5c76cafbcbfdf1fdb85772cf7e2dd0e5ed2ee23dc4ddf82124a1db->leave($__internal_196756f8ba5c76cafbcbfdf1fdb85772cf7e2dd0e5ed2ee23dc4ddf82124a1db_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13c2082040a8f8bdb9ea52e4e0db9d687870e420d8365ba696040336941b82d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c2082040a8f8bdb9ea52e4e0db9d687870e420d8365ba696040336941b82d9->enter($__internal_13c2082040a8f8bdb9ea52e4e0db9d687870e420d8365ba696040336941b82d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a32b098865ed3ad328cb470d7b9d2cb6cdf7b10b660f0f87ebb538b7129b957c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32b098865ed3ad328cb470d7b9d2cb6cdf7b10b660f0f87ebb538b7129b957c->enter($__internal_a32b098865ed3ad328cb470d7b9d2cb6cdf7b10b660f0f87ebb538b7129b957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a32b098865ed3ad328cb470d7b9d2cb6cdf7b10b660f0f87ebb538b7129b957c->leave($__internal_a32b098865ed3ad328cb470d7b9d2cb6cdf7b10b660f0f87ebb538b7129b957c_prof);

        
        $__internal_13c2082040a8f8bdb9ea52e4e0db9d687870e420d8365ba696040336941b82d9->leave($__internal_13c2082040a8f8bdb9ea52e4e0db9d687870e420d8365ba696040336941b82d9_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a2400e6f2678075c02563c4e31e3c9626bd0dc8b457515f4a6102094525de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a2400e6f2678075c02563c4e31e3c9626bd0dc8b457515f4a6102094525de6->enter($__internal_92a2400e6f2678075c02563c4e31e3c9626bd0dc8b457515f4a6102094525de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba1dbf089537ba96b29df1bf05bb7af4eab0430f1916e9272d5bc22047f1bd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1dbf089537ba96b29df1bf05bb7af4eab0430f1916e9272d5bc22047f1bd09->enter($__internal_ba1dbf089537ba96b29df1bf05bb7af4eab0430f1916e9272d5bc22047f1bd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba1dbf089537ba96b29df1bf05bb7af4eab0430f1916e9272d5bc22047f1bd09->leave($__internal_ba1dbf089537ba96b29df1bf05bb7af4eab0430f1916e9272d5bc22047f1bd09_prof);

        
        $__internal_92a2400e6f2678075c02563c4e31e3c9626bd0dc8b457515f4a6102094525de6->leave($__internal_92a2400e6f2678075c02563c4e31e3c9626bd0dc8b457515f4a6102094525de6_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48d2db0bb2dc49d1c6b0fc089783382ee9a4340514c6888cad53120a19fbe8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d2db0bb2dc49d1c6b0fc089783382ee9a4340514c6888cad53120a19fbe8cd->enter($__internal_48d2db0bb2dc49d1c6b0fc089783382ee9a4340514c6888cad53120a19fbe8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1bfdf8e1e8d4a40d6506b95dab9c77a9c7921fd754b549264dedd86417adb7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfdf8e1e8d4a40d6506b95dab9c77a9c7921fd754b549264dedd86417adb7ec->enter($__internal_1bfdf8e1e8d4a40d6506b95dab9c77a9c7921fd754b549264dedd86417adb7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "\t
\t\t\t";
        
        $__internal_1bfdf8e1e8d4a40d6506b95dab9c77a9c7921fd754b549264dedd86417adb7ec->leave($__internal_1bfdf8e1e8d4a40d6506b95dab9c77a9c7921fd754b549264dedd86417adb7ec_prof);

        
        $__internal_48d2db0bb2dc49d1c6b0fc089783382ee9a4340514c6888cad53120a19fbe8cd->leave($__internal_48d2db0bb2dc49d1c6b0fc089783382ee9a4340514c6888cad53120a19fbe8cd_prof);

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
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Stage première année</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Stage dexième année</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/grille\">Grille de compétences</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-lightbulb-o\"></span> Veille téchnologique</a>
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
", "base.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
