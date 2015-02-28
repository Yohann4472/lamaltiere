<?php

/* LaMaltiereSiteWebMaltiereBundle:Corps:contact.html.twig */
class __TwigTemplate_2cb6580920de5bfed9ad60985096ccc484cd05cd2e270b55f6b1d752c7903a75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LaMaltiereSiteWebMaltiereBundle::layout.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LaMaltiereSiteWebMaltiereBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"conteneur\">
\t<h2>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.titre", array(), "contact");
        echo "</h2>
\t<div class=\"presentation\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2648.083793550389!2d-0.9133105000000183!3d48.416535599999946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d3fdfca388b58fd!2sSAS+La+Malti%C3%A8re%2FBarque+aluminium%2FAlu+Speed+Boat%2FAluminium+boat!5e0!3m2!1sfr!2sfr!4v1397942476278\" frameborder=\"0\" style=\"border:0\"></iframe>
\t\t<p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "html", null, true);
        echo "<br />
\t\t";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "<br />
                ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "html", null, true);
        echo " <span class=\"orange\">";
        echo twig_escape_filter($this->env, (isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "html", null, true);
        echo "</span><br />
\t\t";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "<br />
\t\t<a href=\"mailto:";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "\">@ : ";
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</a><br />
\t\t";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["skype"]) ? $context["skype"] : $this->getContext($context, "skype")), "html", null, true);
        echo "<br /><br />
\t\t";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["siret"]) ? $context["siret"] : $this->getContext($context, "siret")), "html", null, true);
        echo "<br />
\t\t";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["ape"]) ? $context["ape"] : $this->getContext($context, "ape")), "html", null, true);
        echo "</p>
\t</div>
\t<h2>";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.telecharger.catalogue", array(), "contact");
        echo "</h2>
\t<center>
\t\t\t<figure>
\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/lamaltieresitewebmaltiere/pdf/CATALOGUE_" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getLocale", array(), "method")) . ".pdf")), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/icones/catalogue.png"), "html", null, true);
        echo "\" width=80 height=105 border=0 alt=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.catalogue.titre", array(), "contact");
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.catalogue.titre", array(), "contact");
        echo "\">
\t\t\t\t</a>
\t\t\t  <figcaption>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.catalogue.titre", array(), "contact");
        echo "</figcaption>
\t\t\t</figure>
\t\t\t<figure>
\t\t\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/lamaltieresitewebmaltiere/pdf/bondecommande_" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getLocale", array(), "method")) . ".pdf")), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/icones/commande.png"), "html", null, true);
        echo "\" width=80 height=105 border=0 alt=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.boncommande.titre", array(), "contact");
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.boncommande.titre", array(), "contact");
        echo "\">
\t\t\t\t</a>
\t\t\t  <figcaption>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.boncommande.titre", array(), "contact");
        echo "</figcaption>
\t\t\t</figure>
\t</center>
\t<div class=\"presentation\">
\t\t<p>
            ";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.boncommande.phrase1", array(), "contact");
        echo "<br />
            ";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact.boncommande.phrase2", array(), "contact");
        // line 36
        echo "        </p>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "LaMaltiereSiteWebMaltiereBundle:Corps:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  127 => 35,  123 => 34,  115 => 29,  106 => 27,  102 => 26,  96 => 23,  87 => 21,  83 => 20,  77 => 17,  72 => 15,  68 => 14,  64 => 13,  58 => 12,  54 => 11,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
