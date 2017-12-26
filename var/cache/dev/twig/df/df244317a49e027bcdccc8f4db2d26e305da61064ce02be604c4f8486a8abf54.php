<?php

/* folio/index.html.twig */
class __TwigTemplate_f4d664d08381918a6b7e31778437e609fd5beabef3e4b9f1387559bbcc1346e4 extends Twig_Template
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
        $__internal_6f39866fbd1aa5dace31d6fe76c74bc2d745048a67b1d2b9f40670730607da09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f39866fbd1aa5dace31d6fe76c74bc2d745048a67b1d2b9f40670730607da09->enter($__internal_6f39866fbd1aa5dace31d6fe76c74bc2d745048a67b1d2b9f40670730607da09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_092688ef03f3d52b813b33e88e1a65a445e85f22b7884c3a48949b68136e2a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092688ef03f3d52b813b33e88e1a65a445e85f22b7884c3a48949b68136e2a2a->enter($__internal_092688ef03f3d52b813b33e88e1a65a445e85f22b7884c3a48949b68136e2a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f39866fbd1aa5dace31d6fe76c74bc2d745048a67b1d2b9f40670730607da09->leave($__internal_6f39866fbd1aa5dace31d6fe76c74bc2d745048a67b1d2b9f40670730607da09_prof);

        
        $__internal_092688ef03f3d52b813b33e88e1a65a445e85f22b7884c3a48949b68136e2a2a->leave($__internal_092688ef03f3d52b813b33e88e1a65a445e85f22b7884c3a48949b68136e2a2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a3b2283bd14ee5bebd93b0b50031335599ee6482114ec08cc47230b9739bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a3b2283bd14ee5bebd93b0b50031335599ee6482114ec08cc47230b9739bc0->enter($__internal_c4a3b2283bd14ee5bebd93b0b50031335599ee6482114ec08cc47230b9739bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed10e0839d890fb93d79d7bc277e5f7465a56e3ccaa65c8d753a5901d907ee68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed10e0839d890fb93d79d7bc277e5f7465a56e3ccaa65c8d753a5901d907ee68->enter($__internal_ed10e0839d890fb93d79d7bc277e5f7465a56e3ccaa65c8d753a5901d907ee68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/html5.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>PHP</strong></p>
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/php.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>JavaScript</strong></p>
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/js.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>jQuery</strong></p>
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/jquery.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Angular</strong></p>
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/angular.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Symfony</strong></p>
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/symfony.png"), "html", null, true);
        echo "\">
            </div> 
        </div>
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Autres langages</h2>
        </div>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>MySql</strong></p>
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/mysql.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Java</strong></p>
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/java.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>C#</strong></p>
                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/csharp.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual Basic</strong></p>
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/vb.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Python</strong></p>
                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/python.png"), "html", null, true);
        echo "\">
            </div>
        </div>
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Outils que j'utilise</h2>
        </div>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>Visual studio code</strong></p>
                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/vsc.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual studio</strong></p>
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/vs.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Git</strong></p>
                <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/git.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Linux</strong></p>
                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/linux.png"), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
";
        
        $__internal_ed10e0839d890fb93d79d7bc277e5f7465a56e3ccaa65c8d753a5901d907ee68->leave($__internal_ed10e0839d890fb93d79d7bc277e5f7465a56e3ccaa65c8d753a5901d907ee68_prof);

        
        $__internal_c4a3b2283bd14ee5bebd93b0b50031335599ee6482114ec08cc47230b9739bc0->leave($__internal_c4a3b2283bd14ee5bebd93b0b50031335599ee6482114ec08cc47230b9739bc0_prof);

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
        return array (  170 => 81,  163 => 77,  156 => 73,  149 => 69,  136 => 59,  129 => 55,  122 => 51,  115 => 47,  108 => 43,  95 => 33,  88 => 29,  81 => 25,  74 => 21,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
                <img src=\"{{asset('img/skills/html5.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>PHP</strong></p>
                <img src=\"{{asset('img/skills/php.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>JavaScript</strong></p>
                <img src=\"{{asset('img/skills/js.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>jQuery</strong></p>
                <img src=\"{{asset('img/skills/jquery.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Angular</strong></p>
                <img src=\"{{asset('img/skills/angular.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Symfony</strong></p>
                <img src=\"{{asset('img/skills/symfony.png')}}\">
            </div> 
        </div>
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Autres langages</h2>
        </div>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>MySql</strong></p>
                <img src=\"{{asset('img/skills/mysql.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Java</strong></p>
                <img src=\"{{asset('img/skills/java.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>C#</strong></p>
                <img src=\"{{asset('img/skills/csharp.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual Basic</strong></p>
                <img src=\"{{asset('img/skills/vb.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Python</strong></p>
                <img src=\"{{asset('img/skills/python.png')}}\">
            </div>
        </div>
        <hr>
        <div class=\"title-stripes\">
            <h2 class=\"skill-title-2\">Outils que j'utilise</h2>
        </div>
        <div class=\"row skill-section\">
            <div class=\"skill\">
                <p><strong>Visual studio code</strong></p>
                <img src=\"{{asset('img/skills/vsc.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual studio</strong></p>
                <img src=\"{{asset('img/skills/vs.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Git</strong></p>
                <img src=\"{{asset('img/skills/git.png')}}\">
            </div>
            <div class=\"skill\">
                <p><strong>Linux</strong></p>
                <img src=\"{{asset('img/skills/linux.png')}}\">
            </div>
        </div>
    </div>
{% endblock %}", "folio/index.html.twig", "/media/data/User/Google Drive/Programmation/Symfony/folio/app/Resources/views/folio/index.html.twig");
    }
}
