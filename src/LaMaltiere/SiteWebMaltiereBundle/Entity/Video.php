<?php

namespace LaMaltiere\SiteWebMaltiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="t_videos")
 * @ORM\Entity
 */
class Video
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_video", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var varchar
     *
     * @ORM\Column(name="url_video", type="string", length=100)
     */
    private $url;
    
    /**
     * @ORM\ManyToOne(targetEntity="TypeVideo", inversedBy="videos")
     * @ORM\JoinColumn(name="id_type_video", referencedColumnName="id_type_video")
     */
    private $type;

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
     * Get url
     *
     * @return varchar 
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Set url
     *
     * @param varchar $url
     * @return varchar
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }
    
    /**
     * Set type
     *
     * @param integer $type
     * @return integer
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
}