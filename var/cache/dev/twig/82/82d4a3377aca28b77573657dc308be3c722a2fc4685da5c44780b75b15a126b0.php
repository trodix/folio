<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3b9604a97d57bbdadb1a34ad398ad27a9f9a0e4dd666ca03a9e1a9c4db89be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b9604a97d57bbdadb1a34ad398ad27a9f9a0e4dd666ca03a9e1a9c4db89be7->enter($__internal_f3b9604a97d57bbdadb1a34ad398ad27a9f9a0e4dd666ca03a9e1a9c4db89be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_445205e059e71445dbeed3aa185331f18275c2f42ca3091c07cc89375e7a085d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445205e059e71445dbeed3aa185331f18275c2f42ca3091c07cc89375e7a085d->enter($__internal_445205e059e71445dbeed3aa185331f18275c2f42ca3091c07cc89375e7a085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b9604a97d57bbdadb1a34ad398ad27a9f9a0e4dd666ca03a9e1a9c4db89be7->leave($__internal_f3b9604a97d57bbdadb1a34ad398ad27a9f9a0e4dd666ca03a9e1a9c4db89be7_prof);

        
        $__internal_445205e059e71445dbeed3aa185331f18275c2f42ca3091c07cc89375e7a085d->leave($__internal_445205e059e71445dbeed3aa185331f18275c2f42ca3091c07cc89375e7a085d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d5a041429dc362755f54717bf72c0cbd6ab31f4fc093419195794c738998194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5a041429dc362755f54717bf72c0cbd6ab31f4fc093419195794c738998194->enter($__internal_3d5a041429dc362755f54717bf72c0cbd6ab31f4fc093419195794c738998194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae1b922f14982a1af8adb1d69659b831076cf3c5a34aaf17d0cac7f9846cc5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1b922f14982a1af8adb1d69659b831076cf3c5a34aaf17d0cac7f9846cc5c9->enter($__internal_ae1b922f14982a1af8adb1d69659b831076cf3c5a34aaf17d0cac7f9846cc5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae1b922f14982a1af8adb1d69659b831076cf3c5a34aaf17d0cac7f9846cc5c9->leave($__internal_ae1b922f14982a1af8adb1d69659b831076cf3c5a34aaf17d0cac7f9846cc5c9_prof);

        
        $__internal_3d5a041429dc362755f54717bf72c0cbd6ab31f4fc093419195794c738998194->leave($__internal_3d5a041429dc362755f54717bf72c0cbd6ab31f4fc093419195794c738998194_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08dd258287bde52fcf98d4b3b5d7b363470a376bc87381a6105f92f6f5f51493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08dd258287bde52fcf98d4b3b5d7b363470a376bc87381a6105f92f6f5f51493->enter($__internal_08dd258287bde52fcf98d4b3b5d7b363470a376bc87381a6105f92f6f5f51493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_059141f687d30500b7a7619cc6ec7fcd4dcde26ed6557a7d68484ddceecc4bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059141f687d30500b7a7619cc6ec7fcd4dcde26ed6557a7d68484ddceecc4bf0->enter($__internal_059141f687d30500b7a7619cc6ec7fcd4dcde26ed6557a7d68484ddceecc4bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_059141f687d30500b7a7619cc6ec7fcd4dcde26ed6557a7d68484ddceecc4bf0->leave($__internal_059141f687d30500b7a7619cc6ec7fcd4dcde26ed6557a7d68484ddceecc4bf0_prof);

        
        $__internal_08dd258287bde52fcf98d4b3b5d7b363470a376bc87381a6105f92f6f5f51493->leave($__internal_08dd258287bde52fcf98d4b3b5d7b363470a376bc87381a6105f92f6f5f51493_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9ebe704954f987fce20e87dfe01322b42363ee1e67f1a6eef22d491529aa902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ebe704954f987fce20e87dfe01322b42363ee1e67f1a6eef22d491529aa902->enter($__internal_f9ebe704954f987fce20e87dfe01322b42363ee1e67f1a6eef22d491529aa902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1512fa8d92f9f9d5b004a997378ede45ed95c737dedb8eb094ce782635639df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1512fa8d92f9f9d5b004a997378ede45ed95c737dedb8eb094ce782635639df6->enter($__internal_1512fa8d92f9f9d5b004a997378ede45ed95c737dedb8eb094ce782635639df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1512fa8d92f9f9d5b004a997378ede45ed95c737dedb8eb094ce782635639df6->leave($__internal_1512fa8d92f9f9d5b004a997378ede45ed95c737dedb8eb094ce782635639df6_prof);

        
        $__internal_f9ebe704954f987fce20e87dfe01322b42363ee1e67f1a6eef22d491529aa902->leave($__internal_f9ebe704954f987fce20e87dfe01322b42363ee1e67f1a6eef22d491529aa902_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
