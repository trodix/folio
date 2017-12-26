<?php

/* folio/contact.html.twig */
class __TwigTemplate_3b60e4dd8e9430f04abf7a737ca320d608cf7d219da98fb842fea35826464a71 extends Twig_Template
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
        $__internal_94a10ff57b98b88a2ec0dbd7e9d9793d090cd1a8147d83f7f6c4b7f2f934a120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a10ff57b98b88a2ec0dbd7e9d9793d090cd1a8147d83f7f6c4b7f2f934a120->enter($__internal_94a10ff57b98b88a2ec0dbd7e9d9793d090cd1a8147d83f7f6c4b7f2f934a120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_92506f80a1854907db6ac78aa2e964be1251976096d5e1a106d05592daba2356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92506f80a1854907db6ac78aa2e964be1251976096d5e1a106d05592daba2356->enter($__internal_92506f80a1854907db6ac78aa2e964be1251976096d5e1a106d05592daba2356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a10ff57b98b88a2ec0dbd7e9d9793d090cd1a8147d83f7f6c4b7f2f934a120->leave($__internal_94a10ff57b98b88a2ec0dbd7e9d9793d090cd1a8147d83f7f6c4b7f2f934a120_prof);

        
        $__internal_92506f80a1854907db6ac78aa2e964be1251976096d5e1a106d05592daba2356->leave($__internal_92506f80a1854907db6ac78aa2e964be1251976096d5e1a106d05592daba2356_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7d35a1f51912a081c735143ebfb03d341c29385ee9a89dbba8d7fa16213291b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d35a1f51912a081c735143ebfb03d341c29385ee9a89dbba8d7fa16213291b->enter($__internal_c7d35a1f51912a081c735143ebfb03d341c29385ee9a89dbba8d7fa16213291b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a5d0cf2a04aaa2de164b553e7f08ef44d8dd2685941201433639bc9d47b4bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5d0cf2a04aaa2de164b553e7f08ef44d8dd2685941201433639bc9d47b4bf3->enter($__internal_5a5d0cf2a04aaa2de164b553e7f08ef44d8dd2685941201433639bc9d47b4bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 48
        if (( !(null === $this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "success", array())) && ($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "success", array()) == false))) {
            // line 49
            echo "            <div class=\"alert alert-danger\">
                Une erreur s'est produite, le message n'a pas pu être envoyé.
            </div>
        ";
        } elseif (($this->getAttribute(        // line 52
($context["reponse"] ?? $this->getContext($context, "reponse")), "success", array()) == true)) {
            // line 53
            echo "            <div class=\"alert alert-success\">
                Votre message a bien été envoyé.
            </div>
        ";
        }
        // line 57
        echo "    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/email.png"), "html", null, true);
        echo "\">
    </div>
</div>

    ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
";
        
        $__internal_5a5d0cf2a04aaa2de164b553e7f08ef44d8dd2685941201433639bc9d47b4bf3->leave($__internal_5a5d0cf2a04aaa2de164b553e7f08ef44d8dd2685941201433639bc9d47b4bf3_prof);

        
        $__internal_c7d35a1f51912a081c735143ebfb03d341c29385ee9a89dbba8d7fa16213291b->leave($__internal_c7d35a1f51912a081c735143ebfb03d341c29385ee9a89dbba8d7fa16213291b_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aee98ac444cc76c19616ff652c83d20ce6a81a7701d97dfc574db7e6cd958464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee98ac444cc76c19616ff652c83d20ce6a81a7701d97dfc574db7e6cd958464->enter($__internal_aee98ac444cc76c19616ff652c83d20ce6a81a7701d97dfc574db7e6cd958464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5243b8433deb4ac99af971647fa185415c34d9f79bf723f34ab38a4d18381766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5243b8433deb4ac99af971647fa185415c34d9f79bf723f34ab38a4d18381766->enter($__internal_5243b8433deb4ac99af971647fa185415c34d9f79bf723f34ab38a4d18381766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "        
    ";
        
        $__internal_5243b8433deb4ac99af971647fa185415c34d9f79bf723f34ab38a4d18381766->leave($__internal_5243b8433deb4ac99af971647fa185415c34d9f79bf723f34ab38a4d18381766_prof);

        
        $__internal_aee98ac444cc76c19616ff652c83d20ce6a81a7701d97dfc574db7e6cd958464->leave($__internal_aee98ac444cc76c19616ff652c83d20ce6a81a7701d97dfc574db7e6cd958464_prof);

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
        return array (  144 => 64,  135 => 63,  124 => 66,  122 => 63,  115 => 59,  111 => 57,  105 => 53,  103 => 52,  98 => 49,  96 => 48,  50 => 4,  41 => 3,  11 => 1,);
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
        {% if reponse.success is not null and reponse.success == false %}
            <div class=\"alert alert-danger\">
                Une erreur s'est produite, le message n'a pas pu être envoyé.
            </div>
        {% elseif reponse.success == true %}
            <div class=\"alert alert-success\">
                Votre message a bien été envoyé.
            </div>
        {% endif %}
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"{{asset('img/email.png')}}\">
    </div>
</div>

    {% block javascripts %}
        
    {% endblock %}

{% endblock %}
    
", "folio/contact.html.twig", "/media/data/User/Google Drive/Programmation/Symfony/folio/app/Resources/views/folio/contact.html.twig");
    }
}
