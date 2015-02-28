<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VideosController extends Controller
{
	public function chargerVideosAction($id)
	{
                return $this->chargerVideos(true, $id);
	}
        
        public function chargerVideosAdminAction()
	{
		return $this->chargerVideos(false, 0);
	}
        
        private function chargerVideos($accueil,$id){
            if($accueil){
                $videos = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeVideo')->find($id);
                if($id == 1){
                    return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:videoslamaltiere.html.twig', array(
                        'typeVideos' => $videos
                    ));
                }else{
                    return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:videosclients.html.twig', array(
                        'typeVideos' => $videos
                    ));
                }
            }else{
                $videos = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeVideo')->findAll();

                return $this->render('LaMaltiereSiteWebMaltiereBundle:Admin:adminVideos.html.twig', array(
                    'typeVideos' => $videos
                ));
            }
        }
        
        public function enregistrerVideoAction(Request $request)
	{
            if ($request->isMethod('POST')) {
                if($request->request->get('id') == ""){
                    $this->creerVideo($request);
                }else {
                    $this->modifierVideo($request);
                }
            }
            
            return $this->chargerVideos(false);
	}
        
        private function creerVideo(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $video = new \LaMaltiere\SiteWebMaltiereBundle\Entity\Video();
            $video->setUrl($request->request->get('url'));
            $type = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeVideo')->find($request->request->get('lstTypeVideosAdmin'));
            $video->setType($type);

            $em->persist($video);
            $em->flush();
        }
        
        private function modifierVideo(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $video = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Video')->find($request->request->get('id'));

            if (!$video){
                throw $this->createNotFoundException(
                    'Aucun article trouvé pour cet id : '.$request->request->get('id')
                );
            }

            $video->setUrl($request->request->get('url'));
            $type = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:TypeVideo')->find($request->request->get('lstTypesVideoAdmin'));
            $video->setType($type);
            $em->flush();
        }
        
        public function supprimerVideoAction($url)
	{
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Video')->find($url);
            
            $em->remove($entity);
            $em->flush();
            
            return $this->chargerVideos(false);
	}
}