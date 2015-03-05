<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PresseController extends Controller
{
    public function chargerArticlesAction(){
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $articles = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Article')->findBy(
            array(
                'lang' => $this->get('request')->getLocale()
            ));
            return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:presse.html.twig', array(
                'articles' => $articles
            ));
        }else{
            $articles = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Article')->findAll();
            return $this->render('LaMaltiereSiteWebMaltiereBundle:Admin:adminPresse.html.twig', array(
                'articles' => $articles
            ));
        }
    }
        
    public function enregistrerArticleAction(Request $request)
	{
        if ($request->isMethod('POST')) {
            if($request->request->get('id') == ""){
                $this->creerArticle($request);
            }else {
                $this->modifierArticle($request);
            }
        }

        return $this->chargerArticlesAction();
	}
        
        private function creerArticle(Request $request){
            $em = $this->getDoctrine()->getManager();
            $article = new \LaMaltiere\SiteWebMaltiereBundle\Entity\Article();
            $article->setPublicateur($request->request->get('publicateur'));
            $article->setDate($request->request->get('date'));
            $article->setCommentaire($request->request->get('commentaire'));
            $article->setLang($request->request->get('langue'));
            $article->setChemin($request->request->get('chemin'));

            $em->persist($article);
            $em->flush();
        }
        
        private function modifierArticle(Request $request){
            $em = $this->getDoctrine()->getManager();
            $article = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Article')->find($request->request->get('id'));

            if (!$article){
                throw $this->createNotFoundException(
                    'Aucun article trouvé pour cet id : '.$request->request->get('id')
                );
            }

            $article->setPublicateur($request->request->get('publicateur'));
            $article->setDate($request->request->get('date'));
            $article->setCommentaire($request->request->get('commentaire'));
            $article->setLang($request->request->get('langue'));
            $article->setChemin($request->request->get('chemin'));
            $em->flush();
        }
        
        public function supprimerArticleAction($id)
	{
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Article')->find($id);
            
            $em->remove($entity);
            $em->flush();
            
            return $this->chargerArticlesAction();
	}
}