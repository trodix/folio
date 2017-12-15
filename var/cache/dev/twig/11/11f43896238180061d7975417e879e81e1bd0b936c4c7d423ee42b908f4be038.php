<?php

/* default/accueil.html.twig */
class __TwigTemplate_bd1fd1f84f8b42d01b657967474de58c9532aa109c641c78c1d1ecb6992cca25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c234ebf9d31857f56b77e86b91a23481777565147a2d466f758cf58663d45336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c234ebf9d31857f56b77e86b91a23481777565147a2d466f758cf58663d45336->enter($__internal_c234ebf9d31857f56b77e86b91a23481777565147a2d466f758cf58663d45336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_03ca962c540fa2d17a96747b9144a9665262816640cc6e1dc8a8493ae14a3270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ca962c540fa2d17a96747b9144a9665262816640cc6e1dc8a8493ae14a3270->enter($__internal_03ca962c540fa2d17a96747b9144a9665262816640cc6e1dc8a8493ae14a3270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        // line 1
        echo "<h1>Hello</h1>";
        
        $__internal_c234ebf9d31857f56b77e86b91a23481777565147a2d466f758cf58663d45336->leave($__internal_c234ebf9d31857f56b77e86b91a23481777565147a2d466f758cf58663d45336_prof);

        
        $__internal_03ca962c540fa2d17a96747b9144a9665262816640cc6e1dc8a8493ae14a3270->leave($__internal_03ca962c540fa2d17a96747b9144a9665262816640cc6e1dc8a8493ae14a3270_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Hello</h1>", "default/accueil.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\default\\accueil.html.twig");
    }
}
