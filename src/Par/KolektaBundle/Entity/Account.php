<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 */
class Account
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $valute_date;

    /**
     * @var \DateTime
     */
    private $record_input_date;

    /**
     * @var float
     */
    private $payin;

    /**
     * @var float
     */
    private $payout;

    /**
     * @var integer
     */
    private $debts_id;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var \Par\KolektaBundle\Entity\Debts
     */
    private $debts;


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
     * Set valute_date
     *
     * @param \DateTime $valuteDate
     * @return Account
     */
    public function setValuteDate($valuteDate)
    {
        $this->valute_date = $valuteDate;

        return $this;
    }

    /**
     * Get valute_date
     *
     * @return \DateTime 
     */
    public function getValuteDate()
    {
        return $this->valute_date;
    }

    /**
     * Set record_input_date
     *
     * @param \DateTime $recordInputDate
     * @return Account
     */
    public function setRecordInputDate($recordInputDate)
    {
        $this->record_input_date = $recordInputDate;

        return $this;
    }

    /**
     * Get record_input_date
     *
     * @return \DateTime 
     */
    public function getRecordInputDate()
    {
        return $this->record_input_date;
    }

    /**
     * Set payin
     *
     * @param float $payin
     * @return Account
     */
    public function setPayin($payin)
    {
        $this->payin = $payin;

        return $this;
    }

    /**
     * Get payin
     *
     * @return float 
     */
    public function getPayin()
    {
        return $this->payin;
    }

    /**
     * Set payout
     *
     * @param float $payout
     * @return Account
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;

        return $this;
    }

    /**
     * Get payout
     *
     * @return float 
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * Set debts_id
     *
     * @param integer $debtsId
     * @return Account
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
     * Set user_id
     *
     * @param integer $userId
     * @return Account
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set debts
     *
     * @param \Par\KolektaBundle\Entity\Debts $debts
     * @return Account
     */
    public function setDebts(\Par\KolektaBundle\Entity\Debts $debts = null)
    {
        $this->debts = $debts;

        return $this;
    }

    /**
     * Get debts
     *
     * @return \Par\KolektaBundle\Entity\Debts 
     */
    public function getDebts()
    {
        return $this->debts;
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
