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
}
?>