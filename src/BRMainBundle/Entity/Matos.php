<?php

namespace BRMainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BRMainBundle\Prototype\EntityPrototype;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Matos
 *
 * @ORM\Table(name="matos")
 * @ORM\Entity(repositoryClass="BRMainBundle\Repository\MatosRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Matos extends EntityPrototype
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\Length(min=3)
     * @ORM\Column(name="mat_name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="mat_price", type="integer")
     */
    private $price;

    /**
     * @var array
     *
     * @ORM\ManyToOne(targetEntity="BRMainBundle\Entity\State")
     * @ORM\JoinColumn(nullable=false)
     */
    private $state;

    /**
     * @var int
     *
     * @ORM\Column(name="mat_guarantee", type="integer")
     */
    private $guarantee;

    /**
     * @var int
     *
     * @ORM\Column(name="mat_age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="mat_brand", type="string", length=63)
     */
    private $brand;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mat_publication_date", type="datetime")
     */
    private $publicationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="mat_click_nb", type="integer")
     */
    private $clickNb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mat_update", type="datetime")
     */
    private $dateUpdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="mat_db_status", type="boolean")
     */
    private $dbStatus;

    /**
     * @ORM\ManyToOne(targetEntity="BRMainBundle\Entity\MatosTypes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matosType;

    /**
     * @ORM\ManyToOne(targetEntity="BR\UserBundle\Entity\SecurityUser", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $securityUser;

    /**
     * @ORM\OneToMany(targetEntity="BRMainBundle\Entity\Picture", mappedBy="matos")
     */
    private $pictures;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Matos
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Matos
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Matos
     */
    public function setState(\BRMainBundle\Entity\State $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set guarantee
     *
     * @param integer $guarantee
     *
     * @return Matos
     */
    public function setGuarantee($guarantee)
    {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Get guarantee
     *
     * @return int
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Matos
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Matos
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Matos
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set clickNb
     *
     * @param integer $clickNb
     *
     * @return Matos
     */
    public function setClickNb($clickNb)
    {
        $this->clickNb = $clickNb;

        return $this;
    }

    /**
     * Get clickNb
     *
     * @return int
     */
    public function getClickNb()
    {
        return $this->clickNb;
    }

    /**
     * Set update
     *
     * @param \DateTime $litUpdate
     *
     * @return Light
     */
    public function setUpdate($update)
    {
        $this->dateUpdate = $update;

        return $this;
    }

    /**
     * @ORM\PreUpdate
     */
    /*public function dateUpdate()
    {
        $this->setUpdate(new \DateTime());
    }*/
   
    /**
     * Get update
     *
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Set dbStatus
     *
     * @param boolean $dbStatus
     *
     * @return Matos
     */
    public function setDbStatus($dbStatus)
    {
        $this->dbStatus = $dbStatus;

        return $this;
    }

    /**
     * Get dbStatus
     *
     * @return bool
     */
    public function getDbStatus()
    {
        return $this->dbStatus;
    }

    /**
     * Set matosType
     *
     * @param integer $matosType
     *
     * @return Matos
     */
    public function setMatosType(\BRMainBundle\Entity\MatosTypes $matosType)
    {
        $this->matosType = $matosType;

        return $this;
    }

    /**
     * Get matosType
     *
     * @return MatosType
     */
    public function getMatosType()
    {
        return $this->matosType;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Matos
     */
    public function setUser(\BR\UserBundle\Entity\SecurityUser $user)
    {
        $this->securityUser = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->securityUser;
    }


    public function __construct()
    {
        $this->setUpdate(new \DateTime());
        $this->setDbStatus(true);
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     *
     * @return Matos
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Add picture
     *
     * @param \BRMainBundle\Entity\Picture $picture
     *
     * @return Matos
     */
    public function addPicture(\BRMainBundle\Entity\Picture $picture)
    {
        $this->pictures[] = $picture;

        return $this;
    }

    /**
     * Remove picture
     *
     * @param \BRMainBundle\Entity\Picture $picture
     */
    public function removePicture(\BRMainBundle\Entity\Picture $picture)
    {
        $this->pictures->removeElement($picture);
    }

    /**
     * Get pictures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Set securityUser
     *
     * @param \BR\UserBundle\Entity\SecurityUser $securityUser
     *
     * @return Matos
     */
    public function setSecurityUser(\BR\UserBundle\Entity\SecurityUser $securityUser)
    {
        $this->securityUser = $securityUser;

        return $this;
    }

    /**
     * Get securityUser
     *
     * @return \BR\UserBundle\Entity\SecurityUser
     */
    public function getSecurityUser()
    {
        return $this->securityUser;
    }
}
