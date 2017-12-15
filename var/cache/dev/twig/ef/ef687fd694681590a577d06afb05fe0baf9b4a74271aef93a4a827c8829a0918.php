<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_09b79a2c3e2f5879ae52c9a1d728386e77c4873feac38b2ffb89ac22aa98b449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b79a2c3e2f5879ae52c9a1d728386e77c4873feac38b2ffb89ac22aa98b449->enter($__internal_09b79a2c3e2f5879ae52c9a1d728386e77c4873feac38b2ffb89ac22aa98b449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_811a018a4c53844d9746cd5f2c3a4c9d3853c5a4623d82a868af5441ca1dfd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811a018a4c53844d9746cd5f2c3a4c9d3853c5a4623d82a868af5441ca1dfd2f->enter($__internal_811a018a4c53844d9746cd5f2c3a4c9d3853c5a4623d82a868af5441ca1dfd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b79a2c3e2f5879ae52c9a1d728386e77c4873feac38b2ffb89ac22aa98b449->leave($__internal_09b79a2c3e2f5879ae52c9a1d728386e77c4873feac38b2ffb89ac22aa98b449_prof);

        
        $__internal_811a018a4c53844d9746cd5f2c3a4c9d3853c5a4623d82a868af5441ca1dfd2f->leave($__internal_811a018a4c53844d9746cd5f2c3a4c9d3853c5a4623d82a868af5441ca1dfd2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2def74ebfaea0e54d343f5c5f677d40a6a9a2aef8cbc205e83b1a3855e11173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2def74ebfaea0e54d343f5c5f677d40a6a9a2aef8cbc205e83b1a3855e11173->enter($__internal_c2def74ebfaea0e54d343f5c5f677d40a6a9a2aef8cbc205e83b1a3855e11173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_69841392c993a02a43c362750d5020dc66e7b61320fc1380e37a9ecd44f20b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69841392c993a02a43c362750d5020dc66e7b61320fc1380e37a9ecd44f20b52->enter($__internal_69841392c993a02a43c362750d5020dc66e7b61320fc1380e37a9ecd44f20b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69841392c993a02a43c362750d5020dc66e7b61320fc1380e37a9ecd44f20b52->leave($__internal_69841392c993a02a43c362750d5020dc66e7b61320fc1380e37a9ecd44f20b52_prof);

        
        $__internal_c2def74ebfaea0e54d343f5c5f677d40a6a9a2aef8cbc205e83b1a3855e11173->leave($__internal_c2def74ebfaea0e54d343f5c5f677d40a6a9a2aef8cbc205e83b1a3855e11173_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20051a50e48348386cc04f4accd24726de681f6056b271623d492159597be6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20051a50e48348386cc04f4accd24726de681f6056b271623d492159597be6e5->enter($__internal_20051a50e48348386cc04f4accd24726de681f6056b271623d492159597be6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22341a32724423fe504ac31dc8ece72a5887e0710193446e92555842951462d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22341a32724423fe504ac31dc8ece72a5887e0710193446e92555842951462d3->enter($__internal_22341a32724423fe504ac31dc8ece72a5887e0710193446e92555842951462d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22341a32724423fe504ac31dc8ece72a5887e0710193446e92555842951462d3->leave($__internal_22341a32724423fe504ac31dc8ece72a5887e0710193446e92555842951462d3_prof);

        
        $__internal_20051a50e48348386cc04f4accd24726de681f6056b271623d492159597be6e5->leave($__internal_20051a50e48348386cc04f4accd24726de681f6056b271623d492159597be6e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2627ac1bbd275e8f705541d8a5df99daad52fe627abfcc1f8f4b9b7ad99d25e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2627ac1bbd275e8f705541d8a5df99daad52fe627abfcc1f8f4b9b7ad99d25e0->enter($__internal_2627ac1bbd275e8f705541d8a5df99daad52fe627abfcc1f8f4b9b7ad99d25e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db735d805cc24c515cc3356590cfdf53dd43c178d9b143b5b416d2adf085d9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db735d805cc24c515cc3356590cfdf53dd43c178d9b143b5b416d2adf085d9f8->enter($__internal_db735d805cc24c515cc3356590cfdf53dd43c178d9b143b5b416d2adf085d9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db735d805cc24c515cc3356590cfdf53dd43c178d9b143b5b416d2adf085d9f8->leave($__internal_db735d805cc24c515cc3356590cfdf53dd43c178d9b143b5b416d2adf085d9f8_prof);

        
        $__internal_2627ac1bbd275e8f705541d8a5df99daad52fe627abfcc1f8f4b9b7ad99d25e0->leave($__internal_2627ac1bbd275e8f705541d8a5df99daad52fe627abfcc1f8f4b9b7ad99d25e0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
