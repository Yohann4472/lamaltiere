<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeSite
 *
 * @ORM\Table(name="t_types_site")
 * @ORM\Entity
 */
class TypeSite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_site", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_site_fr", type="string", length=255)
     */
    private $nom_type_fr;
	
    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_site_en", type="string", length=255)
     */
    private $nom_type_en;
	
    /**
     * @ORM\OneToMany(targetEntity="Site", mappedBy="type", cascade="remove")
     */
    protected $sites;

    public function __construct(){
            $this->sites = new ArrayCollection();
    }

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
     * Set id
     *
     * @param string $id
     * @return Produit
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Set nom_type_fr
     *
     * @param string $nom_type_fr
     * @return Produit
     */
    public function setNom_type_fr($nom_type_fr)
    {
        $this->nom_type_fr = $nom_type_fr;
    
        return $this;
    }

    /**
     * Get nom_type_fr
     *
     * @return string 
     */
    public function getNom_type_fr()
    {
        return $this->nom_type_fr;
    }
	
	/**
     * Set nom_type_en
     *
     * @param string $nom_type_en
     * @return Produit
     */
    public function setNom_type_en($nom_type_en)
    {
        $this->nom_type_en = $nom_type_en;
    
        return $this;
    }

    /**
     * Get nom_type_en
     *
     * @return string 
     */
    public function getNom_type_en()
    {
        return $this->nom_type_en;
    }
	
    /**
     * Set sites
     *
     * @param string $sites
     * @return Site
     */
    public function setSites($sites)
    {
        $this->sites = $sites;
    
        return $this;
    }

    /**
     * Get sites
     *
     * @return string 
     */
    public function getSites()
    {
        return $this->sites;
    }
}