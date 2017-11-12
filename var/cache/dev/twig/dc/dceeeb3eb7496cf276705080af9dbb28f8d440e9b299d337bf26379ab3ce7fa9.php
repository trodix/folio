<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa579de15ed9babbd62416e29740389f541c06efa98137642bac6942f929e47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa579de15ed9babbd62416e29740389f541c06efa98137642bac6942f929e47f->enter($__internal_aa579de15ed9babbd62416e29740389f541c06efa98137642bac6942f929e47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5f2c7bdb5980b90998c54bf5f334b700290b25c530cdc6e7c3fb685d3e58cc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2c7bdb5980b90998c54bf5f334b700290b25c530cdc6e7c3fb685d3e58cc0c->enter($__internal_5f2c7bdb5980b90998c54bf5f334b700290b25c530cdc6e7c3fb685d3e58cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_aa579de15ed9babbd62416e29740389f541c06efa98137642bac6942f929e47f->leave($__internal_aa579de15ed9babbd62416e29740389f541c06efa98137642bac6942f929e47f_prof);

        
        $__internal_5f2c7bdb5980b90998c54bf5f334b700290b25c530cdc6e7c3fb685d3e58cc0c->leave($__internal_5f2c7bdb5980b90998c54bf5f334b700290b25c530cdc6e7c3fb685d3e58cc0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e34ae2c5a7cf835f562b552657dd5ee550b19d8a57acdc9e9004df6a25fb579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e34ae2c5a7cf835f562b552657dd5ee550b19d8a57acdc9e9004df6a25fb579->enter($__internal_7e34ae2c5a7cf835f562b552657dd5ee550b19d8a57acdc9e9004df6a25fb579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d707cd9a39dcb6586d3abc3ef2d238e3ab42b3b47367a18df745310da9bb9344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d707cd9a39dcb6586d3abc3ef2d238e3ab42b3b47367a18df745310da9bb9344->enter($__internal_d707cd9a39dcb6586d3abc3ef2d238e3ab42b3b47367a18df745310da9bb9344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d707cd9a39dcb6586d3abc3ef2d238e3ab42b3b47367a18df745310da9bb9344->leave($__internal_d707cd9a39dcb6586d3abc3ef2d238e3ab42b3b47367a18df745310da9bb9344_prof);

        
        $__internal_7e34ae2c5a7cf835f562b552657dd5ee550b19d8a57acdc9e9004df6a25fb579->leave($__internal_7e34ae2c5a7cf835f562b552657dd5ee550b19d8a57acdc9e9004df6a25fb579_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd3a782697d13e31496f807f490adc103f023b49fe368b3378c62512fd89e9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3a782697d13e31496f807f490adc103f023b49fe368b3378c62512fd89e9f8->enter($__internal_cd3a782697d13e31496f807f490adc103f023b49fe368b3378c62512fd89e9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2eff2ab3bcbf46b0aa761470b803b62047c4d3b2ce4be97eae18d4ca24141d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eff2ab3bcbf46b0aa761470b803b62047c4d3b2ce4be97eae18d4ca24141d11->enter($__internal_2eff2ab3bcbf46b0aa761470b803b62047c4d3b2ce4be97eae18d4ca24141d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2eff2ab3bcbf46b0aa761470b803b62047c4d3b2ce4be97eae18d4ca24141d11->leave($__internal_2eff2ab3bcbf46b0aa761470b803b62047c4d3b2ce4be97eae18d4ca24141d11_prof);

        
        $__internal_cd3a782697d13e31496f807f490adc103f023b49fe368b3378c62512fd89e9f8->leave($__internal_cd3a782697d13e31496f807f490adc103f023b49fe368b3378c62512fd89e9f8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_577de5a84ae64cd5e0cd4798fc5e93b826eba711c24e00e1f2ffc058859914f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577de5a84ae64cd5e0cd4798fc5e93b826eba711c24e00e1f2ffc058859914f8->enter($__internal_577de5a84ae64cd5e0cd4798fc5e93b826eba711c24e00e1f2ffc058859914f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7859ebf719cd4a55695ad1cd223ce01595ccdc35722f5e105b4f82b83521e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7859ebf719cd4a55695ad1cd223ce01595ccdc35722f5e105b4f82b83521e2f->enter($__internal_b7859ebf719cd4a55695ad1cd223ce01595ccdc35722f5e105b4f82b83521e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7859ebf719cd4a55695ad1cd223ce01595ccdc35722f5e105b4f82b83521e2f->leave($__internal_b7859ebf719cd4a55695ad1cd223ce01595ccdc35722f5e105b4f82b83521e2f_prof);

        
        $__internal_577de5a84ae64cd5e0cd4798fc5e93b826eba711c24e00e1f2ffc058859914f8->leave($__internal_577de5a84ae64cd5e0cd4798fc5e93b826eba711c24e00e1f2ffc058859914f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_670c7814d78e2e15b452ce272bbcfec9e91ad6ed11a7fd9a13c093b42d05a663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670c7814d78e2e15b452ce272bbcfec9e91ad6ed11a7fd9a13c093b42d05a663->enter($__internal_670c7814d78e2e15b452ce272bbcfec9e91ad6ed11a7fd9a13c093b42d05a663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_137c32940d00533ec72f9323ddd2133c8584e4a287702ebb8a816e7a66f8fdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137c32940d00533ec72f9323ddd2133c8584e4a287702ebb8a816e7a66f8fdcd->enter($__internal_137c32940d00533ec72f9323ddd2133c8584e4a287702ebb8a816e7a66f8fdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_137c32940d00533ec72f9323ddd2133c8584e4a287702ebb8a816e7a66f8fdcd->leave($__internal_137c32940d00533ec72f9323ddd2133c8584e4a287702ebb8a816e7a66f8fdcd_prof);

        
        $__internal_670c7814d78e2e15b452ce272bbcfec9e91ad6ed11a7fd9a13c093b42d05a663->leave($__internal_670c7814d78e2e15b452ce272bbcfec9e91ad6ed11a7fd9a13c093b42d05a663_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\base.html.twig");
    }
}
