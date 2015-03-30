<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(name="nom_produit", type="string", length=20)
     */
    private $nom;
	
    /**
    * @ORM\OneToMany(targetEntity="LaMaltiere\SiteWebMaltiereBundle\Entity\CategorieModele", mappedBy="produit")
    * @ORM\OrderBy({"lang" = "ASC", "libelle" = "ASC"})
    */
    private $categories;

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
     * Set id
     *
     * @param integer $id
     * @return integer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return string
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
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