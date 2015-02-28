<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of ModeleController
 *
 * @author Yohann
 */
class ModeleController extends Controller
{
    public function chargerModeleAdminAction(){
        $produits = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit')->findAll();
         return $this->render('LaMaltiereSiteWebMaltiereBundle:Admin:adminModeles.html.twig', array(
             'produits' => $produits
         ));
    }

    public function enregistrerModeleAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            if($request->request->get('mode') == "creation"){
                $this->creerModele($request);
            }else {
                $this->modifierModele($request);
            }
        }

        return $this->chargerModeleAdminAction();
    }

    private function creerModele(Request $request){
        $em = $this->getDoctrine()->getManager();
        $modele = new \LaMaltiere\SiteWebMaltiereBundle\Entity\Modele();
        $modele->setId($request->request->get('identifiant'));
        $modele->setNom($request->request->get('nom'));
        $modele->setDescription($request->request->get('desc'));
        $modele->setCapacite($request->request->get('capacite'));
        $modele->setMoteur($request->request->get('moteur'));
        $modele->setLongueur_bateau($request->request->get('longeurbateau'));
        $modele->setLongueur_remorque($request->request->get('longeurremorque'));
        $modele->setLargeur_bateau($request->request->get('largeurbateau'));
        $modele->setLargeur_remorque($request->request->get('largeurremorque'));
        $modele->setHauteur_modele($request->request->get('hauteur'));
        $modele->setPoids_modele($request->request->get('poids'));
        $modele->setCharge($request->request->get('charge'));
        $modele->setPtc($request->request->get('ptc'));
        $modele->setNb_rouleaux($request->request->get('rouleaux'));
        $modele->setRoues($request->request->get('roues'));
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
        $modele->setLang($categorie->getLang());

        $em->persist($modele);
        $em->flush();
    }

    private function modifierModele(Request $request){
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Modele')->findOneBy(
            array(
                'id' => $request->request->get('identifiant'),
                'lang' => $request->request->get('langue')
            )
        );

        if (!$modele){
            throw $this->createNotFoundException(
                'Aucun modèle trouvé pour cet id : '.$request->request->get('identifiant').' et cette langue : '.$request->request->get('langue')
            );
        }

        $modele->setNom($request->request->get('nom'));
        $modele->setDescription($request->request->get('desc'));
        $modele->setCapacite($request->request->get('capacite'));
        $modele->setMoteur($request->request->get('moteur'));
        $modele->setLongueur_bateau($request->request->get('longeurbateau'));
        $modele->setLongueur_remorque($request->request->get('longeurremorque'));
        $modele->setLargeur_bateau($request->request->get('largeurbateau'));
        $modele->setLargeur_remorque($request->request->get('largeurremorque'));
        $modele->setHauteur_modele($request->request->get('hauteur'));
        $modele->setPoids_modele($request->request->get('poids'));
        $modele->setCharge($request->request->get('charge'));
        $modele->setPtc($request->request->get('ptc'));
        $modele->setNb_rouleaux($request->request->get('rouleaux'));
        $modele->setRoues($request->request->get('roues'));
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

    public function supprimerModeleAction($id,$lang)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Modele')->findOneBy(
            array(
                'id' => $id,
                'lang' => $lang
            )
        );

        $em->remove($entity);
        $em->flush();

        return $this->chargerModeleAdminAction();
    }
}
