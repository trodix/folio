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
        $__internal_aa69833a7578a2018e1ba16a59638291d892b63aa4159e188e5cd4a3834e3be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa69833a7578a2018e1ba16a59638291d892b63aa4159e188e5cd4a3834e3be3->enter($__internal_aa69833a7578a2018e1ba16a59638291d892b63aa4159e188e5cd4a3834e3be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_5b5fe3be2b08778827af4db75a8cc5ed32d79002f54f156ecb1ddfa0b0392740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5fe3be2b08778827af4db75a8cc5ed32d79002f54f156ecb1ddfa0b0392740->enter($__internal_5b5fe3be2b08778827af4db75a8cc5ed32d79002f54f156ecb1ddfa0b0392740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa69833a7578a2018e1ba16a59638291d892b63aa4159e188e5cd4a3834e3be3->leave($__internal_aa69833a7578a2018e1ba16a59638291d892b63aa4159e188e5cd4a3834e3be3_prof);

        
        $__internal_5b5fe3be2b08778827af4db75a8cc5ed32d79002f54f156ecb1ddfa0b0392740->leave($__internal_5b5fe3be2b08778827af4db75a8cc5ed32d79002f54f156ecb1ddfa0b0392740_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eac27498b35c6273fe76475985c0951ea5bf8a17eb5be8461c89b196cc1317b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eac27498b35c6273fe76475985c0951ea5bf8a17eb5be8461c89b196cc1317b->enter($__internal_1eac27498b35c6273fe76475985c0951ea5bf8a17eb5be8461c89b196cc1317b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc953665d01c3ae88668d4fbc45637bf60480e8687778f1bbbc68d57f1aebad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc953665d01c3ae88668d4fbc45637bf60480e8687778f1bbbc68d57f1aebad2->enter($__internal_bc953665d01c3ae88668d4fbc45637bf60480e8687778f1bbbc68d57f1aebad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"skill\">
                <p><strong>CodeIgniter</strong></p>
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/codeigniter.png"), "html", null, true);
        echo "\">
            </div> 
            <div class=\"skill\">
                <p><strong>NodeJs</strong></p>
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/nodejs.png"), "html", null, true);
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/mysql.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Java</strong></p>
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/java.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>C#</strong></p>
                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/csharp.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual Basic</strong></p>
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/vb.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Python</strong></p>
                <img src=\"";
        // line 67
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
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/vsc.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Visual studio</strong></p>
                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/vs.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Git</strong></p>
                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/git.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"skill\">
                <p><strong>Linux</strong></p>
                <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/skills/linux.png"), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
";
        
        $__internal_bc953665d01c3ae88668d4fbc45637bf60480e8687778f1bbbc68d57f1aebad2->leave($__internal_bc953665d01c3ae88668d4fbc45637bf60480e8687778f1bbbc68d57f1aebad2_prof);

        
        $__internal_1eac27498b35c6273fe76475985c0951ea5bf8a17eb5be8461c89b196cc1317b->leave($__internal_1eac27498b35c6273fe76475985c0951ea5bf8a17eb5be8461c89b196cc1317b_prof);

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
        return array (  184 => 89,  177 => 85,  170 => 81,  163 => 77,  150 => 67,  143 => 63,  136 => 59,  129 => 55,  122 => 51,  109 => 41,  102 => 37,  95 => 33,  88 => 29,  81 => 25,  74 => 21,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
            <div class=\"skill\">
                <p><strong>CodeIgniter</strong></p>
                <img src=\"{{asset('img/skills/codeigniter.png')}}\">
            </div> 
            <div class=\"skill\">
                <p><strong>NodeJs</strong></p>
                <img src=\"{{asset('img/skills/nodejs.png')}}\">
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
{% endblock %}", "folio/index.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\index.html.twig");
    }
}
