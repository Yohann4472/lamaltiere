<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="t_produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit_fr", type="string", length=20)
     */
    private $nom_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nom_produit_en", type="string", length=20)
     */
    private $nom_en;
	
    /**
    * @ORM\OneToMany(targetEntity="LaMaltiere\SiteWebMaltiereBundle\Entity\CategorieModele", mappedBy="produit")
    * @ORM\OrderBy({"libelle_fr" = "ASC"})
    */
    protected $categories;

    public function __construct(){
            $this->categories = new ArrayCollection();
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
     * Set nom_fr
     *
     * @param string $nom_fr
     * @return Produit
     */
    public function setNom_fr($nom_fr)
    {
        $this->nom_fr = $nom_fr;
    
        return $this;
    }

    /**
     * Get nom_fr
     *
     * @return string 
     */
    public function getNom_fr()
    {
        return $this->nom_fr;
    }

    /**
     * Set nom_en
     *
     * @param string $nom_en
     * @return Produit
     */
    public function setNom_en($nom_en)
    {
        $this->nom_en = $nom_en;
    
        return $this;
    }

    /**
     * Get nom_en
     *
     * @return string 
     */
    public function getNom_en()
    {
        return $this->nom_en;
    }
	
	public function addCategorie(\LaMaltiere\SiteWebMaltiereBundle\Entity\CategorieModele $categorie)
	{
		$this->categories[] = $categorie;
		return $this;
	}

	public function removeCategorie(\LaMaltiere\SiteWebMaltiereBundle\Entity\CategorieModele $categorie)
	{
		$this->categories->removeElement($categorie);
	}

    /**
     * Get categories
     *
     * @return string 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
?>