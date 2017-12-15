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
        $__internal_6bb259d6a78a778eb1f0d1fbfa0e287eb414aa25068a7a789a7cf7dfc170e24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb259d6a78a778eb1f0d1fbfa0e287eb414aa25068a7a789a7cf7dfc170e24a->enter($__internal_6bb259d6a78a778eb1f0d1fbfa0e287eb414aa25068a7a789a7cf7dfc170e24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4f2e6c3634ba3c5d79ee82d9de92c3e05be00947cb4e3b1221cd841506d96d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2e6c3634ba3c5d79ee82d9de92c3e05be00947cb4e3b1221cd841506d96d7f->enter($__internal_4f2e6c3634ba3c5d79ee82d9de92c3e05be00947cb4e3b1221cd841506d96d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6bb259d6a78a778eb1f0d1fbfa0e287eb414aa25068a7a789a7cf7dfc170e24a->leave($__internal_6bb259d6a78a778eb1f0d1fbfa0e287eb414aa25068a7a789a7cf7dfc170e24a_prof);

        
        $__internal_4f2e6c3634ba3c5d79ee82d9de92c3e05be00947cb4e3b1221cd841506d96d7f->leave($__internal_4f2e6c3634ba3c5d79ee82d9de92c3e05be00947cb4e3b1221cd841506d96d7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_886c461a1e79d6d1196da734acf8e1bd03e5f7f0075bf37cf5c15353abd47d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886c461a1e79d6d1196da734acf8e1bd03e5f7f0075bf37cf5c15353abd47d77->enter($__internal_886c461a1e79d6d1196da734acf8e1bd03e5f7f0075bf37cf5c15353abd47d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef554bfc8c17ba6c539d3f9367eddccda17fd9f71978e16c3a39cf611cf27ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef554bfc8c17ba6c539d3f9367eddccda17fd9f71978e16c3a39cf611cf27ee0->enter($__internal_ef554bfc8c17ba6c539d3f9367eddccda17fd9f71978e16c3a39cf611cf27ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ef554bfc8c17ba6c539d3f9367eddccda17fd9f71978e16c3a39cf611cf27ee0->leave($__internal_ef554bfc8c17ba6c539d3f9367eddccda17fd9f71978e16c3a39cf611cf27ee0_prof);

        
        $__internal_886c461a1e79d6d1196da734acf8e1bd03e5f7f0075bf37cf5c15353abd47d77->leave($__internal_886c461a1e79d6d1196da734acf8e1bd03e5f7f0075bf37cf5c15353abd47d77_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c51072db7d42bfe9a69affff4438b095129c4f16d29eeb1435bd0c03dd3425c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c51072db7d42bfe9a69affff4438b095129c4f16d29eeb1435bd0c03dd3425c->enter($__internal_6c51072db7d42bfe9a69affff4438b095129c4f16d29eeb1435bd0c03dd3425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f93d260c4ecf49c1d2c6062dd347a6e69267ad6e45f04f4f6bb24ca9698ecbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93d260c4ecf49c1d2c6062dd347a6e69267ad6e45f04f4f6bb24ca9698ecbe8->enter($__internal_f93d260c4ecf49c1d2c6062dd347a6e69267ad6e45f04f4f6bb24ca9698ecbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f93d260c4ecf49c1d2c6062dd347a6e69267ad6e45f04f4f6bb24ca9698ecbe8->leave($__internal_f93d260c4ecf49c1d2c6062dd347a6e69267ad6e45f04f4f6bb24ca9698ecbe8_prof);

        
        $__internal_6c51072db7d42bfe9a69affff4438b095129c4f16d29eeb1435bd0c03dd3425c->leave($__internal_6c51072db7d42bfe9a69affff4438b095129c4f16d29eeb1435bd0c03dd3425c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b09c0781eaf751a30b488effbeba3e2c1f9d267d72078d4f80778d98f2bf9c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09c0781eaf751a30b488effbeba3e2c1f9d267d72078d4f80778d98f2bf9c2b->enter($__internal_b09c0781eaf751a30b488effbeba3e2c1f9d267d72078d4f80778d98f2bf9c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc9e726fa1b1ed2b546095b86238440cc879c37f98ff1df3f99e7aa7eb39be29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9e726fa1b1ed2b546095b86238440cc879c37f98ff1df3f99e7aa7eb39be29->enter($__internal_bc9e726fa1b1ed2b546095b86238440cc879c37f98ff1df3f99e7aa7eb39be29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc9e726fa1b1ed2b546095b86238440cc879c37f98ff1df3f99e7aa7eb39be29->leave($__internal_bc9e726fa1b1ed2b546095b86238440cc879c37f98ff1df3f99e7aa7eb39be29_prof);

        
        $__internal_b09c0781eaf751a30b488effbeba3e2c1f9d267d72078d4f80778d98f2bf9c2b->leave($__internal_b09c0781eaf751a30b488effbeba3e2c1f9d267d72078d4f80778d98f2bf9c2b_prof);

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
