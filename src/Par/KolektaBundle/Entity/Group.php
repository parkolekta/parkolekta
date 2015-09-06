<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 */
class Group
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
    private $user_groups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user_groups = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Group
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
     * Add user_groups
     *
     * @param \Par\KolektaBundle\Entity\User_group $userGroups
     * @return Group
     */
    public function addUserGroup(\Par\KolektaBundle\Entity\User_group $userGroups)
    {
        $this->user_groups[] = $userGroups;

        return $this;
    }

    /**
     * Remove user_groups
     *
     * @param \Par\KolektaBundle\Entity\User_group $userGroups
     */
    public function removeUserGroup(\Par\KolektaBundle\Entity\User_group $userGroups)
    {
        $this->user_groups->removeElement($userGroups);
    }

    /**
     * Get user_groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserGroups()
    {
        return $this->user_groups;
    }
}
