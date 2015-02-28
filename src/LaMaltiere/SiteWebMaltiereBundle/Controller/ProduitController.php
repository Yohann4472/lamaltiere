<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use LaMaltiere\SiteWebMaltiereBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
	public function chargerProduitAction($idProduit){
        $produit = $this->rechercherProduitHorsMagasin($idProduit);

        $finder = new Finder();
        $finder->files()->in('bundles/lamaltieresitewebmaltiere/images/produits/stabilite');

        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:caracteristiques.html.twig', array(
            'produit' => $produit, 'images' => $finder
        ));
	}

	public function chargerProduitsAdminAction(){
        $produits = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit')->findAll();
            return $this->render('LaMaltiereSiteWebMaltiereBundle:Admin:adminCategories.html.twig', array(
                'produits' => $produits
            ));
    }
	
	public function recupererUnModeleAction($idProduit, $idModele){
		$produit = $this->rechercherProduitHorsMagasin($idProduit);


		$qb = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qb->select('m')
            ->from('LaMaltiereSiteWebMaltiereBundle:Modele', 'm')
            ->where($qb->expr()->andX(
                $qb->expr()->eq('m.id', '?1'),
                $qb->expr()->eq('m.lang', '?2')
            ));
        $modele = $qb->getQuery()->setParameters(array(1 => $idModele, 2 => $this->get('request')->getLocale()))->getSingleResult();

		$images = $this->recupererPhotos($idModele, $idProduit);
                
		if (!$modele) {
			throw $this->createNotFoundException(
				'Aucun produit trouvé pour ce numéro : '.$idModele
			);
		}
		
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:modele.html.twig', array(
			'produit' => $produit, 'modele' => $modele, 'images' => $images
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
                    $qb->expr()->eq('c.lang', '?2'),
                    $qb->expr()->eq('m.boutique_modele', '?3')
                ));

            $produit = new Produit();
            try{
                $produit = $qb->getQuery()->setParameters(array(1 => $idProduit, 2 => $this->get('request')->getLocale(), 3 => false))->getSingleResult();
            }catch(\Doctrine\Orm\NoResultException $e){
                $produit->setId($idProduit);
            }
            return $produit;

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
            
            return $this->chargerProduitsAdminAction(1);
	}
        
        private function creerCategorie(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $categorie = new \LaMaltiere\SiteWebMaltiereBundle\Entity\CategorieModele();
            $categorie->setLibelle($request->request->get('libelle'));
            $categorie->setLang($request->request->get('langue'));
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

            $categorie->setLibelle($request->request->get('libelle'));
            $categorie->setLang($request->request->get('langue'));
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
            
            return $this->chargerProduitsAdminAction(1);
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

            return $this->chargerProduitsAdminAction(2);
        }


}