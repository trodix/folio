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
        $__internal_984e422c8c1133f82b9bccef137309e339c24eb1722ef8fdac62edb0ccc50bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984e422c8c1133f82b9bccef137309e339c24eb1722ef8fdac62edb0ccc50bbc->enter($__internal_984e422c8c1133f82b9bccef137309e339c24eb1722ef8fdac62edb0ccc50bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6dc3c4577d9adeeab68ee00fe740ecddc11e7fdcc27d87b16d2eea9e543807b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc3c4577d9adeeab68ee00fe740ecddc11e7fdcc27d87b16d2eea9e543807b9->enter($__internal_6dc3c4577d9adeeab68ee00fe740ecddc11e7fdcc27d87b16d2eea9e543807b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_984e422c8c1133f82b9bccef137309e339c24eb1722ef8fdac62edb0ccc50bbc->leave($__internal_984e422c8c1133f82b9bccef137309e339c24eb1722ef8fdac62edb0ccc50bbc_prof);

        
        $__internal_6dc3c4577d9adeeab68ee00fe740ecddc11e7fdcc27d87b16d2eea9e543807b9->leave($__internal_6dc3c4577d9adeeab68ee00fe740ecddc11e7fdcc27d87b16d2eea9e543807b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9923447ff3fb78d377ce556aae4e857a801ad444842ebdeb9959ba2fa83a2d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9923447ff3fb78d377ce556aae4e857a801ad444842ebdeb9959ba2fa83a2d55->enter($__internal_9923447ff3fb78d377ce556aae4e857a801ad444842ebdeb9959ba2fa83a2d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d8e8cb8add467bf9c72f3bb5c70191b6f60a22743e2857747bf3620bf38bda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8e8cb8add467bf9c72f3bb5c70191b6f60a22743e2857747bf3620bf38bda9->enter($__internal_0d8e8cb8add467bf9c72f3bb5c70191b6f60a22743e2857747bf3620bf38bda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_0d8e8cb8add467bf9c72f3bb5c70191b6f60a22743e2857747bf3620bf38bda9->leave($__internal_0d8e8cb8add467bf9c72f3bb5c70191b6f60a22743e2857747bf3620bf38bda9_prof);

        
        $__internal_9923447ff3fb78d377ce556aae4e857a801ad444842ebdeb9959ba2fa83a2d55->leave($__internal_9923447ff3fb78d377ce556aae4e857a801ad444842ebdeb9959ba2fa83a2d55_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b65907b26960d51a573a0f16e8368b65da69260ede640ed699f7ead5986c8612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65907b26960d51a573a0f16e8368b65da69260ede640ed699f7ead5986c8612->enter($__internal_b65907b26960d51a573a0f16e8368b65da69260ede640ed699f7ead5986c8612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f16d0284f47fa728695d6519c530d5d720995e49fd671f218e7f099db0bdbf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16d0284f47fa728695d6519c530d5d720995e49fd671f218e7f099db0bdbf7c->enter($__internal_f16d0284f47fa728695d6519c530d5d720995e49fd671f218e7f099db0bdbf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f16d0284f47fa728695d6519c530d5d720995e49fd671f218e7f099db0bdbf7c->leave($__internal_f16d0284f47fa728695d6519c530d5d720995e49fd671f218e7f099db0bdbf7c_prof);

        
        $__internal_b65907b26960d51a573a0f16e8368b65da69260ede640ed699f7ead5986c8612->leave($__internal_b65907b26960d51a573a0f16e8368b65da69260ede640ed699f7ead5986c8612_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_680829fc8f6a3e5fa97b4284db91bcae3bf5e719690ddf5749b75d0b886ed6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680829fc8f6a3e5fa97b4284db91bcae3bf5e719690ddf5749b75d0b886ed6a9->enter($__internal_680829fc8f6a3e5fa97b4284db91bcae3bf5e719690ddf5749b75d0b886ed6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba43601b188bd070cacc655230465af912c59b03e8ef96504d1063ad0ad35834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba43601b188bd070cacc655230465af912c59b03e8ef96504d1063ad0ad35834->enter($__internal_ba43601b188bd070cacc655230465af912c59b03e8ef96504d1063ad0ad35834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba43601b188bd070cacc655230465af912c59b03e8ef96504d1063ad0ad35834->leave($__internal_ba43601b188bd070cacc655230465af912c59b03e8ef96504d1063ad0ad35834_prof);

        
        $__internal_680829fc8f6a3e5fa97b4284db91bcae3bf5e719690ddf5749b75d0b886ed6a9->leave($__internal_680829fc8f6a3e5fa97b4284db91bcae3bf5e719690ddf5749b75d0b886ed6a9_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68d3bb779d6e78f6849618734676439ef542266678bfbbe883f971fdd368e80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d3bb779d6e78f6849618734676439ef542266678bfbbe883f971fdd368e80c->enter($__internal_68d3bb779d6e78f6849618734676439ef542266678bfbbe883f971fdd368e80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_857dc68dd8dc3509ce99c36f56ecb90ea3fc6525b147c9fdc342dd0257e1b06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857dc68dd8dc3509ce99c36f56ecb90ea3fc6525b147c9fdc342dd0257e1b06b->enter($__internal_857dc68dd8dc3509ce99c36f56ecb90ea3fc6525b147c9fdc342dd0257e1b06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "\t
\t\t\t";
        
        $__internal_857dc68dd8dc3509ce99c36f56ecb90ea3fc6525b147c9fdc342dd0257e1b06b->leave($__internal_857dc68dd8dc3509ce99c36f56ecb90ea3fc6525b147c9fdc342dd0257e1b06b_prof);

        
        $__internal_68d3bb779d6e78f6849618734676439ef542266678bfbbe883f971fdd368e80c->leave($__internal_68d3bb779d6e78f6849618734676439ef542266678bfbbe883f971fdd368e80c_prof);

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
", "base.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
