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
        $__internal_0d92bc73a2063281bc92f24e66fd5429ce45a27991c2c9ad135413bf7905afa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d92bc73a2063281bc92f24e66fd5429ce45a27991c2c9ad135413bf7905afa8->enter($__internal_0d92bc73a2063281bc92f24e66fd5429ce45a27991c2c9ad135413bf7905afa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_38d77ff7d5f7bd88dd6c423b5ff077a91b832de0206518e4eb7c8b8300abbd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d77ff7d5f7bd88dd6c423b5ff077a91b832de0206518e4eb7c8b8300abbd42->enter($__internal_38d77ff7d5f7bd88dd6c423b5ff077a91b832de0206518e4eb7c8b8300abbd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d92bc73a2063281bc92f24e66fd5429ce45a27991c2c9ad135413bf7905afa8->leave($__internal_0d92bc73a2063281bc92f24e66fd5429ce45a27991c2c9ad135413bf7905afa8_prof);

        
        $__internal_38d77ff7d5f7bd88dd6c423b5ff077a91b832de0206518e4eb7c8b8300abbd42->leave($__internal_38d77ff7d5f7bd88dd6c423b5ff077a91b832de0206518e4eb7c8b8300abbd42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79c017e89275cdfd952076448246efd1b6dc4c2a0965c077b5433b66b02f8c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c017e89275cdfd952076448246efd1b6dc4c2a0965c077b5433b66b02f8c9d->enter($__internal_79c017e89275cdfd952076448246efd1b6dc4c2a0965c077b5433b66b02f8c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed618a5ec3cea7f2c1af970de727b048384c67642d45d1fc36bd7871f31380a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed618a5ec3cea7f2c1af970de727b048384c67642d45d1fc36bd7871f31380a8->enter($__internal_ed618a5ec3cea7f2c1af970de727b048384c67642d45d1fc36bd7871f31380a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed618a5ec3cea7f2c1af970de727b048384c67642d45d1fc36bd7871f31380a8->leave($__internal_ed618a5ec3cea7f2c1af970de727b048384c67642d45d1fc36bd7871f31380a8_prof);

        
        $__internal_79c017e89275cdfd952076448246efd1b6dc4c2a0965c077b5433b66b02f8c9d->leave($__internal_79c017e89275cdfd952076448246efd1b6dc4c2a0965c077b5433b66b02f8c9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1e60e9cf01ac71f6f7946e79525e9e35b41a20930dbb4d16636de299f20552e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e60e9cf01ac71f6f7946e79525e9e35b41a20930dbb4d16636de299f20552e->enter($__internal_f1e60e9cf01ac71f6f7946e79525e9e35b41a20930dbb4d16636de299f20552e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed40c458d13c130cf360b65619d6552624b44104d620e36fda0af9fe2a53b966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed40c458d13c130cf360b65619d6552624b44104d620e36fda0af9fe2a53b966->enter($__internal_ed40c458d13c130cf360b65619d6552624b44104d620e36fda0af9fe2a53b966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed40c458d13c130cf360b65619d6552624b44104d620e36fda0af9fe2a53b966->leave($__internal_ed40c458d13c130cf360b65619d6552624b44104d620e36fda0af9fe2a53b966_prof);

        
        $__internal_f1e60e9cf01ac71f6f7946e79525e9e35b41a20930dbb4d16636de299f20552e->leave($__internal_f1e60e9cf01ac71f6f7946e79525e9e35b41a20930dbb4d16636de299f20552e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e268a56bbada93ba2220faa5e7a115cb2cbd24e22a7924c978d3a73d13c88eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e268a56bbada93ba2220faa5e7a115cb2cbd24e22a7924c978d3a73d13c88eeb->enter($__internal_e268a56bbada93ba2220faa5e7a115cb2cbd24e22a7924c978d3a73d13c88eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd00ba8f889cc57680a05c06ebea9274162ee1aa8a8af576d477b53747f1eeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd00ba8f889cc57680a05c06ebea9274162ee1aa8a8af576d477b53747f1eeb6->enter($__internal_fd00ba8f889cc57680a05c06ebea9274162ee1aa8a8af576d477b53747f1eeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd00ba8f889cc57680a05c06ebea9274162ee1aa8a8af576d477b53747f1eeb6->leave($__internal_fd00ba8f889cc57680a05c06ebea9274162ee1aa8a8af576d477b53747f1eeb6_prof);

        
        $__internal_e268a56bbada93ba2220faa5e7a115cb2cbd24e22a7924c978d3a73d13c88eeb->leave($__internal_e268a56bbada93ba2220faa5e7a115cb2cbd24e22a7924c978d3a73d13c88eeb_prof);

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
