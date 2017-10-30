<?php

namespace BRMainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Light
 *
 * @ORM\Table(name="light")
 * @ORM\Entity(repositoryClass="BRMainBundle\Repository\LightRepository")
 */
class Light
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
     * @ORM\Column(name="lit_power", type="integer")
     */
    private $power;

    /**
     * @var bool
     *
     * @ORM\Column(name="lit_is_dmx", type="boolean")
     */
    private $isDmx;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lit_update", type="datetime")
     */
 
    private $dateUpdate;
    /**
     * @var bool
     *
     * @ORM\Column(name="lit_db_status", type="boolean")
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
     * @return Light
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
     * Set isDmx
     *
     * @param boolean $litIsDmx
     *
     * @return Light
     */
    public function setIsDmx($isDmx)
    {
        $this->isDmx = $isDmx;

        return $this;
    }

    /**
     * Get isDmx
     *
     * @return bool
     */
    public function getIsDmx()
    {
        return $this->isDmx;
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
     * @return Light
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
     * @param \BRMainBundle\Matos $matos
     *
     * @return Light
     */
    public function setMatos(\BRMainBundle\Matos $matos)
    {
        $this->matos = $matos;

        return $this;
    }

    /**
     * Get matos
     *
     * @return \BRMainBundle\Matos
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
