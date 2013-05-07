<?php

namespace damainpotepuh\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use damainpotepuh\CoreBundle\Entity\Subcategory;

class SubcategoryManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllSubcategorys()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single subcategory by id
     *
     * @param int $id
     * @return Subcategory
     */
    public function findSubcategory($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist subcategory details
     *
     * @param  Subcategory $entity
     * @return Subcategory
     */
    public function saveSubcategory($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteSubcategory($id)
    {
        $entity = $this->findSubcategory($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Subcategory
     *
     * @return Subcategory
     */
    public function createSubcategory()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}