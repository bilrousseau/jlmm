<?php

namespace BRMainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="BRMainBundle\Repository\UsersRepository")
 */
class Users
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
     * @var \DateTime
     *
     * @ORM\Column(name="usr_birth_date", type="datetime")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_phone", type="string", length=15)
     */
    private $phone;

    /**
     * @ORM\OneToOne(targetEntity="BRMainBundle\Entity\Picture")
     * @ORM\JoinColumn(nullable=true, unique=true)
     */
    private $picture;

    /**
     * @var bool
     *
     * @ORM\Column(name="usr_is_verified", type="boolean")
     */
    private $isVerified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usr_signup_date", type="datetime")
     */
    private $signupDate;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_city", type="string", length=127)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_zip_code", type="string", length=7)
     */
    private $zipCode;

    /**
     * @var float
     *
     * @ORM\Column(name="usr_latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="usr_longitude", type="float")
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="usr_answer_time", type="integer")
     */
    private $answerTime;

    /**
     * @var bool
     *
     * @ORM\Column(name="usr_is_online", type="boolean")
     */
    private $isOnline;

    /**
     * @ORM\OneToOne(targetEntity="BR\UserBundle\Entity\SecurityUser")
     * @ORM\JoinColumn(nullable=false, unique=true)
     */
    private $securityUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usr_update", type="datetime")
     */
    private $dateUpdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="usr_db_status", type="boolean")
     */
    private $dbStatus;


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
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Users
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Users
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set isVerified
     *
     * @param boolean $isVerified
     *
     * @return Users
     */
    public function setIsVerified($isVerified)
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * Get isVerified
     *
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->isVerified;
    }

    /**
     * Set signupDate
     *
     * @param \DateTime $signupDate
     *
     * @return Users
     */
    public function setSignupDate($signupDate)
    {
        $this->signupDate = $signupDate;

        return $this;
    }

    /**
     * Get signupDate
     *
     * @return \DateTime
     */
    public function getSignupDate()
    {
        return $this->signupDate;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Users
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Users
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Users
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Users
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Users
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
     * Set answerTime
     *
     * @param integer $answerTime
     *
     * @return Users
     */
    public function setAnswerTime($answerTime)
    {
        $this->answerTime = $answerTime;

        return $this;
    }

    /**
     * Get answerTime
     *
     * @return int
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     *
     * @return Users
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

        return $this;
    }

    /**
     * Get isOnline
     *
     * @return bool
     */
    public function getIsOnline()
    {
        return $this->isOnline;
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
     * @return Users
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
     * @return Users
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
     * Set securityUser
     *
     * @param \BR\UserBundle\Entity\SecurityUser $securityUser
     *
     * @return Users
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
