<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use LaMaltiere\SiteWebMaltiereBundle\Entity\Type_Produit;

class TypeProduitController extends Controller
{
	public function chargerTypeProduitActifsAction(){
		$em = $this->getDoctrine()->getManager();
		$produit = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Type_Produit')->findAll();
		
		return $this->render('LaMaltiereSiteWebMaltiereBundle:Index:index.html.twig');
	}
	
	public function recupererUnProduitAction($id){
		$em = $this->getDoctrine()->getManager();
		$produit = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit')->find($id);
	}
	
	public function modifierUnProduitAction($unProduit){
		$em = $this->getDoctrine()->getManager();
		$produit = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit')->find(10);
		
	}
	
	public function supprimerUnProduitAction($produit){
		$em = $this->getDoctrine()->getManager();
		$em->getRepository('LaMaltiereSiteWebMaltiereBundle:Produit');
		$em->remove($produit);
		$em->flush();
	}
}