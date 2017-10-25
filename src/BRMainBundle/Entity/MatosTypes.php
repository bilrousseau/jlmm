<?php

namespace BRMainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatosTypes
 *
 * @ORM\Table(name="matos_types")
 * @ORM\Entity(repositoryClass="BRMainBundle\Repository\MatosTypesRepository")
 */
class MatosTypes
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
     * @ORM\Column(name="mtp_name", type="string", length=255)
     */
    private $name;


        /**
     * @var \DateTime
     *
     * @ORM\Column(name="mtp_update", type="datetime")
     */
    private $update;

    /**
     * @var bool
     *
     * @ORM\Column(name="mtp_db_status", type="boolean")
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
     * Set mtpName
     *
     * @param string $mtpName
     *
     * @return MatosTypes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get mtpName
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

        /**
     * Set update
     *
     * @param \DateTime $update
     *
     * @return Sound
     */
    public function setUpdate($update)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Get update
     *
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->update;
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

    public function __construct()
    {
        $this->setUpdate(new \DateTime());
        $this->setDbStatus(true);
    }
}
