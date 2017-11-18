<?php

/* folio/ppe3.html.twig */
class __TwigTemplate_c45af7405e579486b6f15e9674f1fd77aaab649d41992670e84e1f4b826027e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/ppe3.html.twig", 1);
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
        echo "
<div>
\t<div class=\"row\">
            <img src=\"/img/ppe/ppe3/logo-sdis.png\"><h3 class=\"skill-title-1\">SDIS29</h3>
    </div><hr>
\t<article class=\"card bg-faded p-3\">
        <h3>Contexte</h3>
\t\tSDIS, Services Départementaux d’Incendie et de Secours représente l'une des compétences de la Direction 
\t\tde la Sécurité Civile, gère les accidents quotidiens et les catastrophes (aide à la population) 
\t\tElle intervient rapidement sur les lieux d’un incident, et utilise donc l'outil informatique pour 
\t\tdisposer d'informations en temps réél.
\t</article><br>
</div>
<div class=\"title-stripes font-italic\">
    <p><strong>Besoins</strong></p>
</div>
<div>
\t<p><strong>Rendre plus rapide la mobilisation des pompiers</strong></p>
\t<p>L'application doit permettre d'informer le pompier de manière rapide en cas de besoin et devra 
\trendre disponible les informations d'un employeur de pompier volontaire en cas de besoin</p>
\t<p><strong>Gestion plus facile et efficace des pompiers volontaires</strong></p>
\t<p>Un pompier dépend d'une caserne, dans laquelle il y a un chef de caserne et un responsable d’alerte. 
\tL'application affiche ainsi les informations et disponibilité des pompiers selon le calendrier 
\tdes gardes émis par les chefs de centre. Elle permet de mieux connaître qui est disponible et de 
\tles appeller immédiatement.</p>
\t<p><strong>Different type d'utilisateurs :</strong></p>
\t<li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> <strong>Chef de centre :</strong> Créer, modifier et visualiser les profils des pompiers</li>
\t<li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> <strong>Pompier volontaire :</strong> Afficher et modifier ses informations personnelles</li>

    <a target=\"_blank\" href=\"/img/ppe/ppe3/sdis29-connexion.png\"><img src=\"/img/ppe/ppe3/sdis29-connexion.png\" class=\"screen-picture\"></a>
    <a target=\"_blank\" href=\"/img/ppe/ppe3/sdis29-liste.png\"><img src=\"/img/ppe/ppe3/sdis29-liste.png\" class=\"screen-picture\"></a>
    <a target=\"_blank\" href=\"/img/ppe/ppe3/sdis29-profil.png\"><img src=\"/img/ppe/ppe3/sdis29-profil.png\" class=\"screen-picture\"></a>
    <a target=\"_blank\" href=\"/img/ppe/ppe3/sdis29-creer.png\"><img src=\"/img/ppe/ppe3/sdis29-creer.png\" class=\"screen-picture\"></a>
    <a target=\"_blank\" href=\"/img/ppe/ppe3/sdis29-charte.png\"><img src=\"/img/ppe/ppe3/sdis29-charte.png\" class=\"screen-picture\"></a>


</div><hr>
<div class=\"title-stripes font-italic\">
    <p><strong>Compétences mises en oeuvre</strong></p>
</div>
<div>
\t<p class=\"underline\">Choix d'une solution</p>
\t<li>A1.2.05 Définir des niveaux d'habilitation associés à un service / Recenser les utiliateurs du service, leurs rôles et leur niveau de responsabilité</li><br>
\t<p class=\"underline\">Mise en production d'un service</p>
\t<li>A1.3.04 Déploiement d'un service</li><br>
\t<p class=\"underline\">Travail en mode projet</p>
\t<li>A1.4.01 Participation à un projet</li>
\t<li>A1.4.02 Analyser les écarts entre temps prévu et temps consommé</li><br>
\t<p class=\"underline\">Gestion des incidents et des demandes d'assistance</p>
\t<li>A2.2.01 Suivi et résolution d'incidents</li><br>
\t<p class=\"underline\">Gestion des problèmes et des changements</p>
\t<li>A2.3.01 Identification, qualification et évaluation d'un problème</li>
\t<li>A2.3.02 Proposition d'amélioration d'un service</li><br>
\t<p class=\"underline\">Conception et réalisation d'une solution applicative</p>
\t<li>A4.1.02 Conception ou adaptation de l'interface utilisateur d'une solution aplicative</li>
\t<li>A4.1.03 Conception ou adaptation d'une base de données</li>
\t<li>A4.1.07 Utiliser des composants d'accès aux données</li>

</div>

";
    }

    public function getTemplateName()
    {
        return "folio/ppe3.html.twig";
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
        return new Twig_Source("", "folio/ppe3.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\ppe3.html.twig");
    }
}
