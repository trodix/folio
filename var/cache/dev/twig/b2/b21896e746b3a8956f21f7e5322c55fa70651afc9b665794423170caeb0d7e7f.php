<?php

/* folio/index.html.twig */
class __TwigTemplate_d3c680c2afaf83155899d3c66ce29f046c4d9f362dcc0e7b3adaa92bbd4f0c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/index.html.twig", 1);
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
        $__internal_c17075d7f3bd938da0cb42045674af60f2c2f7d33d6c5bb09765232e900e125e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17075d7f3bd938da0cb42045674af60f2c2f7d33d6c5bb09765232e900e125e->enter($__internal_c17075d7f3bd938da0cb42045674af60f2c2f7d33d6c5bb09765232e900e125e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_9588803b797686688ead46af5f728790a73862fe95bc1e410be6b96c73208bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9588803b797686688ead46af5f728790a73862fe95bc1e410be6b96c73208bdc->enter($__internal_9588803b797686688ead46af5f728790a73862fe95bc1e410be6b96c73208bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17075d7f3bd938da0cb42045674af60f2c2f7d33d6c5bb09765232e900e125e->leave($__internal_c17075d7f3bd938da0cb42045674af60f2c2f7d33d6c5bb09765232e900e125e_prof);

        
        $__internal_9588803b797686688ead46af5f728790a73862fe95bc1e410be6b96c73208bdc->leave($__internal_9588803b797686688ead46af5f728790a73862fe95bc1e410be6b96c73208bdc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88b93499101d5ca3d1e8bb3abc10937f9cb5afaca37df0830d0cc9d9a8d0c681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b93499101d5ca3d1e8bb3abc10937f9cb5afaca37df0830d0cc9d9a8d0c681->enter($__internal_88b93499101d5ca3d1e8bb3abc10937f9cb5afaca37df0830d0cc9d9a8d0c681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f11e95da4d14b438fb26a0fe8e2372d625999c7b0706e85d27ca82ae1ad473ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11e95da4d14b438fb26a0fe8e2372d625999c7b0706e85d27ca82ae1ad473ec->enter($__internal_f11e95da4d14b438fb26a0fe8e2372d625999c7b0706e85d27ca82ae1ad473ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col\">
        <h1 class=\"skill-title-1\">Mes compétences</h1>
        <h2 class=\"skill-title-2\">Développement web</h2>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>HTML/CSS</strong></p>
                <img src=\"img/skills/html5.png\">
            </div>
            <div class=\"skill\">
                <p><strong>PHP</strong></p>
                <img src=\"img/skills/php.png\">
            </div>
            <div class=\"skill\">
                <p><strong>JavaScript</strong></p>
                <img src=\"img/skills/js.png\">
            </div>
            <div class=\"skill\">
                <p><strong>jQuery</strong></p>
                <img src=\"img/skills/jquery.png\">
            </div>
            <div class=\"skill\">
                <p><strong>AngularJs</strong></p>
                <img src=\"img/skills/angular.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Symfony</strong></p>
                <img src=\"img/skills/symfony.png\">
            </div> 
        </div>
        <h2 class=\"skill-title-2\">Autres langages</h2>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>MySql</strong></p>
                <img src=\"img/skills/mysql.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Java</strong></p>
                <img src=\"img/skills/java.png\">
            </div>
            <div class=\"skill\">
                <p><strong>C#</strong></p>
                <img src=\"img/skills/csharp.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual Basic</strong></p>
                <img src=\"img/skills/vb.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Python</strong></p>
                <img src=\"img/skills/python.png\">
            </div>
        </div>
        <h2 class=\"skill-title-2\">Outils que j'utilise</h2>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>Visual studio code</strong></p>
                <img src=\"img/skills/vsc.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual studio</strong></p>
                <img src=\"img/skills/vs.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Git</strong></p>
                <img src=\"img/skills/git.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Linux</strong></p>
                <img src=\"img/skills/linux.png\">
            </div>
        </div>
    </div>
";
        
        $__internal_f11e95da4d14b438fb26a0fe8e2372d625999c7b0706e85d27ca82ae1ad473ec->leave($__internal_f11e95da4d14b438fb26a0fe8e2372d625999c7b0706e85d27ca82ae1ad473ec_prof);

        
        $__internal_88b93499101d5ca3d1e8bb3abc10937f9cb5afaca37df0830d0cc9d9a8d0c681->leave($__internal_88b93499101d5ca3d1e8bb3abc10937f9cb5afaca37df0830d0cc9d9a8d0c681_prof);

    }

    public function getTemplateName()
    {
        return "folio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"col\">
        <h1 class=\"skill-title-1\">Mes compétences</h1>
        <h2 class=\"skill-title-2\">Développement web</h2>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>HTML/CSS</strong></p>
                <img src=\"img/skills/html5.png\">
            </div>
            <div class=\"skill\">
                <p><strong>PHP</strong></p>
                <img src=\"img/skills/php.png\">
            </div>
            <div class=\"skill\">
                <p><strong>JavaScript</strong></p>
                <img src=\"img/skills/js.png\">
            </div>
            <div class=\"skill\">
                <p><strong>jQuery</strong></p>
                <img src=\"img/skills/jquery.png\">
            </div>
            <div class=\"skill\">
                <p><strong>AngularJs</strong></p>
                <img src=\"img/skills/angular.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Symfony</strong></p>
                <img src=\"img/skills/symfony.png\">
            </div> 
        </div>
        <h2 class=\"skill-title-2\">Autres langages</h2>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>MySql</strong></p>
                <img src=\"img/skills/mysql.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Java</strong></p>
                <img src=\"img/skills/java.png\">
            </div>
            <div class=\"skill\">
                <p><strong>C#</strong></p>
                <img src=\"img/skills/csharp.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual Basic</strong></p>
                <img src=\"img/skills/vb.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Python</strong></p>
                <img src=\"img/skills/python.png\">
            </div>
        </div>
        <h2 class=\"skill-title-2\">Outils que j'utilise</h2>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>Visual studio code</strong></p>
                <img src=\"img/skills/vsc.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual studio</strong></p>
                <img src=\"img/skills/vs.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Git</strong></p>
                <img src=\"img/skills/git.png\">
            </div>
            <div class=\"skill\">
                <p><strong>Linux</strong></p>
                <img src=\"img/skills/linux.png\">
            </div>
        </div>
    </div>
{% endblock %}", "folio/index.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\index.html.twig");
    }
}
