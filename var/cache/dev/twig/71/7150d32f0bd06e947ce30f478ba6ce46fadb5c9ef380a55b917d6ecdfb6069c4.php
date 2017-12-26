<?php

/* folio/cv.html.twig */
class __TwigTemplate_992ef67857ddf6f62781c4dc5cee6dfc834351e1414f23470387460678caaa45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/cv.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c2724b1e677cbceb20d572eb4c4f579652357a5903243b51acdc04b7f8a724b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2724b1e677cbceb20d572eb4c4f579652357a5903243b51acdc04b7f8a724b->enter($__internal_5c2724b1e677cbceb20d572eb4c4f579652357a5903243b51acdc04b7f8a724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $__internal_c4e70cb53aed67c81e532179d87fd21da52ae5727731c2e51f9ba156e137c1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e70cb53aed67c81e532179d87fd21da52ae5727731c2e51f9ba156e137c1cb->enter($__internal_c4e70cb53aed67c81e532179d87fd21da52ae5727731c2e51f9ba156e137c1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c2724b1e677cbceb20d572eb4c4f579652357a5903243b51acdc04b7f8a724b->leave($__internal_5c2724b1e677cbceb20d572eb4c4f579652357a5903243b51acdc04b7f8a724b_prof);

        
        $__internal_c4e70cb53aed67c81e532179d87fd21da52ae5727731c2e51f9ba156e137c1cb->leave($__internal_c4e70cb53aed67c81e532179d87fd21da52ae5727731c2e51f9ba156e137c1cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf723224c2190bd9a9119e38a64691e88f3f522dbac5fb4d91f3114620bf3135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf723224c2190bd9a9119e38a64691e88f3f522dbac5fb4d91f3114620bf3135->enter($__internal_bf723224c2190bd9a9119e38a64691e88f3f522dbac5fb4d91f3114620bf3135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47f1206cd416923859f78abc9718794db7dc0b52b6aabed3276e76520426a842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f1206cd416923859f78abc9718794db7dc0b52b6aabed3276e76520426a842->enter($__internal_47f1206cd416923859f78abc9718794db7dc0b52b6aabed3276e76520426a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"skill-title-1 text-center\">Curriculum vitae</h1>
    <embed src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ressources/cv.pdf?#zoom=100"), "html", null, true);
        echo "\" width=\"100%\" height=\"1200\" type=\"application/pdf\"/>
";
        
        $__internal_47f1206cd416923859f78abc9718794db7dc0b52b6aabed3276e76520426a842->leave($__internal_47f1206cd416923859f78abc9718794db7dc0b52b6aabed3276e76520426a842_prof);

        
        $__internal_bf723224c2190bd9a9119e38a64691e88f3f522dbac5fb4d91f3114620bf3135->leave($__internal_bf723224c2190bd9a9119e38a64691e88f3f522dbac5fb4d91f3114620bf3135_prof);

    }

    public function getTemplateName()
    {
        return "folio/cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"skill-title-1 text-center\">Curriculum vitae</h1>
    <embed src=\"{{asset('ressources/cv.pdf?#zoom=100')}}\" width=\"100%\" height=\"1200\" type=\"application/pdf\"/>
{% endblock %}", "folio/cv.html.twig", "/media/data/User/Google Drive/Programmation/Symfony/folio/app/Resources/views/folio/cv.html.twig");
    }
}
