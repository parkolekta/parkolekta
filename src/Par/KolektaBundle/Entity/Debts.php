<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Debts
 */
class Debts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var integer
     */
    private $debts_id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $periods;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accounts;

    /**
     * @var \Par\KolektaBundle\Entity\Debts_type
     */
    private $debts_type;

    /**
     * @var \Par\KolektaBundle\Entity\User
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->periods = new \Doctrine\Common\Collections\ArrayCollection();
        $this->accounts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Debts
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Debts
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
     * Set date
     *
     * @param \DateTime $date
     * @return Debts
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return Debts
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set debts_id
     *
     * @param integer $debtsId
     * @return Debts
     */
    public function setDebtsId($debtsId)
    {
        $this->debts_id = $debtsId;

        return $this;
    }

    /**
     * Get debts_id
     *
     * @return integer 
     */
    public function getDebtsId()
    {
        return $this->debts_id;
    }

    /**
     * Add periods
     *
     * @param \Par\KolektaBundle\Entity\Period $periods
     * @return Debts
     */
    public function addPeriod(\Par\KolektaBundle\Entity\Period $periods)
    {
        $this->periods[] = $periods;

        return $this;
    }

    /**
     * Remove periods
     *
     * @param \Par\KolektaBundle\Entity\Period $periods
     */
    public function removePeriod(\Par\KolektaBundle\Entity\Period $periods)
    {
        $this->periods->removeElement($periods);
    }

    /**
     * Get periods
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * Add accounts
     *
     * @param \Par\KolektaBundle\Entity\Account $accounts
     * @return Debts
     */
    public function addAccount(\Par\KolektaBundle\Entity\Account $accounts)
    {
        $this->accounts[] = $accounts;

        return $this;
    }

    /**
     * Remove accounts
     *
     * @param \Par\KolektaBundle\Entity\Account $accounts
     */
    public function removeAccount(\Par\KolektaBundle\Entity\Account $accounts)
    {
        $this->accounts->removeElement($accounts);
    }

    /**
     * Get accounts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * Set debts_type
     *
     * @param \Par\KolektaBundle\Entity\Debts_type $debtsType
     * @return Debts
     */
    public function setDebtsType(\Par\KolektaBundle\Entity\Debts_type $debtsType = null)
    {
        $this->debts_type = $debtsType;

        return $this;
    }

    /**
     * Get debts_type
     *
     * @return \Par\KolektaBundle\Entity\Debts_type 
     */
    public function getDebtsType()
    {
        return $this->debts_type;
    }

    /**
     * Set users
     *
     * @param \Par\KolektaBundle\Entity\User $users
     * @return Debts
     */
    public function setUsers(\Par\KolektaBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Par\KolektaBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
        if(!$this->getCreatedAt())
        {
            $this->created_at = new \DateTime();
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
        $this->updated_at = new \DateTime();

    }
}
