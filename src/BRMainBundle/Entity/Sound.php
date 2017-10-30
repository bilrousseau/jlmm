<?php

namespace BRMainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sound
 *
 * @ORM\Table(name="sound")
 * @ORM\Entity(repositoryClass="BRMainBundle\Repository\SoundRepository")
 */
class Sound
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
     * @var int
     *
     * @ORM\Column(name="snd_power", type="integer")
     */
    private $power;

    /**
     * @var string
     *
     * @ORM\Column(name="snd_bandwidth", type="string", length=31)
     */
    private $bandwidth;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="snd_update", type="datetime")
     */
    private $dateUpdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="snd_db_status", type="boolean")
     */
    private $dbStatus;


    /**
     * @ORM\OneToOne(targetEntity="BRMainBundle\Entity\Matos", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $matos;
    
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
     * Set power
     *
     * @param integer $power
     *
     * @return Sound
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set bandwidth
     *
     * @param string $bandwidth
     *
     * @return Sound
     */
    public function setBandwidth($bandwidth)
    {
        $this->bandwidth = $bandwidth;

        return $this;
    }

    /**
     * Get bandwidth
     *
     * @return string
     */
    public function getBandwidth()
    {
        return $this->bandwidth;
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
     * @return Sound
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
     * Set matos
     *
     * @param \BRMainBundle\Entity\Matos $matos
     *
     * @return Sound
     */
    public function setMatos(\BRMainBundle\Entity\Matos $matos)
    {
        $this->matos = $matos;

        return $this;
    }

    /**
     * Get matos
     *
     * @return \BRMainBundle\Entity\Matos
     */
    public function getMatos()
    {
        return $this->matos;
    }

    public function __construct()
    {
        $this->setUpdate(new \DateTime());
        $this->setDbStatus(true);
    }
}
