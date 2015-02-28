<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
	public function chargerProduitAction($idProduit){
            return $this->chargerProduit(true, $idProduit);
	}
        
        public function chargerProduitsAdminAction()
	{
            return $this->chargerProduit(false, null);
	}
        
        private function chargerProduit($accueil, $idProduit){
            if($accueil){
                $produits = $this->rechercherProduitHorsMagasin($idProduit);
                $finder = new Finder();
                $finder->files()->in('bundles/lamaltieresitewebmaltiere/images/produits/stabilite');
                return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:caracteristiques.html.twig', array(
                    'produits' => $produits, 'idProduit' => $idProduit, 'images' => $finder
                ));
            }else{
                $produits = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit')->findAll();
                return $this->render('LaMaltiereSiteWebMaltiereBundle:Admin:adminProduits.html.twig', array(
                    'produits' => $produits
                ));
            }
        }
	
	public function recupererUnModeleAction($idProduit, $idModele){
		$produits = $this->rechercherProduitHorsMagasin($idProduit);
		$modeles = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Modele')->find($idModele);
		$images = $this->recupererPhotos($idModele, $idProduit);
                
		if (!$modeles) {
			throw $this->createNotFoundException(
				'Aucun produit trouv� pour ce num�ro : '.$idModele
			);
		}
		
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:modele.html.twig', array(
			'produits' => $produits, 'modele' => $modeles, 'images' => $images
		));
	}

        private function rechercherProduitHorsMagasin($idProduit){
            $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
            $qb->select('p, c')
                ->from('LaMaltiereSiteWebMaltiereBundle:Produit', 'p')
                ->join('p.categories', 'c')
                ->join('c.modeles', 'm')
                ->where($qb->expr()->andX(
                    $qb->expr()->eq('p.id', '?1'),
                    $qb->expr()->eq('m.boutique_modele', '?2')
                ));
            return $qb->getQuery()->setParameters(array(1 => $idProduit, 2 => false))->getSingleResult();
        }
        
        private function recupererPhotos($idModele,$produit){
            $finder = new Finder();
            $finder->files()->in('bundles/lamaltieresitewebmaltiere/images/produits/'.$produit.'/'.$idModele);
            return $finder;
        } 
	
        public function enregistrerCategorieAction(Request $request)
	{
            if ($request->isMethod('POST')) {
                if($request->request->get('id') == ""){
                    $this->creerCategorie($request);
                }else {
                    $this->modifierCategorie($request);
                }
            }
            
            return $this->chargerProduit(false, null);
	}
        
        private function creerCategorie(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $categorie = new \LaMaltiere\SiteWebMaltiereBundle\Entity\CategorieModele();
            $categorie->setLibelle_fr($request->request->get('libelleFr'));
            $categorie->setLibelle_en($request->request->get('libelleEn'));
            $produit = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit')->find($request->request->get('produit'));
            $categorie->setProduit($produit);

            $em->persist($categorie);
            $em->flush();
        }

        private function modifierCategorie(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $categorie = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($request->request->get('id'));

            if (!$categorie){
                throw $this->createNotFoundException(
                    'Aucune catégorie trouvé pour cet id : '.$request->request->get('id')
                );
            }

            $categorie->setLibelle_fr($request->request->get('libelleFr'));
            $categorie->setLibelle_en($request->request->get('libelleEn'));
            $produit = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit')->find($request->request->get('lstProduitAdmin'));
            $categorie->setProduit($produit);
            $em->flush();
        }
        
        public function supprimerCategorieAction($id)
	{
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($id);
            
            $em->remove($entity);
            $em->flush();
            
            return $this->chargerProduit(false, null);
	}
        
        public function enregistrerModeleAction(Request $request)
        {
            if ($request->isMethod('POST')) {
                if($request->request->get('mode') == ""){
                    $this->creerModele($request);
                }else {
                    $this->modifierModele($request);
                }
            }

            return $this->chargerProduit(false, null);
        }

        private function creerModele(Request $request){
            $em = $this->getDoctrine()->getManager();
            $modele = new \LaMaltiere\SiteWebMaltiereBundle\Entity\Modele();
            $modele->setId($request->request->get('identifiant'));
            $modele->setNom_fr($request->request->get('nomfr'));
            $modele->setNom_en($request->request->get('nomen'));
            $modele->setDescription_fr($request->request->get('descfr'));
            $modele->setDescription_en($request->request->get('descen'));
            $modele->setCapacite_fr($request->request->get('capacitefr'));
            $modele->setCapacite_en($request->request->get('capaciteen'));
            $modele->setMoteur_fr($request->request->get('moteurfr'));
            $modele->setMoteur_en($request->request->get('moteuren'));
            $modele->setLongueur_bateau_fr($request->request->get('longeurfrbateau'));
            $modele->setLongueur_bateau_en($request->request->get('longeurenbateau'));
            $modele->setLongueur_remorque_fr($request->request->get('longeurremorquefr'));
            $modele->setLongueur_remorque_en($request->request->get('longeurremorqueen'));
            $modele->setLargeur_bateau_fr($request->request->get('largeurbateaufr'));
            $modele->setLargeur_bateau_en($request->request->get('largeurbateauen'));
            $modele->setLargeur_remorque_fr($request->request->get('largeurremorquefr'));
            $modele->setLargeur_remorque_en($request->request->get('largeurremorqueen'));
            $modele->setHauteur_modele_fr($request->request->get('hauteurfr'));
            $modele->setHauteur_modele_en($request->request->get('hauteuren'));
            $modele->setPoids_modele_fr($request->request->get('poidsfr'));
            $modele->setPoids_modele_en($request->request->get('poidsen'));
            $modele->setCharge_fr($request->request->get('chargefr'));
            $modele->setCharge_en($request->request->get('chargeen'));
            $modele->setPtc_fr($request->request->get('ptcfr'));
            $modele->setPtc_en($request->request->get('ptcen'));
            $modele->setNb_rouleaux_fr($request->request->get('rouleauxfr'));
            $modele->setNb_rouleaux_en($request->request->get('rouleauxen'));
            $modele->setRoues_fr($request->request->get('rouesfr'));
            $modele->setRoues_en($request->request->get('rouesen'));
            $modele->setPrix_modele($request->request->get('prix'));
            if($request->request->get('boutique') == null){
                $modele->setBoutique_modele(false);
            }else{
                $modele->setBoutique_modele(true);
            }
            if($request->request->get('video') == null){
                $modele->setVideo_modele(false);
            }else{
                $modele->setVideo_modele(true);
            }
            if($request->request->get('commande') == null){
                $modele->setCommande_modele(false);
            }else{
                $modele->setCommande_modele(true);
            }
            $categorie = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($request->request->get('lstCategorieAdmin'));
            $modele->setCategorie($categorie);

            $em->persist($modele);
            $em->flush();
        }

        private function modifierModele(Request $request){
            $em = $this->getDoctrine()->getManager();
            $modele = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Modele')->find($request->request->get('identifiant'));

            if (!$modele){
                throw $this->createNotFoundException(
                    'Aucun modèle trouvé pour cet id : '.$request->request->get('identifiant')
                );
            }

            $modele->setNom_fr($request->request->get('nomfr'));
            $modele->setNom_en($request->request->get('nomen'));
            $modele->setDescription_fr($request->request->get('descfr'));
            $modele->setDescription_en($request->request->get('descen'));
            $modele->setCapacite_fr($request->request->get('capacitefr'));
            $modele->setCapacite_en($request->request->get('capaciteen'));
            $modele->setMoteur_fr($request->request->get('moteurfr'));
            $modele->setMoteur_en($request->request->get('moteuren'));
            $modele->setLongueur_bateau_fr($request->request->get('longeurfrbateau'));
            $modele->setLongueur_bateau_en($request->request->get('longeurenbateau'));
            $modele->setLongueur_remorque_fr($request->request->get('longeurremorquefr'));
            $modele->setLongueur_remorque_en($request->request->get('longeurremorqueen'));
            $modele->setLargeur_bateau_fr($request->request->get('largeurbateaufr'));
            $modele->setLargeur_bateau_en($request->request->get('largeurbateauen'));
            $modele->setLargeur_remorque_fr($request->request->get('largeurremorquefr'));
            $modele->setLargeur_remorque_en($request->request->get('largeurremorqueen'));
            $modele->setHauteur_modele_fr($request->request->get('hauteurfr'));
            $modele->setHauteur_modele_en($request->request->get('hauteuren'));
            $modele->setPoids_modele_fr($request->request->get('poidsfr'));
            $modele->setPoids_modele_en($request->request->get('poidsen'));
            $modele->setCharge_fr($request->request->get('chargefr'));
            $modele->setCharge_en($request->request->get('chargeen'));
            $modele->setPtc_fr($request->request->get('ptcfr'));
            $modele->setPtc_en($request->request->get('ptcen'));
            $modele->setNb_rouleaux_fr($request->request->get('rouleauxfr'));
            $modele->setNb_rouleaux_en($request->request->get('rouleauxen'));
            $modele->setRoues_fr($request->request->get('rouesfr'));
            $modele->setRoues_en($request->request->get('rouesen'));
            $modele->setPrix_modele($request->request->get('prix'));
            if($request->request->get('boutique') == null){
                $modele->setBoutique_modele(false);
            }else{
                $modele->setBoutique_modele(true);
            }
            if($request->request->get('video') == null){
                $modele->setVideo_modele(false);
            }else{
                $modele->setVideo_modele(true);
            }
            if($request->request->get('commande') == null){
                $modele->setCommande_modele(false);
            }else{
                $modele->setCommande_modele(true);
            }
            $categorie = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($request->request->get('lstCategorieAdmin'));
            $modele->setCategorie($categorie);
            $em->flush();
        }

        public function supprimerModeleAction($id)
        {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Modele')->find($id);

            $em->remove($entity);
            $em->flush();

            return $this->chargerProduit(false, null);
        }
}