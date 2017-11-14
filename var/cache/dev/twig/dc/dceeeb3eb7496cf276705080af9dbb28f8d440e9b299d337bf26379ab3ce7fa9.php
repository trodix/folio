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
        $__internal_73f46bce2bc82733f0fd2d8aa69242086894eb399b2dc01043b01e59099cbc44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f46bce2bc82733f0fd2d8aa69242086894eb399b2dc01043b01e59099cbc44->enter($__internal_73f46bce2bc82733f0fd2d8aa69242086894eb399b2dc01043b01e59099cbc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da27c100ed9817a5f329fcf180956e6859d39ba60662468921feca694d1333da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da27c100ed9817a5f329fcf180956e6859d39ba60662468921feca694d1333da->enter($__internal_da27c100ed9817a5f329fcf180956e6859d39ba60662468921feca694d1333da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t\t\t      <li class=\"nav-item\">
\t\t\t       \t<a class=\"nav-link\" href=\"#\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
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
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "                </div>
            </div>
        </div>

        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"/js/bootstrap.min.js\"></script>
        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_73f46bce2bc82733f0fd2d8aa69242086894eb399b2dc01043b01e59099cbc44->leave($__internal_73f46bce2bc82733f0fd2d8aa69242086894eb399b2dc01043b01e59099cbc44_prof);

        
        $__internal_da27c100ed9817a5f329fcf180956e6859d39ba60662468921feca694d1333da->leave($__internal_da27c100ed9817a5f329fcf180956e6859d39ba60662468921feca694d1333da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e99a0ad84175e53ede1d820b3c72dc92132686424fcbc7905786a78aedd6a00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99a0ad84175e53ede1d820b3c72dc92132686424fcbc7905786a78aedd6a00b->enter($__internal_e99a0ad84175e53ede1d820b3c72dc92132686424fcbc7905786a78aedd6a00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce04ac0a5b6a07d13e35ddf0df4d986007da2bb12e78f39d1cff346619f0ccd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce04ac0a5b6a07d13e35ddf0df4d986007da2bb12e78f39d1cff346619f0ccd5->enter($__internal_ce04ac0a5b6a07d13e35ddf0df4d986007da2bb12e78f39d1cff346619f0ccd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_ce04ac0a5b6a07d13e35ddf0df4d986007da2bb12e78f39d1cff346619f0ccd5->leave($__internal_ce04ac0a5b6a07d13e35ddf0df4d986007da2bb12e78f39d1cff346619f0ccd5_prof);

        
        $__internal_e99a0ad84175e53ede1d820b3c72dc92132686424fcbc7905786a78aedd6a00b->leave($__internal_e99a0ad84175e53ede1d820b3c72dc92132686424fcbc7905786a78aedd6a00b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa831e638d4f9abd2d2a0559f218925ac1cbaf69fa5d9377f8080e3f2c04c767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa831e638d4f9abd2d2a0559f218925ac1cbaf69fa5d9377f8080e3f2c04c767->enter($__internal_fa831e638d4f9abd2d2a0559f218925ac1cbaf69fa5d9377f8080e3f2c04c767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_67092dedde264f6c3a694853d23686efc56c1872cf39f63c928f0cd6be1422c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67092dedde264f6c3a694853d23686efc56c1872cf39f63c928f0cd6be1422c0->enter($__internal_67092dedde264f6c3a694853d23686efc56c1872cf39f63c928f0cd6be1422c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_67092dedde264f6c3a694853d23686efc56c1872cf39f63c928f0cd6be1422c0->leave($__internal_67092dedde264f6c3a694853d23686efc56c1872cf39f63c928f0cd6be1422c0_prof);

        
        $__internal_fa831e638d4f9abd2d2a0559f218925ac1cbaf69fa5d9377f8080e3f2c04c767->leave($__internal_fa831e638d4f9abd2d2a0559f218925ac1cbaf69fa5d9377f8080e3f2c04c767_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa27e1e4544c1569eb05ee8ba0e910efab42bbf19d3bf51b67389debd76ecafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa27e1e4544c1569eb05ee8ba0e910efab42bbf19d3bf51b67389debd76ecafd->enter($__internal_fa27e1e4544c1569eb05ee8ba0e910efab42bbf19d3bf51b67389debd76ecafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_056c5355bca1ed1a921391a51cd45c7230230ab0231b105335b44cbd913d6d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056c5355bca1ed1a921391a51cd45c7230230ab0231b105335b44cbd913d6d8d->enter($__internal_056c5355bca1ed1a921391a51cd45c7230230ab0231b105335b44cbd913d6d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_056c5355bca1ed1a921391a51cd45c7230230ab0231b105335b44cbd913d6d8d->leave($__internal_056c5355bca1ed1a921391a51cd45c7230230ab0231b105335b44cbd913d6d8d_prof);

        
        $__internal_fa27e1e4544c1569eb05ee8ba0e910efab42bbf19d3bf51b67389debd76ecafd->leave($__internal_fa27e1e4544c1569eb05ee8ba0e910efab42bbf19d3bf51b67389debd76ecafd_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e4bb2a6f1acbdd74289b3455cf417cb88762bd97d7afdc75c6852fea3c75d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4bb2a6f1acbdd74289b3455cf417cb88762bd97d7afdc75c6852fea3c75d1b->enter($__internal_3e4bb2a6f1acbdd74289b3455cf417cb88762bd97d7afdc75c6852fea3c75d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_efc36ba0e8bf0d1e300ad5abd582a3404b8cf3a92e4d0b14a95bd39d0ceafe55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc36ba0e8bf0d1e300ad5abd582a3404b8cf3a92e4d0b14a95bd39d0ceafe55->enter($__internal_efc36ba0e8bf0d1e300ad5abd582a3404b8cf3a92e4d0b14a95bd39d0ceafe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_efc36ba0e8bf0d1e300ad5abd582a3404b8cf3a92e4d0b14a95bd39d0ceafe55->leave($__internal_efc36ba0e8bf0d1e300ad5abd582a3404b8cf3a92e4d0b14a95bd39d0ceafe55_prof);

        
        $__internal_3e4bb2a6f1acbdd74289b3455cf417cb88762bd97d7afdc75c6852fea3c75d1b->leave($__internal_3e4bb2a6f1acbdd74289b3455cf417cb88762bd97d7afdc75c6852fea3c75d1b_prof);

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
        return array (  178 => 71,  161 => 63,  144 => 9,  126 => 5,  114 => 72,  112 => 71,  103 => 64,  101 => 63,  44 => 10,  42 => 9,  35 => 5,  29 => 1,);
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
\t\t\t\t      <li class=\"nav-item\">
\t\t\t       \t<a class=\"nav-link\" href=\"#\"><span class=\"fa fa-book\"></span> Curriculum vitæ</a>
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
