<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equals
 */
class Equals
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
    private $user_equals;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user_equals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Equals
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
     * Add user_equals
     *
     * @param \Par\KolektaBundle\Entity\User_equals $userEquals
     * @return Equals
     */
    public function addUserEqual(\Par\KolektaBundle\Entity\User_equals $userEquals)
    {
        $this->user_equals[] = $userEquals;

        return $this;
    }

    /**
     * Remove user_equals
     *
     * @param \Par\KolektaBundle\Entity\User_equals $userEquals
     */
    public function removeUserEqual(\Par\KolektaBundle\Entity\User_equals $userEquals)
    {
        $this->user_equals->removeElement($userEquals);
    }

    /**
     * Get user_equals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserEquals()
    {
        return $this->user_equals;
    }
}
