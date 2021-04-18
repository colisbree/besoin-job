<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM; 

use ... 

/**
 * class USer
 * @package App\Entity
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"job_seeker" = "App\Entity\JobSeeker", "recruiter" = "App\Entity\Recruiter"})
 */
abstract class User
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected ?int $id = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $firstName = null;


    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $lastName = null;

    /**
     * @var string|null
     * @ORM\Column(unique=true)
     */
    protected ?string $email = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $password = null;

    /**
     * @var string|null
     */
    protected ?string $plainPassword = null;

    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime_immutable")
     */
    protected \DateTimeInterface $registereAt;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->registereAt = new \DateTimeImmutable()
    }

    /**
     *
     * @return integer|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    

	function getPrivateintidnull() { 
 		return $this->privateintidnull; 
	} 

	function setPrivateintidnull($privateintidnull) {  
		$this->privateintidnull = $privateintidnull; 
	} 

    /**
     * Get the value of firstName
     *
     * @return  string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @param  string|null  $firstName
     *
     * @return  self
     */
    public function setFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     *
     * @return  string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @param  string|null  $lastName
     *
     * @return  self
     */
    public function setLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string|null  $email
     *
     * @return  self
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string|null  $password
     *
     * @return  self
     */
    public function setPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of plainPassword
     *
     * @return  string|null
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set the value of plainPassword
     *
     * @param  string|null  $plainPassword
     *
     * @return  self
     */
    public function setPlainPassword(?string $plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get the value of registereAt
     *
     * @return  \DateTimeInterface
     */
    public function getRegistereAt()
    {
        return $this->registereAt;
    }

    /**
     * Set the value of registereAt
     *
     * @param  \DateTimeInterface  $registereAt
     *
     * @return  self
     */
    public function setRegistereAt(\DateTimeInterface $registereAt)
    {
        $this->registereAt = $registereAt;

        return $this;
    }
}