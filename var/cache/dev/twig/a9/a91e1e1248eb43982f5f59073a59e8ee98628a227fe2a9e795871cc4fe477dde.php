<?php

/* folio/veille.html.twig */
class __TwigTemplate_a04b415d186c61b9b7411c9be23014428b356bb228b9bcdbf82b69548a54181d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/veille.html.twig", 1);
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
        $__internal_665e696cd662d87b144b2ee7769d648f39e4ef058d6bdc76fd528d2ea6115a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665e696cd662d87b144b2ee7769d648f39e4ef058d6bdc76fd528d2ea6115a5b->enter($__internal_665e696cd662d87b144b2ee7769d648f39e4ef058d6bdc76fd528d2ea6115a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/veille.html.twig"));

        $__internal_0fc6b35a1420c5d7d0c4b4b5ea82565ca05636de2560026ffffd7b72dc66bcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc6b35a1420c5d7d0c4b4b5ea82565ca05636de2560026ffffd7b72dc66bcfd->enter($__internal_0fc6b35a1420c5d7d0c4b4b5ea82565ca05636de2560026ffffd7b72dc66bcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/veille.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665e696cd662d87b144b2ee7769d648f39e4ef058d6bdc76fd528d2ea6115a5b->leave($__internal_665e696cd662d87b144b2ee7769d648f39e4ef058d6bdc76fd528d2ea6115a5b_prof);

        
        $__internal_0fc6b35a1420c5d7d0c4b4b5ea82565ca05636de2560026ffffd7b72dc66bcfd->leave($__internal_0fc6b35a1420c5d7d0c4b4b5ea82565ca05636de2560026ffffd7b72dc66bcfd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf01d093ce8a14033ee412b9db6ca1a82a547a2db3ace9ff04218f90eda9f14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf01d093ce8a14033ee412b9db6ca1a82a547a2db3ace9ff04218f90eda9f14d->enter($__internal_bf01d093ce8a14033ee412b9db6ca1a82a547a2db3ace9ff04218f90eda9f14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7fe7acd4a77767e48bad61c0c571c933a736fa4ada2a3522bab2764b6e09dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fe7acd4a77767e48bad61c0c571c933a736fa4ada2a3522bab2764b6e09dd6->enter($__internal_d7fe7acd4a77767e48bad61c0c571c933a736fa4ada2a3522bab2764b6e09dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div>
    <article>
        <img>
        <h2></h2>
        <p></p>
    </article>
</div>

";
        
        $__internal_d7fe7acd4a77767e48bad61c0c571c933a736fa4ada2a3522bab2764b6e09dd6->leave($__internal_d7fe7acd4a77767e48bad61c0c571c933a736fa4ada2a3522bab2764b6e09dd6_prof);

        
        $__internal_bf01d093ce8a14033ee412b9db6ca1a82a547a2db3ace9ff04218f90eda9f14d->leave($__internal_bf01d093ce8a14033ee412b9db6ca1a82a547a2db3ace9ff04218f90eda9f14d_prof);

    }

    public function getTemplateName()
    {
        return "folio/veille.html.twig";
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

<div>
    <article>
        <img>
        <h2></h2>
        <p></p>
    </article>
</div>

{% endblock %}", "folio/veille.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\veille.html.twig");
    }
}
