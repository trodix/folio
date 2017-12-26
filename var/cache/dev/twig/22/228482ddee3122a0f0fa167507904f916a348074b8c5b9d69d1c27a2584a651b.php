<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7f9ef577faef357a172e6ba4d7892a15a1e56f5fd91733d4526b6a90faecf3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bac2400d0a6c371e235a6ee21de7864c16c2851410bd8fb0b0fe021f6390b60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac2400d0a6c371e235a6ee21de7864c16c2851410bd8fb0b0fe021f6390b60a->enter($__internal_bac2400d0a6c371e235a6ee21de7864c16c2851410bd8fb0b0fe021f6390b60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0b4ffedc56c1b8e8fc3190d6be0d5cba0048f9d45adc8a31aa4cba3454b23214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4ffedc56c1b8e8fc3190d6be0d5cba0048f9d45adc8a31aa4cba3454b23214->enter($__internal_0b4ffedc56c1b8e8fc3190d6be0d5cba0048f9d45adc8a31aa4cba3454b23214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac2400d0a6c371e235a6ee21de7864c16c2851410bd8fb0b0fe021f6390b60a->leave($__internal_bac2400d0a6c371e235a6ee21de7864c16c2851410bd8fb0b0fe021f6390b60a_prof);

        
        $__internal_0b4ffedc56c1b8e8fc3190d6be0d5cba0048f9d45adc8a31aa4cba3454b23214->leave($__internal_0b4ffedc56c1b8e8fc3190d6be0d5cba0048f9d45adc8a31aa4cba3454b23214_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf0b0122f8a8edb7158faecc1778d074e400dd2a2b34c1f6e440630e5cf337a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0b0122f8a8edb7158faecc1778d074e400dd2a2b34c1f6e440630e5cf337a1->enter($__internal_bf0b0122f8a8edb7158faecc1778d074e400dd2a2b34c1f6e440630e5cf337a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_74e562272b21e586d6f297cddc42d8cc68d5dead936fe9439c1c1ba67d28219f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e562272b21e586d6f297cddc42d8cc68d5dead936fe9439c1c1ba67d28219f->enter($__internal_74e562272b21e586d6f297cddc42d8cc68d5dead936fe9439c1c1ba67d28219f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_74e562272b21e586d6f297cddc42d8cc68d5dead936fe9439c1c1ba67d28219f->leave($__internal_74e562272b21e586d6f297cddc42d8cc68d5dead936fe9439c1c1ba67d28219f_prof);

        
        $__internal_bf0b0122f8a8edb7158faecc1778d074e400dd2a2b34c1f6e440630e5cf337a1->leave($__internal_bf0b0122f8a8edb7158faecc1778d074e400dd2a2b34c1f6e440630e5cf337a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/media/data/User/Google Drive/Programmation/Symfony/folio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
