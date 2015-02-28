<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeVideo
 *
 * @ORM\Table(name="t_type_videos")
 * @ORM\Entity
 */
class TypeVideo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_video", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_video_fr", type="string", length=100)
     */
    private $nom_type_fr;
	
    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_video_en", type="string", length=100)
     */
    private $nom_type_en;
    
    /**
     * @ORM\OneToMany(targetEntity="Video", mappedBy="type", cascade="remove")
     */
    protected $videos;

    public function __construct(){
            $this->videos = new ArrayCollection();
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
     * Set nom_type_fr
     *
     * @param string $nomTypeFr
     * @return TypeVideo
     */
    public function setNomTypeFr($nomTypeFr)
    {
        $this->nom_type_fr = $nomTypeFr;
    
        return $this;
    }

    /**
     * Get nom_type_fr
     *
     * @return string 
     */
    public function getNomTypeFr()
    {
        return $this->nom_type_fr;
    }

    /**
     * Set nom_type_en
     *
     * @param string $nomTypeEn
     * @return TypeVideo
     */
    public function setNomTypeEn($nomTypeEn)
    {
        $this->nom_type_en = $nomTypeEn;
    
        return $this;
    }

    /**
     * Get nom_type_en
     *
     * @return string 
     */
    public function getNomTypeEn()
    {
        return $this->nom_type_en;
    }

    /**
     * Set videos
     *
     * @param integer $videos
     * @return videos
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;
    
        return $this;
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideos()
    {
        return $this->videos;
    }
}