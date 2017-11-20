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
        $__internal_494392022a15a8dc43424dd2bf3a39307768dc3b160e6825242fdd4c90996d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494392022a15a8dc43424dd2bf3a39307768dc3b160e6825242fdd4c90996d13->enter($__internal_494392022a15a8dc43424dd2bf3a39307768dc3b160e6825242fdd4c90996d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_b7d387a7f87c44d32376d6cf0f6130c8749d54f0fd7fdae88355c0408736e4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d387a7f87c44d32376d6cf0f6130c8749d54f0fd7fdae88355c0408736e4c5->enter($__internal_b7d387a7f87c44d32376d6cf0f6130c8749d54f0fd7fdae88355c0408736e4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494392022a15a8dc43424dd2bf3a39307768dc3b160e6825242fdd4c90996d13->leave($__internal_494392022a15a8dc43424dd2bf3a39307768dc3b160e6825242fdd4c90996d13_prof);

        
        $__internal_b7d387a7f87c44d32376d6cf0f6130c8749d54f0fd7fdae88355c0408736e4c5->leave($__internal_b7d387a7f87c44d32376d6cf0f6130c8749d54f0fd7fdae88355c0408736e4c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c62dd35994342d5a6ad95144a2480d93dfbdb84d5174d15141dc833f8dcdbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c62dd35994342d5a6ad95144a2480d93dfbdb84d5174d15141dc833f8dcdbeb->enter($__internal_5c62dd35994342d5a6ad95144a2480d93dfbdb84d5174d15141dc833f8dcdbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a8ce97aa32e967b187c021c975470d1ec99dc0511ec8e48168349191107bb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8ce97aa32e967b187c021c975470d1ec99dc0511ec8e48168349191107bb5b->enter($__internal_4a8ce97aa32e967b187c021c975470d1ec99dc0511ec8e48168349191107bb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1 class=\"skill-title-1\">Me contacter</h1>
<div class=\"row\" id=\"contact-form-contener\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" method=\"post\" id=\"form-contact\">
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
                        <input class=\"btn btn-primary\" type=\"submit\" name=\"contact[submit]\" value=\"Envoyer\">
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
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
";
        
        $__internal_4a8ce97aa32e967b187c021c975470d1ec99dc0511ec8e48168349191107bb5b->leave($__internal_4a8ce97aa32e967b187c021c975470d1ec99dc0511ec8e48168349191107bb5b_prof);

        
        $__internal_5c62dd35994342d5a6ad95144a2480d93dfbdb84d5174d15141dc833f8dcdbeb->leave($__internal_5c62dd35994342d5a6ad95144a2480d93dfbdb84d5174d15141dc833f8dcdbeb_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_399531894852cfe4adccaea9bdf04f386e93c9c2eefc39efeab406697e98edc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399531894852cfe4adccaea9bdf04f386e93c9c2eefc39efeab406697e98edc0->enter($__internal_399531894852cfe4adccaea9bdf04f386e93c9c2eefc39efeab406697e98edc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_21bd1d10aefc57b7a7d74593f416f3dc84e864e78bde20e4d69338871532c46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bd1d10aefc57b7a7d74593f416f3dc84e864e78bde20e4d69338871532c46a->enter($__internal_21bd1d10aefc57b7a7d74593f416f3dc84e864e78bde20e4d69338871532c46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "        
    ";
        
        $__internal_21bd1d10aefc57b7a7d74593f416f3dc84e864e78bde20e4d69338871532c46a->leave($__internal_21bd1d10aefc57b7a7d74593f416f3dc84e864e78bde20e4d69338871532c46a_prof);

        
        $__internal_399531894852cfe4adccaea9bdf04f386e93c9c2eefc39efeab406697e98edc0->leave($__internal_399531894852cfe4adccaea9bdf04f386e93c9c2eefc39efeab406697e98edc0_prof);

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
        return array (  127 => 55,  118 => 54,  107 => 57,  105 => 54,  98 => 50,  50 => 4,  41 => 3,  11 => 1,);
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
<div class=\"row\" id=\"contact-form-contener\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" method=\"post\" id=\"form-contact\">
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
                        <input class=\"btn btn-primary\" type=\"submit\" name=\"contact[submit]\" value=\"Envoyer\">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"{{asset('img/email.png')}}\">
    </div>
</div>

    {% block javascripts %}
        
    {% endblock %}

{% endblock %}
    
", "folio/contact.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\contact.html.twig");
    }
}
