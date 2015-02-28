<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class PhotosController extends Controller
{
	public function chargerPhotosAction()
	{
                $finder = new Finder();
                $finder->files()->in('bundles/lamaltieresitewebmaltiere/images/clients/');

		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:photos.html.twig', 
                    array('photos' => $finder ));
	}
        
        public function chargerPhotos4000GAction()
	{
                $finder = new Finder();
                $finder->files()->in('bundles/lamaltieresitewebmaltiere/images/4000GAction/');

		return $this->render('LaMaltiereSiteWebMaltiereBundle:Corps:4000G.html.twig', 
                    array('photos' => $finder ));
	}
}
?>