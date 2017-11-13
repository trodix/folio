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
        $__internal_3c3ab2415ef211f0421b19824fb139db26aac481e7f6cd6512cd671c09108b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3ab2415ef211f0421b19824fb139db26aac481e7f6cd6512cd671c09108b57->enter($__internal_3c3ab2415ef211f0421b19824fb139db26aac481e7f6cd6512cd671c09108b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_882c13074043c46d0642b03ea65d4493ec4092eb57a22a0aac93978b06033d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882c13074043c46d0642b03ea65d4493ec4092eb57a22a0aac93978b06033d67->enter($__internal_882c13074043c46d0642b03ea65d4493ec4092eb57a22a0aac93978b06033d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t\t<meta charset=\"UTF-8\" />
\t\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
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
\t\t\t          Mes compétences
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"#\">PPE1</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">PPE2</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">PPE3</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Grille de compétences</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          Mes stages
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
\t\t<script src=\"js/bootstrap.min.js\"></script>
        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_3c3ab2415ef211f0421b19824fb139db26aac481e7f6cd6512cd671c09108b57->leave($__internal_3c3ab2415ef211f0421b19824fb139db26aac481e7f6cd6512cd671c09108b57_prof);

        
        $__internal_882c13074043c46d0642b03ea65d4493ec4092eb57a22a0aac93978b06033d67->leave($__internal_882c13074043c46d0642b03ea65d4493ec4092eb57a22a0aac93978b06033d67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f45053e49915164e1553987fdb9625cef16b153ce0d59ee9e8fd07939941d6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45053e49915164e1553987fdb9625cef16b153ce0d59ee9e8fd07939941d6b2->enter($__internal_f45053e49915164e1553987fdb9625cef16b153ce0d59ee9e8fd07939941d6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60361f185fc126aed86f5afac9ca80874646118e26cbd576b501dba0b41cc07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60361f185fc126aed86f5afac9ca80874646118e26cbd576b501dba0b41cc07a->enter($__internal_60361f185fc126aed86f5afac9ca80874646118e26cbd576b501dba0b41cc07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_60361f185fc126aed86f5afac9ca80874646118e26cbd576b501dba0b41cc07a->leave($__internal_60361f185fc126aed86f5afac9ca80874646118e26cbd576b501dba0b41cc07a_prof);

        
        $__internal_f45053e49915164e1553987fdb9625cef16b153ce0d59ee9e8fd07939941d6b2->leave($__internal_f45053e49915164e1553987fdb9625cef16b153ce0d59ee9e8fd07939941d6b2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d0bcf8f5c56dc4b4aa4265f673f34af2e074fbe416780434f93b39a4385250a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0bcf8f5c56dc4b4aa4265f673f34af2e074fbe416780434f93b39a4385250a->enter($__internal_5d0bcf8f5c56dc4b4aa4265f673f34af2e074fbe416780434f93b39a4385250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_10178847d50b78794d3a69c4f0d0355e36f1a271f053d93c20ab5f34d9037df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10178847d50b78794d3a69c4f0d0355e36f1a271f053d93c20ab5f34d9037df0->enter($__internal_10178847d50b78794d3a69c4f0d0355e36f1a271f053d93c20ab5f34d9037df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_10178847d50b78794d3a69c4f0d0355e36f1a271f053d93c20ab5f34d9037df0->leave($__internal_10178847d50b78794d3a69c4f0d0355e36f1a271f053d93c20ab5f34d9037df0_prof);

        
        $__internal_5d0bcf8f5c56dc4b4aa4265f673f34af2e074fbe416780434f93b39a4385250a->leave($__internal_5d0bcf8f5c56dc4b4aa4265f673f34af2e074fbe416780434f93b39a4385250a_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1e4512a303ca34a0d6b35e86f2bb450bb9ecde61649bfcad85228dee30ef2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e4512a303ca34a0d6b35e86f2bb450bb9ecde61649bfcad85228dee30ef2e1->enter($__internal_f1e4512a303ca34a0d6b35e86f2bb450bb9ecde61649bfcad85228dee30ef2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83a2be0e8caea41e9fb245e2713d4b0d05571281867575af78fc5099e0b971e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a2be0e8caea41e9fb245e2713d4b0d05571281867575af78fc5099e0b971e5->enter($__internal_83a2be0e8caea41e9fb245e2713d4b0d05571281867575af78fc5099e0b971e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83a2be0e8caea41e9fb245e2713d4b0d05571281867575af78fc5099e0b971e5->leave($__internal_83a2be0e8caea41e9fb245e2713d4b0d05571281867575af78fc5099e0b971e5_prof);

        
        $__internal_f1e4512a303ca34a0d6b35e86f2bb450bb9ecde61649bfcad85228dee30ef2e1->leave($__internal_f1e4512a303ca34a0d6b35e86f2bb450bb9ecde61649bfcad85228dee30ef2e1_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e48f40fb666f7b65d7e4ba38c3ce5d85e78f75dde2053895e3166ff256b125cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48f40fb666f7b65d7e4ba38c3ce5d85e78f75dde2053895e3166ff256b125cb->enter($__internal_e48f40fb666f7b65d7e4ba38c3ce5d85e78f75dde2053895e3166ff256b125cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c0cd728fdb1eb010729bba98f8784e5ee4d1fe1d077dfaad2d99d67f432cbc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cd728fdb1eb010729bba98f8784e5ee4d1fe1d077dfaad2d99d67f432cbc3c->enter($__internal_c0cd728fdb1eb010729bba98f8784e5ee4d1fe1d077dfaad2d99d67f432cbc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0cd728fdb1eb010729bba98f8784e5ee4d1fe1d077dfaad2d99d67f432cbc3c->leave($__internal_c0cd728fdb1eb010729bba98f8784e5ee4d1fe1d077dfaad2d99d67f432cbc3c_prof);

        
        $__internal_e48f40fb666f7b65d7e4ba38c3ce5d85e78f75dde2053895e3166ff256b125cb->leave($__internal_e48f40fb666f7b65d7e4ba38c3ce5d85e78f75dde2053895e3166ff256b125cb_prof);

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
\t\t\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
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
\t\t\t          Mes compétences
\t\t\t        </a>
\t\t\t        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t          <a class=\"dropdown-item\" href=\"#\">PPE1</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">PPE2</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">PPE3</a>
\t\t\t          <a class=\"dropdown-item\" href=\"#\">Grille de compétences</a>
\t\t\t        </div>
\t\t\t      </li>
\t\t\t      <li class=\"nav-item dropdown\">
\t\t\t        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t          Mes stages
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
\t\t<script src=\"js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
