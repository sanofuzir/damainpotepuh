<?php

namespace damainpotepuh\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AdRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdRepository extends EntityRepository
{
    public function findAll() 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT a FROM damainpotepuhCoreBundle:ad a ORDER BY a.created DESC')
                    ->getResult();
    }
}
