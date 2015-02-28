<?php

/* LaMaltiereSiteWebMaltiereBundle::layout.html.twig */
class __TwigTemplate_6544b5c41a2b2398c83c22838a5a5cbf31f92cf7334e35e746d4b035c29fc882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<div class=\"contact\">
\t\t\t<a id=\"catalogue\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/lamaltieresitewebmaltiere/pdf/CATALOGUE_" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getLocale", array(), "method")) . ".pdf")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"petit\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.catalogue.titre", array(), "accueil");
        echo "</span></a> 
\t\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("lamaltiere_accueil_lang", array("_locale" => "fr"));
        echo "\" alt=\"Français\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/langues/France.png"), "html", null, true);
        echo "\" alt=\"Français\" title=\"Français\" /></a>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("lamaltiere_accueil_lang", array("_locale" => "en"));
        echo "\" alt=\"English\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/langues/England.png"), "html", null, true);
        echo "\" alt=\"English\" title=\"English\" /></a>
\t\t</div>
                
                <figure class=\"logo\">
\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("lamaltiere_accueil_lang");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/logo/logo_lamaltiere.jpg"), "html", null, true);
        echo "\" alt=\"Logo La Maltiere\" /></a>
\t\t</figure>
\t\t<nav class=\"principal\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\">";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.accueil", array(), "menu");
        echo "</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("lamaltiere_presentation");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.accueil.entreprise", array(), "menu");
        echo "</a></li>
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("lamaltiere_travauxsoudure");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.accueil.soudure", array(), "menu");
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lamaltiere_produit", array("idProduit" => 1));
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.barques", array(), "menu");
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lamaltiere_produit", array("idProduit" => 2));
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.remorques", array(), "menu");
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lamaltiere_getProduit", array("idProduit" => 3, "idModele" => "BAE")), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.options", array(), "menu");
        echo "</a></li>
\t\t\t\t
\t\t\t\t<li><a href=\"#\">";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.medias", array(), "menu");
        echo "</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("lamaltiere_photos");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.medias.photosclients", array(), "menu");
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("lamaltiere_photos4000G");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.medias.4000G", array(), "menu");
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("lamaltiere_videoslamaltiere");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.medias.videoslamaltiere", array(), "menu");
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("lamaltiere_videosclients");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.medias.videosclients", array(), "menu");
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("lamaltiere_presse");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.medias.presse", array(), "menu");
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("lamaltiere_liens");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.liens", array(), "menu");
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("lamaltiere_magasin");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.magasin", array(), "menu");
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("lamaltiere_contact");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.contact", array(), "menu");
        echo "</a></li>
\t\t\t</ul>
\t\t</nav>
\t";
    }

    // line 40
    public function block_section($context, array $blocks = array())
    {
        // line 41
        echo "\t";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "\t\t<p>
\t\t\t";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.retrouveznous", array(), "accueil");
        echo " :
\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.lien.facebook", array(), "accueil");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/reseauxsociaux/facebook-ico.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\" alt=\"Facebook La Maltiere\" title=\"Facebook La Maltiere\" /></a>
\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.lien.googeplus", array(), "accueil");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/reseauxsociaux/google-plus-ico.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\" alt=\"Google +\" title=\"Google +\" /></a>
\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.lien.instagram", array(), "accueil");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/reseauxsociaux/instagram-ico.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\" alt=\"Instagram\" title=\"Instagram\" /></a>
\t\t\t<a href=\"";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.lien.pinterest", array(), "accueil");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/reseauxsociaux/pinterest-ico.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\" alt=\"Pinterest\" title=\"Pinterest\" /></a>
\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.lien.flickr", array(), "accueil");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/reseauxsociaux/flickr-ico.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\" alt=\"Flickr\" title=\"Flickr\" /></a>
\t\t\t<a href=\"";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("accueil.lien.youtube", array(), "accueil");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/reseauxsociaux/youtube-ico.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\" alt=\"Youtube\" title=\"Youtube\" /></a><br /><br />
\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["statut"]) ? $context["statut"] : $this->getContext($context, "statut")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo " - <a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</a>
\t\t</p>
\t\t<p>
\t\t\t<small>";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["copyright"]) ? $context["copyright"] : $this->getContext($context, "copyright")), "html", null, true);
        echo "</small>
\t\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "LaMaltiereSiteWebMaltiereBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 55,  216 => 52,  210 => 51,  204 => 50,  198 => 49,  192 => 48,  186 => 47,  180 => 46,  176 => 45,  173 => 44,  170 => 43,  166 => 41,  163 => 40,  153 => 35,  147 => 34,  141 => 33,  133 => 30,  127 => 29,  121 => 28,  115 => 27,  109 => 26,  104 => 24,  97 => 22,  91 => 21,  85 => 20,  77 => 17,  71 => 16,  66 => 14,  57 => 10,  42 => 5,  33 => 3,  30 => 2,  48 => 6,  44 => 9,  40 => 8,  36 => 4,  31 => 4,  28 => 3,);
    }
}
