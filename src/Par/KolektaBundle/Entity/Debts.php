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
     * @var integer
     */
    private $debts_id;

    /**
     * @var \Par\KolektaBundle\Entity\Debts_type
     */
    private $debts_type;


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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }
}