<?php

/* folio/grille.html.twig */
class __TwigTemplate_155d2d06483f1db6754baad23970d95697b14e10574dfc74df69344e39f49a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/grille.html.twig", 1);
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
        $__internal_7663982a91b1e830d6df0a56e8d4f40d8dcc2b53e90429e38206217e084f4f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7663982a91b1e830d6df0a56e8d4f40d8dcc2b53e90429e38206217e084f4f8f->enter($__internal_7663982a91b1e830d6df0a56e8d4f40d8dcc2b53e90429e38206217e084f4f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/grille.html.twig"));

        $__internal_6a286f133063310cb690044791930981d3f94249658d2d55830926b80d75d2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a286f133063310cb690044791930981d3f94249658d2d55830926b80d75d2fe->enter($__internal_6a286f133063310cb690044791930981d3f94249658d2d55830926b80d75d2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/grille.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7663982a91b1e830d6df0a56e8d4f40d8dcc2b53e90429e38206217e084f4f8f->leave($__internal_7663982a91b1e830d6df0a56e8d4f40d8dcc2b53e90429e38206217e084f4f8f_prof);

        
        $__internal_6a286f133063310cb690044791930981d3f94249658d2d55830926b80d75d2fe->leave($__internal_6a286f133063310cb690044791930981d3f94249658d2d55830926b80d75d2fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f2a9e1291807b67e8a35607fca80eaa5a953f0c16039c863021edd44f386733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2a9e1291807b67e8a35607fca80eaa5a953f0c16039c863021edd44f386733->enter($__internal_4f2a9e1291807b67e8a35607fca80eaa5a953f0c16039c863021edd44f386733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b02be26368b9457daa72a80444e9ac3918cccc26e0fff1630307c357fe9d7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b02be26368b9457daa72a80444e9ac3918cccc26e0fff1630307c357fe9d7c4->enter($__internal_1b02be26368b9457daa72a80444e9ac3918cccc26e0fff1630307c357fe9d7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tableau de synthèse des compétences</h1>
    <embed src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ressources/tableau-synthese.pdf"), "html", null, true);
        echo "\" width=\"100%\" height=\"800\" type=\"application/pdf\"/>
";
        
        $__internal_1b02be26368b9457daa72a80444e9ac3918cccc26e0fff1630307c357fe9d7c4->leave($__internal_1b02be26368b9457daa72a80444e9ac3918cccc26e0fff1630307c357fe9d7c4_prof);

        
        $__internal_4f2a9e1291807b67e8a35607fca80eaa5a953f0c16039c863021edd44f386733->leave($__internal_4f2a9e1291807b67e8a35607fca80eaa5a953f0c16039c863021edd44f386733_prof);

    }

    public function getTemplateName()
    {
        return "folio/grille.html.twig";
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
    <h1>Tableau de synthèse des compétences</h1>
    <embed src=\"{{asset('ressources/tableau-synthese.pdf')}}\" width=\"100%\" height=\"800\" type=\"application/pdf\"/>
{% endblock %}", "folio/grille.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\grille.html.twig");
    }
}
