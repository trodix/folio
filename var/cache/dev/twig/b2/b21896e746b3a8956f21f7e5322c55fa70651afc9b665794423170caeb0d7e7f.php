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
        $__internal_6ad93ece7aad6749fbaf704f460c153ead590cedeb0ff8ab8456791d4cb434bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad93ece7aad6749fbaf704f460c153ead590cedeb0ff8ab8456791d4cb434bd->enter($__internal_6ad93ece7aad6749fbaf704f460c153ead590cedeb0ff8ab8456791d4cb434bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_db03231791bcb07e10bb936a30b85890ada4d4e20a0e45fd9d5d3dd52892c8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db03231791bcb07e10bb936a30b85890ada4d4e20a0e45fd9d5d3dd52892c8a7->enter($__internal_db03231791bcb07e10bb936a30b85890ada4d4e20a0e45fd9d5d3dd52892c8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad93ece7aad6749fbaf704f460c153ead590cedeb0ff8ab8456791d4cb434bd->leave($__internal_6ad93ece7aad6749fbaf704f460c153ead590cedeb0ff8ab8456791d4cb434bd_prof);

        
        $__internal_db03231791bcb07e10bb936a30b85890ada4d4e20a0e45fd9d5d3dd52892c8a7->leave($__internal_db03231791bcb07e10bb936a30b85890ada4d4e20a0e45fd9d5d3dd52892c8a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77835f7fd207a46c19f58cc9cdc0d778389bd4d12122d58bd820915391c5ccf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77835f7fd207a46c19f58cc9cdc0d778389bd4d12122d58bd820915391c5ccf0->enter($__internal_77835f7fd207a46c19f58cc9cdc0d778389bd4d12122d58bd820915391c5ccf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1e653ad7173293ad19fa490ef9ba8e53f7992a92ed013452daf62952cc92fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e653ad7173293ad19fa490ef9ba8e53f7992a92ed013452daf62952cc92fa5->enter($__internal_d1e653ad7173293ad19fa490ef9ba8e53f7992a92ed013452daf62952cc92fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <p><strong>AngularJs</strong></p>
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
        
        $__internal_d1e653ad7173293ad19fa490ef9ba8e53f7992a92ed013452daf62952cc92fa5->leave($__internal_d1e653ad7173293ad19fa490ef9ba8e53f7992a92ed013452daf62952cc92fa5_prof);

        
        $__internal_77835f7fd207a46c19f58cc9cdc0d778389bd4d12122d58bd820915391c5ccf0->leave($__internal_77835f7fd207a46c19f58cc9cdc0d778389bd4d12122d58bd820915391c5ccf0_prof);

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
                <p><strong>AngularJs</strong></p>
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
{% endblock %}", "folio/index.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\index.html.twig");
    }
}
