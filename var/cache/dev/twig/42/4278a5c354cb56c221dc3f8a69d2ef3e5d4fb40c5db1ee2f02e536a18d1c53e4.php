<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95daa172c4a84f4f221b7f550965a44837e9a48140963e9db7a4d94baf4dc73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95daa172c4a84f4f221b7f550965a44837e9a48140963e9db7a4d94baf4dc73e->enter($__internal_95daa172c4a84f4f221b7f550965a44837e9a48140963e9db7a4d94baf4dc73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_23a1d7d7ee2e47bd43107efd3aed071ba5256bcadda3685e412044123752e577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a1d7d7ee2e47bd43107efd3aed071ba5256bcadda3685e412044123752e577->enter($__internal_23a1d7d7ee2e47bd43107efd3aed071ba5256bcadda3685e412044123752e577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_95daa172c4a84f4f221b7f550965a44837e9a48140963e9db7a4d94baf4dc73e->leave($__internal_95daa172c4a84f4f221b7f550965a44837e9a48140963e9db7a4d94baf4dc73e_prof);

        
        $__internal_23a1d7d7ee2e47bd43107efd3aed071ba5256bcadda3685e412044123752e577->leave($__internal_23a1d7d7ee2e47bd43107efd3aed071ba5256bcadda3685e412044123752e577_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d5dc2afa8504a8db0468255377e0f3937d12602d4fb8369f940aece77401d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5dc2afa8504a8db0468255377e0f3937d12602d4fb8369f940aece77401d2e->enter($__internal_4d5dc2afa8504a8db0468255377e0f3937d12602d4fb8369f940aece77401d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e95a1e4bcda2db437ab5d24e761de5de23b9d7f67a6a8dc03473dd89818944a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95a1e4bcda2db437ab5d24e761de5de23b9d7f67a6a8dc03473dd89818944a1->enter($__internal_e95a1e4bcda2db437ab5d24e761de5de23b9d7f67a6a8dc03473dd89818944a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e95a1e4bcda2db437ab5d24e761de5de23b9d7f67a6a8dc03473dd89818944a1->leave($__internal_e95a1e4bcda2db437ab5d24e761de5de23b9d7f67a6a8dc03473dd89818944a1_prof);

        
        $__internal_4d5dc2afa8504a8db0468255377e0f3937d12602d4fb8369f940aece77401d2e->leave($__internal_4d5dc2afa8504a8db0468255377e0f3937d12602d4fb8369f940aece77401d2e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0046fb839d116ed9f9c421f4caa4be2abde55a4b52390d23c0bed7de7442020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0046fb839d116ed9f9c421f4caa4be2abde55a4b52390d23c0bed7de7442020->enter($__internal_f0046fb839d116ed9f9c421f4caa4be2abde55a4b52390d23c0bed7de7442020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_048a44a7422d33ef662a94825d24b7f28d252b2c428d134adf9d4efff9ed0a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048a44a7422d33ef662a94825d24b7f28d252b2c428d134adf9d4efff9ed0a73->enter($__internal_048a44a7422d33ef662a94825d24b7f28d252b2c428d134adf9d4efff9ed0a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_048a44a7422d33ef662a94825d24b7f28d252b2c428d134adf9d4efff9ed0a73->leave($__internal_048a44a7422d33ef662a94825d24b7f28d252b2c428d134adf9d4efff9ed0a73_prof);

        
        $__internal_f0046fb839d116ed9f9c421f4caa4be2abde55a4b52390d23c0bed7de7442020->leave($__internal_f0046fb839d116ed9f9c421f4caa4be2abde55a4b52390d23c0bed7de7442020_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_68583bb479804c2f041f8ba9f938d9b10586f6dea0e1ca1976e44101c05955fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68583bb479804c2f041f8ba9f938d9b10586f6dea0e1ca1976e44101c05955fe->enter($__internal_68583bb479804c2f041f8ba9f938d9b10586f6dea0e1ca1976e44101c05955fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e92890f77499baf51609d48bbcd33a63e11e9d2c2485fd4dd86bf667516e4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e92890f77499baf51609d48bbcd33a63e11e9d2c2485fd4dd86bf667516e4f0->enter($__internal_4e92890f77499baf51609d48bbcd33a63e11e9d2c2485fd4dd86bf667516e4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e92890f77499baf51609d48bbcd33a63e11e9d2c2485fd4dd86bf667516e4f0->leave($__internal_4e92890f77499baf51609d48bbcd33a63e11e9d2c2485fd4dd86bf667516e4f0_prof);

        
        $__internal_68583bb479804c2f041f8ba9f938d9b10586f6dea0e1ca1976e44101c05955fe->leave($__internal_68583bb479804c2f041f8ba9f938d9b10586f6dea0e1ca1976e44101c05955fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
