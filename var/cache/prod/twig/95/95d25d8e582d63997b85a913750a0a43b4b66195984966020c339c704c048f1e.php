<?php

/* folio/index.html.twig */
class __TwigTemplate_80bac43fbcbcd9d840002b7947d295a0193a28835981c6ade400492885c91908 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "folio/index.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\index.html.twig");
    }
}
