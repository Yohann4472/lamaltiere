<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources')) {
            if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources/scripts')) {
                // _assetic_57299bf
                if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/scripts.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '57299bf',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_57299bf',);
                }

                if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources/scripts_')) {
                    // _assetic_57299bf_0
                    if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/scripts_jquery-1.9.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '57299bf',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_57299bf_0',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources/scripts_part_2_')) {
                        // _assetic_57299bf_1
                        if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/scripts_part_2_application_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '57299bf',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_57299bf_1',);
                        }

                        // _assetic_57299bf_2
                        if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/scripts_part_2_jquery.chained_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '57299bf',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_57299bf_2',);
                        }

                        // _assetic_57299bf_3
                        if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/scripts_part_2_swipe_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '57299bf',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_57299bf_3',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources/main')) {
                // _assetic_125171f
                if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/main.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '125171f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_125171f',);
                }

                if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_')) {
                    // _assetic_125171f_0
                    if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_formulaire_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '125171f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_125171f_0',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_m')) {
                        // _assetic_125171f_1
                        if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_main_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '125171f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_125171f_1',);
                        }

                        if (0 === strpos($pathinfo, '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_menu')) {
                            // _assetic_125171f_2
                            if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_menugauche_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '125171f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_125171f_2',);
                            }

                            // _assetic_125171f_3
                            if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_menuprincipal_4.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '125171f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_125171f_3',);
                            }

                        }

                    }

                    // _assetic_125171f_4
                    if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_sliderImages_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '125171f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_125171f_4',);
                    }

                    // _assetic_125171f_5
                    if ($pathinfo === '/bundles/lamaltieresitewebmaltiere/ressources/main_part_1_titres_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '125171f',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_125171f_5',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // lamaltiere_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lamaltiere_accueil');
            }

            return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\IndexController::chargerAction',  '_route' => 'lamaltiere_accueil',);
        }

        // lamaltiere_accueil_lang
        if (preg_match('#^/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_accueil_lang')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\IndexController::modifierLangAction',));
        }

        // lamaltiere_presentation
        if (preg_match('#^/(?P<_locale>[^/]++)/presentation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_presentation')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\IndexController::presentationAction',));
        }

        // lamaltiere_travauxsoudure
        if (preg_match('#^/(?P<_locale>[^/]++)/soudure$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_travauxsoudure')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\IndexController::soudureAction',));
        }

        // lamaltiere_referencePro
        if (preg_match('#^/(?P<_locale>[^/]++)/referencesprofessionnelles$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_referencePro')), array (  '_controller' => 'LaMaltiereSiteWebMaltiereBundle:References:chargerReferences',));
        }

        // lamaltiere_produit
        if (preg_match('#^/(?P<_locale>[^/]++)/produits/(?P<idProduit>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_produit')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ProduitController::chargerProduitAction',));
        }

        // lamaltiere_getProduit
        if (preg_match('#^/(?P<_locale>[^/]++)/produits/(?P<idProduit>[^/]++)/(?P<idModele>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_getProduit')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ProduitController::recupererUnModeleAction',));
        }

        // lamaltiere_photos
        if (preg_match('#^/(?P<_locale>[^/]++)/photos$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_photos')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\PhotosController::chargerPhotosAction',));
        }

        // lamaltiere_photos4000G
        if (preg_match('#^/(?P<_locale>[^/]++)/photos4000G$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_photos4000G')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\PhotosController::chargerPhotos4000GAction',));
        }

        // lamaltiere_videoslamaltiere
        if (preg_match('#^/(?P<_locale>[^/]++)/videoslamaltiere$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_videoslamaltiere')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\VideosController::chargerVideosAction',  'id' => 1,));
        }

        // lamaltiere_videosclients
        if (preg_match('#^/(?P<_locale>[^/]++)/videosclients$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_videosclients')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\VideosController::chargerVideosAction',  'id' => 2,));
        }

        // lamaltiere_presse
        if (preg_match('#^/(?P<_locale>[^/]++)/presse$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_presse')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\PresseController::chargerArticlesAction',));
        }

        // lamaltiere_liens
        if (preg_match('#^/(?P<_locale>[^/]++)/liens$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_liens')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\LienController::chargerLiensAction',));
        }

        // lamaltiere_magasin
        if (preg_match('#^/(?P<_locale>[^/]++)/shop$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_magasin')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\MagasinController::chargerProduitMagasinAction',));
        }

        // lamaltiere_panier
        if (preg_match('#^/(?P<_locale>[^/]++)/panier$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_panier')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\MagasinController::chargerPanierMagasinAction',));
        }

        // lamaltiere_ajouterProduitPanier
        if (preg_match('#^/(?P<_locale>[^/]++)/ajoutpanier$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_ajouterProduitPanier')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\MagasinController::ajouterProduitPanierMagasinAction',));
        }

        // lamaltiere_supprimerProduitPanier
        if (preg_match('#^/(?P<_locale>[^/]++)/supressionpanier/(?P<idProduit>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_supprimerProduitPanier')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\MagasinController::supprimerProduitPanierMagasinAction',));
        }

        // lamaltiere_commande
        if (preg_match('#^/(?P<_locale>[^/]++)/commande$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_commande')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\MagasinController::confirmerPanierMagasinAction',));
        }

        // lamaltiere_confirmation
        if (preg_match('#^/(?P<_locale>[^/]++)/confirmation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_confirmation')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\MagasinController::confirmationCommandeAction',));
        }

        // lamaltiere_detailMagasin
        if (preg_match('#^/(?P<_locale>[^/]++)/shop/(?P<idProduit>[^/]++)/(?P<idModele>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_detailMagasin')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\MagasinController::recupererDetailModeleAction',));
        }

        // lamaltiere_contact
        if (preg_match('#^/(?P<_locale>[^/]++)/contact$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_contact')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\IndexController::contactAction',));
        }

        if (0 === strpos($pathinfo, '/fr')) {
            if (0 === strpos($pathinfo, '/fr/log')) {
                if (0 === strpos($pathinfo, '/fr/login')) {
                    // lamaltiere_login
                    if ($pathinfo === '/fr/login') {
                        return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\SecurityController::loginAction',  '_route' => 'lamaltiere_login',);
                    }

                    // lamaltiere_login_check
                    if ($pathinfo === '/fr/login_check') {
                        return array('_route' => 'lamaltiere_login_check');
                    }

                }

                // lamaltiere_logout
                if ($pathinfo === '/fr/logout') {
                    return array('_route' => 'lamaltiere_logout');
                }

            }

            if (0 === strpos($pathinfo, '/fr/administration')) {
                if (0 === strpos($pathinfo, '/fr/administration/produits')) {
                    if (0 === strpos($pathinfo, '/fr/administration/produits/categorie')) {
                        // lamaltiere_administration_categorie_enregistrer
                        if ($pathinfo === '/fr/administration/produits/categorie/enregistrer') {
                            return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ProduitController::enregistrerCategorieAction',  '_route' => 'lamaltiere_administration_categorie_enregistrer',);
                        }

                        // lamaltiere_administration_categorie_supprimer
                        if (0 === strpos($pathinfo, '/fr/administration/produits/categorie/supprimer') && preg_match('#^/fr/administration/produits/categorie/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_administration_categorie_supprimer')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ProduitController::supprimerCategorieAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/fr/administration/produits/modele')) {
                        // lamaltiere_administration_modele_enregistrer
                        if ($pathinfo === '/fr/administration/produits/modele/enregistrer') {
                            return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ModeleController::enregistrerModeleAction',  '_route' => 'lamaltiere_administration_modele_enregistrer',);
                        }

                        // lamaltiere_administration_modele_supprimer
                        if (0 === strpos($pathinfo, '/fr/administration/produits/modele/supprimer') && preg_match('#^/fr/administration/produits/modele/supprimer/(?P<id>[^/]++)/(?P<lang>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_administration_modele_supprimer')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ModeleController::supprimerModeleAction',));
                        }

                    }

                }

                // lamaltiere_administration_categories
                if ($pathinfo === '/fr/administration/categories') {
                    return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ProduitController::chargerProduitsAdminAction',  '_route' => 'lamaltiere_administration_categories',);
                }

                // lamaltiere_administration_modeles
                if ($pathinfo === '/fr/administration/modeles') {
                    return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\ModeleController::chargerModeleAdminAction',  '_route' => 'lamaltiere_administration_modeles',);
                }

                if (0 === strpos($pathinfo, '/fr/administration/liens')) {
                    // lamaltiere_administration_liens
                    if ($pathinfo === '/fr/administration/liens') {
                        return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\LienController::chargerLiensAction',  '_route' => 'lamaltiere_administration_liens',);
                    }

                    if (0 === strpos($pathinfo, '/fr/administration/liens/type')) {
                        // lamaltiere_administration_type_site_enregistrer
                        if ($pathinfo === '/fr/administration/liens/type/enregistrer') {
                            return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\LienController::enregistrerTypeAction',  '_route' => 'lamaltiere_administration_type_site_enregistrer',);
                        }

                        // lamaltiere_administration_type_site_supprimer
                        if (0 === strpos($pathinfo, '/fr/administration/liens/type/supprimer') && preg_match('#^/fr/administration/liens/type/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_administration_type_site_supprimer')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\LienController::supprimerTypeAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/fr/administration/liens/site')) {
                        // lamaltiere_administration_site_enregistrer
                        if ($pathinfo === '/fr/administration/liens/site/enregistrer') {
                            return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\LienController::enregistrerSiteAction',  '_route' => 'lamaltiere_administration_site_enregistrer',);
                        }

                        // lamaltiere_administration_site_supprimer
                        if (0 === strpos($pathinfo, '/fr/administration/liens/site/supprimer') && preg_match('#^/fr/administration/liens/site/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_administration_site_supprimer')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\LienController::supprimerSiteAction',));
                        }

                    }

                }

                // lamaltiere_administration_press
                if ($pathinfo === '/fr/administration/presse') {
                    return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\PresseController::chargerArticlesAction',  '_route' => 'lamaltiere_administration_press',);
                }

                if (0 === strpos($pathinfo, '/fr/administration/videos')) {
                    // lamaltiere_administration_videos
                    if ($pathinfo === '/fr/administration/videos') {
                        return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\VideosController::chargerVideosAdminAction',  '_route' => 'lamaltiere_administration_videos',);
                    }

                    // lamaltiere_administration_videos_enregistrer
                    if ($pathinfo === '/fr/administration/videos/enregistrer') {
                        return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\VideosController::enregistrerVideoAction',  '_route' => 'lamaltiere_administration_videos_enregistrer',);
                    }

                    // lamaltiere_administration_videos_supprimer
                    if (0 === strpos($pathinfo, '/fr/administration/videos/supprimer') && preg_match('#^/fr/administration/videos/supprimer/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_administration_videos_supprimer')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\VideosController::supprimerVideoAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/fr/administration/presse/article')) {
                    // lamaltiere_administration_article_enregistrer
                    if ($pathinfo === '/fr/administration/presse/article/enregistrer') {
                        return array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\PresseController::enregistrerArticleAction',  '_route' => 'lamaltiere_administration_article_enregistrer',);
                    }

                    // lamaltiere_administration_article_supprimer
                    if (0 === strpos($pathinfo, '/fr/administration/presse/article/supprimer') && preg_match('#^/fr/administration/presse/article/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lamaltiere_administration_article_supprimer')), array (  '_controller' => 'LaMaltiere\\SiteWebMaltiereBundle\\Controller\\PresseController::supprimerArticleAction',));
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
