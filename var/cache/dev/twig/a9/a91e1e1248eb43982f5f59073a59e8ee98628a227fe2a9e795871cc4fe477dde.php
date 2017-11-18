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
        $__internal_6cf09b57b3988ececa1c981d50620296d2519b1547697acf509fb2ad3f23f245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf09b57b3988ececa1c981d50620296d2519b1547697acf509fb2ad3f23f245->enter($__internal_6cf09b57b3988ececa1c981d50620296d2519b1547697acf509fb2ad3f23f245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/veille.html.twig"));

        $__internal_1e19d5d75abbebb8f2a2df75b001d23d085eea50832b01fe7377b87753453bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e19d5d75abbebb8f2a2df75b001d23d085eea50832b01fe7377b87753453bf8->enter($__internal_1e19d5d75abbebb8f2a2df75b001d23d085eea50832b01fe7377b87753453bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/veille.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cf09b57b3988ececa1c981d50620296d2519b1547697acf509fb2ad3f23f245->leave($__internal_6cf09b57b3988ececa1c981d50620296d2519b1547697acf509fb2ad3f23f245_prof);

        
        $__internal_1e19d5d75abbebb8f2a2df75b001d23d085eea50832b01fe7377b87753453bf8->leave($__internal_1e19d5d75abbebb8f2a2df75b001d23d085eea50832b01fe7377b87753453bf8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07c18366c8f6d14e55b6cf70b1cb44df30a8ca2f4cf381aad9200a7f66d51088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c18366c8f6d14e55b6cf70b1cb44df30a8ca2f4cf381aad9200a7f66d51088->enter($__internal_07c18366c8f6d14e55b6cf70b1cb44df30a8ca2f4cf381aad9200a7f66d51088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8db8de0f48f47ce441338540a155189252a6aa36f2bd762871aba414d1f93e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db8de0f48f47ce441338540a155189252a6aa36f2bd762871aba414d1f93e12->enter($__internal_8db8de0f48f47ce441338540a155189252a6aa36f2bd762871aba414d1f93e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-sm-12 col-md-10\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
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
        
        $__internal_8db8de0f48f47ce441338540a155189252a6aa36f2bd762871aba414d1f93e12->leave($__internal_8db8de0f48f47ce441338540a155189252a6aa36f2bd762871aba414d1f93e12_prof);

        
        $__internal_07c18366c8f6d14e55b6cf70b1cb44df30a8ca2f4cf381aad9200a7f66d51088->leave($__internal_07c18366c8f6d14e55b6cf70b1cb44df30a8ca2f4cf381aad9200a7f66d51088_prof);

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

{% endblock %}", "folio/veille.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\veille.html.twig");
    }
}
