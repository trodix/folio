<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
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
        $__internal_4868f05a4d4a1b45d92c9687021a5509556b954c97ac9f6c4f407ba9dfb7ce73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4868f05a4d4a1b45d92c9687021a5509556b954c97ac9f6c4f407ba9dfb7ce73->enter($__internal_4868f05a4d4a1b45d92c9687021a5509556b954c97ac9f6c4f407ba9dfb7ce73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8114ff6b835a6f30fa87b0adca792b9bdf300efa27e30371520f7ae04a83f510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8114ff6b835a6f30fa87b0adca792b9bdf300efa27e30371520f7ae04a83f510->enter($__internal_8114ff6b835a6f30fa87b0adca792b9bdf300efa27e30371520f7ae04a83f510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4868f05a4d4a1b45d92c9687021a5509556b954c97ac9f6c4f407ba9dfb7ce73->leave($__internal_4868f05a4d4a1b45d92c9687021a5509556b954c97ac9f6c4f407ba9dfb7ce73_prof);

        
        $__internal_8114ff6b835a6f30fa87b0adca792b9bdf300efa27e30371520f7ae04a83f510->leave($__internal_8114ff6b835a6f30fa87b0adca792b9bdf300efa27e30371520f7ae04a83f510_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b111d40323dc91da64c712ba4bd28cf1567cde28351dd7f15ce62a2b571a9e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b111d40323dc91da64c712ba4bd28cf1567cde28351dd7f15ce62a2b571a9e71->enter($__internal_b111d40323dc91da64c712ba4bd28cf1567cde28351dd7f15ce62a2b571a9e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_865bd65e08819866230c8710de742794ad20c102fe4b8d7413e9e537ab66ae45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865bd65e08819866230c8710de742794ad20c102fe4b8d7413e9e537ab66ae45->enter($__internal_865bd65e08819866230c8710de742794ad20c102fe4b8d7413e9e537ab66ae45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_865bd65e08819866230c8710de742794ad20c102fe4b8d7413e9e537ab66ae45->leave($__internal_865bd65e08819866230c8710de742794ad20c102fe4b8d7413e9e537ab66ae45_prof);

        
        $__internal_b111d40323dc91da64c712ba4bd28cf1567cde28351dd7f15ce62a2b571a9e71->leave($__internal_b111d40323dc91da64c712ba4bd28cf1567cde28351dd7f15ce62a2b571a9e71_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_27d1fa34812428cfdb0d1eeef9e3dfca48826e016542e7208a111576a8c99126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d1fa34812428cfdb0d1eeef9e3dfca48826e016542e7208a111576a8c99126->enter($__internal_27d1fa34812428cfdb0d1eeef9e3dfca48826e016542e7208a111576a8c99126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c653cd858aee2e03c5083615c59b9e1d32b1e0e9e6ca9f28e743a64faea32c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c653cd858aee2e03c5083615c59b9e1d32b1e0e9e6ca9f28e743a64faea32c2->enter($__internal_0c653cd858aee2e03c5083615c59b9e1d32b1e0e9e6ca9f28e743a64faea32c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0c653cd858aee2e03c5083615c59b9e1d32b1e0e9e6ca9f28e743a64faea32c2->leave($__internal_0c653cd858aee2e03c5083615c59b9e1d32b1e0e9e6ca9f28e743a64faea32c2_prof);

        
        $__internal_27d1fa34812428cfdb0d1eeef9e3dfca48826e016542e7208a111576a8c99126->leave($__internal_27d1fa34812428cfdb0d1eeef9e3dfca48826e016542e7208a111576a8c99126_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_973d0d08c531a94c965b1f480dbeb0f4157db4b709fbdb9f2ed2265e6ff75185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973d0d08c531a94c965b1f480dbeb0f4157db4b709fbdb9f2ed2265e6ff75185->enter($__internal_973d0d08c531a94c965b1f480dbeb0f4157db4b709fbdb9f2ed2265e6ff75185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4351f4b18b808f3909c06131ba55ab2f7c374d6fa4269264782fcbc97ce3e915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4351f4b18b808f3909c06131ba55ab2f7c374d6fa4269264782fcbc97ce3e915->enter($__internal_4351f4b18b808f3909c06131ba55ab2f7c374d6fa4269264782fcbc97ce3e915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4351f4b18b808f3909c06131ba55ab2f7c374d6fa4269264782fcbc97ce3e915->leave($__internal_4351f4b18b808f3909c06131ba55ab2f7c374d6fa4269264782fcbc97ce3e915_prof);

        
        $__internal_973d0d08c531a94c965b1f480dbeb0f4157db4b709fbdb9f2ed2265e6ff75185->leave($__internal_973d0d08c531a94c965b1f480dbeb0f4157db4b709fbdb9f2ed2265e6ff75185_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
