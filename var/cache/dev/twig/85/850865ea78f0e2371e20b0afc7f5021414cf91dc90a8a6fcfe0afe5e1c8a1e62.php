<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2337227a4b58f8a15aa3cdd22e52025592e80786d1a7c153306eb58c443e069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2337227a4b58f8a15aa3cdd22e52025592e80786d1a7c153306eb58c443e069->enter($__internal_a2337227a4b58f8a15aa3cdd22e52025592e80786d1a7c153306eb58c443e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f9ad18913488d2e07aa54087b1adb25d4626981d4481a19de80a86e06e1b6ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ad18913488d2e07aa54087b1adb25d4626981d4481a19de80a86e06e1b6ebb->enter($__internal_f9ad18913488d2e07aa54087b1adb25d4626981d4481a19de80a86e06e1b6ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2337227a4b58f8a15aa3cdd22e52025592e80786d1a7c153306eb58c443e069->leave($__internal_a2337227a4b58f8a15aa3cdd22e52025592e80786d1a7c153306eb58c443e069_prof);

        
        $__internal_f9ad18913488d2e07aa54087b1adb25d4626981d4481a19de80a86e06e1b6ebb->leave($__internal_f9ad18913488d2e07aa54087b1adb25d4626981d4481a19de80a86e06e1b6ebb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85ba6911355c7792b8ab58358dfc38efa0ec1d3060b5f515a2175c6d67c4cda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ba6911355c7792b8ab58358dfc38efa0ec1d3060b5f515a2175c6d67c4cda7->enter($__internal_85ba6911355c7792b8ab58358dfc38efa0ec1d3060b5f515a2175c6d67c4cda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9aa0b7ab3888ce9c9844aed65bc1fc97fd295352234d205cc6d890022aa396d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa0b7ab3888ce9c9844aed65bc1fc97fd295352234d205cc6d890022aa396d2->enter($__internal_9aa0b7ab3888ce9c9844aed65bc1fc97fd295352234d205cc6d890022aa396d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9aa0b7ab3888ce9c9844aed65bc1fc97fd295352234d205cc6d890022aa396d2->leave($__internal_9aa0b7ab3888ce9c9844aed65bc1fc97fd295352234d205cc6d890022aa396d2_prof);

        
        $__internal_85ba6911355c7792b8ab58358dfc38efa0ec1d3060b5f515a2175c6d67c4cda7->leave($__internal_85ba6911355c7792b8ab58358dfc38efa0ec1d3060b5f515a2175c6d67c4cda7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad82c19d838465a1864c61879408c5215bc378791ac5ad302d0451d40b842ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad82c19d838465a1864c61879408c5215bc378791ac5ad302d0451d40b842ad9->enter($__internal_ad82c19d838465a1864c61879408c5215bc378791ac5ad302d0451d40b842ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f34100d28b10fa55435a147461bdbffe2bb1f1464c37074c05c76225443c919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f34100d28b10fa55435a147461bdbffe2bb1f1464c37074c05c76225443c919->enter($__internal_7f34100d28b10fa55435a147461bdbffe2bb1f1464c37074c05c76225443c919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7f34100d28b10fa55435a147461bdbffe2bb1f1464c37074c05c76225443c919->leave($__internal_7f34100d28b10fa55435a147461bdbffe2bb1f1464c37074c05c76225443c919_prof);

        
        $__internal_ad82c19d838465a1864c61879408c5215bc378791ac5ad302d0451d40b842ad9->leave($__internal_ad82c19d838465a1864c61879408c5215bc378791ac5ad302d0451d40b842ad9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea8a2cb04c11e410d87f9a5128bf6e880ccc827ddaae952ab155672769e5d5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8a2cb04c11e410d87f9a5128bf6e880ccc827ddaae952ab155672769e5d5db->enter($__internal_ea8a2cb04c11e410d87f9a5128bf6e880ccc827ddaae952ab155672769e5d5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cafad66d00380bd743d3cd7cac33e3afea5b44a7c27c9f12aec54329a0fbb1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafad66d00380bd743d3cd7cac33e3afea5b44a7c27c9f12aec54329a0fbb1ce->enter($__internal_cafad66d00380bd743d3cd7cac33e3afea5b44a7c27c9f12aec54329a0fbb1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cafad66d00380bd743d3cd7cac33e3afea5b44a7c27c9f12aec54329a0fbb1ce->leave($__internal_cafad66d00380bd743d3cd7cac33e3afea5b44a7c27c9f12aec54329a0fbb1ce_prof);

        
        $__internal_ea8a2cb04c11e410d87f9a5128bf6e880ccc827ddaae952ab155672769e5d5db->leave($__internal_ea8a2cb04c11e410d87f9a5128bf6e880ccc827ddaae952ab155672769e5d5db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
