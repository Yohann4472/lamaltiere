<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PresseController extends Controller
{
	public function chargerAction()
	{
		return $this->chargerArticles(true);
	}
        
        public function chargerArticlesAdminAction()
	{
		return $this->chargerArticles(false);
	}
        
        private function chargerArticles($accueil){
            $articles = $this->getDoctrine()->getRepository('LaMaltiereSiteWebMaltiereBundle:Article')->findAll();
		
            if($accueil){
                return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:presse.html.twig', array(
                    'articles' => $articles
                ));
            }else{
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
            
            return $this->chargerArticles(false);
	}
        
        private function creerArticle(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $article = new \LaMaltiere\SiteWebMaltiereBundle\Entity\Article();
            $article->setPublicateur($request->request->get('publicateur'));
            $article->setDate_fr($request->request->get('dateFr'));
            $article->setDate_en($request->request->get('dateEn'));
            $article->setCommentaire_fr($request->request->get('commentaireFr'));
            $article->setCommentaire_en($request->request->get('commentaireEn'));
            $article->setChemin($request->request->get('chemin'));

            $em->persist($article);
            $em->flush();
        }
        
        private function modifierArticle(Request $request){
            $em = $this->getDoctrine()->getEntityManager();
            $article = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Article')->find($request->request->get('id'));

            if (!$article){
                throw $this->createNotFoundException(
                    'Aucun article trouvé pour cet id : '.$request->request->get('id')
                );
            }

            $article->setPublicateur($request->request->get('publicateur'));
            $article->setDate_fr($request->request->get('dateFr'));
            $article->setDate_en($request->request->get('dateEn'));
            $article->setCommentaire_fr($request->request->get('commentaireFr'));
            $article->setCommentaire_en($request->request->get('commentaireEn'));
            $article->setChemin($request->request->get('chemin'));
            $em->flush();
        }
        
        public function supprimerArticleAction($id)
	{
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Article')->find($id);
            
            $em->remove($entity);
            $em->flush();
            
            return $this->chargerArticles(false);
	}
}