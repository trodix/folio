<?php

/* folio/cv.html.twig */
class __TwigTemplate_28c7fd0cb397fe6f827c877505fd2de822dc45e8305d9892e2d75534fc0c6a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/cv.html.twig", 1);
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
        $__internal_e11563339efaaea87c14cf66d058747bcc954e21e9979e9a2c6e2e0b7332f615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11563339efaaea87c14cf66d058747bcc954e21e9979e9a2c6e2e0b7332f615->enter($__internal_e11563339efaaea87c14cf66d058747bcc954e21e9979e9a2c6e2e0b7332f615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $__internal_cba168c0f7dfd1955be03531c4c5bcc70d1689f4a97e63419a958378158eb7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba168c0f7dfd1955be03531c4c5bcc70d1689f4a97e63419a958378158eb7b8->enter($__internal_cba168c0f7dfd1955be03531c4c5bcc70d1689f4a97e63419a958378158eb7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11563339efaaea87c14cf66d058747bcc954e21e9979e9a2c6e2e0b7332f615->leave($__internal_e11563339efaaea87c14cf66d058747bcc954e21e9979e9a2c6e2e0b7332f615_prof);

        
        $__internal_cba168c0f7dfd1955be03531c4c5bcc70d1689f4a97e63419a958378158eb7b8->leave($__internal_cba168c0f7dfd1955be03531c4c5bcc70d1689f4a97e63419a958378158eb7b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_805e8782e375e60ca739204e5c2ff9ebac2c0bebcd472eb1ce353b5fad25fc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805e8782e375e60ca739204e5c2ff9ebac2c0bebcd472eb1ce353b5fad25fc67->enter($__internal_805e8782e375e60ca739204e5c2ff9ebac2c0bebcd472eb1ce353b5fad25fc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf5af58979ec3cd1fbed9a56260d1c2ae37a4a2708e7e3d524abc61835fe5605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5af58979ec3cd1fbed9a56260d1c2ae37a4a2708e7e3d524abc61835fe5605->enter($__internal_bf5af58979ec3cd1fbed9a56260d1c2ae37a4a2708e7e3d524abc61835fe5605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "\">
    <h1 class=\"cv-nom\">Sébastien Vallet</h2>
    <div class=\"competences-contener\">
        <div class=\"cv-section\">
            <h2>Ma formation</h2>
            <ul>
                <li>2016 / 2018 BTS SIO (services informatiques aux organisations) option SLAM (Solutions Logicielles et Applications Métiers)</li>
                <li>2016 Baccalauréat scientifique option sciences de l'ingenieur</li>
            </ul>
        </div>
        <div class=\"cv-section\">
            <h2>Mon expérience</h2>
            <ul>
                <li>2017 - Stage de 5 semaines en développement à Acta Mobilier, Monéteau</li>
                <li>2016 - Cours d'initiation à la bureautique, juillet - août.</li>
            </ul>
        </div>
        <div class=\"cv-section\">
            <h2>Mon expérience</h2>
            <ul>
                <li>2017 - Stage de 5 semaines en développement à Acta Mobilier, Monéteau</li>
                <li>2016 - Cours d'initiation à la bureautique, juillet - août.</li>
            </ul>
        </div>
        <div class=\"cv-section\">
            <h2>Mes compétences</h2>
            <div class=\"row\">
                <div class=\"col\">
                    <h4>Web</h4>
                    <ul>
                        <li>HTML / CSS</li>
                        <li>PHP</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        <li>Ajax</li>
                        <li>AngularJs</li>
                        <li>Symfony</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>
                <div class=\"col\">
                    <h4>Autres langages</h4>
                    <ul>
                        <li>MySql</li>
                        <li>Java</li>
                        <li>C#</li>
                        <li>Visual Basic .NET</li>
                        <li>Python</li>
                    </ul>
                </div>
                 <div class=\"col\">
                    <h4>Réseau</h4>
                    <ul>
                        <li>Configuration d'un serveur DNS (bind)</li>
                        <li>Configuration d'un serveur VPN (openvpn)</li>
                        <li>Configuration d'un serveur SMTP</li>
                        <li>Configuration d'un serveur FTP (proftpd)</li>
                    </ul>
                </div>
                <div class=\"col\">
                    <h4>Mes outils</h4>
                    <ul>
                        <li>Archlinux (OS principal)</li>
                        <li>Git</li>
                        <li>Visual Studio Code</li>
                        <li>Visual Studio 2017</li>
                        <li>Netbeans</li>
                    </ul>
                </div>
            </div>
            <div>
                <h3>Mes langues</h3>
                <ul>
                    <li>Anglais : niveau B2 + langage orienté professionnel</li>
                </ul>
            </div>
            <div>
                <h3>Mes hobbies</h3>
                <ul>
                    <li>Le cinéma, les films, les séries, en particulié la science fiction (Marvel, DC'Comics) et en particulié en VO</li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_bf5af58979ec3cd1fbed9a56260d1c2ae37a4a2708e7e3d524abc61835fe5605->leave($__internal_bf5af58979ec3cd1fbed9a56260d1c2ae37a4a2708e7e3d524abc61835fe5605_prof);

        
        $__internal_805e8782e375e60ca739204e5c2ff9ebac2c0bebcd472eb1ce353b5fad25fc67->leave($__internal_805e8782e375e60ca739204e5c2ff9ebac2c0bebcd472eb1ce353b5fad25fc67_prof);

    }

    public function getTemplateName()
    {
        return "folio/cv.html.twig";
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
<img src=\"{{asset('')}}\">
    <h1 class=\"cv-nom\">Sébastien Vallet</h2>
    <div class=\"competences-contener\">
        <div class=\"cv-section\">
            <h2>Ma formation</h2>
            <ul>
                <li>2016 / 2018 BTS SIO (services informatiques aux organisations) option SLAM (Solutions Logicielles et Applications Métiers)</li>
                <li>2016 Baccalauréat scientifique option sciences de l'ingenieur</li>
            </ul>
        </div>
        <div class=\"cv-section\">
            <h2>Mon expérience</h2>
            <ul>
                <li>2017 - Stage de 5 semaines en développement à Acta Mobilier, Monéteau</li>
                <li>2016 - Cours d'initiation à la bureautique, juillet - août.</li>
            </ul>
        </div>
        <div class=\"cv-section\">
            <h2>Mon expérience</h2>
            <ul>
                <li>2017 - Stage de 5 semaines en développement à Acta Mobilier, Monéteau</li>
                <li>2016 - Cours d'initiation à la bureautique, juillet - août.</li>
            </ul>
        </div>
        <div class=\"cv-section\">
            <h2>Mes compétences</h2>
            <div class=\"row\">
                <div class=\"col\">
                    <h4>Web</h4>
                    <ul>
                        <li>HTML / CSS</li>
                        <li>PHP</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        <li>Ajax</li>
                        <li>AngularJs</li>
                        <li>Symfony</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>
                <div class=\"col\">
                    <h4>Autres langages</h4>
                    <ul>
                        <li>MySql</li>
                        <li>Java</li>
                        <li>C#</li>
                        <li>Visual Basic .NET</li>
                        <li>Python</li>
                    </ul>
                </div>
                 <div class=\"col\">
                    <h4>Réseau</h4>
                    <ul>
                        <li>Configuration d'un serveur DNS (bind)</li>
                        <li>Configuration d'un serveur VPN (openvpn)</li>
                        <li>Configuration d'un serveur SMTP</li>
                        <li>Configuration d'un serveur FTP (proftpd)</li>
                    </ul>
                </div>
                <div class=\"col\">
                    <h4>Mes outils</h4>
                    <ul>
                        <li>Archlinux (OS principal)</li>
                        <li>Git</li>
                        <li>Visual Studio Code</li>
                        <li>Visual Studio 2017</li>
                        <li>Netbeans</li>
                    </ul>
                </div>
            </div>
            <div>
                <h3>Mes langues</h3>
                <ul>
                    <li>Anglais : niveau B2 + langage orienté professionnel</li>
                </ul>
            </div>
            <div>
                <h3>Mes hobbies</h3>
                <ul>
                    <li>Le cinéma, les films, les séries, en particulié la science fiction (Marvel, DC'Comics) et en particulié en VO</li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}", "folio/cv.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\cv.html.twig");
    }
}
