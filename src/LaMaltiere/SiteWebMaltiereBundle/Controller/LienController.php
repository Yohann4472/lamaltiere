<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LienController extends Controller
{
	public function chargerAction()
	{
            return $this->chargerLiens(true);
	}
        
        public function chargerLiensAdminAction()
	{
            return $this->chargerLiens(false);
	}
        
        private function chargerLiens($accueil){
            $liens = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeSite')->findAll();
            
            if($accueil){
                return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:liens.html.twig', array(
                    'liens' => $liens
                ));
            }else{
                return $this->render('LaMaltiereSiteWebMaltiereBundle:Admin:adminLiens.html.twig', array(
                    'liens' => $liens
                ));
            }
        }
        
        public function enregistrerTypeAction(Request $request)
	{
            if ($request->isMethod('POST')) {
                if($request->request->get('id') == ""){
                    $this->creerType($request);
                }else {
                    $this->modifierType($request);
                }
            }
            
            return $this->chargerLiens(false);
	}
        
        private function creerType(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $type = new \LaMaltiere\SiteWebMaltiereBundle\Entity\TypeSite();
            $type->setId($request->request->get('id'));
            $type->setNom_type_fr($request->request->get('libelleFr'));
            $type->setNom_type_en($request->request->get('libelleEn'));
            
            $em->persist($type);
            $em->flush();
        }
        
        private function modifierType(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $type = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeSite')->find($request->request->get('id'));

            if (!$type){
                throw $this->createNotFoundException(
                    'Aucun type de site trouvé pour cet id : '.$request->request->get('id')
                );
            }

            $type->setNom_type_fr($request->request->get('libelleFr'));
            $type->setNom_type_en($request->request->get('libelleEn'));
            $em->flush();
        }
        
        public function supprimerTypeAction($id)
	{
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeSite')->find($id);
            
            $em->remove($entity);
            $em->flush();
            
            return $this->chargerLiens(false);
	}
        
        public function enregistrerSiteAction(Request $request)
	{
            if ($request->isMethod('POST')) {
                if($request->request->get('id') == ""){
                    $this->creerSite($request);
                }else {
                    $this->modifierSite($request);
                }
            }
            
            return $this->chargerLiens(false);
	}
        
        private function creerSite(Request $request)
        {
            $em = $this->getDoctrine()->getEntityManager();
            $site = new \LaMaltiere\SiteWebMaltiereBundle\Entity\Site();
            $site->setNom($request->request->get('nom'));
            $site->setAdresse($request->request->get('adresse'));
            
            $type = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeSite')->find($request->request->get('lstSitesAdmin'));
            $site->setType($type);

            $em->persist($site);
            $em->flush();
        }
        
        private function modifierSite(Request $request)
        {
            $em = $this->getDoctrine()->getEntityManager();
            $site = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Site')->find($request->request->get('id'));

            if (!$site){
                throw $this->createNotFoundException(
                    'Aucun site trouvé pour cet id : '.$request->request->get('id')
                );
            }

            $site->setNom($request->request->get('nom'));
            $site->setAdresse($request->request->get('adresse'));
            
            $type = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeSite')->find($request->request->get('lstTypeSitesAdmin'));
            $site->setType($type);
            
            $em->flush();
        }
        
        public function supprimerSiteAction($id)
	{
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Site')->find($id);
            
            $em->remove($entity);
            $em->flush();
            
            return $this->chargerLiens(false);
	}
}

