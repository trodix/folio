<?php

/* folio/stage1.html.twig */
class __TwigTemplate_c2c88107516f62e00d6436888276e7152db6e5933c485ac8fc4e3c07a8605cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/stage1.html.twig", 1);
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
        $__internal_0f683ee274fd7f2f56765200177f33a1664c053b71a43e5169df643af0438eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f683ee274fd7f2f56765200177f33a1664c053b71a43e5169df643af0438eba->enter($__internal_0f683ee274fd7f2f56765200177f33a1664c053b71a43e5169df643af0438eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/stage1.html.twig"));

        $__internal_17cebfe16aab21d466815d94521098e4194b52c163d247930f9f14ac8f3028a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cebfe16aab21d466815d94521098e4194b52c163d247930f9f14ac8f3028a8->enter($__internal_17cebfe16aab21d466815d94521098e4194b52c163d247930f9f14ac8f3028a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/stage1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f683ee274fd7f2f56765200177f33a1664c053b71a43e5169df643af0438eba->leave($__internal_0f683ee274fd7f2f56765200177f33a1664c053b71a43e5169df643af0438eba_prof);

        
        $__internal_17cebfe16aab21d466815d94521098e4194b52c163d247930f9f14ac8f3028a8->leave($__internal_17cebfe16aab21d466815d94521098e4194b52c163d247930f9f14ac8f3028a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_618b889fab64d1f6e99c24239cb8b2176c6086bc8fc283cffacd3bab8b442b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618b889fab64d1f6e99c24239cb8b2176c6086bc8fc283cffacd3bab8b442b4c->enter($__internal_618b889fab64d1f6e99c24239cb8b2176c6086bc8fc283cffacd3bab8b442b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a456b887e9f9910fbc4f0e7b1650dd1f0aa02793db0b3a6cf7c7679b0870635a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a456b887e9f9910fbc4f0e7b1650dd1f0aa02793db0b3a6cf7c7679b0870635a->enter($__internal_a456b887e9f9910fbc4f0e7b1650dd1f0aa02793db0b3a6cf7c7679b0870635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/logo-acta.png"), "html", null, true);
        echo "\" class=\"hidden-sm-down\" id=\"logo-acta\"></img>
    <h3 class=\"skill-title-1\">Acta Mobilier</h3>
</div><hr>

<div class=\"col\">
        <ul>
            <li><a href=\"#stage1-p1\">Ma mission</a></li>
            <li><a href=\"#stage1-p2\">Le déroulement de mon stage et les compétences acquises</a></li>
        </ul>
</div>

<h3 id=\"stage1-p1\" class=\"title-blue\">Ma mission</h3>
<p>
    Acta Mobilier m'a confié la conception d'une application afin de mieux gérer
    les stocks de laque et ainsi gagner du temps dans la recherche d'une référence dans le stock.
    <br>
    Actuellement la gestion des stocks se fait par le biais d'un prologiciel (Vdoc) qui permet
    la saisie de références et d'ajouter/enlever un bidon dans le stock.
    <br><br>
    Le logiciel calcule la quantité théorique de laque utilisée en ajoutant une marge d'erreur pour
    les pertes (aspiration de la cabine).
    De plus le logiciel Vdoc ne prend pas en compte la repeinte d'une pièce en cas de besoin
    (ponçage irrégulier, pièce abîmée).
</p>
<p>
    Le but de l'application de gestion du stock de laque qui a été demandée par le responsable des
    stocks est de scanner un code barre présent sur l'étiquette d'un bidon afin de retrouver instantanément
    le gisement (emplacement dans le stock) correspondant.
    <br><br>
    Les peintres gagneront alors du temps lors de la
    recherche de l'emplacement d'une référence puisqu'ils n'auront plus à chercher dans un classeur.
    <br><br>
    L'application devra aussi permettre au labo qui créé les laques d'imprimer un QrCode correspondant à la nouvelle
    référence.
    <br><br>
    Le labo pourra aussi gérer de manière plus précise la quantité en stock grâce à une balance qui permettra de
    connaître la quantité exacte sortie du stock, de même pour la quantité entrée
    (Nouvelle laque en provenance du labo ou retour de production).
</p>
<hr>
<h3 id=\"stage1-p2\" class=\"title-blue\">Le déroulement de mon stage et les compétences acquises</h3>
<p>
\tArrivé dans l'entreprise j'ai d'abord du installer mon environnement de travail.
\t<li>J'ai donc créé mon compte utilisateur et installé les outils de développement de l'entreprise.<br>
    <strong>A4.1.06 Mettre en place et exploiter un environnement de développement</strong></li><br>
\t<li>On m'a ensuite donné une maquette pour l'application que je devais developper, j'ai du comprendre les besoins des futures utilisateurs et certains choix techniques qui étaient necessaire à l'utilisation sur écran tactile.<br>
    <strong>A1.2.01 Recenser et caractériser des solutions répondant au cahier des charges</strong></li><br>
\t<li>Le developpement de l'application a pu débuter, j'ai du intéragir avec des bases de données SQL Server, integrer une fonction de QrCode, gérer une balance. <br>
    <strong>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative <br>
    A4.1.7 Développement, utilisation ou adaptation de composants logiciels <br>
    A2.1.02 Produire des rapports d’activité demandés par les différents acteurs <br> 
    A4.1.3 Conception ou adaptation d’une base de données <br>Manipuler les données liées à la solution applicative dans le langage d’un SGBD</strong></li><br>
\t<li>Pendant le stage j'ai du mettre en place des réunions avec le personnel concerné par l'application de gestion de stock de laque, pour cela j'ai utilisé Microsoft Office Outlook qui est utilisé dans l'entreprise pour la communication, la gestion des emplois du temps.<br>
    <strong>A1.4.03 Adapter son planning personnel en fonction des ressources disponibles</strong></li><br>
\t<li>Le service informatique de l'entreprise est parfois amené à faire des formations, afin d'apprendre à utiliser un logiciel interne à l'entreprise. Parfois c'est le SI qui forme le personnel. J'ai moi-même participé à une formation standard Word en tant que formateur, cette formation était destinée à l'enseignement de la mise en page simple pour les personnes travaillant en atelier. Certaines de ces personnes ne sont pas à l'aise avec l'outil informatique, c'est pourquoi les formations se font en petit groupe et chaque semaine sur un theme choisi en fonction des besoins. Ici, la mise en page sur les documents atelier de Acta Mobilier n'était pas toujour respectée.<br>
    <strong>A5.2.02  Identifier et partager les bonnes pratiques à intégrer</strong></li><br>
\t<li>Le developpement de l'application de gestion de stock de laque a pris environ 4 semaines. La dernière semaine j'ai alors crée une documentation pour la maintenance de cette dernière, j'ai du expliquer certaines fonctions du programme et leur fonctionnement afin qu'un futur développeur puisse gagner du temps en cas de mis à jour.</li><br>
\t<li>Cette dernière semaine il m'a aussi été demander d'annalyser un prologiciel utilisé principalement par la logistique (Vdoc) afin que l'entreprise utilise son propre logiciel pour éviter le prix des mis à jour vers de nouvelles versions qui s'élèvent à plus de 1000 euros. J'ai alors rédigé un comparatif, entre deux solutions avec leurs avantages et leurs inconvénients<br>
    <strong>A1.2.01 Elaboration et présentation d’un dossier de choix de solution technique. <br>
    Rédiger un dossier de choix et un argumentaire technique.</strong></li><br>

</p>
<hr>
<div>
    <h4 class=\"title-blue\">Illustrations</h4>
    <div>
        <h5 class=\"title-mini\">Gestion stock de laque</h5>

        <a target=\"_blank\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s1.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s2.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s3.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s3.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s4.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s4.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s5.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/s5.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/etiquette.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/GestionStockLaque/etiquette.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
    </div>
    <div>
        <h5 class=\"title-mini\">Tableau Dynamique</h5>

        <a target=\"_blank\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/Tableau_Dynamique/Capture.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/stages/1/Tableau_Dynamique/Capture.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <ul class=\"list-style-none\">
            <li><a target=\"_blank\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ressources/ClsLotFab.vb"), "html", null, true);
        echo "\">ClsLotFab.vb</a></li>
            <li><a target=\"_blank\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ressources/Form1.vb"), "html", null, true);
        echo "\">Form1.vb</a></li>
        </ul>
    </div>
</div>
\t
";
        
        $__internal_a456b887e9f9910fbc4f0e7b1650dd1f0aa02793db0b3a6cf7c7679b0870635a->leave($__internal_a456b887e9f9910fbc4f0e7b1650dd1f0aa02793db0b3a6cf7c7679b0870635a_prof);

        
        $__internal_618b889fab64d1f6e99c24239cb8b2176c6086bc8fc283cffacd3bab8b442b4c->leave($__internal_618b889fab64d1f6e99c24239cb8b2176c6086bc8fc283cffacd3bab8b442b4c_prof);

    }

    public function getTemplateName()
    {
        return "folio/stage1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 87,  171 => 86,  164 => 84,  154 => 79,  148 => 78,  142 => 77,  136 => 76,  130 => 75,  124 => 74,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"row\">
    <img src=\"{{asset('img/stages/1/logo-acta.png')}}\" class=\"hidden-sm-down\" id=\"logo-acta\"></img>
    <h3 class=\"skill-title-1\">Acta Mobilier</h3>
</div><hr>

<div class=\"col\">
        <ul>
            <li><a href=\"#stage1-p1\">Ma mission</a></li>
            <li><a href=\"#stage1-p2\">Le déroulement de mon stage et les compétences acquises</a></li>
        </ul>
</div>

<h3 id=\"stage1-p1\" class=\"title-blue\">Ma mission</h3>
<p>
    Acta Mobilier m'a confié la conception d'une application afin de mieux gérer
    les stocks de laque et ainsi gagner du temps dans la recherche d'une référence dans le stock.
    <br>
    Actuellement la gestion des stocks se fait par le biais d'un prologiciel (Vdoc) qui permet
    la saisie de références et d'ajouter/enlever un bidon dans le stock.
    <br><br>
    Le logiciel calcule la quantité théorique de laque utilisée en ajoutant une marge d'erreur pour
    les pertes (aspiration de la cabine).
    De plus le logiciel Vdoc ne prend pas en compte la repeinte d'une pièce en cas de besoin
    (ponçage irrégulier, pièce abîmée).
</p>
<p>
    Le but de l'application de gestion du stock de laque qui a été demandée par le responsable des
    stocks est de scanner un code barre présent sur l'étiquette d'un bidon afin de retrouver instantanément
    le gisement (emplacement dans le stock) correspondant.
    <br><br>
    Les peintres gagneront alors du temps lors de la
    recherche de l'emplacement d'une référence puisqu'ils n'auront plus à chercher dans un classeur.
    <br><br>
    L'application devra aussi permettre au labo qui créé les laques d'imprimer un QrCode correspondant à la nouvelle
    référence.
    <br><br>
    Le labo pourra aussi gérer de manière plus précise la quantité en stock grâce à une balance qui permettra de
    connaître la quantité exacte sortie du stock, de même pour la quantité entrée
    (Nouvelle laque en provenance du labo ou retour de production).
</p>
<hr>
<h3 id=\"stage1-p2\" class=\"title-blue\">Le déroulement de mon stage et les compétences acquises</h3>
<p>
\tArrivé dans l'entreprise j'ai d'abord du installer mon environnement de travail.
\t<li>J'ai donc créé mon compte utilisateur et installé les outils de développement de l'entreprise.<br>
    <strong>A4.1.06 Mettre en place et exploiter un environnement de développement</strong></li><br>
\t<li>On m'a ensuite donné une maquette pour l'application que je devais developper, j'ai du comprendre les besoins des futures utilisateurs et certains choix techniques qui étaient necessaire à l'utilisation sur écran tactile.<br>
    <strong>A1.2.01 Recenser et caractériser des solutions répondant au cahier des charges</strong></li><br>
\t<li>Le developpement de l'application a pu débuter, j'ai du intéragir avec des bases de données SQL Server, integrer une fonction de QrCode, gérer une balance. <br>
    <strong>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative <br>
    A4.1.7 Développement, utilisation ou adaptation de composants logiciels <br>
    A2.1.02 Produire des rapports d’activité demandés par les différents acteurs <br> 
    A4.1.3 Conception ou adaptation d’une base de données <br>Manipuler les données liées à la solution applicative dans le langage d’un SGBD</strong></li><br>
\t<li>Pendant le stage j'ai du mettre en place des réunions avec le personnel concerné par l'application de gestion de stock de laque, pour cela j'ai utilisé Microsoft Office Outlook qui est utilisé dans l'entreprise pour la communication, la gestion des emplois du temps.<br>
    <strong>A1.4.03 Adapter son planning personnel en fonction des ressources disponibles</strong></li><br>
\t<li>Le service informatique de l'entreprise est parfois amené à faire des formations, afin d'apprendre à utiliser un logiciel interne à l'entreprise. Parfois c'est le SI qui forme le personnel. J'ai moi-même participé à une formation standard Word en tant que formateur, cette formation était destinée à l'enseignement de la mise en page simple pour les personnes travaillant en atelier. Certaines de ces personnes ne sont pas à l'aise avec l'outil informatique, c'est pourquoi les formations se font en petit groupe et chaque semaine sur un theme choisi en fonction des besoins. Ici, la mise en page sur les documents atelier de Acta Mobilier n'était pas toujour respectée.<br>
    <strong>A5.2.02  Identifier et partager les bonnes pratiques à intégrer</strong></li><br>
\t<li>Le developpement de l'application de gestion de stock de laque a pris environ 4 semaines. La dernière semaine j'ai alors crée une documentation pour la maintenance de cette dernière, j'ai du expliquer certaines fonctions du programme et leur fonctionnement afin qu'un futur développeur puisse gagner du temps en cas de mis à jour.</li><br>
\t<li>Cette dernière semaine il m'a aussi été demander d'annalyser un prologiciel utilisé principalement par la logistique (Vdoc) afin que l'entreprise utilise son propre logiciel pour éviter le prix des mis à jour vers de nouvelles versions qui s'élèvent à plus de 1000 euros. J'ai alors rédigé un comparatif, entre deux solutions avec leurs avantages et leurs inconvénients<br>
    <strong>A1.2.01 Elaboration et présentation d’un dossier de choix de solution technique. <br>
    Rédiger un dossier de choix et un argumentaire technique.</strong></li><br>

</p>
<hr>
<div>
    <h4 class=\"title-blue\">Illustrations</h4>
    <div>
        <h5 class=\"title-mini\">Gestion stock de laque</h5>

        <a target=\"_blank\" href=\"{{asset('img/stages/1/GestionStockLaque/s1.png')}}\"><img src=\"{{asset('img/stages/1/GestionStockLaque/s1.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/stages/1/GestionStockLaque/s2.png')}}\"><img src=\"{{asset('img/stages/1/GestionStockLaque/s2.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/stages/1/GestionStockLaque/s3.png')}}\"><img src=\"{{asset('img/stages/1/GestionStockLaque/s3.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/stages/1/GestionStockLaque/s4.png')}}\"><img src=\"{{asset('img/stages/1/GestionStockLaque/s4.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/stages/1/GestionStockLaque/s5.png')}}\"><img src=\"{{asset('img/stages/1/GestionStockLaque/s5.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/stages/1/GestionStockLaque/etiquette.png')}}\"><img src=\"{{asset('img/stages/1/GestionStockLaque/etiquette.png')}}\" class=\"screen-picture\"></a>
    </div>
    <div>
        <h5 class=\"title-mini\">Tableau Dynamique</h5>

        <a target=\"_blank\" href=\"{{asset('img/stages/1/Tableau_Dynamique/Capture.png')}}\"><img src=\"{{asset('img/stages/1/Tableau_Dynamique/Capture.png')}}\" class=\"screen-picture\"></a>
        <ul class=\"list-style-none\">
            <li><a target=\"_blank\" href=\"{{asset('ressources/ClsLotFab.vb')}}\">ClsLotFab.vb</a></li>
            <li><a target=\"_blank\" href=\"{{asset('ressources/Form1.vb')}}\">Form1.vb</a></li>
        </ul>
    </div>
</div>
\t
{% endblock %}", "folio/stage1.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\stage1.html.twig");
    }
}
