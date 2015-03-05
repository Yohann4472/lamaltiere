<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LienController extends Controller
{
	public function chargerLiensAction(){
        $liens = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeSite')->findAll();

        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:liens.html.twig', array(
                'liens' => $liens
            ));
        }else{
            return $this->render('LaMaltiereSiteWebMaltiereBundle:Admin:adminLiens.html.twig', array(
                'liens' => $liens
            ));
        }
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
            
            return $this->chargerLiensAction();
	}
        
        private function creerSite(Request $request)
        {
            $em = $this->getDoctrine()->getManager();
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
            $em = $this->getDoctrine()->getManager();
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
            
            return $this->chargerLiensAction();
	}
}

