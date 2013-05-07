<?php

namespace damainpotepuh\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use damainpotepuh\CoreBundle\Entity\Ad;

class AdManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }
    public function findAllAds()
    {
        return $this->repository->findAll();
    }

    /**
     * Get single ad by id
     *
     * @param int $id
     * @return Ad
     */
    public function findAd($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist ad details
     *
     * @param  Ad $entity
     * @return Ad
     */
    public function saveAd($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteAd($id)
    {
        $entity = $this->findAd($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Ad
     *
     * @return Ad
     */
    public function createAd()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}