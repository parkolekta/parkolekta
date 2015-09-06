<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_group
 */
class User_group
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var integer
     */
    private $group_id;

    /**
     * @var \Par\KolektaBundle\Entity\User
     */
    private $user;

    /**
     * @var \Par\KolektaBundle\Entity\Group
     */
    private $user_group;


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
     * Set user_id
     *
     * @param integer $userId
     * @return User_group
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
     * Set group_id
     *
     * @param integer $groupId
     * @return User_group
     */
    public function setGroupId($groupId)
    {
        $this->group_id = $groupId;

        return $this;
    }

    /**
     * Get group_id
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set user
     *
     * @param \Par\KolektaBundle\Entity\User $user
     * @return User_group
     */
    public function setUser(\Par\KolektaBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Par\KolektaBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user_group
     *
     * @param \Par\KolektaBundle\Entity\Group $userGroup
     * @return User_group
     */
    public function setUserGroup(\Par\KolektaBundle\Entity\Group $userGroup = null)
    {
        $this->user_group = $userGroup;

        return $this;
    }

    /**
     * Get user_group
     *
     * @return \Par\KolektaBundle\Entity\Group 
     */
    public function getUserGroup()
    {
        return $this->user_group;
    }
}
