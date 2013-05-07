<?php

namespace damainpotepuh\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="damainpotepuh\CoreBundle\Entity\CategoryRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Category
{

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @var string
    *
    * @ORM\Column(length=255)
    */
    private $name;
    
    /**
    * @var Subcategory
    *
    * @ORM\ManyToOne(targetEntity="subcategory", inversedBy="category")
    *
    */
    protected $subcategory;

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
     * @return Genre
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
     * Set subcategory
     *
     * @param Subcategory $subcategory
     * @return Category
     */
    public function setSubcategory(Subcategory $subcategory = null)
    {
        $this->Subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return Subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
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