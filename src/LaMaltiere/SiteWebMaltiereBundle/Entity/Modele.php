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
     * @ORM\Column(name="nom_modele_fr", type="string", length=255)
     */
    private $nom_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nom_modele_en", type="string", length=255)
     */
    private $nom_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="description_modele_fr", type="string", length=1000)
     */
    private $description_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="description_modele_en", type="string", length=1000)
     */
    private $description_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="capacite_modele_fr", type="string", length=30)
     */
    private $capacite_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="capacite_modele_en", type="string", length=30)
     */
    private $capacite_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="moteur_modele_fr", type="string", length=15)
     */
    private $moteur_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="moteur_modele_en", type="string", length=15)
     */
    private $moteur_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="longueur_bateau_modele_fr", type="string", length=10)
     */
    private $longueur_bateau_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="longueur_bateau_modele_en", type="string", length=10)
     */
    private $longueur_bateau_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="longueur_remorque_modele_fr", type="string", length=10)
     */
    private $longueur_remorque_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="longueur_remorque_modele_en", type="string", length=10)
     */
    private $longueur_remorque_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="largeur_bateau_modele_fr", type="string", length=10)
     */
    private $largeur_bateau_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="largeur_bateau_modele_en", type="string", length=10)
     */
    private $largeur_bateau_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="largeur_remorque_modele_fr", type="string", length=10)
     */
    private $largeur_remorque_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="largeur_remorque_modele_en", type="string", length=10)
     */
    private $largeur_remorque_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="hauteur_modele_fr", type="string", length=10)
     */
    private $hauteur_modele_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="hauteur_modele_en", type="string", length=10)
     */
    private $hauteur_modele_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="poids_modele_fr", type="string", length=10)
     */
    private $poids_modele_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="poids_modele_en", type="string", length=10)
     */
    private $poids_modele_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="charge_modele_fr", type="string", length=10)
     */
    private $charge_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="charge_modele_en", type="string", length=10)
     */
    private $charge_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ptc_modele_fr", type="string", length=10)
     */
    private $ptc_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ptc_modele_en", type="string", length=10)
     */
    private $ptc_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nb_rouleaux_modele_fr", type="string", length=40)
     */
    private $nb_rouleaux_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nb_rouleaux_modele_en", type="string", length=40)
     */
    private $nb_rouleaux_en;
	
	/**
     * @var string
     *
     * @ORM\Column(name="roues_modele_fr", type="string", length=20)
     */
    private $roues_fr;
	
	/**
     * @var string
     *
     * @ORM\Column(name="roues_modele_en", type="string", length=20)
     */
    private $roues_en;
	
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
     * @ORM\JoinColumn(name="id_cat_modele", referencedColumnName="id_cat_modele")
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
     * Set nom_fr
     *
     * @param string $nom_fr
     * @return string
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
     * @return string
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
	
	/**
     * Set description_fr
     *
     * @param string $description_fr
     * @return string
     */
    public function setDescription_fr($description_fr)
    {
        $this->description_fr = $description_fr;
    
        return $this;
    }

    /**
     * Get description_fr
     *
     * @return string 
     */
    public function getDescription_fr()
    {
        return $this->description_fr;
    }
	
	/**
     * Set description_en
     *
     * @param string $description_en
     * @return string
     */
    public function setDescription_en($description_en)
    {
        $this->description_en = $description_en;
    
        return $this;
    }

    /**
     * Get description_en
     *
     * @return string 
     */
    public function getDescription_en()
    {
        return $this->description_en;
    }
	
	/**
     * Set capacite_fr
     *
     * @param string $capacite_fr
     * @return string
     */
    public function setCapacite_fr($capacite_fr)
    {
        $this->capacite_fr = $capacite_fr;
    
        return $this;
    }

    /**
     * Get capacite_fr
     *
     * @return string 
     */
    public function getCapacite_fr()
    {
        return $this->capacite_fr;
    }
	
	/**
     * Set capacite_en
     *
     * @param string $capacite_en
     * @return string
     */
    public function setCapacite_en($capacite_en)
    {
        $this->capacite_en = $capacite_en;
    
        return $this;
    }

    /**
     * Get capacite_en
     *
     * @return string 
     */
    public function getCapacite_en()
    {
        return $this->capacite_en;
    }
	
	/**
     * Set moteur_fr
     *
     * @param string $moteur_fr
     * @return string
     */
    public function setMoteur_fr($moteur_fr)
    {
        $this->moteur_fr = $moteur_fr;
    
        return $this;
    }

    /**
     * Get moteur_fr
     *
     * @return string 
     */
    public function getMoteur_fr()
    {
        return $this->moteur_fr;
    }
	
	/**
     * Set moteur_en
     *
     * @param string $moteur_en
     * @return string
     */
    public function setMoteur_en($moteur_en)
    {
        $this->moteur_en = $moteur_en;
    
        return $this;
    }

    /**
     * Get moteur_en
     *
     * @return string 
     */
    public function getMoteur_en()
    {
        return $this->moteur_en;
    }
	
	/**
     * Set longueur_bateau_fr
     *
     * @param string $longueur_bateau_fr
     * @return string
     */
    public function setLongueur_bateau_fr($longueur_bateau_fr)
    {
        $this->longueur_bateau_fr = $longueur_bateau_fr;
    
        return $this;
    }

    /**
     * Get longueur_bateau_fr
     *
     * @return string 
     */
    public function getLongueur_bateau_fr()
    {
        return $this->longueur_bateau_fr;
    }
	
	/**
     * Set longueur_bateau_en
     *
     * @param string $longueur_bateau_en
     * @return string
     */
    public function setLongueur_bateau_en($longueur_bateau_en)
    {
        $this->longueur_bateau_en = $longueur_bateau_en;
    
        return $this;
    }

    /**
     * Get longueur_bateau_en
     *
     * @return string 
     */
    public function getLongueur_bateau_en()
    {
        return $this->longueur_bateau_en;
    }
	
	/**
     * Set longueur_remorque_fr
     *
     * @param string $longueur_remorque_fr
     * @return string
     */
    public function setLongueur_remorque_fr($longueur_remorque_fr)
    {
        $this->longueur_remorque_fr = $longueur_remorque_fr;
    
        return $this;
    }

    /**
     * Get longueur_remorque_fr
     *
     * @return string 
     */
    public function getLongueur_remorque_fr()
    {
        return $this->longueur_remorque_fr;
    }
	
	/**
     * Set longueur_remorque_en
     *
     * @param string $longueur_remorque_en
     * @return string
     */
    public function setLongueur_remorque_en($longueur_remorque_en)
    {
        $this->longueur_remorque_en = $longueur_remorque_en;
    
        return $this;
    }

    /**
     * Get longueur_remorque_en
     *
     * @return string 
     */
    public function getLongueur_remorque_en()
    {
        return $this->longueur_remorque_en;
    }
	
	/**
     * Set largeur_bateau_fr
     *
     * @param string $largeur_bateau_fr
     * @return string
     */
    public function setLargeur_bateau_fr($largeur_bateau_fr)
    {
        $this->largeur_bateau_fr = $largeur_bateau_fr;
    
        return $this;
    }

    /**
     * Get largeur_bateau_fr
     *
     * @return string 
     */
    public function getLargeur_bateau_fr()
    {
        return $this->largeur_bateau_fr;
    }
	
	/**
     * Set largeur_bateau_en
     *
     * @param string $largeur_bateau_en
     * @return string
     */
    public function setLargeur_bateau_en($largeur_bateau_en)
    {
        $this->largeur_bateau_en = $largeur_bateau_en;
    
        return $this;
    }

    /**
     * Get largeur_bateau_en
     *
     * @return string 
     */
    public function getLargeur_bateau_en()
    {
        return $this->largeur_bateau_en;
    }
	
	/**
     * Set largeur_remorque_fr
     *
     * @param string $largeur_remorque_fr
     * @return string
     */
    public function setLargeur_remorque_fr($largeur_remorque_fr)
    {
        $this->largeur_remorque_fr = $largeur_remorque_fr;
    
        return $this;
    }

    /**
     * Get largeur_remorque_fr
     *
     * @return string 
     */
    public function getLargeur_remorque_fr()
    {
        return $this->largeur_remorque_fr;
    }
	
	/**
     * Set largeur_remorque_en
     *
     * @param string $largeur_remorque_en
     * @return string
     */
    public function setLargeur_remorque_en($largeur_remorque_en)
    {
        $this->largeur_remorque_en = $largeur_remorque_en;
    
        return $this;
    }

    /**
     * Get largeur_remorque_en
     *
     * @return string 
     */
    public function getLargeur_remorque_en()
    {
        return $this->largeur_remorque_en;
    }
	
	/**
     * Set hauteur_modele_fr
     *
     * @param string $hauteur_modele_fr
     * @return string
     */
    public function setHauteur_modele_fr($hauteur_modele_fr)
    {
        $this->hauteur_modele_fr = $hauteur_modele_fr;
    
        return $this;
    }

    /**
     * Get hauteur_modele_fr
     *
     * @return string 
     */
    public function getHauteur_modele_fr()
    {
        return $this->hauteur_modele_fr;
    }
	
	/**
     * Set hauteur_modele_en
     *
     * @param string $hauteur_modele_en
     * @return string
     */
    public function setHauteur_modele_en($hauteur_modele_en)
    {
        $this->hauteur_modele_en = $hauteur_modele_en;
    
        return $this;
    }

    /**
     * Get hauteur_modele_en
     *
     * @return string 
     */
    public function getHauteur_modele_en()
    {
        return $this->hauteur_modele_en;
    }
	
	/**
     * Set poids_modele_fr
     *
     * @param string $poids_modele_fr
     * @return string
     */
    public function setPoids_modele_fr($poids_modele_fr)
    {
        $this->poids_modele_fr = $poids_modele_fr;
    
        return $this;
    }

    /**
     * Get poids_modele_fr
     *
     * @return string 
     */
    public function getPoids_modele_fr()
    {
        return $this->poids_modele_fr;
    }
	
	/**
     * Set poids_modele_en
     *
     * @param string $poids_modele_en
     * @return string
     */
    public function setPoids_modele_en($poids_modele_en)
    {
        $this->poids_modele_en = $poids_modele_en;
    
        return $this;
    }

    /**
     * Get poids_modele_en
     *
     * @return string 
     */
    public function getPoids_modele_en()
    {
        return $this->poids_modele_en;
    }
	
	/**
     * Set charge_fr
     *
     * @param string $charge_fr
     * @return string
     */
    public function setCharge_fr($charge_fr)
    {
        $this->charge_fr = $charge_fr;
    
        return $this;
    }

    /**
     * Get charge_fr
     *
     * @return string 
     */
    public function getCharge_fr()
    {
        return $this->charge_fr;
    }
	
	/**
     * Set charge_en
     *
     * @param string $charge_en
     * @return string
     */
    public function setCharge_en($charge_en)
    {
        $this->charge_en = $charge_en;
    
        return $this;
    }

    /**
     * Get charge_en
     *
     * @return string 
     */
    public function getCharge_en()
    {
        return $this->charge_en;
    }
	
	/**
     * Set ptc_fr
     *
     * @param string $ptc_fr
     * @return string
     */
    public function setPtc_fr($ptc_fr)
    {
        $this->ptc_fr = $ptc_fr;
    
        return $this;
    }

    /**
     * Get ptc_fr
     *
     * @return string 
     */
    public function getPtc_fr()
    {
        return $this->ptc_fr;
    }
	
	/**
     * Set ptc_en
     *
     * @param string $ptc_en
     * @return string
     */
    public function setPtc_en($ptc_en)
    {
        $this->ptc_en = $ptc_en;
    
        return $this;
    }

    /**
     * Get ptc_en
     *
     * @return string 
     */
    public function getPtc_en()
    {
        return $this->ptc_en;
    }
	
	/**
     * Set nb_rouleaux_fr
     *
     * @param string $nb_rouleaux_fr
     * @return string
     */
    public function setNb_rouleaux_fr($nb_rouleaux_fr)
    {
        $this->nb_rouleaux_fr = $nb_rouleaux_fr;
    
        return $this;
    }

    /**
     * Get nb_rouleaux_fr
     *
     * @return string 
     */
    public function getNb_rouleaux_fr()
    {
        return $this->nb_rouleaux_fr;
    }
	
	/**
     * Set nb_rouleaux_en
     *
     * @param string $nb_rouleaux_en
     * @return string
     */
    public function setNb_rouleaux_en($nb_rouleaux_en)
    {
        $this->nb_rouleaux_en = $nb_rouleaux_en;
    
        return $this;
    }

    /**
     * Get nb_rouleaux_en
     *
     * @return string 
     */
    public function getNb_rouleaux_en()
    {
        return $this->nb_rouleaux_en;
    }
	
	/**
     * Set roues_fr
     *
     * @param string $roues_fr
     * @return string
     */
    public function setRoues_fr($roues_fr)
    {
        $this->roues_fr = $roues_fr;
    
        return $this;
    }

    /**
     * Get roues_fr
     *
     * @return string 
     */
    public function getRoues_fr()
    {
        return $this->roues_fr;
    }
	
	/**
     * Set roues_en
     *
     * @param string $roues_en
     * @return string
     */
    public function setRoues_en($roues_en)
    {
        $this->roues_en = $roues_en;
    
        return $this;
    }

    /**
     * Get roues_en
     *
     * @return string 
     */
    public function getRoues_en()
    {
        return $this->roues_en;
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