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
     * @ORM\Column(name="nom_type_video", type="string", length=100)
     */
    private $nom_type;

    
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
     * Set nom_type
     *
     * @param string $nom_type
     * @return TypeVideo
     */
    public function setNom_type($nomType)
    {
        $this->nom_type = $nomType;
    
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