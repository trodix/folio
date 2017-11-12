<?php

/* folio/index.html.twig */
class __TwigTemplate_d3c680c2afaf83155899d3c66ce29f046c4d9f362dcc0e7b3adaa92bbd4f0c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/index.html.twig", 1);
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
        $__internal_dfb0d304e2eff9f9e0e2458aa80cd3dd647844009e6a775256ce1d1902ba6987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb0d304e2eff9f9e0e2458aa80cd3dd647844009e6a775256ce1d1902ba6987->enter($__internal_dfb0d304e2eff9f9e0e2458aa80cd3dd647844009e6a775256ce1d1902ba6987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_72c6cfade7dc58f1cd6fee7501cdffce8be6758049ce44f88b5863101b59794a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c6cfade7dc58f1cd6fee7501cdffce8be6758049ce44f88b5863101b59794a->enter($__internal_72c6cfade7dc58f1cd6fee7501cdffce8be6758049ce44f88b5863101b59794a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb0d304e2eff9f9e0e2458aa80cd3dd647844009e6a775256ce1d1902ba6987->leave($__internal_dfb0d304e2eff9f9e0e2458aa80cd3dd647844009e6a775256ce1d1902ba6987_prof);

        
        $__internal_72c6cfade7dc58f1cd6fee7501cdffce8be6758049ce44f88b5863101b59794a->leave($__internal_72c6cfade7dc58f1cd6fee7501cdffce8be6758049ce44f88b5863101b59794a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_096a98c8af2565976ab0601e6424e83efaded732db47e727c4b647e12be9e045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096a98c8af2565976ab0601e6424e83efaded732db47e727c4b647e12be9e045->enter($__internal_096a98c8af2565976ab0601e6424e83efaded732db47e727c4b647e12be9e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_113d0a772de98b8d78c8ae87ec20794083b701ce63a94c0187358748e7361556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113d0a772de98b8d78c8ae87ec20794083b701ce63a94c0187358748e7361556->enter($__internal_113d0a772de98b8d78c8ae87ec20794083b701ce63a94c0187358748e7361556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hello</h1>
";
        
        $__internal_113d0a772de98b8d78c8ae87ec20794083b701ce63a94c0187358748e7361556->leave($__internal_113d0a772de98b8d78c8ae87ec20794083b701ce63a94c0187358748e7361556_prof);

        
        $__internal_096a98c8af2565976ab0601e6424e83efaded732db47e727c4b647e12be9e045->leave($__internal_096a98c8af2565976ab0601e6424e83efaded732db47e727c4b647e12be9e045_prof);

    }

    public function getTemplateName()
    {
        return "folio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Hello</h1>
{% endblock %}", "folio/index.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\index.html.twig");
    }
}
