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
        $__internal_6354e14005cd50df20ad08bb25677f37a42c3507430888f8a7d369ded697ab9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6354e14005cd50df20ad08bb25677f37a42c3507430888f8a7d369ded697ab9f->enter($__internal_6354e14005cd50df20ad08bb25677f37a42c3507430888f8a7d369ded697ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_0849e914be81c603d4cac5449acb77dfebdd4f47c9e0fe410082ab30774c74ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0849e914be81c603d4cac5449acb77dfebdd4f47c9e0fe410082ab30774c74ac->enter($__internal_0849e914be81c603d4cac5449acb77dfebdd4f47c9e0fe410082ab30774c74ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6354e14005cd50df20ad08bb25677f37a42c3507430888f8a7d369ded697ab9f->leave($__internal_6354e14005cd50df20ad08bb25677f37a42c3507430888f8a7d369ded697ab9f_prof);

        
        $__internal_0849e914be81c603d4cac5449acb77dfebdd4f47c9e0fe410082ab30774c74ac->leave($__internal_0849e914be81c603d4cac5449acb77dfebdd4f47c9e0fe410082ab30774c74ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7ece6eee03892f664b4a49aae8d3ea660407cb7828149e1ae97713698afb3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ece6eee03892f664b4a49aae8d3ea660407cb7828149e1ae97713698afb3f1->enter($__internal_b7ece6eee03892f664b4a49aae8d3ea660407cb7828149e1ae97713698afb3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c716c0bdebc8bb78809c08754d1faa3c96a66decf17f61eea07c878b4dd067b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c716c0bdebc8bb78809c08754d1faa3c96a66decf17f61eea07c878b4dd067b->enter($__internal_5c716c0bdebc8bb78809c08754d1faa3c96a66decf17f61eea07c878b4dd067b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1 class=\"skill-title-1\">Me contacter</h1>
<div class=\"row\" id=\"contact-form-contener\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" method=\"post\" id=\"form-contact\">
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
                        <input class=\"btn btn-primary\" type=\"submit\" name=\"contact[submit]\" value=\"Envoyer\">
                    </div>
                </div>
            </div>
        </form>
        ";
        // line 48
        if (( !(null === $this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "success", array())) && ($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), "success", array()) == false))) {
            // line 49
            echo "            <div class=\"alert alert-danger\">
                Une erreur s'est produite, le message n'a pas pu être envoyé.
            </div>
        ";
        } elseif (($this->getAttribute(        // line 52
($context["reponse"] ?? $this->getContext($context, "reponse")), "success", array()) == true)) {
            // line 53
            echo "            <div class=\"alert alert-success\">
                Votre message a bien été envoyé.
            </div>
        ";
        }
        // line 57
        echo "    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/email.png"), "html", null, true);
        echo "\">
    </div>
</div>

    ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
";
        
        $__internal_5c716c0bdebc8bb78809c08754d1faa3c96a66decf17f61eea07c878b4dd067b->leave($__internal_5c716c0bdebc8bb78809c08754d1faa3c96a66decf17f61eea07c878b4dd067b_prof);

        
        $__internal_b7ece6eee03892f664b4a49aae8d3ea660407cb7828149e1ae97713698afb3f1->leave($__internal_b7ece6eee03892f664b4a49aae8d3ea660407cb7828149e1ae97713698afb3f1_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b62001e73c99531e8fb3b0c3bd8ba689ad4df45abb30ef5f02157220b6725f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62001e73c99531e8fb3b0c3bd8ba689ad4df45abb30ef5f02157220b6725f86->enter($__internal_b62001e73c99531e8fb3b0c3bd8ba689ad4df45abb30ef5f02157220b6725f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c0ff853d0df794a191911fdb939a1546eb6ea5ab82ab7d2defa34421c11b02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0ff853d0df794a191911fdb939a1546eb6ea5ab82ab7d2defa34421c11b02b->enter($__internal_5c0ff853d0df794a191911fdb939a1546eb6ea5ab82ab7d2defa34421c11b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "        
    ";
        
        $__internal_5c0ff853d0df794a191911fdb939a1546eb6ea5ab82ab7d2defa34421c11b02b->leave($__internal_5c0ff853d0df794a191911fdb939a1546eb6ea5ab82ab7d2defa34421c11b02b_prof);

        
        $__internal_b62001e73c99531e8fb3b0c3bd8ba689ad4df45abb30ef5f02157220b6725f86->leave($__internal_b62001e73c99531e8fb3b0c3bd8ba689ad4df45abb30ef5f02157220b6725f86_prof);

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
        return array (  144 => 64,  135 => 63,  124 => 66,  122 => 63,  115 => 59,  111 => 57,  105 => 53,  103 => 52,  98 => 49,  96 => 48,  50 => 4,  41 => 3,  11 => 1,);
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
<div class=\"row\" id=\"contact-form-contener\">
    <div class=\"col-sm-12 col-md-6\">
        <form accept-charset=\"UTF-8\" method=\"post\" id=\"form-contact\">
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
                        <input class=\"btn btn-primary\" type=\"submit\" name=\"contact[submit]\" value=\"Envoyer\">
                    </div>
                </div>
            </div>
        </form>
        {% if reponse.success is not null and reponse.success == false %}
            <div class=\"alert alert-danger\">
                Une erreur s'est produite, le message n'a pas pu être envoyé.
            </div>
        {% elseif reponse.success == true %}
            <div class=\"alert alert-success\">
                Votre message a bien été envoyé.
            </div>
        {% endif %}
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"{{asset('img/email.png')}}\">
    </div>
</div>

    {% block javascripts %}
        
    {% endblock %}

{% endblock %}
    
", "folio/contact.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\contact.html.twig");
    }
}
