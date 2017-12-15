<?php

/* folio/contact.html.twig */
class __TwigTemplate_77621d1f6fbe7d0dc1cf3eed4d1e51bb49d4056921daff036ac078348ace894d extends Twig_Template
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
        $__internal_6091425c3821ab4039e962fb0d609e958acff7aaed3d450be6d1b12c2a5d2c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6091425c3821ab4039e962fb0d609e958acff7aaed3d450be6d1b12c2a5d2c3f->enter($__internal_6091425c3821ab4039e962fb0d609e958acff7aaed3d450be6d1b12c2a5d2c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $__internal_ea67d67eb0b31e3f95e5d24a4ab8213eb13f8130af3f406f45c24389f024593c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea67d67eb0b31e3f95e5d24a4ab8213eb13f8130af3f406f45c24389f024593c->enter($__internal_ea67d67eb0b31e3f95e5d24a4ab8213eb13f8130af3f406f45c24389f024593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6091425c3821ab4039e962fb0d609e958acff7aaed3d450be6d1b12c2a5d2c3f->leave($__internal_6091425c3821ab4039e962fb0d609e958acff7aaed3d450be6d1b12c2a5d2c3f_prof);

        
        $__internal_ea67d67eb0b31e3f95e5d24a4ab8213eb13f8130af3f406f45c24389f024593c->leave($__internal_ea67d67eb0b31e3f95e5d24a4ab8213eb13f8130af3f406f45c24389f024593c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e772f71c07435a3a9c4782eaa35855bbb02fd16142c69d62ef1f57fffc4a2294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e772f71c07435a3a9c4782eaa35855bbb02fd16142c69d62ef1f57fffc4a2294->enter($__internal_e772f71c07435a3a9c4782eaa35855bbb02fd16142c69d62ef1f57fffc4a2294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_820af8e85361142d8d2b16aa784b2ed4442e06acfd362994853d05ff473361c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820af8e85361142d8d2b16aa784b2ed4442e06acfd362994853d05ff473361c3->enter($__internal_820af8e85361142d8d2b16aa784b2ed4442e06acfd362994853d05ff473361c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <input class=\"btn btn-primary\" type=\"button\" name=\"contact[submit]\" value=\"Envoyer\" onclick=\"sendForm(\$(this).value());\">
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
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
";
        
        $__internal_820af8e85361142d8d2b16aa784b2ed4442e06acfd362994853d05ff473361c3->leave($__internal_820af8e85361142d8d2b16aa784b2ed4442e06acfd362994853d05ff473361c3_prof);

        
        $__internal_e772f71c07435a3a9c4782eaa35855bbb02fd16142c69d62ef1f57fffc4a2294->leave($__internal_e772f71c07435a3a9c4782eaa35855bbb02fd16142c69d62ef1f57fffc4a2294_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5b5c9e4ab15da197fa544aeabab097100819effba041413fea344466e3de184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b5c9e4ab15da197fa544aeabab097100819effba041413fea344466e3de184->enter($__internal_b5b5c9e4ab15da197fa544aeabab097100819effba041413fea344466e3de184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8914fcee88ed0b09cda6898e4b5531ca7439833f030720ee62f4e07456e8753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8914fcee88ed0b09cda6898e4b5531ca7439833f030720ee62f4e07456e8753->enter($__internal_e8914fcee88ed0b09cda6898e4b5531ca7439833f030720ee62f4e07456e8753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "        
    ";
        
        $__internal_e8914fcee88ed0b09cda6898e4b5531ca7439833f030720ee62f4e07456e8753->leave($__internal_e8914fcee88ed0b09cda6898e4b5531ca7439833f030720ee62f4e07456e8753_prof);

        
        $__internal_b5b5c9e4ab15da197fa544aeabab097100819effba041413fea344466e3de184->leave($__internal_b5b5c9e4ab15da197fa544aeabab097100819effba041413fea344466e3de184_prof);

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
        return array (  127 => 55,  118 => 54,  107 => 57,  105 => 54,  98 => 50,  50 => 4,  41 => 3,  11 => 1,);
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
                        <input class=\"btn btn-primary\" type=\"button\" name=\"contact[submit]\" value=\"Envoyer\" onclick=\"sendForm(\$(this).value());\">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-6 text-right hidden-sm-down\">
        <img src=\"{{asset('img/email.png')}}\">
    </div>
</div>

    {% block javascripts %}
        
    {% endblock %}

{% endblock %}
    
", "folio/contact.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\contact.html.twig");
    }
}
