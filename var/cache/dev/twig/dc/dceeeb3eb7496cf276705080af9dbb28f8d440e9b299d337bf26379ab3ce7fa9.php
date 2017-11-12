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
        $__internal_e1e4ade9611792cb98ce04af7c281bd4e4a79582852f99b3ba317d3619bbd7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e4ade9611792cb98ce04af7c281bd4e4a79582852f99b3ba317d3619bbd7a2->enter($__internal_e1e4ade9611792cb98ce04af7c281bd4e4a79582852f99b3ba317d3619bbd7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2c8af0c1f27d967b5b7b1142e69b03804b695c74b2e22e2d8355cab3a437cf71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8af0c1f27d967b5b7b1142e69b03804b695c74b2e22e2d8355cab3a437cf71->enter($__internal_2c8af0c1f27d967b5b7b1142e69b03804b695c74b2e22e2d8355cab3a437cf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-primary\">
\t\t\t<div class=\"container\">
\t\t\t  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t    <span class=\"navbar-toggler-icon\"></span>
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">Sébastien Vallet</a>
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
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "                </div>
            </div>
        </div>

        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"js/bootstrap.min.js\"></script>
        ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>
";
        
        $__internal_e1e4ade9611792cb98ce04af7c281bd4e4a79582852f99b3ba317d3619bbd7a2->leave($__internal_e1e4ade9611792cb98ce04af7c281bd4e4a79582852f99b3ba317d3619bbd7a2_prof);

        
        $__internal_2c8af0c1f27d967b5b7b1142e69b03804b695c74b2e22e2d8355cab3a437cf71->leave($__internal_2c8af0c1f27d967b5b7b1142e69b03804b695c74b2e22e2d8355cab3a437cf71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a49dedd07d58d8f07caf1e7575f72227780eb6ad2125e3da7ede8bf38437f343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49dedd07d58d8f07caf1e7575f72227780eb6ad2125e3da7ede8bf38437f343->enter($__internal_a49dedd07d58d8f07caf1e7575f72227780eb6ad2125e3da7ede8bf38437f343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83bc994a06340b7fac4ea33830f309b89b0e65d0dbb0ba2da5330dbfbc7f22f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bc994a06340b7fac4ea33830f309b89b0e65d0dbb0ba2da5330dbfbc7f22f9->enter($__internal_83bc994a06340b7fac4ea33830f309b89b0e65d0dbb0ba2da5330dbfbc7f22f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Sébastien Vallet";
        
        $__internal_83bc994a06340b7fac4ea33830f309b89b0e65d0dbb0ba2da5330dbfbc7f22f9->leave($__internal_83bc994a06340b7fac4ea33830f309b89b0e65d0dbb0ba2da5330dbfbc7f22f9_prof);

        
        $__internal_a49dedd07d58d8f07caf1e7575f72227780eb6ad2125e3da7ede8bf38437f343->leave($__internal_a49dedd07d58d8f07caf1e7575f72227780eb6ad2125e3da7ede8bf38437f343_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f488be239fc9dc07a1873cc4886d6808a380a0df87f701df5ce6f57057b4014e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f488be239fc9dc07a1873cc4886d6808a380a0df87f701df5ce6f57057b4014e->enter($__internal_f488be239fc9dc07a1873cc4886d6808a380a0df87f701df5ce6f57057b4014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ca5c7b96498aeafcf4f50d9e3e6ec5b689a31b13a48420415cb9d02779b4e0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5c7b96498aeafcf4f50d9e3e6ec5b689a31b13a48420415cb9d02779b4e0ea->enter($__internal_ca5c7b96498aeafcf4f50d9e3e6ec5b689a31b13a48420415cb9d02779b4e0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca5c7b96498aeafcf4f50d9e3e6ec5b689a31b13a48420415cb9d02779b4e0ea->leave($__internal_ca5c7b96498aeafcf4f50d9e3e6ec5b689a31b13a48420415cb9d02779b4e0ea_prof);

        
        $__internal_f488be239fc9dc07a1873cc4886d6808a380a0df87f701df5ce6f57057b4014e->leave($__internal_f488be239fc9dc07a1873cc4886d6808a380a0df87f701df5ce6f57057b4014e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_314f3ef412c1a83b789f171ee092ab8df7086b3b480c8f6edaebf49f605d1bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314f3ef412c1a83b789f171ee092ab8df7086b3b480c8f6edaebf49f605d1bcc->enter($__internal_314f3ef412c1a83b789f171ee092ab8df7086b3b480c8f6edaebf49f605d1bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e3084e53a27ee0c87c7fd9410c9c43aab02b0e5a85eaf55513604b9b58c4f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3084e53a27ee0c87c7fd9410c9c43aab02b0e5a85eaf55513604b9b58c4f2d->enter($__internal_5e3084e53a27ee0c87c7fd9410c9c43aab02b0e5a85eaf55513604b9b58c4f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e3084e53a27ee0c87c7fd9410c9c43aab02b0e5a85eaf55513604b9b58c4f2d->leave($__internal_5e3084e53a27ee0c87c7fd9410c9c43aab02b0e5a85eaf55513604b9b58c4f2d_prof);

        
        $__internal_314f3ef412c1a83b789f171ee092ab8df7086b3b480c8f6edaebf49f605d1bcc->leave($__internal_314f3ef412c1a83b789f171ee092ab8df7086b3b480c8f6edaebf49f605d1bcc_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db4cbda771046956a660e83c1fd48867f0ea80c3eb11d62941267ddee7da09ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4cbda771046956a660e83c1fd48867f0ea80c3eb11d62941267ddee7da09ae->enter($__internal_db4cbda771046956a660e83c1fd48867f0ea80c3eb11d62941267ddee7da09ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ecf22131e21932c97b0a412068447e9b2553893ce020d149945b7ccd319094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecf22131e21932c97b0a412068447e9b2553893ce020d149945b7ccd319094d->enter($__internal_7ecf22131e21932c97b0a412068447e9b2553893ce020d149945b7ccd319094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ecf22131e21932c97b0a412068447e9b2553893ce020d149945b7ccd319094d->leave($__internal_7ecf22131e21932c97b0a412068447e9b2553893ce020d149945b7ccd319094d_prof);

        
        $__internal_db4cbda771046956a660e83c1fd48867f0ea80c3eb11d62941267ddee7da09ae->leave($__internal_db4cbda771046956a660e83c1fd48867f0ea80c3eb11d62941267ddee7da09ae_prof);

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
        return array (  177 => 70,  160 => 62,  143 => 8,  125 => 5,  113 => 71,  111 => 70,  102 => 63,  100 => 62,  43 => 9,  41 => 8,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Portfolio Sébastien Vallet{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t\t<nav class=\"navbar navbar-toggleable-md navbar-inverse bg-primary\">
\t\t\t<div class=\"container\">
\t\t\t  <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t    <span class=\"navbar-toggler-icon\"></span>
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">Sébastien Vallet</a>
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
