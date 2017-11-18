<?php

/* folio/ppe1.html.twig */
class __TwigTemplate_4917bc7370038e5c6497e6f8cad7b905f87b0ad539a14527204c71724771d265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/ppe1.html.twig", 1);
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
        $__internal_1e47cde97b1ac85cb7a0999acde0ee9fea9bfadaaf94872c0bb7c5b7425b19aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e47cde97b1ac85cb7a0999acde0ee9fea9bfadaaf94872c0bb7c5b7425b19aa->enter($__internal_1e47cde97b1ac85cb7a0999acde0ee9fea9bfadaaf94872c0bb7c5b7425b19aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/ppe1.html.twig"));

        $__internal_7a3f5db41f28f08a567ea1c0cf5d1fde2afc727a9ef7cd2a16368e9dc40fbec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3f5db41f28f08a567ea1c0cf5d1fde2afc727a9ef7cd2a16368e9dc40fbec1->enter($__internal_7a3f5db41f28f08a567ea1c0cf5d1fde2afc727a9ef7cd2a16368e9dc40fbec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/ppe1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e47cde97b1ac85cb7a0999acde0ee9fea9bfadaaf94872c0bb7c5b7425b19aa->leave($__internal_1e47cde97b1ac85cb7a0999acde0ee9fea9bfadaaf94872c0bb7c5b7425b19aa_prof);

        
        $__internal_7a3f5db41f28f08a567ea1c0cf5d1fde2afc727a9ef7cd2a16368e9dc40fbec1->leave($__internal_7a3f5db41f28f08a567ea1c0cf5d1fde2afc727a9ef7cd2a16368e9dc40fbec1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ee573c8b1d4872256b877681f0a4a8e2ae88aa4678c5c98292154edde775791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee573c8b1d4872256b877681f0a4a8e2ae88aa4678c5c98292154edde775791->enter($__internal_4ee573c8b1d4872256b877681f0a4a8e2ae88aa4678c5c98292154edde775791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_488e17713641d29a9c5f7a8db23079696631b006839be361ce6763301ad724b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488e17713641d29a9c5f7a8db23079696631b006839be361ce6763301ad724b3->enter($__internal_488e17713641d29a9c5f7a8db23079696631b006839be361ce6763301ad724b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div>
    <div>
        <div class=\"row\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe1/doriath.png"), "html", null, true);
        echo "\"><h3 class=\"skill-title-1\">Projet personnalisé encadré - Doriath</h3>
        </div>
        <hr><br>
        <article class=\"card bg-faded p-3\">
            <h3>Contexte</h3>
            <p>L'ESN InfoSol, dans laquelle vous travaillez, a été contactée par Mr Doriath,
                directeur de l'entreprise &laquo; Foie gras Lucien Doriath &raquo;. Il s'agit
                d'une société anonyme spécialisée dans la restauration à base de foies gras
                de canards, elle est à la fois lieu de production, restaurant et boutique.</p>
            <p>Face au développement important de ses acticités, Mr Doriath souhaite en améliorer
                la gestion. Par l'intermédiaire de la société Impacte Web, Mr Doriath dispose déjà
                d'un site internet permettant non seulement de se faire connaitre, mais également :</p>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> d'effectuer des réservations en ligne pour le restaurant,</li>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> de proposer l'accueil de groupes souhaitant visiter le site de production,</li>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> de proposer des cours de cuisine,</li>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> d'acheter des produits via une boutique en ligne</li>
        </article>
    </div>
    <div>
        <h3 class=\"skill-title-1 underline\" style=\"margin-top: 50px;\">Amélioration de la gestion de l'entreprise &laquo; Foie gras Lucien Doriath &raquo;</h3>

        <div class=\"title-stripes font-italic\">
            <p><strong>Travail effectué</strong></p>
        </div>
        <li>Développement d'un site intranet permettant de disposer d'informations afin de mieux gérer les réservation pour le restaurant.</li>
        <li>Développement d'une petite application Java permettant de disposer de statistiques sur l'activité du restaurant.</li>
        <a target=\"_blank\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe1/doriath-screen-1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe1/doriath-screen-1.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe1/doriath-screen-2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe1/doriath-screen-2.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe1/doriath-screen-3.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe1/doriath-screen-3.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <br>

        <div class=\"title-stripes font-italic\">
            <p><strong>Activités concernées</strong></p>
        </div>
        <p class=\"underline\">Analyse de la demande</p>
        <li>A1.1.1 : Analyse du cahier des charges</li>
        <li>A1.1.2 : Étude de l'impacte de l'integration d'un service sur le systeme informatique</li><br>
        <p class=\"underline\">Mise en production d'un service</p>
        <li>A1.3.1 : Test d'integration et d'acceptation d'un service</li>
        <li>A1.3.3 : Accompagnement de la mise en place d'un nouveau service</li><br>
        <p class=\"underline\">Travail en mode projet</p>
        <li>A1.4.1 : Participation à un projet</li>
        <li>A1.4.2 : Évaluation des indicateurs de suivi d'un projet et justification des écarts</li>
        <li>A1.4.3 : Gestion des ressources</li><br>
        <p class=\"underline\">Conception et réalisation d'une solution applicative</p>
        <li>A4.1.2 : Conception ou adaptation de l'interface utilisateur d'une solution applicative</li>
        <li>A4.1.7 : Développement, utilisation ou adaptation de composants logiciels</li>
        <li>A4.1.9 : Rédaction d'une documentation technique</li>
        <li>A4.1.10 : Rédaction d'une documentation utilisateur</li>
    </div>
</div>
";
        
        $__internal_488e17713641d29a9c5f7a8db23079696631b006839be361ce6763301ad724b3->leave($__internal_488e17713641d29a9c5f7a8db23079696631b006839be361ce6763301ad724b3_prof);

        
        $__internal_4ee573c8b1d4872256b877681f0a4a8e2ae88aa4678c5c98292154edde775791->leave($__internal_4ee573c8b1d4872256b877681f0a4a8e2ae88aa4678c5c98292154edde775791_prof);

    }

    public function getTemplateName()
    {
        return "folio/ppe1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  89 => 34,  83 => 33,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<div>
    <div>
        <div class=\"row\">
            <img src=\"{{asset('img/ppe/ppe1/doriath.png')}}\"><h3 class=\"skill-title-1\">Projet personnalisé encadré - Doriath</h3>
        </div>
        <hr><br>
        <article class=\"card bg-faded p-3\">
            <h3>Contexte</h3>
            <p>L'ESN InfoSol, dans laquelle vous travaillez, a été contactée par Mr Doriath,
                directeur de l'entreprise &laquo; Foie gras Lucien Doriath &raquo;. Il s'agit
                d'une société anonyme spécialisée dans la restauration à base de foies gras
                de canards, elle est à la fois lieu de production, restaurant et boutique.</p>
            <p>Face au développement important de ses acticités, Mr Doriath souhaite en améliorer
                la gestion. Par l'intermédiaire de la société Impacte Web, Mr Doriath dispose déjà
                d'un site internet permettant non seulement de se faire connaitre, mais également :</p>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> d'effectuer des réservations en ligne pour le restaurant,</li>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> de proposer l'accueil de groupes souhaitant visiter le site de production,</li>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> de proposer des cours de cuisine,</li>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> d'acheter des produits via une boutique en ligne</li>
        </article>
    </div>
    <div>
        <h3 class=\"skill-title-1 underline\" style=\"margin-top: 50px;\">Amélioration de la gestion de l'entreprise &laquo; Foie gras Lucien Doriath &raquo;</h3>

        <div class=\"title-stripes font-italic\">
            <p><strong>Travail effectué</strong></p>
        </div>
        <li>Développement d'un site intranet permettant de disposer d'informations afin de mieux gérer les réservation pour le restaurant.</li>
        <li>Développement d'une petite application Java permettant de disposer de statistiques sur l'activité du restaurant.</li>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe1/doriath-screen-1.png')}}\"><img src=\"{{asset('img/ppe/ppe1/doriath-screen-1.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe1/doriath-screen-2.png')}}\"><img src=\"{{asset('img/ppe/ppe1/doriath-screen-2.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe1/doriath-screen-3.png')}}\"><img src=\"{{asset('img/ppe/ppe1/doriath-screen-3.png')}}\" class=\"screen-picture\"></a>
        <br>

        <div class=\"title-stripes font-italic\">
            <p><strong>Activités concernées</strong></p>
        </div>
        <p class=\"underline\">Analyse de la demande</p>
        <li>A1.1.1 : Analyse du cahier des charges</li>
        <li>A1.1.2 : Étude de l'impacte de l'integration d'un service sur le systeme informatique</li><br>
        <p class=\"underline\">Mise en production d'un service</p>
        <li>A1.3.1 : Test d'integration et d'acceptation d'un service</li>
        <li>A1.3.3 : Accompagnement de la mise en place d'un nouveau service</li><br>
        <p class=\"underline\">Travail en mode projet</p>
        <li>A1.4.1 : Participation à un projet</li>
        <li>A1.4.2 : Évaluation des indicateurs de suivi d'un projet et justification des écarts</li>
        <li>A1.4.3 : Gestion des ressources</li><br>
        <p class=\"underline\">Conception et réalisation d'une solution applicative</p>
        <li>A4.1.2 : Conception ou adaptation de l'interface utilisateur d'une solution applicative</li>
        <li>A4.1.7 : Développement, utilisation ou adaptation de composants logiciels</li>
        <li>A4.1.9 : Rédaction d'une documentation technique</li>
        <li>A4.1.10 : Rédaction d'une documentation utilisateur</li>
    </div>
</div>
{% endblock %}", "folio/ppe1.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\ppe1.html.twig");
    }
}
