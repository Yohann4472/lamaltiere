<?php

/* LaMaltiereSiteWebMaltiereBundle:Index:index.html.twig */
class __TwigTemplate_d91fe50befcdf6ca5443e0c1ac6bcd95c4d729633a130afb2a52808b739f6fa5 extends Twig_Template
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
        echo "<section>
    <div id='slider' class='swipe' style=\"max-width:1000px; height: 386px;\">  
        <div class='swipe-wrap'>
            <div><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/accueil/accueil1.jpg"), "html", null, true);
        echo "\" width=\"1000px\" height=\"386px\" alt=\"Yamaha 1\" /></div>
            <div><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/accueil/accueil2.jpg"), "html", null, true);
        echo "\" width=\"1000px\" height=\"386px\" alt=\"Yamaha 1\" /></div>
            <div><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/accueil/accueil3.jpg"), "html", null, true);
        echo "\" width=\"1000px\" height=\"386px\" alt=\"Yamaha 1\" /></div>
            <div><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lamaltieresitewebmaltiere/images/accueil/accueil4.jpg"), "html", null, true);
        echo "\" width=\"1000px\" height=\"386px\" alt=\"Yamaha 1\" /></div>
        </div>\t\t\t
    </div>
    <!--<marquee width=\"1000px\" scrollamount=\"6\" scrolldelay=\"100\" style=\"font-size:10pt\">
        La Maltière sera présente à la première édition du salon Pêche expo les 7, 8 et 9 novembre 2014 sur le site de Libramont Exhibition & Congress en Belgique.
    </marquee>-->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            Slider = \$('#slider').Swipe({
                            auto: 3000,
                            continuous: true
            }).data('Swipe');
        });
    </script>
</section>   
";
    }

    public function getTemplateName()
    {
        return "LaMaltiereSiteWebMaltiereBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
