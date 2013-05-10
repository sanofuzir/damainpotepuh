<?php

namespace damainpotepuh\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use damainpotepuh\CoreBundle\Entity\Product;

class ProductManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllProducts()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single product by id
     *
     * @param int $id
     * @return Product
     */
    public function findProduct($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist product details
     *
     * @param  Product $entity
     * @return Product
     */
    public function saveProduct($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteProduct($id)
    {
        $entity = $this->findProduct($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Product
     *
     * @return Product
     */
    public function createProduct()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }
    
    /**
     * Get products by category
     *
     * @param int $category
     * @return Products
     */
    public function findAllProductsByCategoryName($category)
    {
        return $this->repository->findAllProductsByCategoryName($category);
    }
    
    /**
     * Get subcategorys by category
     *
     * @param int $category
     * @return Product
     */
    public function findAllSubcategorysByCategory($category)
    {        
    	return $this->repository->findAllSubcategorysByCategory($category);
    }
    
    /**
     * Get products by subcategorys and category
     *
     * @param $category, $subcategory 
     * @return Products
     */
    public function findAllProductsByCategoryAndSubcategoryName($category, $subcategory)
    {        
    	return $this->repository->findAllProductsByCategoryAndSubcategoryName($category, $subcategory);
    }
}