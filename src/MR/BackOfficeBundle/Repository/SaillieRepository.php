<?php

namespace MR\BackOfficeBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class SaillieRepository extends EntityRepository
{
    
   public function getCountSaillies()
  { 
    return $this->createQueryBuilder('s')
                ->select('COUNT(s)')
                ->getQuery()
                ->getSingleScalarResult();
  } 
    
    
    
    
}
