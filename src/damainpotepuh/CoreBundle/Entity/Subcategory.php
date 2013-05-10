<?php

namespace damainpotepuh\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * subcategory
 *
 * @ORM\Table(name="subcategory")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="damainpotepuh\CoreBundle\Entity\SubcategoryRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Subcategory
{

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @var string
    *
    * @ORM\Column(length=255)
    */
    protected $name;  

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
     * Set name
     *
     * @param string $name
     * @return Group
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
     * Get genre as string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}