<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">
\t<head>
                <meta content=\"width=device-width\" name=\"viewport\">
\t\t<meta content=\"text/html; charset=utf-8\" http-equiv=\"content-type\" />
                <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "html", null, true);
        echo "</title>
\t\t
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/icones/favicon.ico"), "html", null, true);
        echo "\" />
\t\t
                <META name=\"author\" content=\"La Maltiere\" />
\t\t<!-- For speakers of British English -->
\t\t<META name=\"keywords\" lang=\"en\" 
\t\t\tcontent=\"boat, boats, rowing, rowingboat, aluminium, exposition, paddle, boat, pedal, repair, fishing, floating, houses, speed, albatross, building, deck, leisure, carnivore, craftsman, to solder, carp, etang, river, tourism, light, craftsman\" />
\t\t<meta name=\"description\" content=\"The MALTIERE is a specialized small factory using experienced craftesmen to make fishing boats and welded all.Our boats can be customized according to the customers requirements.Our boats are sold in France, Belgium, Switzerland (Swiss), Cameroon, New Caledonia, Vietnam, Niger, Maroc, Congo\" /> 
\t\t<meta name=\"Identifier-URL\" content=\"http://www.aluminium-boat.com\" />
\t\t
\t\t<!-- For speakers of French -->
\t\t
\t\t<META name=\"keywords\" lang=\"fr\" 
\t\t\tcontent=\"barque, aluminium, la maltiere, maltiere, bois, pêche, bateau, vente, fabrication, peche, rame, canot, moteur, professionnel, fond plat, voyage, occasion, construction, carpe, carnassier, atelier, nautique, chantier, artisanal, la-maltiere, vitesse, legere, peche, loisirs, soudure, artisan, poissons, etang, riviere, tourisme\" />
\t\t<meta name=\"description\" content=\"La Maltiere est une fabrique artisanale de bateaux en aluminium, de barques de pêche l&eacute;g&egrave;re et stable. Travail, pêche ou loisirs. Transport facile. A visiter chez La Maltiere, France.\" />
\t\t
\t\t<meta name=\"Identifier-URL\" content=\"http://www.la-maltiere.com\" />
\t\t
\t\t<meta name=\"DC.title\" content=\"Barques de pêche en aluminium soudé\" />
\t\t<meta name=\"ROBOTS\" content=\"INDEX, FOLLOW\" />
\t\t<meta name=\"audience\" content=\"All\" />
\t\t<meta name=\"revisit-after\" content=\"21 days\" />
                       
\t\t";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "57299bf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57299bf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/scripts_jquery-1.9.1.min_1.js");
            // line 34
            echo "\t\t\t     <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "57299bf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57299bf_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/scripts_part_2_application_1.js");
            echo "\t\t\t     <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "57299bf_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57299bf_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/scripts_part_2_jquery.chained_3.js");
            echo "\t\t\t     <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "57299bf_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57299bf_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/scripts_part_2_swipe_4.js");
            echo "\t\t\t     <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "57299bf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57299bf") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/scripts.js");
            echo "\t\t\t     <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 36
        echo "\t\t
\t\t";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "125171f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_125171f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_formulaire_1.css");
            // line 38
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
            // asset "125171f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_125171f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_main_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
            // asset "125171f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_125171f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_menugauche_3.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
            // asset "125171f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_125171f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_menuprincipal_4.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
            // asset "125171f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_125171f_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_sliderImages_5.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
            // asset "125171f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_125171f_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_titres_6.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "125171f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_125171f") : $this->env->getExtension('assets')->getAssetUrl("_controller/bundles/lamaltieresitewebmaltiere/ressources/main.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 40
        echo "\t</head>
    <?php use_javascript('jquery-1.9.1.min.js') ?>
    <?php include_javascripts() ?>
\t<body>
\t\t<header>
\t\t\t";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "\t\t</header>
\t\t";
        // line 48
        $this->displayBlock('section', $context, $blocks);
        // line 50
        echo "\t\t<footer>
\t\t\t";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "\t\t</footer>
    </body>
</html>
";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t";
    }

    // line 48
    public function block_section($context, array $blocks = array())
    {
        // line 49
        echo "\t\t";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 52,  182 => 49,  179 => 48,  175 => 46,  172 => 45,  165 => 53,  160 => 50,  158 => 48,  155 => 47,  146 => 40,  102 => 38,  98 => 37,  95 => 36,  63 => 34,  59 => 30,  34 => 8,  29 => 6,  22 => 1,  234 => 55,  216 => 52,  210 => 51,  204 => 50,  198 => 49,  192 => 48,  186 => 51,  180 => 46,  176 => 45,  173 => 44,  170 => 43,  166 => 41,  163 => 51,  153 => 45,  147 => 34,  141 => 33,  133 => 30,  127 => 29,  121 => 28,  115 => 27,  109 => 26,  104 => 24,  97 => 22,  91 => 21,  85 => 20,  77 => 17,  71 => 16,  66 => 14,  57 => 10,  42 => 5,  33 => 3,  30 => 2,  48 => 6,  44 => 9,  40 => 8,  36 => 4,  31 => 4,  28 => 3,);
    }
}
