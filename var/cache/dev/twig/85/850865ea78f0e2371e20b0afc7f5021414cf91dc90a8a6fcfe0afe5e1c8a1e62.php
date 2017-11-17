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
        $__internal_6e905b7303353ffad3017fc7e3fff78ed49174bd3d9d18d0d4d1f1eb9db8fdcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e905b7303353ffad3017fc7e3fff78ed49174bd3d9d18d0d4d1f1eb9db8fdcd->enter($__internal_6e905b7303353ffad3017fc7e3fff78ed49174bd3d9d18d0d4d1f1eb9db8fdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_703a838820d36d1da1b25f07c537383c68844c86ab03a1a310a2b66743119b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703a838820d36d1da1b25f07c537383c68844c86ab03a1a310a2b66743119b42->enter($__internal_703a838820d36d1da1b25f07c537383c68844c86ab03a1a310a2b66743119b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e905b7303353ffad3017fc7e3fff78ed49174bd3d9d18d0d4d1f1eb9db8fdcd->leave($__internal_6e905b7303353ffad3017fc7e3fff78ed49174bd3d9d18d0d4d1f1eb9db8fdcd_prof);

        
        $__internal_703a838820d36d1da1b25f07c537383c68844c86ab03a1a310a2b66743119b42->leave($__internal_703a838820d36d1da1b25f07c537383c68844c86ab03a1a310a2b66743119b42_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_709fd3dfd0ff9337c94a4692583f260d175b9041987761a1c05bdab00afb6fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709fd3dfd0ff9337c94a4692583f260d175b9041987761a1c05bdab00afb6fbd->enter($__internal_709fd3dfd0ff9337c94a4692583f260d175b9041987761a1c05bdab00afb6fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_feca5a4b34c8fd0717591fb83a4d111b1dc370a755b86a228087c8d9d989885c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feca5a4b34c8fd0717591fb83a4d111b1dc370a755b86a228087c8d9d989885c->enter($__internal_feca5a4b34c8fd0717591fb83a4d111b1dc370a755b86a228087c8d9d989885c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_feca5a4b34c8fd0717591fb83a4d111b1dc370a755b86a228087c8d9d989885c->leave($__internal_feca5a4b34c8fd0717591fb83a4d111b1dc370a755b86a228087c8d9d989885c_prof);

        
        $__internal_709fd3dfd0ff9337c94a4692583f260d175b9041987761a1c05bdab00afb6fbd->leave($__internal_709fd3dfd0ff9337c94a4692583f260d175b9041987761a1c05bdab00afb6fbd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e3439514e7875a75c8d87fab70e2badb59d3cd1e6a4c670097957dfc40063c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3439514e7875a75c8d87fab70e2badb59d3cd1e6a4c670097957dfc40063c0->enter($__internal_8e3439514e7875a75c8d87fab70e2badb59d3cd1e6a4c670097957dfc40063c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_573310871844450f4be0a9852f9a348a098c5c237c38f97c3813f1acbbc26792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573310871844450f4be0a9852f9a348a098c5c237c38f97c3813f1acbbc26792->enter($__internal_573310871844450f4be0a9852f9a348a098c5c237c38f97c3813f1acbbc26792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_573310871844450f4be0a9852f9a348a098c5c237c38f97c3813f1acbbc26792->leave($__internal_573310871844450f4be0a9852f9a348a098c5c237c38f97c3813f1acbbc26792_prof);

        
        $__internal_8e3439514e7875a75c8d87fab70e2badb59d3cd1e6a4c670097957dfc40063c0->leave($__internal_8e3439514e7875a75c8d87fab70e2badb59d3cd1e6a4c670097957dfc40063c0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e5090f1a4a4b88c076df30b4d7b0c16eb59885b15e0f60481ab199cbc288953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5090f1a4a4b88c076df30b4d7b0c16eb59885b15e0f60481ab199cbc288953->enter($__internal_2e5090f1a4a4b88c076df30b4d7b0c16eb59885b15e0f60481ab199cbc288953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fcb0e2a8d3337b08ed18dd3ced3f60ed33d07f56af1a1fca38875c6f131eac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcb0e2a8d3337b08ed18dd3ced3f60ed33d07f56af1a1fca38875c6f131eac6->enter($__internal_5fcb0e2a8d3337b08ed18dd3ced3f60ed33d07f56af1a1fca38875c6f131eac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5fcb0e2a8d3337b08ed18dd3ced3f60ed33d07f56af1a1fca38875c6f131eac6->leave($__internal_5fcb0e2a8d3337b08ed18dd3ced3f60ed33d07f56af1a1fca38875c6f131eac6_prof);

        
        $__internal_2e5090f1a4a4b88c076df30b4d7b0c16eb59885b15e0f60481ab199cbc288953->leave($__internal_2e5090f1a4a4b88c076df30b4d7b0c16eb59885b15e0f60481ab199cbc288953_prof);

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
