<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class MagasinController extends Controller
{
    public function chargerProduitMagasinAction(){
        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qb->select('p, c, m')
            ->from('LaMaltiereSiteWebMaltiereBundle:Produit', 'p')
            ->join('p.categories', 'c')
            ->join('c.modeles', 'm')
            ->where('m.boutique_modele = true')
            ->andWhere('c.lang = :lang')
            ->setParameter('lang', $this->get('request')->getLocale());
        $produits = $qb->getQuery()->getSingleResult();
        
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:magasin.html.twig', array(
                'produits' => $produits
        ));
    }
    
    public function recupererDetailModeleAction($idProduit,$idModele){
        $detail = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Modele')->findOneBy(
            array(
             'id' => $idModele,
             'lang' => $this->get('request')->getLocale()
             )
        );
        $finder = new Finder();
        $images = $finder->files()->in('bundles/lamaltieresitewebmaltiere/images/produits/'.$idProduit.'/'.$idModele);
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:detailMagasin.html.twig', array(
            'detail' => $detail, 'images' => $images
        ));
    }
        
    public function chargerPanierMagasinAction(){
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:panier.html.twig');
    }
    
    public function confirmerPanierMagasinAction(){
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:commande.html.twig');
    }
    
    public function ajouterProduitPanierMagasinAction(){
        $qtte = $this->get('request')->request->get('quantite');
        $idModele = $this->get('request')->request->get('idModele');
        
        $detail = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Modele')->findOneBy(
             array(
              'id' => $idModele,
              'lang' => $this->get('request')->getLocale()
              )
         );
   
        $this->ajouterProduit($detail,$qtte);
       
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:panier.html.twig');
    }
    
    private function ajouterProduit($detail,$qtte){
        $panier = null;
        if($this->get('session')->get('panier') == null){
            $panier = array();
        }else{
            $panier = $this->get('session')->get('panier');
        }
        
        if($detail->getPrix_modele() != null){
            if(array_key_exists($detail->getId(), $panier)){
                $produit = $panier[$detail->getId()];
                $produit[3] = $produit[3] + $qtte;
                $panier[$detail->getId()] = $produit;
            }else{
                $panier[$detail->getId()] = array($detail->getId(), $detail->getCategorie()->getProduit()->getId(), $detail->getNom(), $qtte, $detail->getPrix_modele());
            }

            $this->get('session')->set('panier', $panier);
        }
    }
    
    public function supprimerProduitPanierMagasinAction($idProduit){
        $panier = $this->get('session')->get('panier');
        
        if(array_key_exists($idProduit, $panier)){
            $produit = $panier[$idProduit];
            if($produit[3] == 1){
                unset($panier[$idProduit]);
            }else{
                $produit[3] = $produit[3] - 1;
                $panier[$idProduit] = $produit;
            }
            $this->get('session')->set('panier', $panier);
        }
        
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:panier.html.twig');
    }
    
    function confirmationCommandeAction(){
        $message = \Swift_Message::newInstance()
        ->setSubject('Confirmation de votre commande sur la-maltiere.com')
        ->setFrom('info@la-maltiere.com')
        ->setTo(array('info@la-maltiere.com', $this->get('request')->request->get('mail')))
        ->setBody($this->renderView('LaMaltiereSiteWebMaltiereBundle:Corps:email.html.twig',
                array('civilite' => $this->get('request')->request->get('civilite'), 
                    'nom' => $this->get('request')->request->get('nom'), 
                    'prenom' => $this->get('request')->request->get('prenom'),
                    'adresse' => $this->get('request')->request->get('adresse'),
                    'cp' => $this->get('request')->request->get('cp'),
                    'ville' => $this->get('request')->request->get('ville'),
                    'pays' => $this->get('request')->request->get('pays'),
                    'mail' => $this->get('request')->request->get('mail'),
                    'telephone' => $this->get('request')->request->get('telephone'))));
        $this->get('mailer')->send($message);
        
        $this->get('session')->set('panier', null);
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:panier.html.twig', array(
            'mailClient' => $this->get('request')->request->get('mail')
        ));
    }
}
