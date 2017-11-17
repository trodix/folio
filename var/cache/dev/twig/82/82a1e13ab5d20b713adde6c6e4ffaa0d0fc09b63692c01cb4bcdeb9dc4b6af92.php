<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6f7ab340f59dfce67275e6dd46a106699e243747f4daf2d91744be1ef2494d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7ab340f59dfce67275e6dd46a106699e243747f4daf2d91744be1ef2494d64->enter($__internal_6f7ab340f59dfce67275e6dd46a106699e243747f4daf2d91744be1ef2494d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_77cc4266599d8db88f83e812f0deab80c6128fba29024d1faf33680af51cf4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cc4266599d8db88f83e812f0deab80c6128fba29024d1faf33680af51cf4a9->enter($__internal_77cc4266599d8db88f83e812f0deab80c6128fba29024d1faf33680af51cf4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f7ab340f59dfce67275e6dd46a106699e243747f4daf2d91744be1ef2494d64->leave($__internal_6f7ab340f59dfce67275e6dd46a106699e243747f4daf2d91744be1ef2494d64_prof);

        
        $__internal_77cc4266599d8db88f83e812f0deab80c6128fba29024d1faf33680af51cf4a9->leave($__internal_77cc4266599d8db88f83e812f0deab80c6128fba29024d1faf33680af51cf4a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_625d4f658f991e8bebf530ede1519e8498da81ea5c3d1cbc4c17ea9c0c4f2f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625d4f658f991e8bebf530ede1519e8498da81ea5c3d1cbc4c17ea9c0c4f2f9a->enter($__internal_625d4f658f991e8bebf530ede1519e8498da81ea5c3d1cbc4c17ea9c0c4f2f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ce0c5a6a8fbe26f00b7a4fcb66264435907ac1ffcaed8cbd26f81895ef222d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce0c5a6a8fbe26f00b7a4fcb66264435907ac1ffcaed8cbd26f81895ef222d9->enter($__internal_9ce0c5a6a8fbe26f00b7a4fcb66264435907ac1ffcaed8cbd26f81895ef222d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9ce0c5a6a8fbe26f00b7a4fcb66264435907ac1ffcaed8cbd26f81895ef222d9->leave($__internal_9ce0c5a6a8fbe26f00b7a4fcb66264435907ac1ffcaed8cbd26f81895ef222d9_prof);

        
        $__internal_625d4f658f991e8bebf530ede1519e8498da81ea5c3d1cbc4c17ea9c0c4f2f9a->leave($__internal_625d4f658f991e8bebf530ede1519e8498da81ea5c3d1cbc4c17ea9c0c4f2f9a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44fa777cc59a9bdb27fd126f06a580f204a0856bb77fc168ffa351d471f4911c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fa777cc59a9bdb27fd126f06a580f204a0856bb77fc168ffa351d471f4911c->enter($__internal_44fa777cc59a9bdb27fd126f06a580f204a0856bb77fc168ffa351d471f4911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb028d339b5a2aa1445d5927014d365b9b4feb58d0d04c4a31629982056f8a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb028d339b5a2aa1445d5927014d365b9b4feb58d0d04c4a31629982056f8a73->enter($__internal_eb028d339b5a2aa1445d5927014d365b9b4feb58d0d04c4a31629982056f8a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_eb028d339b5a2aa1445d5927014d365b9b4feb58d0d04c4a31629982056f8a73->leave($__internal_eb028d339b5a2aa1445d5927014d365b9b4feb58d0d04c4a31629982056f8a73_prof);

        
        $__internal_44fa777cc59a9bdb27fd126f06a580f204a0856bb77fc168ffa351d471f4911c->leave($__internal_44fa777cc59a9bdb27fd126f06a580f204a0856bb77fc168ffa351d471f4911c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a38c0941be1e1de21a3bb9b5fdff22aaa6421f77116ebf050ddfc4ce3bb0ff43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38c0941be1e1de21a3bb9b5fdff22aaa6421f77116ebf050ddfc4ce3bb0ff43->enter($__internal_a38c0941be1e1de21a3bb9b5fdff22aaa6421f77116ebf050ddfc4ce3bb0ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_455eea8e6993b72552f0ac163074d4326859ea0a50969e50434322a9d15088dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455eea8e6993b72552f0ac163074d4326859ea0a50969e50434322a9d15088dc->enter($__internal_455eea8e6993b72552f0ac163074d4326859ea0a50969e50434322a9d15088dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_455eea8e6993b72552f0ac163074d4326859ea0a50969e50434322a9d15088dc->leave($__internal_455eea8e6993b72552f0ac163074d4326859ea0a50969e50434322a9d15088dc_prof);

        
        $__internal_a38c0941be1e1de21a3bb9b5fdff22aaa6421f77116ebf050ddfc4ce3bb0ff43->leave($__internal_a38c0941be1e1de21a3bb9b5fdff22aaa6421f77116ebf050ddfc4ce3bb0ff43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
