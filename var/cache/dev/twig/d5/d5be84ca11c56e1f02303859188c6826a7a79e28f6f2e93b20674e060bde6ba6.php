<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_d68435f39849729a53be08b659373db5715558cfbc28d24a7abd6c532fcafe5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68435f39849729a53be08b659373db5715558cfbc28d24a7abd6c532fcafe5c->enter($__internal_d68435f39849729a53be08b659373db5715558cfbc28d24a7abd6c532fcafe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cf2acae3d7699115aef665ccc1e5f4e6a329f8f951b25f60c861e982e6484090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2acae3d7699115aef665ccc1e5f4e6a329f8f951b25f60c861e982e6484090->enter($__internal_cf2acae3d7699115aef665ccc1e5f4e6a329f8f951b25f60c861e982e6484090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d68435f39849729a53be08b659373db5715558cfbc28d24a7abd6c532fcafe5c->leave($__internal_d68435f39849729a53be08b659373db5715558cfbc28d24a7abd6c532fcafe5c_prof);

        
        $__internal_cf2acae3d7699115aef665ccc1e5f4e6a329f8f951b25f60c861e982e6484090->leave($__internal_cf2acae3d7699115aef665ccc1e5f4e6a329f8f951b25f60c861e982e6484090_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a26de963b297da7a18915c5b4dd40b11ec1ae472c3bcafa3f6816f43e2c7bbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26de963b297da7a18915c5b4dd40b11ec1ae472c3bcafa3f6816f43e2c7bbd8->enter($__internal_a26de963b297da7a18915c5b4dd40b11ec1ae472c3bcafa3f6816f43e2c7bbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1163740256ed0ae3833ce09fe919c4c5d5a8cecfb9ca225e94259d95d4c9df1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1163740256ed0ae3833ce09fe919c4c5d5a8cecfb9ca225e94259d95d4c9df1c->enter($__internal_1163740256ed0ae3833ce09fe919c4c5d5a8cecfb9ca225e94259d95d4c9df1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1163740256ed0ae3833ce09fe919c4c5d5a8cecfb9ca225e94259d95d4c9df1c->leave($__internal_1163740256ed0ae3833ce09fe919c4c5d5a8cecfb9ca225e94259d95d4c9df1c_prof);

        
        $__internal_a26de963b297da7a18915c5b4dd40b11ec1ae472c3bcafa3f6816f43e2c7bbd8->leave($__internal_a26de963b297da7a18915c5b4dd40b11ec1ae472c3bcafa3f6816f43e2c7bbd8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_791d2b912062d2e7b78c301fd5b557136873d0a5602c5f42d1266fde587673ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791d2b912062d2e7b78c301fd5b557136873d0a5602c5f42d1266fde587673ca->enter($__internal_791d2b912062d2e7b78c301fd5b557136873d0a5602c5f42d1266fde587673ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af8eadfbf743e7c79bd48dde5d13daa820d3fedb885a319fbf227e6a0db85be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8eadfbf743e7c79bd48dde5d13daa820d3fedb885a319fbf227e6a0db85be4->enter($__internal_af8eadfbf743e7c79bd48dde5d13daa820d3fedb885a319fbf227e6a0db85be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_af8eadfbf743e7c79bd48dde5d13daa820d3fedb885a319fbf227e6a0db85be4->leave($__internal_af8eadfbf743e7c79bd48dde5d13daa820d3fedb885a319fbf227e6a0db85be4_prof);

        
        $__internal_791d2b912062d2e7b78c301fd5b557136873d0a5602c5f42d1266fde587673ca->leave($__internal_791d2b912062d2e7b78c301fd5b557136873d0a5602c5f42d1266fde587673ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a542d42bc438a3fea109ffa0df58abf6962173d9e50354e66a37585e5df50e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a542d42bc438a3fea109ffa0df58abf6962173d9e50354e66a37585e5df50e2->enter($__internal_5a542d42bc438a3fea109ffa0df58abf6962173d9e50354e66a37585e5df50e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94bfcf966c72e0a253f68bf43cff59cfbb2eda699d9309ad701c39a09670a78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bfcf966c72e0a253f68bf43cff59cfbb2eda699d9309ad701c39a09670a78f->enter($__internal_94bfcf966c72e0a253f68bf43cff59cfbb2eda699d9309ad701c39a09670a78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_94bfcf966c72e0a253f68bf43cff59cfbb2eda699d9309ad701c39a09670a78f->leave($__internal_94bfcf966c72e0a253f68bf43cff59cfbb2eda699d9309ad701c39a09670a78f_prof);

        
        $__internal_5a542d42bc438a3fea109ffa0df58abf6962173d9e50354e66a37585e5df50e2->leave($__internal_5a542d42bc438a3fea109ffa0df58abf6962173d9e50354e66a37585e5df50e2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/media/data/User/Google Drive/Programmation/Symfony/folio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
