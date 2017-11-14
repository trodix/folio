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
        $__internal_7b6d3debb26be411780a83c8cd487252fc1a0abf9c8817f2c64c7083b4e21032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6d3debb26be411780a83c8cd487252fc1a0abf9c8817f2c64c7083b4e21032->enter($__internal_7b6d3debb26be411780a83c8cd487252fc1a0abf9c8817f2c64c7083b4e21032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_fc40e84bc64784ad84af91421e73d4f7b11fafa992cedf82a54fe049c376e54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc40e84bc64784ad84af91421e73d4f7b11fafa992cedf82a54fe049c376e54e->enter($__internal_fc40e84bc64784ad84af91421e73d4f7b11fafa992cedf82a54fe049c376e54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b6d3debb26be411780a83c8cd487252fc1a0abf9c8817f2c64c7083b4e21032->leave($__internal_7b6d3debb26be411780a83c8cd487252fc1a0abf9c8817f2c64c7083b4e21032_prof);

        
        $__internal_fc40e84bc64784ad84af91421e73d4f7b11fafa992cedf82a54fe049c376e54e->leave($__internal_fc40e84bc64784ad84af91421e73d4f7b11fafa992cedf82a54fe049c376e54e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42e02e3c5fc55c0619a53dea0e4bc041f84beecb877e7d5cb7a835a458721708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e02e3c5fc55c0619a53dea0e4bc041f84beecb877e7d5cb7a835a458721708->enter($__internal_42e02e3c5fc55c0619a53dea0e4bc041f84beecb877e7d5cb7a835a458721708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1d0da3b6fcd14e04ba42d03f5445bf99722eb6e6db68e608c1395a449a35e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d0da3b6fcd14e04ba42d03f5445bf99722eb6e6db68e608c1395a449a35e4f->enter($__internal_d1d0da3b6fcd14e04ba42d03f5445bf99722eb6e6db68e608c1395a449a35e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col\">
        <h1 class=\"skill-title-1\"><span class=\"fa fa-graduation-cap\"></span> Mes compétences</h1>
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Développement web</h2>
        </div>
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
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Autres langages</h2>
        </div>
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
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Outils que j'utilise</h2>
        </div>
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
        
        $__internal_d1d0da3b6fcd14e04ba42d03f5445bf99722eb6e6db68e608c1395a449a35e4f->leave($__internal_d1d0da3b6fcd14e04ba42d03f5445bf99722eb6e6db68e608c1395a449a35e4f_prof);

        
        $__internal_42e02e3c5fc55c0619a53dea0e4bc041f84beecb877e7d5cb7a835a458721708->leave($__internal_42e02e3c5fc55c0619a53dea0e4bc041f84beecb877e7d5cb7a835a458721708_prof);

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
        <h1 class=\"skill-title-1\"><span class=\"fa fa-graduation-cap\"></span> Mes compétences</h1>
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Développement web</h2>
        </div>
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
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Autres langages</h2>
        </div>
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
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Outils que j'utilise</h2>
        </div>
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
