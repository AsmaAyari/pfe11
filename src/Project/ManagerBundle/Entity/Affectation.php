<?php

namespace Project\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectation
 */
class Affectation
{
    /**
     * @var integer
     */
    private $id;


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
     * @var \Project\ManagerBundle\Entity\Project
     */
    private $project;

    /**
     * Set project
     *
     * @param \Project\ManagerBundle\Entity\Project $project
     * @return Affectation
     */
    public function setProject(\Project\ManagerBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Project\ManagerBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }


    /**
     * @var \DateTime
     */
    private $createdAt;


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Affectation
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }



    /**
     * @var \Project\ManagerBundle\Entity\Role
     */
    private $role;


    /**
     * Set role
     *
     * @param \Project\ManagerBundle\Entity\Role $role
     * @return Affectation
     */
    public function setRole(\Project\ManagerBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Project\ManagerBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return Affectation
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
