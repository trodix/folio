<?php

/* folio/contact.html.twig */
class __TwigTemplate_7e2a14be592bb218c8b502707486fff93a189f2eb54fe7ab4d12c30af80d589e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0e0be46413ad1d46402e14a1b160944af7f560bf94ae5011c9e9d0ab319df81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e0be46413ad1d46402e14a1b160944af7f560bf94ae5011c9e9d0ab319df81->enter($__internal_e0e0be46413ad1d46402e14a1b160944af7f560bf94ae5011c9e9d0ab319df81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_a713b8b2b0d8e1c20bcd44a7e479f11ca5ab94abc1a286934834d97a64355f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a713b8b2b0d8e1c20bcd44a7e479f11ca5ab94abc1a286934834d97a64355f6e->enter($__internal_a713b8b2b0d8e1c20bcd44a7e479f11ca5ab94abc1a286934834d97a64355f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e0be46413ad1d46402e14a1b160944af7f560bf94ae5011c9e9d0ab319df81->leave($__internal_e0e0be46413ad1d46402e14a1b160944af7f560bf94ae5011c9e9d0ab319df81_prof);

        
        $__internal_a713b8b2b0d8e1c20bcd44a7e479f11ca5ab94abc1a286934834d97a64355f6e->leave($__internal_a713b8b2b0d8e1c20bcd44a7e479f11ca5ab94abc1a286934834d97a64355f6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c3f2246a1d04c81c20c8320d7d0404e9ffcb9dd4039a0de11d913b63a291d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c3f2246a1d04c81c20c8320d7d0404e9ffcb9dd4039a0de11d913b63a291d4->enter($__internal_23c3f2246a1d04c81c20c8320d7d0404e9ffcb9dd4039a0de11d913b63a291d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b960a518eb2fa66063dbdf992f8a6a7cef8b3c0420cf19d4957756346086a85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b960a518eb2fa66063dbdf992f8a6a7cef8b3c0420cf19d4957756346086a85f->enter($__internal_b960a518eb2fa66063dbdf992f8a6a7cef8b3c0420cf19d4957756346086a85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1 class=\"skill-title-1\">Me contacter</h1>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" action=\"/contact\" class=\"\" method=\"post\">
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactNom\" name=\"contact[lastName]\" placeholder=\"Nom\" required=\"required\" type=\"text\">
                    </div>
                </div>
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactPrenom\" name=\"contact[firstName]\" placeholder=\"Prénom\" required=\"required\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactEmail\" name=\"contact[mail]\" placeholder=\"email@domain.com\" required=\"required\" type=\"email\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"contactmessage\" name=\"contact[message]\" placeholder=\"Votre message\" required=\"required\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LcE5DEUAAAAAGzcP9DhVLQHyiscHqF5G9tGURG2\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/email.png"), "html", null, true);
        echo "\">
    </div>
</div>

";
        // line 54
        if (($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "message", array()) != "")) {
            // line 55
            echo "<div class=\"alert alert-success\">
    ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "message", array()), "html", null, true);
            echo "
</div>
";
        }
        // line 59
        echo "
";
        
        $__internal_b960a518eb2fa66063dbdf992f8a6a7cef8b3c0420cf19d4957756346086a85f->leave($__internal_b960a518eb2fa66063dbdf992f8a6a7cef8b3c0420cf19d4957756346086a85f_prof);

        
        $__internal_23c3f2246a1d04c81c20c8320d7d0404e9ffcb9dd4039a0de11d913b63a291d4->leave($__internal_23c3f2246a1d04c81c20c8320d7d0404e9ffcb9dd4039a0de11d913b63a291d4_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ae09f1cac75c3c2640c0343376dc6bc88ffa5a6493d40a8903e6ee999877e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae09f1cac75c3c2640c0343376dc6bc88ffa5a6493d40a8903e6ee999877e0d->enter($__internal_7ae09f1cac75c3c2640c0343376dc6bc88ffa5a6493d40a8903e6ee999877e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e1d330021364aff4426878e9755cb7d547792a5f7dc2fd98662298313de57b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d330021364aff4426878e9755cb7d547792a5f7dc2fd98662298313de57b16->enter($__internal_e1d330021364aff4426878e9755cb7d547792a5f7dc2fd98662298313de57b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script src='https://www.google.com/recaptcha/api.js'></script>
";
        
        $__internal_e1d330021364aff4426878e9755cb7d547792a5f7dc2fd98662298313de57b16->leave($__internal_e1d330021364aff4426878e9755cb7d547792a5f7dc2fd98662298313de57b16_prof);

        
        $__internal_7ae09f1cac75c3c2640c0343376dc6bc88ffa5a6493d40a8903e6ee999877e0d->leave($__internal_7ae09f1cac75c3c2640c0343376dc6bc88ffa5a6493d40a8903e6ee999877e0d_prof);

    }

    public function getTemplateName()
    {
        return "folio/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 63,  127 => 62,  116 => 59,  110 => 56,  107 => 55,  105 => 54,  98 => 50,  50 => 4,  41 => 3,  11 => 1,);
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

<h1 class=\"skill-title-1\">Me contacter</h1>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" action=\"/contact\" class=\"\" method=\"post\">
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactNom\" name=\"contact[lastName]\" placeholder=\"Nom\" required=\"required\" type=\"text\">
                    </div>
                </div>
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactPrenom\" name=\"contact[firstName]\" placeholder=\"Prénom\" required=\"required\" type=\"text\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\" style=\"margin-bottom: 0;\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"contactEmail\" name=\"contact[mail]\" placeholder=\"email@domain.com\" required=\"required\" type=\"email\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"contactmessage\" name=\"contact[message]\" placeholder=\"Votre message\" required=\"required\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"g-recaptcha\" data-sitekey=\"6LcE5DEUAAAAAGzcP9DhVLQHyiscHqF5G9tGURG2\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"{{asset('img/email.png')}}\">
    </div>
</div>

{% if reponse.message != \"\" %}
<div class=\"alert alert-success\">
    {{ reponse.message }}
</div>
{% endif %}

{% endblock %}

{% block javascripts %}
    <script src='https://www.google.com/recaptcha/api.js'></script>
{% endblock %}", "folio/contact.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\contact.html.twig");
    }
}
