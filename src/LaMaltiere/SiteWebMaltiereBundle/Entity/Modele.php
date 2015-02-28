<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="t_modele")
 * @ORM\Entity
 */
class Modele
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_modele", type="string", length=50)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_modele", type="string", length=2)
     * @ORM\Id
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_modele", type="string", length=255)
     */
    private $nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="description_modele", type="string", length=1000)
     */
    private $description;
	
	/**
     * @var string
     *
     * @ORM\Column(name="capacite_modele", type="string", length=30)
     */
    private $capacite;
	
	/**
     * @var string
     *
     * @ORM\Column(name="moteur_modele", type="string", length=15)
     */
    private $moteur;
	
	/**
     * @var string
     *
     * @ORM\Column(name="longueur_bateau_modele", type="string", length=10)
     */
    private $longueur_bateau;
	
	/**
     * @var string
     *
     * @ORM\Column(name="longueur_remorque_modele", type="string", length=10)
     */
    private $longueur_remorque;
	
	/**
     * @var string
     *
     * @ORM\Column(name="largeur_bateau_modele", type="string", length=10)
     */
    private $largeur_bateau;
	
	/**
     * @var string
     *
     * @ORM\Column(name="largeur_remorque_modele", type="string", length=10)
     */
    private $largeur_remorque;
	
	/**
     * @var string
     *
     * @ORM\Column(name="hauteur_modele", type="string", length=10)
     */
    private $hauteur_modele;
	
	/**
     * @var string
     *
     * @ORM\Column(name="poids_modele", type="string", length=10)
     */
    private $poids_modele;
	
	/**
     * @var string
     *
     * @ORM\Column(name="charge_modele", type="string", length=10)
     */
    private $charge;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ptc_modele", type="string", length=10)
     */
    private $ptc;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nb_rouleaux_modele", type="string", length=40)
     */
    private $nb_rouleaux;
	
	/**
     * @var string
     *
     * @ORM\Column(name="roues_modele", type="string", length=20)
     */
    private $roues;
	
	/**
     * @var string
     *
     * @ORM\Column(name="prix_modele", type="string", length=10)
     */
    private $prix_modele;
	
    /**
     * @var boolean
     *
     * @ORM\Column(name="boutique_modele", type="boolean")
     */
    private $boutique_modele;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="video_modele", type="boolean")
     */
    private $video_modele;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="commande_modele", type="boolean")
     */
    private $commande_modele;
	
	/**
     * @ORM\ManyToOne(targetEntity="LaMaltiere\SiteWebMaltiereBundle\Entity\CategorieModele", inversedBy="modeles")
     * @ORM\JoinColumn(name="categorie_modele_id", referencedColumnName="id_cat_modele")
     */
    private $categorie;
	
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
     * @return string
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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

    /**
     * Set description
     *
     * @param string $description
     * @return string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
	
	/**
     * Set capacite
     *
     * @param string $capacite
     * @return string
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    
        return $this;
    }

    /**
     * Get capacite
     *
     * @return string 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }
	
	/**
     * Set moteur
     *
     * @param string $moteur
     * @return string
     */
    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;
    
        return $this;
    }

    /**
     * Get moteur
     *
     * @return string 
     */
    public function getMoteur()
    {
        return $this->moteur;
    }
	
	/**
     * Set longueur_bateau
     *
     * @param string $longueur_bateau
     * @return string
     */
    public function setLongueur_bateau($longueur_bateau)
    {
        $this->longueur_bateau = $longueur_bateau;
    
        return $this;
    }

    /**
     * Get longueur_bateau
     *
     * @return string 
     */
    public function getLongueur_bateau()
    {
        return $this->longueur_bateau;
    }
	
	/**
     * Set longueur_remorque
     *
     * @param string $longueur_remorque
     * @return string
     */
    public function setLongueur_remorque($longueur_remorque)
    {
        $this->longueur_remorque = $longueur_remorque;
    
        return $this;
    }

    /**
     * Get longueur_remorque
     *
     * @return string 
     */
    public function getLongueur_remorque()
    {
        return $this->longueur_remorque;
    }
	
	/**
     * Set largeur_bateau
     *
     * @param string $largeur_bateau
     * @return string
     */
    public function setLargeur_bateau($largeur_bateau)
    {
        $this->largeur_bateau = $largeur_bateau;
    
        return $this;
    }

    /**
     * Get largeur_bateau
     *
     * @return string 
     */
    public function getLargeur_bateau()
    {
        return $this->largeur_bateau;
    }
	
	/**
     * Set largeur_remorque
     *
     * @param string $largeur_remorque
     * @return string
     */
    public function setLargeur_remorque($largeur_remorque)
    {
        $this->largeur_remorque = $largeur_remorque;
    
        return $this;
    }

    /**
     * Get largeur_remorque
     *
     * @return string 
     */
    public function getLargeur_remorque()
    {
        return $this->largeur_remorque;
    }

	/**
     * Set hauteur_modele
     *
     * @param string $hauteur_modele
     * @return string
     */
    public function setHauteur_modele($hauteur_modele)
    {
        $this->hauteur_modele = $hauteur_modele;
    
        return $this;
    }

    /**
     * Get hauteur_modele
     *
     * @return string 
     */
    public function getHauteur_modele()
    {
        return $this->hauteur_modele;
    }
	
	/**
     * Set poids_modele
     *
     * @param string $poids_modele
     * @return string
     */
    public function setPoids_modele($poids_modele)
    {
        $this->poids_modele = $poids_modele;
    
        return $this;
    }

    /**
     * Get poids_modele
     *
     * @return string 
     */
    public function getPoids_modele()
    {
        return $this->poids_modele;
    }
	
	/**
     * Set charge
     *
     * @param string $charge
     * @return string
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;
    
        return $this;
    }

    /**
     * Get charge
     *
     * @return string 
     */
    public function getCharge()
    {
        return $this->charge;
    }
	
	/**
     * Set ptc
     *
     * @param string $ptc
     * @return string
     */
    public function setPtc($ptc)
    {
        $this->ptc = $ptc;
    
        return $this;
    }

    /**
     * Get ptc
     *
     * @return string 
     */
    public function getPtc()
    {
        return $this->ptc;
    }
	
	/**
     * Set nb_rouleaux
     *
     * @param string $nb_rouleaux
     * @return string
     */
    public function setNb_rouleaux($nb_rouleaux)
    {
        $this->nb_rouleaux = $nb_rouleaux;
    
        return $this;
    }

    /**
     * Get nb_rouleaux
     *
     * @return string 
     */
    public function getNb_rouleaux()
    {
        return $this->nb_rouleaux;
    }

	/**
     * Set roues
     *
     * @param string $roues
     * @return string
     */
    public function setRoues($roues)
    {
        $this->roues = $roues;
    
        return $this;
    }

    /**
     * Get roues
     *
     * @return string 
     */
    public function getRoues()
    {
        return $this->roues;
    }

	/**
     * Set prix_modele
     *
     * @param string $prix_modele
     * @return string
     */
    public function setPrix_modele($prix_modele)
    {
        $this->prix_modele = $prix_modele;
    
        return $this;
    }

    /**
     * Get prix_modele
     *
     * @return string 
     */
    public function getPrix_modele()
    {
        return $this->prix_modele;
    }
	
    /**
     * Set boutique_modele
     *
     * @param boolean $boutique_modele
     * @return boolean
     */
    public function setBoutique_modele($boutique_modele)
    {
        $this->boutique_modele = $boutique_modele;
    
        return $this;
    }

    /**
     * Get boutique_modele
     *
     * @return boolean 
     */
    public function getBoutique_modele()
    {
        return $this->boutique_modele;
    }
    
    /**
     * Set video_modele
     *
     * @param boolean $video_modele
     * @return boolean
     */
    public function setVideo_modele($video_modele)
    {
        $this->video_modele = $video_modele;
    
        return $this;
    }

    /**
     * Get video_modele
     *
     * @return boolean 
     */
    public function getVideo_modele()
    {
        return $this->video_modele;
    }
    
    
    /**
     * Set commande_modele
     *
     * @param boolean $commande_modele
     * @return boolean
     */
    public function setCommande_modele($commande_modele)
    {
        $this->commande_modele = $commande_modele;
    
        return $this;
    }

    /**
     * Get commande_modele
     *
     * @return boolean 
     */
    public function getCommande_modele()
    {
        return $this->commande_modele;
    }
    
    /**
     * Set categorie
     *
     * @param integer $categorie
     * @return integer
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return integer 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nom_fr
     *
     * @param string $nomFr
     * @return Produit
     */
    public function setNomFr($nomFr)
    {
        $this->nom_fr = $nomFr;
    
        return $this;
    }

    /**
     * Get nom_fr
     *
     * @return string 
     */
    public function getNomFr()
    {
        return $this->nom_fr;
    }

    /**
     * Set nom_en
     *
     * @param string $nomEn
     * @return Produit
     */
    public function setNomEn($nomEn)
    {
        $this->nom_en = $nomEn;
    
        return $this;
    }

    /**
     * Get nom_en
     *
     * @return string 
     */
    public function getNomEn()
    {
        return $this->nom_en;
    }
}
?>