<?php

/* folio/index.html.twig */
class __TwigTemplate_9185c40a85fdbabd6c5b814047e09e83ae6bbd6b1360d92d3c3bc0f4cb3817b9 extends Twig_Template
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
        $__internal_847b3db54c8e127b5478ac0a8d83481155edceb8c62a874430217491df9a96d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847b3db54c8e127b5478ac0a8d83481155edceb8c62a874430217491df9a96d1->enter($__internal_847b3db54c8e127b5478ac0a8d83481155edceb8c62a874430217491df9a96d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_48e5704e923cc990514b1c2312860b8a2b5bb7e8f3e2ad15cbcc9e32792fba7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e5704e923cc990514b1c2312860b8a2b5bb7e8f3e2ad15cbcc9e32792fba7e->enter($__internal_48e5704e923cc990514b1c2312860b8a2b5bb7e8f3e2ad15cbcc9e32792fba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847b3db54c8e127b5478ac0a8d83481155edceb8c62a874430217491df9a96d1->leave($__internal_847b3db54c8e127b5478ac0a8d83481155edceb8c62a874430217491df9a96d1_prof);

        
        $__internal_48e5704e923cc990514b1c2312860b8a2b5bb7e8f3e2ad15cbcc9e32792fba7e->leave($__internal_48e5704e923cc990514b1c2312860b8a2b5bb7e8f3e2ad15cbcc9e32792fba7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7948c038178a4bc73978eadd8a2084cf4df14e41fb70a998648054f5ae95fc14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7948c038178a4bc73978eadd8a2084cf4df14e41fb70a998648054f5ae95fc14->enter($__internal_7948c038178a4bc73978eadd8a2084cf4df14e41fb70a998648054f5ae95fc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6529ddea71d5e833fb1fa264305bd93d34e7d37520ed9c0c4f9f93a7a73d7ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6529ddea71d5e833fb1fa264305bd93d34e7d37520ed9c0c4f9f93a7a73d7ddb->enter($__internal_6529ddea71d5e833fb1fa264305bd93d34e7d37520ed9c0c4f9f93a7a73d7ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6529ddea71d5e833fb1fa264305bd93d34e7d37520ed9c0c4f9f93a7a73d7ddb->leave($__internal_6529ddea71d5e833fb1fa264305bd93d34e7d37520ed9c0c4f9f93a7a73d7ddb_prof);

        
        $__internal_7948c038178a4bc73978eadd8a2084cf4df14e41fb70a998648054f5ae95fc14->leave($__internal_7948c038178a4bc73978eadd8a2084cf4df14e41fb70a998648054f5ae95fc14_prof);

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
{% endblock %}", "folio/index.html.twig", "C:\\Users\\sebastien.vallet\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\index.html.twig");
    }
}
