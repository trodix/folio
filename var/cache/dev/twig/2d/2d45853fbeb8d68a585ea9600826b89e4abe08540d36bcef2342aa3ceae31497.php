<?php

/* folio/ppe2.html.twig */
class __TwigTemplate_2308744a7000b0da0e6d1be2d1bae914253a1e76928770256afcee603bebb01b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/ppe2.html.twig", 1);
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
        $__internal_a7e3c6030960b9cb3aefa8c1eff3ca8f64294d5f13a29cb0c5be12a6d1f243b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e3c6030960b9cb3aefa8c1eff3ca8f64294d5f13a29cb0c5be12a6d1f243b9->enter($__internal_a7e3c6030960b9cb3aefa8c1eff3ca8f64294d5f13a29cb0c5be12a6d1f243b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/ppe2.html.twig"));

        $__internal_8e74a93b6488d0e376823a2f8a35d68332d660df73f7c6aab9683c0321749d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e74a93b6488d0e376823a2f8a35d68332d660df73f7c6aab9683c0321749d1e->enter($__internal_8e74a93b6488d0e376823a2f8a35d68332d660df73f7c6aab9683c0321749d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "folio/ppe2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e3c6030960b9cb3aefa8c1eff3ca8f64294d5f13a29cb0c5be12a6d1f243b9->leave($__internal_a7e3c6030960b9cb3aefa8c1eff3ca8f64294d5f13a29cb0c5be12a6d1f243b9_prof);

        
        $__internal_8e74a93b6488d0e376823a2f8a35d68332d660df73f7c6aab9683c0321749d1e->leave($__internal_8e74a93b6488d0e376823a2f8a35d68332d660df73f7c6aab9683c0321749d1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56afc6df50d896dca0cbc5230404e26ded999359a2ee2ce040e02a965a8d4074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56afc6df50d896dca0cbc5230404e26ded999359a2ee2ce040e02a965a8d4074->enter($__internal_56afc6df50d896dca0cbc5230404e26ded999359a2ee2ce040e02a965a8d4074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3df017c48ecef30a00f24ee9abb68a1d73c823bf454049a5331f5444c093b121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df017c48ecef30a00f24ee9abb68a1d73c823bf454049a5331f5444c093b121->enter($__internal_3df017c48ecef30a00f24ee9abb68a1d73c823bf454049a5331f5444c093b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div>
    <div>
        <div class=\"row\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/logo-gsb-simple.png"), "html", null, true);
        echo "\"><h3 class=\"skill-title-1\">Galaxy Swiss Bourdin</h3>
        </div><hr>
        <article class=\"card bg-faded p-3\">
            <h3>Contexte</h3>
            <P><strong>L'entreprise</strong></p>
            <p>Le laboratoire Galaxy swiss Bourdin (GSB) est issu de la fusion 
                entre le géant américain Galaxy et le conglomérat européen 
                Swiss Bourdin, lui même déjà union de trois petits laboratoires.</p>
            
            <p><strong>Domaine d'étude</strong></p>
            <p>L'entreprise souhaite porter une attention nouvelle à sa force commerciale 
                dans un double objectif: obtenir une vision plus régulière et efficace de 
                l'activitée menée sur le terrain auprès des praticiens, mais aussi redonner 
                confiance aux équipes malmenées par les fusions récentes.</p>
            
            <p><strong>Les visiteurs médicaux</strong></p>
            <p>Les visiteurs médicaux présentent les médicaments du laboratoire au personnel 
                de santé (les praticiens)</p>
            
            <p><strong>Les praticiens</strong></p>
            <p>ce sont des médecins, pharmaciens, infirmières et autres métiers de santé 
                suceptibles de préscrire aux patiens les produits du laboratoire.</p>
        </article><br>
        <div class=\"title-stripes font-italic\">
            <p><strong>Travail à réaliser</strong></p>
        </div>
        <div>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> <strong>Une application de présentation des médicaments, disponible sur le post des visiteurs. (Java)</strong></li>
            <p>Au cours de leur visite, les visiteurs récupèrent une information directe sur le terrain. 
            Ceci concerne aussi bien le niveau de la confiance qu'inspire le laboratoire que la lisibilité 
            des notices d'utilisation des médicaments ou encore les éventuels problèmes rencontrés lors 
            de leur utilisation</p>
            <p>Ces informations ne sont actuellement pas systématiquement remontées au siège, ou elles 
                le sont dans des délais jugés trop longs. Le service rédaction qui produit les notices 
                souhaite avoir des remontées plus régulières et directes.</p>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> <strong>Une nouvelle application web.</strong></li>
            <p>Le laboratoire désire mettre à disposition des visiteurs médicaux une application web 
                sécurisée et authentifiée qui centralise les comptes rendus et permettra d'effectuer 
                des stastistiques.</p>
            <p><strong>Deux modules</strong></p>
            <li><strong>Module Visiteur : </strong>Permet la consultation des données concernant 
                    les praticiens et la saisie des comptes-rendus de visite.</li>
            <li><strong>Module Responsable : </strong>Permet la vision de l'activité des visiteurs 
                    rattachés à un secteur géographique sous forme de statistiques diverses.</li>
        </div>
        <a target=\"_blank\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/accueil.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/accueil.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre1.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre1.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre2.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre2.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre3.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre3.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre4.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ppe/ppe2/fenetre4.png"), "html", null, true);
        echo "\" class=\"screen-picture\"></a>
    </div><hr>
    <div class=\"title-stripes font-italic\">
            <p><strong>Compétences mises en oeuvre</strong></p>
    </div>
    <div>
        <p class=\"underline\"><strong>Application de présentation des médicaments</strong></p><br>
        <li>SI3 : Caractériser une solution d'implantation de données</li>
        <li>SI4 : Utiliser un environement de développement</li>
        <li>SI4 : Appliquer des normes de développement</li>
        <li>SI6 : Concevoir une interface utilisateur</li>
        <li>SI6 : Élaborer un jeu d'éssai</li>
        <li>SI6 : Valider et documenter une application</li>
        <li>SI6 : Rédiger une documentation d'utilisation</li>
        <li>SI6 : Utiliser des outils de travail collaboratif</li><br>
        <li>SLAM1 : Modifier un schéma de données correspondante</li>
        <li>SLAM2 : Programmer à l'aide d'un langage de programmation objet</li><br>
        <li>EM1.5 : La construction d'une réponse adaptée aux besoins</li>
        <li>EM2.3 : Le rôle des normes et standard dans le secteur informatique</li>
        <li>EM3.3 : Les stratégies de l'organisation</li>
        <li>EM3.6 : L'influence des stratégies sur la structure</li>
        <li>EM4.1 : Les nouvelles contraintes de l'organisation</li>
        <li>EM4.7 : La géstion stratégique des SI</li><hr><br>
        <p class=\"underline\"><strong>Application web d'enregistrement et de suivi des comptes-rendus de visite</strong></p>
        <li>SI3 : Extraire et modifier les données d'une base de données</li>
        <li>SI3 : Implanter une base de données à partir d'un schéma éxistant</li>
        <li>SI4 : Programmer à l'aide d'un langage de programmation structurée</li>
        <li>SI4 : Appliquer des normes de développement</li>
        <li>SI6 : Concevoir une interface utilisateur</li>
        <li>SI6 : Valider et documenter une application</li>
        <li>SI6 : Rédiger une documentation d'utilisation</li>
        <li>SLAM1 : Modifier un schéma de données et l'implantation de la base de données correspondante</li>
        <li>SLAM1 : Utiliser un outil de génération et de rétro-conception de base de données</li>
        <li>SLAM1 : Adapter une application exploitant une base de données à l'évolution de son schéma</li>
        <li>SLAM2 : Mettre au point un programme</li>
        <li>D5.1 : L'obligation de sécuriser les données numériques</li>
        <li>D5.2 : L'obligation d'informer</li>
        <li>EM4.5 / EM4.6 / EM4.7 : Gérer et faire évoluer le systeme d'information dans ses différentes dimensions</li>
        
    </div>
    
</div>


";
        
        $__internal_3df017c48ecef30a00f24ee9abb68a1d73c823bf454049a5331f5444c093b121->leave($__internal_3df017c48ecef30a00f24ee9abb68a1d73c823bf454049a5331f5444c093b121_prof);

        
        $__internal_56afc6df50d896dca0cbc5230404e26ded999359a2ee2ce040e02a965a8d4074->leave($__internal_56afc6df50d896dca0cbc5230404e26ded999359a2ee2ce040e02a965a8d4074_prof);

    }

    public function getTemplateName()
    {
        return "folio/ppe2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 57,  121 => 56,  115 => 55,  109 => 54,  103 => 53,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
            <img src=\"{{asset('img/ppe/ppe2/logo-gsb-simple.png')}}\"><h3 class=\"skill-title-1\">Galaxy Swiss Bourdin</h3>
        </div><hr>
        <article class=\"card bg-faded p-3\">
            <h3>Contexte</h3>
            <P><strong>L'entreprise</strong></p>
            <p>Le laboratoire Galaxy swiss Bourdin (GSB) est issu de la fusion 
                entre le géant américain Galaxy et le conglomérat européen 
                Swiss Bourdin, lui même déjà union de trois petits laboratoires.</p>
            
            <p><strong>Domaine d'étude</strong></p>
            <p>L'entreprise souhaite porter une attention nouvelle à sa force commerciale 
                dans un double objectif: obtenir une vision plus régulière et efficace de 
                l'activitée menée sur le terrain auprès des praticiens, mais aussi redonner 
                confiance aux équipes malmenées par les fusions récentes.</p>
            
            <p><strong>Les visiteurs médicaux</strong></p>
            <p>Les visiteurs médicaux présentent les médicaments du laboratoire au personnel 
                de santé (les praticiens)</p>
            
            <p><strong>Les praticiens</strong></p>
            <p>ce sont des médecins, pharmaciens, infirmières et autres métiers de santé 
                suceptibles de préscrire aux patiens les produits du laboratoire.</p>
        </article><br>
        <div class=\"title-stripes font-italic\">
            <p><strong>Travail à réaliser</strong></p>
        </div>
        <div>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> <strong>Une application de présentation des médicaments, disponible sur le post des visiteurs. (Java)</strong></li>
            <p>Au cours de leur visite, les visiteurs récupèrent une information directe sur le terrain. 
            Ceci concerne aussi bien le niveau de la confiance qu'inspire le laboratoire que la lisibilité 
            des notices d'utilisation des médicaments ou encore les éventuels problèmes rencontrés lors 
            de leur utilisation</p>
            <p>Ces informations ne sont actuellement pas systématiquement remontées au siège, ou elles 
                le sont dans des délais jugés trop longs. Le service rédaction qui produit les notices 
                souhaite avoir des remontées plus régulières et directes.</p>
            <li class=\"decoration-arrow\"><span class=\"fa fa-arrow-right\"></span> <strong>Une nouvelle application web.</strong></li>
            <p>Le laboratoire désire mettre à disposition des visiteurs médicaux une application web 
                sécurisée et authentifiée qui centralise les comptes rendus et permettra d'effectuer 
                des stastistiques.</p>
            <p><strong>Deux modules</strong></p>
            <li><strong>Module Visiteur : </strong>Permet la consultation des données concernant 
                    les praticiens et la saisie des comptes-rendus de visite.</li>
            <li><strong>Module Responsable : </strong>Permet la vision de l'activité des visiteurs 
                    rattachés à un secteur géographique sous forme de statistiques diverses.</li>
        </div>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe2/accueil.png')}}\"><img src=\"{{asset('img/ppe/ppe2/accueil.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe2/fenetre1.png')}}\"><img src=\"{{asset('img/ppe/ppe2/fenetre1.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe2/fenetre2.png')}}\"><img src=\"{{asset('img/ppe/ppe2/fenetre2.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe2/fenetre3.png')}}\"><img src=\"{{asset('img/ppe/ppe2/fenetre3.png')}}\" class=\"screen-picture\"></a>
        <a target=\"_blank\" href=\"{{asset('img/ppe/ppe2/fenetre4.png')}}\"><img src=\"{{asset('img/ppe/ppe2/fenetre4.png')}}\" class=\"screen-picture\"></a>
    </div><hr>
    <div class=\"title-stripes font-italic\">
            <p><strong>Compétences mises en oeuvre</strong></p>
    </div>
    <div>
        <p class=\"underline\"><strong>Application de présentation des médicaments</strong></p><br>
        <li>SI3 : Caractériser une solution d'implantation de données</li>
        <li>SI4 : Utiliser un environement de développement</li>
        <li>SI4 : Appliquer des normes de développement</li>
        <li>SI6 : Concevoir une interface utilisateur</li>
        <li>SI6 : Élaborer un jeu d'éssai</li>
        <li>SI6 : Valider et documenter une application</li>
        <li>SI6 : Rédiger une documentation d'utilisation</li>
        <li>SI6 : Utiliser des outils de travail collaboratif</li><br>
        <li>SLAM1 : Modifier un schéma de données correspondante</li>
        <li>SLAM2 : Programmer à l'aide d'un langage de programmation objet</li><br>
        <li>EM1.5 : La construction d'une réponse adaptée aux besoins</li>
        <li>EM2.3 : Le rôle des normes et standard dans le secteur informatique</li>
        <li>EM3.3 : Les stratégies de l'organisation</li>
        <li>EM3.6 : L'influence des stratégies sur la structure</li>
        <li>EM4.1 : Les nouvelles contraintes de l'organisation</li>
        <li>EM4.7 : La géstion stratégique des SI</li><hr><br>
        <p class=\"underline\"><strong>Application web d'enregistrement et de suivi des comptes-rendus de visite</strong></p>
        <li>SI3 : Extraire et modifier les données d'une base de données</li>
        <li>SI3 : Implanter une base de données à partir d'un schéma éxistant</li>
        <li>SI4 : Programmer à l'aide d'un langage de programmation structurée</li>
        <li>SI4 : Appliquer des normes de développement</li>
        <li>SI6 : Concevoir une interface utilisateur</li>
        <li>SI6 : Valider et documenter une application</li>
        <li>SI6 : Rédiger une documentation d'utilisation</li>
        <li>SLAM1 : Modifier un schéma de données et l'implantation de la base de données correspondante</li>
        <li>SLAM1 : Utiliser un outil de génération et de rétro-conception de base de données</li>
        <li>SLAM1 : Adapter une application exploitant une base de données à l'évolution de son schéma</li>
        <li>SLAM2 : Mettre au point un programme</li>
        <li>D5.1 : L'obligation de sécuriser les données numériques</li>
        <li>D5.2 : L'obligation d'informer</li>
        <li>EM4.5 / EM4.6 / EM4.7 : Gérer et faire évoluer le systeme d'information dans ses différentes dimensions</li>
        
    </div>
    
</div>


{% endblock %}", "folio/ppe2.html.twig", "E:\\User\\Google Drive\\Programmation\\Symfony\\folio\\app\\Resources\\views\\folio\\ppe2.html.twig");
    }
}
