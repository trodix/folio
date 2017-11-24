<?php

/* folio/cv.html.twig */
class __TwigTemplate_28c7fd0cb397fe6f827c877505fd2de822dc45e8305d9892e2d75534fc0c6a9e extends Twig_Template
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
        $__internal_d962d1d3a3e277a1bdfefea7539eb9454e285e3e4ffc5943aeb3ad3ac4b11bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d962d1d3a3e277a1bdfefea7539eb9454e285e3e4ffc5943aeb3ad3ac4b11bd8->enter($__internal_d962d1d3a3e277a1bdfefea7539eb9454e285e3e4ffc5943aeb3ad3ac4b11bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $__internal_635f3828ab3eb627dacd45abdb8d35823299a1f1a285c9ba55b48d35c13ca291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635f3828ab3eb627dacd45abdb8d35823299a1f1a285c9ba55b48d35c13ca291->enter($__internal_635f3828ab3eb627dacd45abdb8d35823299a1f1a285c9ba55b48d35c13ca291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d962d1d3a3e277a1bdfefea7539eb9454e285e3e4ffc5943aeb3ad3ac4b11bd8->leave($__internal_d962d1d3a3e277a1bdfefea7539eb9454e285e3e4ffc5943aeb3ad3ac4b11bd8_prof);

        
        $__internal_635f3828ab3eb627dacd45abdb8d35823299a1f1a285c9ba55b48d35c13ca291->leave($__internal_635f3828ab3eb627dacd45abdb8d35823299a1f1a285c9ba55b48d35c13ca291_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eda00fbffcfa09d921beb8fbc73bcdea77088884cb83a49dd11356cb45c533e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda00fbffcfa09d921beb8fbc73bcdea77088884cb83a49dd11356cb45c533e0->enter($__internal_eda00fbffcfa09d921beb8fbc73bcdea77088884cb83a49dd11356cb45c533e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96250c26021637c14efba9290e8491d25bfacb5987dae4850f8c1850311649cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96250c26021637c14efba9290e8491d25bfacb5987dae4850f8c1850311649cf->enter($__internal_96250c26021637c14efba9290e8491d25bfacb5987dae4850f8c1850311649cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"skill-title-1 text-center\">Curriculum vitae</h1>
    <embed src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ressources/cv.pdf?#zoom=100"), "html", null, true);
        echo "\" width=\"100%\" height=\"1200\" type=\"application/pdf\"/>
";
        
        $__internal_96250c26021637c14efba9290e8491d25bfacb5987dae4850f8c1850311649cf->leave($__internal_96250c26021637c14efba9290e8491d25bfacb5987dae4850f8c1850311649cf_prof);

        
        $__internal_eda00fbffcfa09d921beb8fbc73bcdea77088884cb83a49dd11356cb45c533e0->leave($__internal_eda00fbffcfa09d921beb8fbc73bcdea77088884cb83a49dd11356cb45c533e0_prof);

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
{% endblock %}", "folio/cv.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\cv.html.twig");
    }
}
