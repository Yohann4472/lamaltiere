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
     * @ORM\Column(name="nom_type_site", type="string", length=255)
     */
    private $nom_type;
	
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
     * Set nom_type
     *
     * @param string $nom_type
     * @return Produit
     */
    public function setNom_type($nom_type)
    {
        $this->nom_type = $nom_type;
    
        return $this;
    }

    /**
     * Get nom_type
     *
     * @return string 
     */
    public function getNom_type()
    {
        return $this->nom_type;
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