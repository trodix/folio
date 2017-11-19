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
        $__internal_13a543bf7b1129f3d88deaf10c6cd6e1d097bb1066e4989bab674fd2aefc32b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a543bf7b1129f3d88deaf10c6cd6e1d097bb1066e4989bab674fd2aefc32b8->enter($__internal_13a543bf7b1129f3d88deaf10c6cd6e1d097bb1066e4989bab674fd2aefc32b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_ef8651372e4d55d9eae9288e9a91e57194a199da16f623c38ec82a7b1366d996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8651372e4d55d9eae9288e9a91e57194a199da16f623c38ec82a7b1366d996->enter($__internal_ef8651372e4d55d9eae9288e9a91e57194a199da16f623c38ec82a7b1366d996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a543bf7b1129f3d88deaf10c6cd6e1d097bb1066e4989bab674fd2aefc32b8->leave($__internal_13a543bf7b1129f3d88deaf10c6cd6e1d097bb1066e4989bab674fd2aefc32b8_prof);

        
        $__internal_ef8651372e4d55d9eae9288e9a91e57194a199da16f623c38ec82a7b1366d996->leave($__internal_ef8651372e4d55d9eae9288e9a91e57194a199da16f623c38ec82a7b1366d996_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ec4156364a3373b22706279b05999efa71ee9348095ddb319b5260ccbe00562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec4156364a3373b22706279b05999efa71ee9348095ddb319b5260ccbe00562->enter($__internal_1ec4156364a3373b22706279b05999efa71ee9348095ddb319b5260ccbe00562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dfb8f2113a1205363e9e32624bdae5e25d3af06b214eaa0b5fa52086b72a977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfb8f2113a1205363e9e32624bdae5e25d3af06b214eaa0b5fa52086b72a977->enter($__internal_4dfb8f2113a1205363e9e32624bdae5e25d3af06b214eaa0b5fa52086b72a977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4dfb8f2113a1205363e9e32624bdae5e25d3af06b214eaa0b5fa52086b72a977->leave($__internal_4dfb8f2113a1205363e9e32624bdae5e25d3af06b214eaa0b5fa52086b72a977_prof);

        
        $__internal_1ec4156364a3373b22706279b05999efa71ee9348095ddb319b5260ccbe00562->leave($__internal_1ec4156364a3373b22706279b05999efa71ee9348095ddb319b5260ccbe00562_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be8340dfb22d9cfb32e03703a058e4255601a3af2ac12cd3016b1a54deb44238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8340dfb22d9cfb32e03703a058e4255601a3af2ac12cd3016b1a54deb44238->enter($__internal_be8340dfb22d9cfb32e03703a058e4255601a3af2ac12cd3016b1a54deb44238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3d2fcc5febe1e1ecaca75ba5faed349e123e5f8ce9bee8261383b4053d5e7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d2fcc5febe1e1ecaca75ba5faed349e123e5f8ce9bee8261383b4053d5e7d3->enter($__internal_c3d2fcc5febe1e1ecaca75ba5faed349e123e5f8ce9bee8261383b4053d5e7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "        
    ";
        
        $__internal_c3d2fcc5febe1e1ecaca75ba5faed349e123e5f8ce9bee8261383b4053d5e7d3->leave($__internal_c3d2fcc5febe1e1ecaca75ba5faed349e123e5f8ce9bee8261383b4053d5e7d3_prof);

        
        $__internal_be8340dfb22d9cfb32e03703a058e4255601a3af2ac12cd3016b1a54deb44238->leave($__internal_be8340dfb22d9cfb32e03703a058e4255601a3af2ac12cd3016b1a54deb44238_prof);

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
