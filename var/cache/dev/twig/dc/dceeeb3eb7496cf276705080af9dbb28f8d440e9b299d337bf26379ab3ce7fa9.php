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
        $__internal_00e1ede20dd8da39257e77e32d487506069407caf9eb88b53e91642e55dd8ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e1ede20dd8da39257e77e32d487506069407caf9eb88b53e91642e55dd8ad3->enter($__internal_00e1ede20dd8da39257e77e32d487506069407caf9eb88b53e91642e55dd8ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_424c562c4f250de25fd6a99215dbc75a7cd97b7633a5cbfb0ef7e1307077593a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424c562c4f250de25fd6a99215dbc75a7cd97b7633a5cbfb0ef7e1307077593a->enter($__internal_424c562c4f250de25fd6a99215dbc75a7cd97b7633a5cbfb0ef7e1307077593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t\t       \t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-book\"></span> Veille téchnologique</a>
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
        
        $__internal_00e1ede20dd8da39257e77e32d487506069407caf9eb88b53e91642e55dd8ad3->leave($__internal_00e1ede20dd8da39257e77e32d487506069407caf9eb88b53e91642e55dd8ad3_prof);

        
        $__internal_424c562c4f250de25fd6a99215dbc75a7cd97b7633a5cbfb0ef7e1307077593a->leave($__internal_424c562c4f250de25fd6a99215dbc75a7cd97b7633a5cbfb0ef7e1307077593a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9614e1f447acbdc498bbfe54d3e27aa09a05eae22db4d52f7ef194e282fb6439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9614e1f447acbdc498bbfe54d3e27aa09a05eae22db4d52f7ef194e282fb6439->enter($__internal_9614e1f447acbdc498bbfe54d3e27aa09a05eae22db4d52f7ef194e282fb6439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77e8e2b287ac97b89c624ca767a260201276285368e23b170a4cb579f1405ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e8e2b287ac97b89c624ca767a260201276285368e23b170a4cb579f1405ab9->enter($__internal_77e8e2b287ac97b89c624ca767a260201276285368e23b170a4cb579f1405ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_77e8e2b287ac97b89c624ca767a260201276285368e23b170a4cb579f1405ab9->leave($__internal_77e8e2b287ac97b89c624ca767a260201276285368e23b170a4cb579f1405ab9_prof);

        
        $__internal_9614e1f447acbdc498bbfe54d3e27aa09a05eae22db4d52f7ef194e282fb6439->leave($__internal_9614e1f447acbdc498bbfe54d3e27aa09a05eae22db4d52f7ef194e282fb6439_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cd125d3876ca037970009bed71f727994eaa55e0b205fb4285652bda599fd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd125d3876ca037970009bed71f727994eaa55e0b205fb4285652bda599fd83->enter($__internal_2cd125d3876ca037970009bed71f727994eaa55e0b205fb4285652bda599fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d68b903b750fa048a5eaf8f5f5e7546a5963709f858c6cf634c372ee5efcb7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68b903b750fa048a5eaf8f5f5e7546a5963709f858c6cf634c372ee5efcb7bb->enter($__internal_d68b903b750fa048a5eaf8f5f5e7546a5963709f858c6cf634c372ee5efcb7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d68b903b750fa048a5eaf8f5f5e7546a5963709f858c6cf634c372ee5efcb7bb->leave($__internal_d68b903b750fa048a5eaf8f5f5e7546a5963709f858c6cf634c372ee5efcb7bb_prof);

        
        $__internal_2cd125d3876ca037970009bed71f727994eaa55e0b205fb4285652bda599fd83->leave($__internal_2cd125d3876ca037970009bed71f727994eaa55e0b205fb4285652bda599fd83_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a09d7fce2af99c9c1c1c30b9d93ce277cfb78b6a3b184c98d3fd5cea7dcb02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a09d7fce2af99c9c1c1c30b9d93ce277cfb78b6a3b184c98d3fd5cea7dcb02d->enter($__internal_0a09d7fce2af99c9c1c1c30b9d93ce277cfb78b6a3b184c98d3fd5cea7dcb02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95fec6b1249ee7c1d462e9dce7d4ca3f31849091403f92557abbdbe04e636f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fec6b1249ee7c1d462e9dce7d4ca3f31849091403f92557abbdbe04e636f47->enter($__internal_95fec6b1249ee7c1d462e9dce7d4ca3f31849091403f92557abbdbe04e636f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_95fec6b1249ee7c1d462e9dce7d4ca3f31849091403f92557abbdbe04e636f47->leave($__internal_95fec6b1249ee7c1d462e9dce7d4ca3f31849091403f92557abbdbe04e636f47_prof);

        
        $__internal_0a09d7fce2af99c9c1c1c30b9d93ce277cfb78b6a3b184c98d3fd5cea7dcb02d->leave($__internal_0a09d7fce2af99c9c1c1c30b9d93ce277cfb78b6a3b184c98d3fd5cea7dcb02d_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b3e58e33799426923f02f13e16b1b46bfb23ba68ddf2e58202ac019564f2463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3e58e33799426923f02f13e16b1b46bfb23ba68ddf2e58202ac019564f2463->enter($__internal_1b3e58e33799426923f02f13e16b1b46bfb23ba68ddf2e58202ac019564f2463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_355132424dac8c4e8aae39a7d0eeac23f98759ab4fda29e5c6d3cd9a13f38a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355132424dac8c4e8aae39a7d0eeac23f98759ab4fda29e5c6d3cd9a13f38a63->enter($__internal_355132424dac8c4e8aae39a7d0eeac23f98759ab4fda29e5c6d3cd9a13f38a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_355132424dac8c4e8aae39a7d0eeac23f98759ab4fda29e5c6d3cd9a13f38a63->leave($__internal_355132424dac8c4e8aae39a7d0eeac23f98759ab4fda29e5c6d3cd9a13f38a63_prof);

        
        $__internal_1b3e58e33799426923f02f13e16b1b46bfb23ba68ddf2e58202ac019564f2463->leave($__internal_1b3e58e33799426923f02f13e16b1b46bfb23ba68ddf2e58202ac019564f2463_prof);

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
\t\t\t       \t<a class=\"nav-link\" href=\"/veille\"><span class=\"fa fa-book\"></span> Veille téchnologique</a>
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
