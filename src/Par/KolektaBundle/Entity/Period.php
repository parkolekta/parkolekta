<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Period
 */
class Period
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
     * @var integer
     */
    private $debts_id;

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
     * Set title
     *
     * @param string $title
     * @return Period
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
     * Set debts_id
     *
     * @param integer $debtsId
     * @return Period
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
     * Set debts
     *
     * @param \Par\KolektaBundle\Entity\Debts $debts
     * @return Period
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
}
