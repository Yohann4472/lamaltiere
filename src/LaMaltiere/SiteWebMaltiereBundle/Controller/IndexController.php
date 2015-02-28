<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
	public function chargerAction()
	{
            if($this->get('session')->get('lang') == null){
                $this->get('session')->set('lang', 'fr');
            }
                
            return $this->render('LaMaltiereSiteWebMaltiereBundle:Index:index.html.twig');
	}
	
	public function modifierLangAction($lang)
	{
		$this->get('session')->set('lang', $lang);

		return $this->render('LaMaltiereSiteWebMaltiereBundle:Index:index.html.twig');
	}
	
	public function presentationAction()
	{
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:presentation.html.twig');
	}
	
	public function contactAction()
	{
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:contact.html.twig');
	}
}