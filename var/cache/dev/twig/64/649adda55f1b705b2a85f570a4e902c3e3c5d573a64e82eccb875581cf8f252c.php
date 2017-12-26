<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_3e764a00079e0fd6d45da17fe02501afd3f898783b3c4f0a8d816b270fd9115d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e764a00079e0fd6d45da17fe02501afd3f898783b3c4f0a8d816b270fd9115d->enter($__internal_3e764a00079e0fd6d45da17fe02501afd3f898783b3c4f0a8d816b270fd9115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d307534284693e54c49fb4a99fabefc4d8892b935df7a9e16ef961dffd489560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d307534284693e54c49fb4a99fabefc4d8892b935df7a9e16ef961dffd489560->enter($__internal_d307534284693e54c49fb4a99fabefc4d8892b935df7a9e16ef961dffd489560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e764a00079e0fd6d45da17fe02501afd3f898783b3c4f0a8d816b270fd9115d->leave($__internal_3e764a00079e0fd6d45da17fe02501afd3f898783b3c4f0a8d816b270fd9115d_prof);

        
        $__internal_d307534284693e54c49fb4a99fabefc4d8892b935df7a9e16ef961dffd489560->leave($__internal_d307534284693e54c49fb4a99fabefc4d8892b935df7a9e16ef961dffd489560_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f236ab110eec2ac4fed62add25b6aa77af22837fe66312e0bdb179c485d6823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f236ab110eec2ac4fed62add25b6aa77af22837fe66312e0bdb179c485d6823->enter($__internal_6f236ab110eec2ac4fed62add25b6aa77af22837fe66312e0bdb179c485d6823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2ed65910551c1eb05244de9f5019e19a329fcbaf781ca4e52d059dd041fa9d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed65910551c1eb05244de9f5019e19a329fcbaf781ca4e52d059dd041fa9d01->enter($__internal_2ed65910551c1eb05244de9f5019e19a329fcbaf781ca4e52d059dd041fa9d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ed65910551c1eb05244de9f5019e19a329fcbaf781ca4e52d059dd041fa9d01->leave($__internal_2ed65910551c1eb05244de9f5019e19a329fcbaf781ca4e52d059dd041fa9d01_prof);

        
        $__internal_6f236ab110eec2ac4fed62add25b6aa77af22837fe66312e0bdb179c485d6823->leave($__internal_6f236ab110eec2ac4fed62add25b6aa77af22837fe66312e0bdb179c485d6823_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98c701f74db1f1414579dd34b696f0767036251aec31bfa914ed2999c0524900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c701f74db1f1414579dd34b696f0767036251aec31bfa914ed2999c0524900->enter($__internal_98c701f74db1f1414579dd34b696f0767036251aec31bfa914ed2999c0524900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34b5967ec3136e1ecc6814937707812bdcbe0fd099d6bad6af1d2b4ac5a5df00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b5967ec3136e1ecc6814937707812bdcbe0fd099d6bad6af1d2b4ac5a5df00->enter($__internal_34b5967ec3136e1ecc6814937707812bdcbe0fd099d6bad6af1d2b4ac5a5df00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34b5967ec3136e1ecc6814937707812bdcbe0fd099d6bad6af1d2b4ac5a5df00->leave($__internal_34b5967ec3136e1ecc6814937707812bdcbe0fd099d6bad6af1d2b4ac5a5df00_prof);

        
        $__internal_98c701f74db1f1414579dd34b696f0767036251aec31bfa914ed2999c0524900->leave($__internal_98c701f74db1f1414579dd34b696f0767036251aec31bfa914ed2999c0524900_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ad5120df384a71bc175263c31c00c9f76c3ddd8966288b0160feef7afd66f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad5120df384a71bc175263c31c00c9f76c3ddd8966288b0160feef7afd66f71->enter($__internal_4ad5120df384a71bc175263c31c00c9f76c3ddd8966288b0160feef7afd66f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d866d841306b06089febe1bc428a4878ee8dfa96a15efb37c8c683cc696cc4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d866d841306b06089febe1bc428a4878ee8dfa96a15efb37c8c683cc696cc4f9->enter($__internal_d866d841306b06089febe1bc428a4878ee8dfa96a15efb37c8c683cc696cc4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d866d841306b06089febe1bc428a4878ee8dfa96a15efb37c8c683cc696cc4f9->leave($__internal_d866d841306b06089febe1bc428a4878ee8dfa96a15efb37c8c683cc696cc4f9_prof);

        
        $__internal_4ad5120df384a71bc175263c31c00c9f76c3ddd8966288b0160feef7afd66f71->leave($__internal_4ad5120df384a71bc175263c31c00c9f76c3ddd8966288b0160feef7afd66f71_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/media/data/User/Google Drive/Programmation/Symfony/folio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
