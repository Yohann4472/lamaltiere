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
     * @ORM\Column(name="date_article", type="string", length=255)
     */
    private $date;
	
	/**
     * @var string
     *
     * @ORM\Column(name="commentaire_article", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin_article", type="string", length=255)
     */
    private $chemin;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_article", type="string", length=2)
     */
    private $lang;

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
     * Set date
     *
     * @param string $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Article
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Article
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    
        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }
}