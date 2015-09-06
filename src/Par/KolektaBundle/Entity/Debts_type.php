<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Debts_type
 */
class Debts_type
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $debts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->debts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Debts_type
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
     * Add debts
     *
     * @param \Par\KolektaBundle\Entity\Debts $debts
     * @return Debts_type
     */
    public function addDebt(\Par\KolektaBundle\Entity\Debts $debts)
    {
        $this->debts[] = $debts;

        return $this;
    }

    /**
     * Remove debts
     *
     * @param \Par\KolektaBundle\Entity\Debts $debts
     */
    public function removeDebt(\Par\KolektaBundle\Entity\Debts $debts)
    {
        $this->debts->removeElement($debts);
    }

    /**
     * Get debts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDebts()
    {
        return $this->debts;
    }
}
