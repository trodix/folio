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
        $__internal_c49a773fe1d1db852df0782478a44e8e693c17354679b3d479b10b30be39f5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49a773fe1d1db852df0782478a44e8e693c17354679b3d479b10b30be39f5f7->enter($__internal_c49a773fe1d1db852df0782478a44e8e693c17354679b3d479b10b30be39f5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $__internal_25395494ff0d26880a2c6b230c5fbafa663bceddb307f6bc7a16b657cc359327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25395494ff0d26880a2c6b230c5fbafa663bceddb307f6bc7a16b657cc359327->enter($__internal_25395494ff0d26880a2c6b230c5fbafa663bceddb307f6bc7a16b657cc359327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49a773fe1d1db852df0782478a44e8e693c17354679b3d479b10b30be39f5f7->leave($__internal_c49a773fe1d1db852df0782478a44e8e693c17354679b3d479b10b30be39f5f7_prof);

        
        $__internal_25395494ff0d26880a2c6b230c5fbafa663bceddb307f6bc7a16b657cc359327->leave($__internal_25395494ff0d26880a2c6b230c5fbafa663bceddb307f6bc7a16b657cc359327_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4429f3a4aa5568c8cbca6e1e3e521d2af17dffb113552c037222081bbcf43f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4429f3a4aa5568c8cbca6e1e3e521d2af17dffb113552c037222081bbcf43f01->enter($__internal_4429f3a4aa5568c8cbca6e1e3e521d2af17dffb113552c037222081bbcf43f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_174f7786c7f21b423bad2051a0d08908ef08a6dfd61eec8d03345750cb854771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174f7786c7f21b423bad2051a0d08908ef08a6dfd61eec8d03345750cb854771->enter($__internal_174f7786c7f21b423bad2051a0d08908ef08a6dfd61eec8d03345750cb854771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row cv-header\">
        <div>
            <img class=\"rounded-circle photo-profil\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/photo-profil.png"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col\">
            <h1 class=\"cv-nom\">Sébastien Vallet</h1>
            <ul class=\"cv-header\">
                <li>Né le 18/09/1997</li>
                <li>Titulaire du permis B</li>
            </ul>
        </div>
    </div><hr>
    <div class=\"competences-contener\">
        <div class=\"cv-section\">
            <h2 class=\"cv-titre-2\">Ma formation</h2>
            <ul>
                <li>2016 / 2018 BTS SIO (services informatiques aux organisations) option SLAM (Solutions Logicielles et Applications Métiers)</li>
                <li>2016 Baccalauréat scientifique option sciences de l'ingenieur</li>
            </ul>
        </div><hr>
        <div class=\"cv-section\">
            <h2 class=\"cv-titre-2\">Mon expérience</h2>
            <ul>
                <li>2017 - Stage de 5 semaines en développement à Acta Mobilier, Monéteau (89470)</li>
                <li>2016 - Cours d'initiation à la bureautique, juillet - août.</li>
            </ul>
        </div><hr>
        <div class=\"cv-section\">
            <h2 class=\"cv-titre-2\">Mes compétences</h2>
            <div class=\"row\">
                <div class=\"col\">
                    <h4 class=\"cv-titre-4\">Web</h4>
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
                    <h4 class=\"cv-titre-4\">Autres langages</h4>
                    <ul>
                        <li>MySql</li>
                        <li>Java</li>
                        <li>C#</li>
                        <li>Visual Basic .NET</li>
                        <li>Python</li>
                    </ul>
                </div>
                 <div class=\"col\">
                    <h4 class=\"cv-titre-4\">Réseau</h4>
                    <ul>
                        <li>Configuration d'un serveur DNS (bind)</li>
                        <li>Configuration d'un serveur VPN (openvpn)</li>
                        <li>Configuration d'un serveur SMTP</li>
                        <li>Configuration d'un serveur FTP (proftpd)</li>
                    </ul>
                </div>
                <div class=\"col\">
                    <h4 class=\"cv-titre-4\">Mes outils</h4>
                    <ul>
                        <li>Archlinux (OS principal)</li>
                        <li>Git</li>
                        <li>Visual Studio Code</li>
                        <li>Visual Studio 2017</li>
                        <li>Netbeans</li>
                    </ul>
                </div>
            </div><hr>
            <div>
                <h2 class=\"cv-titre-2\">Mes langues</h3>
                <ul>
                    <li>Anglais : niveau B2 + langage orienté professionnel</li>
                </ul>
            </div><hr>
            <div>
                <h2 class=\"cv-titre-2\">Mes hobbies</h3>
                <ul>
                    <li>Le cinéma, les films, les séries, en particulié la science fiction (Marvel, DC'Comics) et en VO</li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_174f7786c7f21b423bad2051a0d08908ef08a6dfd61eec8d03345750cb854771->leave($__internal_174f7786c7f21b423bad2051a0d08908ef08a6dfd61eec8d03345750cb854771_prof);

        
        $__internal_4429f3a4aa5568c8cbca6e1e3e521d2af17dffb113552c037222081bbcf43f01->leave($__internal_4429f3a4aa5568c8cbca6e1e3e521d2af17dffb113552c037222081bbcf43f01_prof);

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
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"row cv-header\">
        <div>
            <img class=\"rounded-circle photo-profil\" src=\"{{asset('img/photo-profil.png')}}\">
        </div>
        <div class=\"col\">
            <h1 class=\"cv-nom\">Sébastien Vallet</h1>
            <ul class=\"cv-header\">
                <li>Né le 18/09/1997</li>
                <li>Titulaire du permis B</li>
            </ul>
        </div>
    </div><hr>
    <div class=\"competences-contener\">
        <div class=\"cv-section\">
            <h2 class=\"cv-titre-2\">Ma formation</h2>
            <ul>
                <li>2016 / 2018 BTS SIO (services informatiques aux organisations) option SLAM (Solutions Logicielles et Applications Métiers)</li>
                <li>2016 Baccalauréat scientifique option sciences de l'ingenieur</li>
            </ul>
        </div><hr>
        <div class=\"cv-section\">
            <h2 class=\"cv-titre-2\">Mon expérience</h2>
            <ul>
                <li>2017 - Stage de 5 semaines en développement à Acta Mobilier, Monéteau (89470)</li>
                <li>2016 - Cours d'initiation à la bureautique, juillet - août.</li>
            </ul>
        </div><hr>
        <div class=\"cv-section\">
            <h2 class=\"cv-titre-2\">Mes compétences</h2>
            <div class=\"row\">
                <div class=\"col\">
                    <h4 class=\"cv-titre-4\">Web</h4>
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
                    <h4 class=\"cv-titre-4\">Autres langages</h4>
                    <ul>
                        <li>MySql</li>
                        <li>Java</li>
                        <li>C#</li>
                        <li>Visual Basic .NET</li>
                        <li>Python</li>
                    </ul>
                </div>
                 <div class=\"col\">
                    <h4 class=\"cv-titre-4\">Réseau</h4>
                    <ul>
                        <li>Configuration d'un serveur DNS (bind)</li>
                        <li>Configuration d'un serveur VPN (openvpn)</li>
                        <li>Configuration d'un serveur SMTP</li>
                        <li>Configuration d'un serveur FTP (proftpd)</li>
                    </ul>
                </div>
                <div class=\"col\">
                    <h4 class=\"cv-titre-4\">Mes outils</h4>
                    <ul>
                        <li>Archlinux (OS principal)</li>
                        <li>Git</li>
                        <li>Visual Studio Code</li>
                        <li>Visual Studio 2017</li>
                        <li>Netbeans</li>
                    </ul>
                </div>
            </div><hr>
            <div>
                <h2 class=\"cv-titre-2\">Mes langues</h3>
                <ul>
                    <li>Anglais : niveau B2 + langage orienté professionnel</li>
                </ul>
            </div><hr>
            <div>
                <h2 class=\"cv-titre-2\">Mes hobbies</h3>
                <ul>
                    <li>Le cinéma, les films, les séries, en particulié la science fiction (Marvel, DC'Comics) et en VO</li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}", "folio/cv.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\cv.html.twig");
    }
}
