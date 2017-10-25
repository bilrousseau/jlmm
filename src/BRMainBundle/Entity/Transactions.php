<?php

namespace BRMainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions")
 * @ORM\Entity(repositoryClass="BRMainBundle\Repository\TransactionsRepository")
 */
class Transactions
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
     * @ORM\ManyToOne(targetEntity="BRMainBundle\Entity\Users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $borrowerUser;

    /**
     * @ORM\ManyToOne(targetEntity="BRMainBundle\Entity\Users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lenderUser;

    /**
     * @var int
     *
     * @ORM\Column(name="trs_amount", type="integer")
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="trs_grade", type="integer")
     */
    private $grade;

    /**
    * @ORM\ManyToMany(targetEntity="BRMainBundle\Entity\Matos", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    * @ORM\JoinTable(name="transactions_matos")
    */
    private $matos;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trs_update", type="datetime")
     */
    private $update;

    /**
     * @var bool
     *
     * @ORM\Column(name="trs_db_status", type="boolean")
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
     * Set amount
     *
     * @param integer $amount
     *
     * @return Transactions
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     *
     * @return Transactions
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set update
     *
     * @param \DateTime $update
     *
     * @return Transactions
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
     * @return Transactions
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
     * Set borrowerUser
     *
     * @param \BRMainBundle\Entity\Users $borrowerUser
     *
     * @return Transactions
     */
    public function setBorrowerUser(\BRMainBundle\Entity\Users $borrowerUser)
    {
        $this->borrowerUser = $borrowerUser;

        return $this;
    }

    /**
     * Get borrowerUser
     *
     * @return \BRMainBundle\Entity\Users
     */
    public function getBorrowerUser()
    {
        return $this->borrowerUser;
    }

    /**
     * Set lenderUser
     *
     * @param \BRMainBundle\Entity\Users $lenderUser
     *
     * @return Transactions
     */
    public function setLenderUser(\BRMainBundle\Entity\Users $lenderUser)
    {
        $this->lenderUser = $lenderUser;

        return $this;
    }

    /**
     * Get lenderUser
     *
     * @return \BRMainBundle\Entity\Users
     */
    public function getLenderUser()
    {
        return $this->lenderUser;
    }

    /**
     * Add matos
     *
     * @param \BRMainBundle\Entity\Matos $matos
     *
     * @return Transactions
     */
    public function addMatos(\BRMainBundle\Entity\Matos $matos)
    {
        $this->matos[] = $matos;

        return $this;
    }

    /**
     * Remove matos
     *
     * @param \BRMainBundle\Entity\Matos $mato
     */
    public function removeMatos(\BRMainBundle\Entity\Matos $matos)
    {
        $this->matos->removeElement($matos);
    }

    /**
     * Get matos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatos()
    {
        return $this->matos;
    }

    /**
     * Add mato
     *
     * @param \BRMainBundle\Entity\Matos $mato
     *
     * @return Transactions
     */
    public function addMato(\BRMainBundle\Entity\Matos $mato)
    {
        $this->matos[] = $mato;

        return $this;
    }

    /**
     * Remove mato
     *
     * @param \BRMainBundle\Entity\Matos $mato
     */
    public function removeMato(\BRMainBundle\Entity\Matos $mato)
    {
        $this->matos->removeElement($mato);
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setUpdate(new \DateTime());
        $this->setDbStatus(true);
    }
}
