<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_68c24a84335ec3cbdb2be79ea22248e5fff143988841493387cf59f20961d0f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c24a84335ec3cbdb2be79ea22248e5fff143988841493387cf59f20961d0f4->enter($__internal_68c24a84335ec3cbdb2be79ea22248e5fff143988841493387cf59f20961d0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ae5350dd9b6dc07c0aa23c7f2b7757251e571d86c3211fe79690201c0089c260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5350dd9b6dc07c0aa23c7f2b7757251e571d86c3211fe79690201c0089c260->enter($__internal_ae5350dd9b6dc07c0aa23c7f2b7757251e571d86c3211fe79690201c0089c260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c24a84335ec3cbdb2be79ea22248e5fff143988841493387cf59f20961d0f4->leave($__internal_68c24a84335ec3cbdb2be79ea22248e5fff143988841493387cf59f20961d0f4_prof);

        
        $__internal_ae5350dd9b6dc07c0aa23c7f2b7757251e571d86c3211fe79690201c0089c260->leave($__internal_ae5350dd9b6dc07c0aa23c7f2b7757251e571d86c3211fe79690201c0089c260_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_758193fa29db6cff9dd7fe28bf90cca5c2cd4c9923ec2bfc2baba0eb29740f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758193fa29db6cff9dd7fe28bf90cca5c2cd4c9923ec2bfc2baba0eb29740f72->enter($__internal_758193fa29db6cff9dd7fe28bf90cca5c2cd4c9923ec2bfc2baba0eb29740f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_69ed2d4081e8ec2bddaee16b07939509aac9f3cd40dfc768573e880bdb65bda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ed2d4081e8ec2bddaee16b07939509aac9f3cd40dfc768573e880bdb65bda5->enter($__internal_69ed2d4081e8ec2bddaee16b07939509aac9f3cd40dfc768573e880bdb65bda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_69ed2d4081e8ec2bddaee16b07939509aac9f3cd40dfc768573e880bdb65bda5->leave($__internal_69ed2d4081e8ec2bddaee16b07939509aac9f3cd40dfc768573e880bdb65bda5_prof);

        
        $__internal_758193fa29db6cff9dd7fe28bf90cca5c2cd4c9923ec2bfc2baba0eb29740f72->leave($__internal_758193fa29db6cff9dd7fe28bf90cca5c2cd4c9923ec2bfc2baba0eb29740f72_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afd6938c44335209af608d6e4a6f2d9434899eec0358e4f5600b95f6f343a0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd6938c44335209af608d6e4a6f2d9434899eec0358e4f5600b95f6f343a0e3->enter($__internal_afd6938c44335209af608d6e4a6f2d9434899eec0358e4f5600b95f6f343a0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2748164c55a4ea0fa4cba2b4eb831318fd4dccc10321a478e3c6880a79b1829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2748164c55a4ea0fa4cba2b4eb831318fd4dccc10321a478e3c6880a79b1829->enter($__internal_c2748164c55a4ea0fa4cba2b4eb831318fd4dccc10321a478e3c6880a79b1829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c2748164c55a4ea0fa4cba2b4eb831318fd4dccc10321a478e3c6880a79b1829->leave($__internal_c2748164c55a4ea0fa4cba2b4eb831318fd4dccc10321a478e3c6880a79b1829_prof);

        
        $__internal_afd6938c44335209af608d6e4a6f2d9434899eec0358e4f5600b95f6f343a0e3->leave($__internal_afd6938c44335209af608d6e4a6f2d9434899eec0358e4f5600b95f6f343a0e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4016a44d051c054a3bd9214bb548036fc386f621f3922bf19020adbf6ec42288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4016a44d051c054a3bd9214bb548036fc386f621f3922bf19020adbf6ec42288->enter($__internal_4016a44d051c054a3bd9214bb548036fc386f621f3922bf19020adbf6ec42288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41f9790430eb3fa883faaf2d893657cdd395c11d9a77d8e5bc9e5dcf959ed958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f9790430eb3fa883faaf2d893657cdd395c11d9a77d8e5bc9e5dcf959ed958->enter($__internal_41f9790430eb3fa883faaf2d893657cdd395c11d9a77d8e5bc9e5dcf959ed958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_41f9790430eb3fa883faaf2d893657cdd395c11d9a77d8e5bc9e5dcf959ed958->leave($__internal_41f9790430eb3fa883faaf2d893657cdd395c11d9a77d8e5bc9e5dcf959ed958_prof);

        
        $__internal_4016a44d051c054a3bd9214bb548036fc386f621f3922bf19020adbf6ec42288->leave($__internal_4016a44d051c054a3bd9214bb548036fc386f621f3922bf19020adbf6ec42288_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
