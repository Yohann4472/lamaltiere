<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeleController
 *
 * @author Yohann
 */
class ModeleController {
    public function enregistrerModeleAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            if($request->request->get('id') == ""){
                $this->creerModele($request);
            }else {
                $this->modifierModele($request);
            }
        }

        return $this->chargerProduit(false, null);
    }

    private function creerModele(Request $request){
        $em = $this->getDoctrine()->getEntityManager();
        $modele = new \LaMaltiere\SiteWebMaltiereBundle\Entity\Modele();
        $modele->setNom_fr($request->request->get('libelleFr'));
        $modele->setNom_en($request->request->get('libelleEn'));
        $modele->setDescription_fr($request->request->get('libelleEn'));
        $modele->setDescription_en($request->request->get('libelleEn'));
        $modele->setCapacite_fr($request->request->get('libelleEn'));
        $modele->setCapacite_en($request->request->get('libelleEn'));
        $modele->setMoteur_fr($request->request->get('libelleEn'));
        $modele->setMoteur_en($request->request->get('libelleEn'));
        $modele->setLongueur_bateau_fr($request->request->get('libelleEn'));
        $modele->setLongueur_bateau_en($request->request->get('libelleEn'));
        $modele->setLongueur_remorque_fr($request->request->get('libelleEn'));
        $modele->setLongueur_remorque_en($request->request->get('libelleEn'));
        $modele->setLargeur_bateau_fr($request->request->get('libelleEn'));
        $modele->setLargeur_bateau_en($request->request->get('libelleEn'));
        $modele->setLargeur_remorque_fr($request->request->get('libelleEn'));
        $modele->setLargeur_remorque_en($request->request->get('libelleEn'));
        $modele->setHauteur_modele_fr($request->request->get('libelleEn'));
        $modele->setHauteur_modele_en($request->request->get('libelleEn'));
        $modele->setPoids_modele_fr($request->request->get('libelleEn'));
        $modele->setPoids_modele_en($request->request->get('libelleEn'));
        $modele->setCharge_fr($request->request->get('libelleEn'));
        $modele->setCharge_en($request->request->get('libelleEn'));
        $modele->setPtc_fr($request->request->get('ordre'));
        $modele->setPtc_en($request->request->get('ordre'));
        $modele->setNb_rouleaux_fr($request->request->get('ordre'));
        $modele->setNb_rouleaux_en($request->request->get('ordre'));
        $modele->setRoues_fr($request->request->get('ordre'));
        $modele->setRoues_en($request->request->get('ordre'));
        $modele->setPrix_modele($request->request->get('ordre'));
        $modele->setNouveau_modele($request->request->get('ordre'));
        $modele->setBoutique_modele($request->request->get('ordre'));
        $categorie = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($request->request->get('produit'));
        $modele->setCategorie($categorie);

        $em->persist($categorie);
        $em->flush();
    }

    private function modifierModele(Request $request){
        $em = $this->getDoctrine()->getEntityManager();
        $modele = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($request->request->get('id'));

        if (!$modele){
            throw $this->createNotFoundException(
                'Aucun modèle trouvé pour cet id : '.$request->request->get('id')
            );
        }

        $modele->setNom_fr($request->request->get('libelleFr'));
        $modele->setNom_en($request->request->get('libelleEn'));
        $modele->setDescription_fr($request->request->get('libelleEn'));
        $modele->setDescription_en($request->request->get('libelleEn'));
        $modele->setCapacite_fr($request->request->get('libelleEn'));
        $modele->setCapacite_en($request->request->get('libelleEn'));
        $modele->setMoteur_fr($request->request->get('libelleEn'));
        $modele->setMoteur_en($request->request->get('libelleEn'));
        $modele->setLongueur_bateau_fr($request->request->get('libelleEn'));
        $modele->setLongueur_bateau_en($request->request->get('libelleEn'));
        $modele->setLongueur_remorque_fr($request->request->get('libelleEn'));
        $modele->setLongueur_remorque_en($request->request->get('libelleEn'));
        $modele->setLargeur_bateau_fr($request->request->get('libelleEn'));
        $modele->setLargeur_bateau_en($request->request->get('libelleEn'));
        $modele->setLargeur_remorque_fr($request->request->get('libelleEn'));
        $modele->setLargeur_remorque_en($request->request->get('libelleEn'));
        $modele->setHauteur_modele_fr($request->request->get('libelleEn'));
        $modele->setHauteur_modele_en($request->request->get('libelleEn'));
        $modele->setPoids_modele_fr($request->request->get('libelleEn'));
        $modele->setPoids_modele_en($request->request->get('libelleEn'));
        $modele->setCharge_fr($request->request->get('libelleEn'));
        $modele->setCharge_en($request->request->get('libelleEn'));
        $modele->setPtc_fr($request->request->get('ordre'));
        $modele->setPtc_en($request->request->get('ordre'));
        $modele->setNb_rouleaux_fr($request->request->get('ordre'));
        $modele->setNb_rouleaux_en($request->request->get('ordre'));
        $modele->setRoues_fr($request->request->get('ordre'));
        $modele->setRoues_en($request->request->get('ordre'));
        $modele->setPrix_modele($request->request->get('ordre'));
        $modele->setNouveau_modele($request->request->get('ordre'));
        $modele->setBoutique_modele($request->request->get('ordre'));
        $categorie = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($request->request->get('produit'));
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
