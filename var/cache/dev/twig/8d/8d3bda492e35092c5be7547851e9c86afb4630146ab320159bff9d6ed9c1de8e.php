<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
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
        $__internal_913aca3059bda9aef5184c6afcc657e2aa07fbd0fa96905f264230f55b59013b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913aca3059bda9aef5184c6afcc657e2aa07fbd0fa96905f264230f55b59013b->enter($__internal_913aca3059bda9aef5184c6afcc657e2aa07fbd0fa96905f264230f55b59013b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dcd82fd8e3810ba31d26a563586faca96c9532d9c6f82211390a571a6bcca1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd82fd8e3810ba31d26a563586faca96c9532d9c6f82211390a571a6bcca1d0->enter($__internal_dcd82fd8e3810ba31d26a563586faca96c9532d9c6f82211390a571a6bcca1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913aca3059bda9aef5184c6afcc657e2aa07fbd0fa96905f264230f55b59013b->leave($__internal_913aca3059bda9aef5184c6afcc657e2aa07fbd0fa96905f264230f55b59013b_prof);

        
        $__internal_dcd82fd8e3810ba31d26a563586faca96c9532d9c6f82211390a571a6bcca1d0->leave($__internal_dcd82fd8e3810ba31d26a563586faca96c9532d9c6f82211390a571a6bcca1d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee77d04f6cb16919e02ed07dc48ec3890752e194d45c155cfe9088641b19683d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee77d04f6cb16919e02ed07dc48ec3890752e194d45c155cfe9088641b19683d->enter($__internal_ee77d04f6cb16919e02ed07dc48ec3890752e194d45c155cfe9088641b19683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e094e7fb084c8628a32606fa8567cee3e1b0ef2d65f589eef773c87a58030c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e094e7fb084c8628a32606fa8567cee3e1b0ef2d65f589eef773c87a58030c6d->enter($__internal_e094e7fb084c8628a32606fa8567cee3e1b0ef2d65f589eef773c87a58030c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e094e7fb084c8628a32606fa8567cee3e1b0ef2d65f589eef773c87a58030c6d->leave($__internal_e094e7fb084c8628a32606fa8567cee3e1b0ef2d65f589eef773c87a58030c6d_prof);

        
        $__internal_ee77d04f6cb16919e02ed07dc48ec3890752e194d45c155cfe9088641b19683d->leave($__internal_ee77d04f6cb16919e02ed07dc48ec3890752e194d45c155cfe9088641b19683d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfc34fdcb8c37076542b56c58952bba4722587d65ea59f3adaaf4e03f39d96c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc34fdcb8c37076542b56c58952bba4722587d65ea59f3adaaf4e03f39d96c2->enter($__internal_dfc34fdcb8c37076542b56c58952bba4722587d65ea59f3adaaf4e03f39d96c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00ba619a8287ed088aa2d0a77e2cfcb9b6bb32e95a28d99115bd9e0a479aef00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ba619a8287ed088aa2d0a77e2cfcb9b6bb32e95a28d99115bd9e0a479aef00->enter($__internal_00ba619a8287ed088aa2d0a77e2cfcb9b6bb32e95a28d99115bd9e0a479aef00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00ba619a8287ed088aa2d0a77e2cfcb9b6bb32e95a28d99115bd9e0a479aef00->leave($__internal_00ba619a8287ed088aa2d0a77e2cfcb9b6bb32e95a28d99115bd9e0a479aef00_prof);

        
        $__internal_dfc34fdcb8c37076542b56c58952bba4722587d65ea59f3adaaf4e03f39d96c2->leave($__internal_dfc34fdcb8c37076542b56c58952bba4722587d65ea59f3adaaf4e03f39d96c2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aac8f93bef40d1b5249b567ab2891be469ae8cdcf0dd9f98dfd3f669e3b7e9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac8f93bef40d1b5249b567ab2891be469ae8cdcf0dd9f98dfd3f669e3b7e9e5->enter($__internal_aac8f93bef40d1b5249b567ab2891be469ae8cdcf0dd9f98dfd3f669e3b7e9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86f191f2f6ab4b8a189b242a037a0e5b54266cfb7c62fa17905e5c0ac49134fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f191f2f6ab4b8a189b242a037a0e5b54266cfb7c62fa17905e5c0ac49134fe->enter($__internal_86f191f2f6ab4b8a189b242a037a0e5b54266cfb7c62fa17905e5c0ac49134fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_86f191f2f6ab4b8a189b242a037a0e5b54266cfb7c62fa17905e5c0ac49134fe->leave($__internal_86f191f2f6ab4b8a189b242a037a0e5b54266cfb7c62fa17905e5c0ac49134fe_prof);

        
        $__internal_aac8f93bef40d1b5249b567ab2891be469ae8cdcf0dd9f98dfd3f669e3b7e9e5->leave($__internal_aac8f93bef40d1b5249b567ab2891be469ae8cdcf0dd9f98dfd3f669e3b7e9e5_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
