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
     * @ORM\Column(name="libelle_cat_modele", type="string", length=255)
     */
    private $libelle;

	/**
     * @var string
     *
     * @ORM\Column(name="lang_cat_modele", type="string", length=2)
     */
    private $lang;
	
    /**
    * @ORM\ManyToOne(targetEntity="LaMaltiere\SiteWebMaltiereBundle\Entity\Produit", inversedBy="categories")
    * @ORM\JoinColumn(name="produit_id", referencedColumnName="id_produit")
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
     * Set libelle
     *
     * @param string $libelle
     * @return string
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

	/**
     * Set lang
     *
     * @param string $lang
     * @return string
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