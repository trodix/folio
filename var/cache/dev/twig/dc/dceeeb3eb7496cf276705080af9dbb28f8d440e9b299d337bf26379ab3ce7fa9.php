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
        $__internal_ec4423477b7b1241c8be1e83620d274f72260b439a5174dd8e95b4b5f3a52e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4423477b7b1241c8be1e83620d274f72260b439a5174dd8e95b4b5f3a52e0a->enter($__internal_ec4423477b7b1241c8be1e83620d274f72260b439a5174dd8e95b4b5f3a52e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2c03b06122f4e6d67fd30f24e9907a873eaaf4d6b5feddfce2905e878b1dfa8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c03b06122f4e6d67fd30f24e9907a873eaaf4d6b5feddfce2905e878b1dfa8c->enter($__internal_2c03b06122f4e6d67fd30f24e9907a873eaaf4d6b5feddfce2905e878b1dfa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t\t          <span class=\"fa fa-graduation-cap\"></span> Mes compétences
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
\t\t<script src=\"js/bootstrap.min.js\"></script>
        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_ec4423477b7b1241c8be1e83620d274f72260b439a5174dd8e95b4b5f3a52e0a->leave($__internal_ec4423477b7b1241c8be1e83620d274f72260b439a5174dd8e95b4b5f3a52e0a_prof);

        
        $__internal_2c03b06122f4e6d67fd30f24e9907a873eaaf4d6b5feddfce2905e878b1dfa8c->leave($__internal_2c03b06122f4e6d67fd30f24e9907a873eaaf4d6b5feddfce2905e878b1dfa8c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f09d32a61f1d383023496d9686ba5cde8cb1e4ad25cb151d572dadceaffa2f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09d32a61f1d383023496d9686ba5cde8cb1e4ad25cb151d572dadceaffa2f51->enter($__internal_f09d32a61f1d383023496d9686ba5cde8cb1e4ad25cb151d572dadceaffa2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06839d84b3a5ff9b57e6dda08cac8334f1fd96cb62a21abf1ea5038a2bfae6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06839d84b3a5ff9b57e6dda08cac8334f1fd96cb62a21abf1ea5038a2bfae6b8->enter($__internal_06839d84b3a5ff9b57e6dda08cac8334f1fd96cb62a21abf1ea5038a2bfae6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_06839d84b3a5ff9b57e6dda08cac8334f1fd96cb62a21abf1ea5038a2bfae6b8->leave($__internal_06839d84b3a5ff9b57e6dda08cac8334f1fd96cb62a21abf1ea5038a2bfae6b8_prof);

        
        $__internal_f09d32a61f1d383023496d9686ba5cde8cb1e4ad25cb151d572dadceaffa2f51->leave($__internal_f09d32a61f1d383023496d9686ba5cde8cb1e4ad25cb151d572dadceaffa2f51_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7869d8ad72eb0a4e60bc0656004201169ac0d8c1a37022610439c48d2924528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7869d8ad72eb0a4e60bc0656004201169ac0d8c1a37022610439c48d2924528->enter($__internal_a7869d8ad72eb0a4e60bc0656004201169ac0d8c1a37022610439c48d2924528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f1b0bd362bd58ee1de0c6086f767afa0b93b458053792561f55888f19c2d7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1b0bd362bd58ee1de0c6086f767afa0b93b458053792561f55888f19c2d7cc->enter($__internal_7f1b0bd362bd58ee1de0c6086f767afa0b93b458053792561f55888f19c2d7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7f1b0bd362bd58ee1de0c6086f767afa0b93b458053792561f55888f19c2d7cc->leave($__internal_7f1b0bd362bd58ee1de0c6086f767afa0b93b458053792561f55888f19c2d7cc_prof);

        
        $__internal_a7869d8ad72eb0a4e60bc0656004201169ac0d8c1a37022610439c48d2924528->leave($__internal_a7869d8ad72eb0a4e60bc0656004201169ac0d8c1a37022610439c48d2924528_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d08a595facdd735724381f1666dd119a6f5a2ce931a8d186014af0f4f25e5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d08a595facdd735724381f1666dd119a6f5a2ce931a8d186014af0f4f25e5d1->enter($__internal_8d08a595facdd735724381f1666dd119a6f5a2ce931a8d186014af0f4f25e5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_269b7f52fae415f6cb17932840b6b443828a74f9420d7abf396b7a8770e2fcba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269b7f52fae415f6cb17932840b6b443828a74f9420d7abf396b7a8770e2fcba->enter($__internal_269b7f52fae415f6cb17932840b6b443828a74f9420d7abf396b7a8770e2fcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_269b7f52fae415f6cb17932840b6b443828a74f9420d7abf396b7a8770e2fcba->leave($__internal_269b7f52fae415f6cb17932840b6b443828a74f9420d7abf396b7a8770e2fcba_prof);

        
        $__internal_8d08a595facdd735724381f1666dd119a6f5a2ce931a8d186014af0f4f25e5d1->leave($__internal_8d08a595facdd735724381f1666dd119a6f5a2ce931a8d186014af0f4f25e5d1_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b65189add944bad35a68af80fee066563032c125a07929032a826093b643aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b65189add944bad35a68af80fee066563032c125a07929032a826093b643aa9->enter($__internal_8b65189add944bad35a68af80fee066563032c125a07929032a826093b643aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4efba944da90f6c6818c1998aa5ceb4778d0c5f7ae011981fe04d9473b93bc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efba944da90f6c6818c1998aa5ceb4778d0c5f7ae011981fe04d9473b93bc81->enter($__internal_4efba944da90f6c6818c1998aa5ceb4778d0c5f7ae011981fe04d9473b93bc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4efba944da90f6c6818c1998aa5ceb4778d0c5f7ae011981fe04d9473b93bc81->leave($__internal_4efba944da90f6c6818c1998aa5ceb4778d0c5f7ae011981fe04d9473b93bc81_prof);

        
        $__internal_8b65189add944bad35a68af80fee066563032c125a07929032a826093b643aa9->leave($__internal_8b65189add944bad35a68af80fee066563032c125a07929032a826093b643aa9_prof);

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
\t\t\t          <span class=\"fa fa-graduation-cap\"></span> Mes compétences
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
\t\t<script src=\"js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
