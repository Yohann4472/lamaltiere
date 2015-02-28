<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieModele
 *
 * @ORM\Table(name="t_categorie_modele")
 * @ORM\Entity
 */
class CategorieModele
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cat_modele", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_cat_modele_fr", type="string", length=255)
     */
    private $libelle_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="libelle_cat_modele_en", type="string", length=255)
     */
    private $libelle_en;
	
    /**
    * @ORM\ManyToOne(targetEntity="LaMaltiere\SiteWebMaltiereBundle\Entity\Produit", inversedBy="categories")
    * @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
    */
    private $produit;
	
	/**
	* @ORM\OneToMany(targetEntity="LaMaltiere\SiteWebMaltiereBundle\Entity\Modele", mappedBy="categorie")
	*/
	protected $modeles;
	
	public function __construct(){
		$this->modeles = new ArrayCollection();
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
     * Set libelle_fr
     *
     * @param string $libelle_fr
     * @return Produit
     */
    public function setLibelle_fr($libelle_fr)
    {
        $this->libelle_fr = $libelle_fr;
    
        return $this;
    }

    /**
     * Get libelle_fr
     *
     * @return string 
     */
    public function getLibelle_fr()
    {
        return $this->libelle_fr;
    }
	
	/**
     * Set libelle_en
     *
     * @param string $libelle_en
     * @return Produit
     */
    public function setLibelle_en($libelle_en)
    {
        $this->libelle_en = $libelle_en;
    
        return $this;
    }

    /**
     * Get libelle_en
     *
     * @return string 
     */
    public function getLibelle_en()
    {
        return $this->libelle_en;
    }

    /**
     * Set produit
     *
     * @param integer $produit
     * @return integer
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    
        return $this;
    }

    /**
     * Get produit
     *
     * @return integer 
     */
    public function getProduit()
    {
        return $this->produit;
    }
	
	/**
     * Set modeles
     *
     * @param string $modeles
     * @return Produit
     */
    public function setModeles($modeles)
    {
        $this->modeles = $modeles;
    
        return $this;
    }

    /**
     * Get modeles
     *
     * @return string 
     */
    public function getModeles()
    {
        return $this->modeles;
    }
}
?>