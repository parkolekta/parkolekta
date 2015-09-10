<?php

namespace Par\KolektaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $jbg;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $secname;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $tel1;

    /**
     * @var string
     */
    private $tel2;

    /**
     * @var string
     */
    private $tel3;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $debts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user_equals;

    /**
     * @var \Par\KolektaBundle\Entity\Actors
     */
    private $actors;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->debts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set jbg
     *
     * @param integer $jbg
     * @return User
     */
    public function setJbg($jbg)
    {
        $this->jbg = $jbg;

        return $this;
    }

    /**
     * Get jbg
     *
     * @return integer 
     */
    public function getJbg()
    {
        return $this->jbg;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set secname
     *
     * @param string $secname
     * @return User
     */
    public function setSecname($secname)
    {
        $this->secname = $secname;

        return $this;
    }

    /**
     * Get secname
     *
     * @return string 
     */
    public function getSecname()
    {
        return $this->secname;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     * @return User
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     * @return User
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set tel3
     *
     * @param string $tel3
     * @return User
     */
    public function setTel3($tel3)
    {
        $this->tel3 = $tel3;

        return $this;
    }

    /**
     * Get tel3
     *
     * @return string 
     */
    public function getTel3()
    {
        return $this->tel3;
    }

    /**
     * Add debts
     *
     * @param \Par\KolektaBundle\Entity\Debts $debts
     * @return User
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

    /**
     * Add user_equals
     *
     * @param \Par\KolektaBundle\Entity\User_equals $userEquals
     * @return User
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

    /**
     * Set actors
     *
     * @param \Par\KolektaBundle\Entity\Actors $actors
     * @return User
     */
    public function setActors(\Par\KolektaBundle\Entity\Actors $actors = null)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return \Par\KolektaBundle\Entity\Actors 
     */
    public function getActors()
    {
        return $this->actors;
    }
}
