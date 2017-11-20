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
        $__internal_e76c65641b15a5395d8f6408df46f22da1af41dee8bc1bbc7f30d8a5b031c5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76c65641b15a5395d8f6408df46f22da1af41dee8bc1bbc7f30d8a5b031c5a3->enter($__internal_e76c65641b15a5395d8f6408df46f22da1af41dee8bc1bbc7f30d8a5b031c5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_767b095ce11c99846fbad5933da3d993f7b883296767c91085d5c98e343e7ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767b095ce11c99846fbad5933da3d993f7b883296767c91085d5c98e343e7ace->enter($__internal_767b095ce11c99846fbad5933da3d993f7b883296767c91085d5c98e343e7ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e76c65641b15a5395d8f6408df46f22da1af41dee8bc1bbc7f30d8a5b031c5a3->leave($__internal_e76c65641b15a5395d8f6408df46f22da1af41dee8bc1bbc7f30d8a5b031c5a3_prof);

        
        $__internal_767b095ce11c99846fbad5933da3d993f7b883296767c91085d5c98e343e7ace->leave($__internal_767b095ce11c99846fbad5933da3d993f7b883296767c91085d5c98e343e7ace_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d843f2736df5d173e90ae7fb2d77dbc257414ecccdb4fc1a47218afcf36e7777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d843f2736df5d173e90ae7fb2d77dbc257414ecccdb4fc1a47218afcf36e7777->enter($__internal_d843f2736df5d173e90ae7fb2d77dbc257414ecccdb4fc1a47218afcf36e7777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c7d9c800ba7edc9c004ca4fab9eb9eeabd7324f0f01c8720e2d5f1db3b44dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7d9c800ba7edc9c004ca4fab9eb9eeabd7324f0f01c8720e2d5f1db3b44dd1->enter($__internal_3c7d9c800ba7edc9c004ca4fab9eb9eeabd7324f0f01c8720e2d5f1db3b44dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_3c7d9c800ba7edc9c004ca4fab9eb9eeabd7324f0f01c8720e2d5f1db3b44dd1->leave($__internal_3c7d9c800ba7edc9c004ca4fab9eb9eeabd7324f0f01c8720e2d5f1db3b44dd1_prof);

        
        $__internal_d843f2736df5d173e90ae7fb2d77dbc257414ecccdb4fc1a47218afcf36e7777->leave($__internal_d843f2736df5d173e90ae7fb2d77dbc257414ecccdb4fc1a47218afcf36e7777_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f14cedc05a03d089ac485d2f3a296ff9bc3efb526634a3c0c7924ce595b6310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f14cedc05a03d089ac485d2f3a296ff9bc3efb526634a3c0c7924ce595b6310->enter($__internal_9f14cedc05a03d089ac485d2f3a296ff9bc3efb526634a3c0c7924ce595b6310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_148ddf6f5004f9444166229d2f836563e19052ef6dcf7bef9a6a330f052642c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148ddf6f5004f9444166229d2f836563e19052ef6dcf7bef9a6a330f052642c8->enter($__internal_148ddf6f5004f9444166229d2f836563e19052ef6dcf7bef9a6a330f052642c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_148ddf6f5004f9444166229d2f836563e19052ef6dcf7bef9a6a330f052642c8->leave($__internal_148ddf6f5004f9444166229d2f836563e19052ef6dcf7bef9a6a330f052642c8_prof);

        
        $__internal_9f14cedc05a03d089ac485d2f3a296ff9bc3efb526634a3c0c7924ce595b6310->leave($__internal_9f14cedc05a03d089ac485d2f3a296ff9bc3efb526634a3c0c7924ce595b6310_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0d695999a18dc4bed10d1ea1195e9a345fe702b3047157a958f9bc720bbcc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d695999a18dc4bed10d1ea1195e9a345fe702b3047157a958f9bc720bbcc3d->enter($__internal_b0d695999a18dc4bed10d1ea1195e9a345fe702b3047157a958f9bc720bbcc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ee7b14465c5456ee3d72dc66806ed747d04952ee11add9d350add8bf31fe636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee7b14465c5456ee3d72dc66806ed747d04952ee11add9d350add8bf31fe636->enter($__internal_8ee7b14465c5456ee3d72dc66806ed747d04952ee11add9d350add8bf31fe636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ee7b14465c5456ee3d72dc66806ed747d04952ee11add9d350add8bf31fe636->leave($__internal_8ee7b14465c5456ee3d72dc66806ed747d04952ee11add9d350add8bf31fe636_prof);

        
        $__internal_b0d695999a18dc4bed10d1ea1195e9a345fe702b3047157a958f9bc720bbcc3d->leave($__internal_b0d695999a18dc4bed10d1ea1195e9a345fe702b3047157a958f9bc720bbcc3d_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e2f83f78408b7e16d81a8e85bbb8fd7098e4d9d5fda2980dc376f4567660ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2f83f78408b7e16d81a8e85bbb8fd7098e4d9d5fda2980dc376f4567660ac0->enter($__internal_5e2f83f78408b7e16d81a8e85bbb8fd7098e4d9d5fda2980dc376f4567660ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef0266a5ea4957e534311f6fb02af64cf8fb8b2e17db81ebd30b0ed5b82b4ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0266a5ea4957e534311f6fb02af64cf8fb8b2e17db81ebd30b0ed5b82b4ff1->enter($__internal_ef0266a5ea4957e534311f6fb02af64cf8fb8b2e17db81ebd30b0ed5b82b4ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "\t
\t\t\t";
        
        $__internal_ef0266a5ea4957e534311f6fb02af64cf8fb8b2e17db81ebd30b0ed5b82b4ff1->leave($__internal_ef0266a5ea4957e534311f6fb02af64cf8fb8b2e17db81ebd30b0ed5b82b4ff1_prof);

        
        $__internal_5e2f83f78408b7e16d81a8e85bbb8fd7098e4d9d5fda2980dc376f4567660ac0->leave($__internal_5e2f83f78408b7e16d81a8e85bbb8fd7098e4d9d5fda2980dc376f4567660ac0_prof);

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
