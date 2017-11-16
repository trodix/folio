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
        $__internal_f0d86e87801260de5709cae8b31e2f040cb927dd96539c46a50d04fca5a53748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d86e87801260de5709cae8b31e2f040cb927dd96539c46a50d04fca5a53748->enter($__internal_f0d86e87801260de5709cae8b31e2f040cb927dd96539c46a50d04fca5a53748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_312ea4000bfe27bb1a19fb64b64dab7845fb59fafdc38d21930aa18fd1b6d5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312ea4000bfe27bb1a19fb64b64dab7845fb59fafdc38d21930aa18fd1b6d5d0->enter($__internal_312ea4000bfe27bb1a19fb64b64dab7845fb59fafdc38d21930aa18fd1b6d5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t\t<meta charset=\"UTF-8\" />
\t\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
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
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
\t\t\t       \t<a class=\"nav-link\" href=\"/veille-techno\"><span class=\"fa fa-book\"></span> Veille téchnologique</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item\">
\t\t\t        <a class=\"nav-link\" href=\"#\"><span class=\"fa fa-envelope\"></span> Contact</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "                </div>
            </div>
        </div>

        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"/js/bootstrap.min.js\"></script>
        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "    </body>
</html>
";
        
        $__internal_f0d86e87801260de5709cae8b31e2f040cb927dd96539c46a50d04fca5a53748->leave($__internal_f0d86e87801260de5709cae8b31e2f040cb927dd96539c46a50d04fca5a53748_prof);

        
        $__internal_312ea4000bfe27bb1a19fb64b64dab7845fb59fafdc38d21930aa18fd1b6d5d0->leave($__internal_312ea4000bfe27bb1a19fb64b64dab7845fb59fafdc38d21930aa18fd1b6d5d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_894a7c6b520ff1acb5ab7608750a81471b93910d73c603fe2b08607fbdb8ef98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894a7c6b520ff1acb5ab7608750a81471b93910d73c603fe2b08607fbdb8ef98->enter($__internal_894a7c6b520ff1acb5ab7608750a81471b93910d73c603fe2b08607fbdb8ef98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4287c24c8bd1d1cda1823b0f78e3e234a432c86e5ee6f24a74b093225e084925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4287c24c8bd1d1cda1823b0f78e3e234a432c86e5ee6f24a74b093225e084925->enter($__internal_4287c24c8bd1d1cda1823b0f78e3e234a432c86e5ee6f24a74b093225e084925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_4287c24c8bd1d1cda1823b0f78e3e234a432c86e5ee6f24a74b093225e084925->leave($__internal_4287c24c8bd1d1cda1823b0f78e3e234a432c86e5ee6f24a74b093225e084925_prof);

        
        $__internal_894a7c6b520ff1acb5ab7608750a81471b93910d73c603fe2b08607fbdb8ef98->leave($__internal_894a7c6b520ff1acb5ab7608750a81471b93910d73c603fe2b08607fbdb8ef98_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4f50abae077c9af692db641b0794f8bf89e017f25806b7c515bbd64132ebde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f50abae077c9af692db641b0794f8bf89e017f25806b7c515bbd64132ebde8->enter($__internal_d4f50abae077c9af692db641b0794f8bf89e017f25806b7c515bbd64132ebde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a2825bfff40b77505d54f7f69caa56fcc7a1aaefe4248456d1d73455a0ba7b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2825bfff40b77505d54f7f69caa56fcc7a1aaefe4248456d1d73455a0ba7b41->enter($__internal_a2825bfff40b77505d54f7f69caa56fcc7a1aaefe4248456d1d73455a0ba7b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2825bfff40b77505d54f7f69caa56fcc7a1aaefe4248456d1d73455a0ba7b41->leave($__internal_a2825bfff40b77505d54f7f69caa56fcc7a1aaefe4248456d1d73455a0ba7b41_prof);

        
        $__internal_d4f50abae077c9af692db641b0794f8bf89e017f25806b7c515bbd64132ebde8->leave($__internal_d4f50abae077c9af692db641b0794f8bf89e017f25806b7c515bbd64132ebde8_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_50003cf4163296b9f4fc16dcca88e2c5ca657eed4b566918ba930d18ced94f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50003cf4163296b9f4fc16dcca88e2c5ca657eed4b566918ba930d18ced94f67->enter($__internal_50003cf4163296b9f4fc16dcca88e2c5ca657eed4b566918ba930d18ced94f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22f2df78a31f7801cb7d89caf61bad5bfb7effdd91494e889037be66e5c39a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f2df78a31f7801cb7d89caf61bad5bfb7effdd91494e889037be66e5c39a1b->enter($__internal_22f2df78a31f7801cb7d89caf61bad5bfb7effdd91494e889037be66e5c39a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22f2df78a31f7801cb7d89caf61bad5bfb7effdd91494e889037be66e5c39a1b->leave($__internal_22f2df78a31f7801cb7d89caf61bad5bfb7effdd91494e889037be66e5c39a1b_prof);

        
        $__internal_50003cf4163296b9f4fc16dcca88e2c5ca657eed4b566918ba930d18ced94f67->leave($__internal_50003cf4163296b9f4fc16dcca88e2c5ca657eed4b566918ba930d18ced94f67_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15be534d416ea47085702095141378c59fdadf9fd985842de3fea8aee6c0b069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15be534d416ea47085702095141378c59fdadf9fd985842de3fea8aee6c0b069->enter($__internal_15be534d416ea47085702095141378c59fdadf9fd985842de3fea8aee6c0b069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_470da7a945df33a26d13c29086f940f4f16e6248db3121bbb076c8a6f3901bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470da7a945df33a26d13c29086f940f4f16e6248db3121bbb076c8a6f3901bbe->enter($__internal_470da7a945df33a26d13c29086f940f4f16e6248db3121bbb076c8a6f3901bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_470da7a945df33a26d13c29086f940f4f16e6248db3121bbb076c8a6f3901bbe->leave($__internal_470da7a945df33a26d13c29086f940f4f16e6248db3121bbb076c8a6f3901bbe_prof);

        
        $__internal_15be534d416ea47085702095141378c59fdadf9fd985842de3fea8aee6c0b069->leave($__internal_15be534d416ea47085702095141378c59fdadf9fd985842de3fea8aee6c0b069_prof);

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
        return array (  181 => 74,  164 => 66,  147 => 9,  129 => 5,  117 => 75,  115 => 74,  106 => 67,  104 => 66,  44 => 10,  42 => 9,  35 => 5,  29 => 1,);
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
\t\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t\t\t{% block stylesheets %}{% endblock %}
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
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
\t\t\t       \t<a class=\"nav-link\" href=\"/veille-techno\"><span class=\"fa fa-book\"></span> Veille téchnologique</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item\">
\t\t\t        <a class=\"nav-link\" href=\"#\"><span class=\"fa fa-envelope\"></span> Contact</a>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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

        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"/js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
