<?php

/* folio/contact.html.twig */
class __TwigTemplate_7e2a14be592bb218c8b502707486fff93a189f2eb54fe7ab4d12c30af80d589e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e90fb5a7653d2f00ea13a4306589cbf326b28b86d1e67d1f9792bdf625d1f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e90fb5a7653d2f00ea13a4306589cbf326b28b86d1e67d1f9792bdf625d1f6b->enter($__internal_9e90fb5a7653d2f00ea13a4306589cbf326b28b86d1e67d1f9792bdf625d1f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_20bc18b6ee2f226aa324006e82777d1129d099c39e37ea1bccaa8b803d2a691e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bc18b6ee2f226aa324006e82777d1129d099c39e37ea1bccaa8b803d2a691e->enter($__internal_20bc18b6ee2f226aa324006e82777d1129d099c39e37ea1bccaa8b803d2a691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e90fb5a7653d2f00ea13a4306589cbf326b28b86d1e67d1f9792bdf625d1f6b->leave($__internal_9e90fb5a7653d2f00ea13a4306589cbf326b28b86d1e67d1f9792bdf625d1f6b_prof);

        
        $__internal_20bc18b6ee2f226aa324006e82777d1129d099c39e37ea1bccaa8b803d2a691e->leave($__internal_20bc18b6ee2f226aa324006e82777d1129d099c39e37ea1bccaa8b803d2a691e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d3d628988077f9e59b0334919a37cd16181b1d0de253853a4713e1eddb2ad30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3d628988077f9e59b0334919a37cd16181b1d0de253853a4713e1eddb2ad30->enter($__internal_3d3d628988077f9e59b0334919a37cd16181b1d0de253853a4713e1eddb2ad30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81bee91c2c5fb267d812f392f6aec4ad3dc834f9321bdb2b2998385b40f8633b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bee91c2c5fb267d812f392f6aec4ad3dc834f9321bdb2b2998385b40f8633b->enter($__internal_81bee91c2c5fb267d812f392f6aec4ad3dc834f9321bdb2b2998385b40f8633b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1 class=\"skill-title-1\">Me contacter</h1>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" action=\"/contact\" class=\"\" method=\"post\">
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactNom\" name=\"contact[lastName]\" placeholder=\"Nom\" required=\"required\" type=\"text\">
                    </div>
                </div>
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactPrenom\" name=\"contact[firstName]\" placeholder=\"Prénom\" required=\"required\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactEmail\" name=\"contact[mail]\" placeholder=\"email@domain.com\" required=\"required\" type=\"email\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"contactmessage\" name=\"contact[message]\" placeholder=\"Votre message\" required=\"required\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LcE5DEUAAAAAGzcP9DhVLQHyiscHqF5G9tGURG2\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\" type=\"submit\">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/email.png"), "html", null, true);
        echo "\">
    </div>
</div>

";
        // line 54
        if (($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "message", array()) != "")) {
            // line 55
            echo "<div class=\"alert alert-success\">
    ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "message", array()), "html", null, true);
            echo "
</div>
";
        }
        // line 59
        echo "
";
        
        $__internal_81bee91c2c5fb267d812f392f6aec4ad3dc834f9321bdb2b2998385b40f8633b->leave($__internal_81bee91c2c5fb267d812f392f6aec4ad3dc834f9321bdb2b2998385b40f8633b_prof);

        
        $__internal_3d3d628988077f9e59b0334919a37cd16181b1d0de253853a4713e1eddb2ad30->leave($__internal_3d3d628988077f9e59b0334919a37cd16181b1d0de253853a4713e1eddb2ad30_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b13a0f9db4eacbfbd7af5c789d55108564f3b8c7b96b72cfd912e02948e910f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13a0f9db4eacbfbd7af5c789d55108564f3b8c7b96b72cfd912e02948e910f3->enter($__internal_b13a0f9db4eacbfbd7af5c789d55108564f3b8c7b96b72cfd912e02948e910f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2bb26b3e6e5d152275ccb6ead9f0049fac59bd9212739b20632c43df7690ccbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb26b3e6e5d152275ccb6ead9f0049fac59bd9212739b20632c43df7690ccbb->enter($__internal_2bb26b3e6e5d152275ccb6ead9f0049fac59bd9212739b20632c43df7690ccbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script src='https://www.google.com/recaptcha/api.js'></script>
";
        
        $__internal_2bb26b3e6e5d152275ccb6ead9f0049fac59bd9212739b20632c43df7690ccbb->leave($__internal_2bb26b3e6e5d152275ccb6ead9f0049fac59bd9212739b20632c43df7690ccbb_prof);

        
        $__internal_b13a0f9db4eacbfbd7af5c789d55108564f3b8c7b96b72cfd912e02948e910f3->leave($__internal_b13a0f9db4eacbfbd7af5c789d55108564f3b8c7b96b72cfd912e02948e910f3_prof);

    }

    public function getTemplateName()
    {
        return "folio/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 63,  127 => 62,  116 => 59,  110 => 56,  107 => 55,  105 => 54,  98 => 50,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1 class=\"skill-title-1\">Me contacter</h1>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" action=\"/contact\" class=\"\" method=\"post\">
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactNom\" name=\"contact[lastName]\" placeholder=\"Nom\" required=\"required\" type=\"text\">
                    </div>
                </div>
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactPrenom\" name=\"contact[firstName]\" placeholder=\"Prénom\" required=\"required\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactEmail\" name=\"contact[mail]\" placeholder=\"email@domain.com\" required=\"required\" type=\"email\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"contactmessage\" name=\"contact[message]\" placeholder=\"Votre message\" required=\"required\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LcE5DEUAAAAAGzcP9DhVLQHyiscHqF5G9tGURG2\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\" type=\"submit\">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"{{asset('img/email.png')}}\">
    </div>
</div>

{% if reponse.message != \"\" %}
<div class=\"alert alert-success\">
    {{ reponse.message }}
</div>
{% endif %}

{% endblock %}

{% block javascripts %}
    <script src='https://www.google.com/recaptcha/api.js'></script>
{% endblock %}", "folio/contact.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\contact.html.twig");
    }
}
