<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_equals
 */
class User_equals
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
    private $equals_id;

    /**
     * @var \Par\KolektaBundle\Entity\User
     */
    private $user;

    /**
     * @var \Par\KolektaBundle\Entity\Equals
     */
    private $equals;


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
     * @return User_equals
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
     * Set equals_id
     *
     * @param integer $equalsId
     * @return User_equals
     */
    public function setEqualsId($equalsId)
    {
        $this->equals_id = $equalsId;

        return $this;
    }

    /**
     * Get equals_id
     *
     * @return integer 
     */
    public function getEqualsId()
    {
        return $this->equals_id;
    }

    /**
     * Set user
     *
     * @param \Par\KolektaBundle\Entity\User $user
     * @return User_equals
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
     * Set equals
     *
     * @param \Par\KolektaBundle\Entity\Equals $equals
     * @return User_equals
     */
    public function setEquals(\Par\KolektaBundle\Entity\Equals $equals = null)
    {
        $this->equals = $equals;

        return $this;
    }

    /**
     * Get equals
     *
     * @return \Par\KolektaBundle\Entity\Equals 
     */
    public function getEquals()
    {
        return $this->equals;
    }
}
