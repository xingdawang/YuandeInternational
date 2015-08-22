<?php

namespace YuandeUser\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var float
     *
     * @ORM\Column(name="pre_deposit", type="float")
     */
    private $preDeposit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_time", type="datetime")
     */
    private $registrationTime;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * Set preDeposit
     *
     * @param float $preDeposit
     * @return User
     */
    public function setPreDeposit($preDeposit)
    {
        $this->preDeposit = $preDeposit;

        return $this;
    }

    /**
     * Get preDeposit
     *
     * @return float 
     */
    public function getPreDeposit()
    {
        return $this->preDeposit;
    }

    /**
     * Set registrationTime
     *
     * @param \DateTime $registrationTime
     * @return User
     */
    public function setRegistrationTime($registrationTime)
    {
        $this->registrationTime = $registrationTime;

        return $this;
    }

    /**
     * Get registrationTime
     *
     * @return \DateTime 
     */
    public function getRegistrationTime()
    {
        return $this->registrationTime;
    }
}
