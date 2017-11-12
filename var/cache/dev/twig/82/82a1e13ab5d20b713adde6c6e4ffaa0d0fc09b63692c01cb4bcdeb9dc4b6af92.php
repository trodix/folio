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
        $__internal_394e3401440ed0171e647268af34bfc047e6fe7e000cd7d203443d56b63e1a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394e3401440ed0171e647268af34bfc047e6fe7e000cd7d203443d56b63e1a0a->enter($__internal_394e3401440ed0171e647268af34bfc047e6fe7e000cd7d203443d56b63e1a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_85a8308cd02a857c10b895be1033480b7c9dfc60a87d75418ddb939ba6fb52ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a8308cd02a857c10b895be1033480b7c9dfc60a87d75418ddb939ba6fb52ec->enter($__internal_85a8308cd02a857c10b895be1033480b7c9dfc60a87d75418ddb939ba6fb52ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394e3401440ed0171e647268af34bfc047e6fe7e000cd7d203443d56b63e1a0a->leave($__internal_394e3401440ed0171e647268af34bfc047e6fe7e000cd7d203443d56b63e1a0a_prof);

        
        $__internal_85a8308cd02a857c10b895be1033480b7c9dfc60a87d75418ddb939ba6fb52ec->leave($__internal_85a8308cd02a857c10b895be1033480b7c9dfc60a87d75418ddb939ba6fb52ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1656cdaeff72f2d1c9305b8c3dfb2bbfd080fdba7bcbd9349435f7083264a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1656cdaeff72f2d1c9305b8c3dfb2bbfd080fdba7bcbd9349435f7083264a80->enter($__internal_e1656cdaeff72f2d1c9305b8c3dfb2bbfd080fdba7bcbd9349435f7083264a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_27b0c946a6d947650bb3bba1d8f560b3d1ecb60ef0aadb2a4f0b4701f0272998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b0c946a6d947650bb3bba1d8f560b3d1ecb60ef0aadb2a4f0b4701f0272998->enter($__internal_27b0c946a6d947650bb3bba1d8f560b3d1ecb60ef0aadb2a4f0b4701f0272998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_27b0c946a6d947650bb3bba1d8f560b3d1ecb60ef0aadb2a4f0b4701f0272998->leave($__internal_27b0c946a6d947650bb3bba1d8f560b3d1ecb60ef0aadb2a4f0b4701f0272998_prof);

        
        $__internal_e1656cdaeff72f2d1c9305b8c3dfb2bbfd080fdba7bcbd9349435f7083264a80->leave($__internal_e1656cdaeff72f2d1c9305b8c3dfb2bbfd080fdba7bcbd9349435f7083264a80_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3b1da6526b389790cbf97cd629a57466137849d1693f43810f466063e0c03df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b1da6526b389790cbf97cd629a57466137849d1693f43810f466063e0c03df->enter($__internal_c3b1da6526b389790cbf97cd629a57466137849d1693f43810f466063e0c03df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cf8ef4d558473395df5ba286f9d55d2272d8a400be615de989456ca7a380abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf8ef4d558473395df5ba286f9d55d2272d8a400be615de989456ca7a380abd->enter($__internal_7cf8ef4d558473395df5ba286f9d55d2272d8a400be615de989456ca7a380abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7cf8ef4d558473395df5ba286f9d55d2272d8a400be615de989456ca7a380abd->leave($__internal_7cf8ef4d558473395df5ba286f9d55d2272d8a400be615de989456ca7a380abd_prof);

        
        $__internal_c3b1da6526b389790cbf97cd629a57466137849d1693f43810f466063e0c03df->leave($__internal_c3b1da6526b389790cbf97cd629a57466137849d1693f43810f466063e0c03df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5ca421c4d398cc1883c8b6ff4a46cb05a9af90b0307e5d1fdfcc8e5fcd2e0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ca421c4d398cc1883c8b6ff4a46cb05a9af90b0307e5d1fdfcc8e5fcd2e0f6->enter($__internal_e5ca421c4d398cc1883c8b6ff4a46cb05a9af90b0307e5d1fdfcc8e5fcd2e0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af0da988a578c03a81423a8c4c01655e4258670700d645051402bbd6419c157f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0da988a578c03a81423a8c4c01655e4258670700d645051402bbd6419c157f->enter($__internal_af0da988a578c03a81423a8c4c01655e4258670700d645051402bbd6419c157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_af0da988a578c03a81423a8c4c01655e4258670700d645051402bbd6419c157f->leave($__internal_af0da988a578c03a81423a8c4c01655e4258670700d645051402bbd6419c157f_prof);

        
        $__internal_e5ca421c4d398cc1883c8b6ff4a46cb05a9af90b0307e5d1fdfcc8e5fcd2e0f6->leave($__internal_e5ca421c4d398cc1883c8b6ff4a46cb05a9af90b0307e5d1fdfcc8e5fcd2e0f6_prof);

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
