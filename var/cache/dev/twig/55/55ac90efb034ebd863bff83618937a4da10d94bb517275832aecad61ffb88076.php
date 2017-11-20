<?php

/* folio/veille.html.twig */
class __TwigTemplate_c993ae420d84912377e0999ae87eb223565d4fb6196e6e65c85ae19942153470 extends Twig_Template
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
        $__internal_d76e3ead258778d076089d38b3664fe79b54ab764dfb8a0308a1d9edcd2ffc8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76e3ead258778d076089d38b3664fe79b54ab764dfb8a0308a1d9edcd2ffc8c->enter($__internal_d76e3ead258778d076089d38b3664fe79b54ab764dfb8a0308a1d9edcd2ffc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/veille.html.twig"));

        $__internal_0f0fdcccdfe52dee1db8244c463946f1bdcd54af3c06af2cb5ad68a0db2d3d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0fdcccdfe52dee1db8244c463946f1bdcd54af3c06af2cb5ad68a0db2d3d8f->enter($__internal_0f0fdcccdfe52dee1db8244c463946f1bdcd54af3c06af2cb5ad68a0db2d3d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/veille.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d76e3ead258778d076089d38b3664fe79b54ab764dfb8a0308a1d9edcd2ffc8c->leave($__internal_d76e3ead258778d076089d38b3664fe79b54ab764dfb8a0308a1d9edcd2ffc8c_prof);

        
        $__internal_0f0fdcccdfe52dee1db8244c463946f1bdcd54af3c06af2cb5ad68a0db2d3d8f->leave($__internal_0f0fdcccdfe52dee1db8244c463946f1bdcd54af3c06af2cb5ad68a0db2d3d8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58ce56e6ad28690f58d00b9d8b73925e3b3428ff6e2d0f784bc9875a75a85e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ce56e6ad28690f58d00b9d8b73925e3b3428ff6e2d0f784bc9875a75a85e76->enter($__internal_58ce56e6ad28690f58d00b9d8b73925e3b3428ff6e2d0f784bc9875a75a85e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a464d574d74d95a4b223180b9e8872cfb07c13331031df8b79c9f8126184db63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a464d574d74d95a4b223180b9e8872cfb07c13331031df8b79c9f8126184db63->enter($__internal_a464d574d74d95a4b223180b9e8872cfb07c13331031df8b79c9f8126184db63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-sm-12 col-md-10\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "        <div id=\"art-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
            <article class=\"article row\">
                <div class=\"col-md-3\">
                    <a class=\"hidden-sm-down\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "urlSource", array()), "html", null, true);
            echo "\" target=\"_blank\">
                        <img class=\"art-picture\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["article"], "urlPicture", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "\">
                    </a>
                </div>
                <div class=\"col\">
                    <h2 class=\"art-title\">
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "urlSource", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a>
                    </h2>
                    <div class=\"art-header\">
                        <div class=\"left\">
                            <p>Crée le ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <div class=\"article-description\">
                        <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</p>
                    </div>  
                </div>              
            </article>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
</div>

";
        
        $__internal_a464d574d74d95a4b223180b9e8872cfb07c13331031df8b79c9f8126184db63->leave($__internal_a464d574d74d95a4b223180b9e8872cfb07c13331031df8b79c9f8126184db63_prof);

        
        $__internal_58ce56e6ad28690f58d00b9d8b73925e3b3428ff6e2d0f784bc9875a75a85e76->leave($__internal_58ce56e6ad28690f58d00b9d8b73925e3b3428ff6e2d0f784bc9875a75a85e76_prof);

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
        return array (  107 => 31,  95 => 25,  88 => 21,  79 => 17,  69 => 12,  65 => 11,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"row\">
    <div class=\"col-sm-12 col-md-10\">
        {% for article in articles %}
        <div id=\"art-{{article.id}}\">
            <article class=\"article row\">
                <div class=\"col-md-3\">
                    <a class=\"hidden-sm-down\" href=\"{{article.urlSource}}\" target=\"_blank\">
                        <img class=\"art-picture\" src=\"{{asset(article.urlPicture)}}\" alt=\"{{article.title}}\">
                    </a>
                </div>
                <div class=\"col\">
                    <h2 class=\"art-title\">
                        <a href=\"{{article.urlSource}}\" target=\"_blank\">{{article.title}}</a>
                    </h2>
                    <div class=\"art-header\">
                        <div class=\"left\">
                            <p>Crée le {{article.date|date(\"d/m/Y\")}}</p>
                        </div>
                    </div>
                    <div class=\"article-description\">
                        <p>{{article.description}}</p>
                    </div>  
                </div>              
            </article>
        </div>
        {% endfor %}
    </div>
</div>

{% endblock %}", "folio/veille.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\veille.html.twig");
    }
}
