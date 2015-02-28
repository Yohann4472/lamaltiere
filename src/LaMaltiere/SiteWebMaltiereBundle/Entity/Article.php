<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="t_articles")
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_article", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="publicateur_article", type="string", length=255)
     */
    private $publicateur;
	
	/**
     * @var string
     *
     * @ORM\Column(name="date_article_fr", type="string", length=255)
     */
    private $date_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="date_article_en", type="string", length=255)
     */
    private $date_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="commentaire_article_fr", type="string", length=255)
     */
    private $commentaire_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="commentaire_article_en", type="string", length=255)
     */
    private $commentaire_en;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin_article", type="string", length=255)
     */
    private $chemin;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set publicateur
     *
     * @param string $publicateur
     * @return Produit
     */
    public function setPublicateur($publicateur)
    {
        $this->publicateur = $publicateur;
    
        return $this;
    }

    /**
     * Get publicateur
     *
     * @return string 
     */
    public function getPublicateur()
    {
        return $this->publicateur;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     * @return Produit
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;
    
        return $this;
    }

    /**
     * Get chemin
     *
     * @return string 
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set date_fr
     *
     * @param string $dateFr
     * @return Article
     */
    public function setDate_fr($dateFr)
    {
        $this->date_fr = $dateFr;
    
        return $this;
    }

    /**
     * Get date_fr
     *
     * @return string 
     */
    public function getDate_fr()
    {
        return $this->date_fr;
    }

    /**
     * Set date_en
     *
     * @param string $dateEn
     * @return Article
     */
    public function setDate_en($dateEn)
    {
        $this->date_en = $dateEn;
    
        return $this;
    }

    /**
     * Get date_en
     *
     * @return string 
     */
    public function getDate_en()
    {
        return $this->date_en;
    }

    /**
     * Set commentaire_fr
     *
     * @param string $commentaireFr
     * @return Article
     */
    public function setCommentaire_fr($commentaireFr)
    {
        $this->commentaire_fr = $commentaireFr;
    
        return $this;
    }

    /**
     * Get commentaire_fr
     *
     * @return string 
     */
    public function getCommentaire_fr()
    {
        return $this->commentaire_fr;
    }

    /**
     * Set commentaire_en
     *
     * @param string $commentaireEn
     * @return Article
     */
    public function setCommentaire_en($commentaireEn)
    {
        $this->commentaire_en = $commentaireEn;
    
        return $this;
    }

    /**
     * Get commentaire_en
     *
     * @return string 
     */
    public function getCommentaire_en()
    {
        return $this->commentaire_en;
    }
}