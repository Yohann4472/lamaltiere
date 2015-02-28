<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class IndexController extends Controller
{
	public function chargerAction()
	{
        return $this->render('LaMaltiereSiteWebMaltiereBundle:Index:index.html.twig');
	}
	
	public function modifierLangAction($_locale)
	{
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Index:index.html.twig');
	}
	
	public function presentationAction()
	{
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:presentation.html.twig');
	}
        
    public function soudureAction()
	{
            $finder = new Finder();
            $finder->files()->in('bundles/lamaltieresitewebmaltiere/images/soudure/');

            return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:travauxsoudure.html.twig', 
                array('photos' => $finder ));
	}
	
	public function contactAction()
	{
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:contact.html.twig');
	}
}