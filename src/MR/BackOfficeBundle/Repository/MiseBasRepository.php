<?php

namespace MR\BackOfficeBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class MiseBasRepository extends EntityRepository
{
    
   public function getCountMiseBas()
  { 
    return $this->createQueryBuilder('m')
                ->select('COUNT(m)')
                ->getQuery()
                ->getSingleScalarResult();
  } 
    
    
    
    
}
