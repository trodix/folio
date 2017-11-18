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
        $__internal_587a2dbd1661ff29d2106920f0fa73ef908a1b3cb111a9da7784c9e54673a27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587a2dbd1661ff29d2106920f0fa73ef908a1b3cb111a9da7784c9e54673a27d->enter($__internal_587a2dbd1661ff29d2106920f0fa73ef908a1b3cb111a9da7784c9e54673a27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_cad64a6479630463ffc8cdbed0dfd57bfc33d9d16a719620aeebc92a449fc24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad64a6479630463ffc8cdbed0dfd57bfc33d9d16a719620aeebc92a449fc24f->enter($__internal_cad64a6479630463ffc8cdbed0dfd57bfc33d9d16a719620aeebc92a449fc24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_587a2dbd1661ff29d2106920f0fa73ef908a1b3cb111a9da7784c9e54673a27d->leave($__internal_587a2dbd1661ff29d2106920f0fa73ef908a1b3cb111a9da7784c9e54673a27d_prof);

        
        $__internal_cad64a6479630463ffc8cdbed0dfd57bfc33d9d16a719620aeebc92a449fc24f->leave($__internal_cad64a6479630463ffc8cdbed0dfd57bfc33d9d16a719620aeebc92a449fc24f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af3975d515758f9bf2c1b147e50e0100bcf8bec67a524297e3082713049b9557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3975d515758f9bf2c1b147e50e0100bcf8bec67a524297e3082713049b9557->enter($__internal_af3975d515758f9bf2c1b147e50e0100bcf8bec67a524297e3082713049b9557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cb0b9c0a031fd8267991be2df1afa380ecc2594c2a010b7b4d8f678a80cfa66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb0b9c0a031fd8267991be2df1afa380ecc2594c2a010b7b4d8f678a80cfa66->enter($__internal_7cb0b9c0a031fd8267991be2df1afa380ecc2594c2a010b7b4d8f678a80cfa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1 class=\"skill-title-1\">Me contacter</h1>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" action=\"/contact\" class=\"\" method=\"post\">
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactNom\" name=\"contact[nom]\" placeholder=\"Nom\" required=\"required\" type=\"text\">
                    </div>
                </div>
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactPrenom\" name=\"contact[prenom]\" placeholder=\"Prénom\" required=\"required\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactEmail\" name=\"contact[email]\" placeholder=\"email@domain.com\" required=\"required\" type=\"email\">
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
        
        $__internal_7cb0b9c0a031fd8267991be2df1afa380ecc2594c2a010b7b4d8f678a80cfa66->leave($__internal_7cb0b9c0a031fd8267991be2df1afa380ecc2594c2a010b7b4d8f678a80cfa66_prof);

        
        $__internal_af3975d515758f9bf2c1b147e50e0100bcf8bec67a524297e3082713049b9557->leave($__internal_af3975d515758f9bf2c1b147e50e0100bcf8bec67a524297e3082713049b9557_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81a58f1ade10fe3b68f79079fd4da25eaac2e0397eba16d58afa6ea17f28e190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a58f1ade10fe3b68f79079fd4da25eaac2e0397eba16d58afa6ea17f28e190->enter($__internal_81a58f1ade10fe3b68f79079fd4da25eaac2e0397eba16d58afa6ea17f28e190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ad411894d781a7aad3f703f9b3e3002280a40fc36ad0162753566e97c13768ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad411894d781a7aad3f703f9b3e3002280a40fc36ad0162753566e97c13768ca->enter($__internal_ad411894d781a7aad3f703f9b3e3002280a40fc36ad0162753566e97c13768ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script src='https://www.google.com/recaptcha/api.js'></script>
";
        
        $__internal_ad411894d781a7aad3f703f9b3e3002280a40fc36ad0162753566e97c13768ca->leave($__internal_ad411894d781a7aad3f703f9b3e3002280a40fc36ad0162753566e97c13768ca_prof);

        
        $__internal_81a58f1ade10fe3b68f79079fd4da25eaac2e0397eba16d58afa6ea17f28e190->leave($__internal_81a58f1ade10fe3b68f79079fd4da25eaac2e0397eba16d58afa6ea17f28e190_prof);

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
        return array (  122 => 57,  113 => 56,  98 => 50,  50 => 4,  41 => 3,  11 => 1,);
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
                        <input class=\"form-control\" id=\"contactNom\" name=\"contact[nom]\" placeholder=\"Nom\" required=\"required\" type=\"text\">
                    </div>
                </div>
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactPrenom\" name=\"contact[prenom]\" placeholder=\"Prénom\" required=\"required\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactEmail\" name=\"contact[email]\" placeholder=\"email@domain.com\" required=\"required\" type=\"email\">
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

{% endblock %}

{% block javascripts %}
    <script src='https://www.google.com/recaptcha/api.js'></script>
{% endblock %}", "folio/contact.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\contact.html.twig");
    }
}
