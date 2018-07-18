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
                ->join('m.bande', 'b')
                ->addSelect("b.libelle")
                ->orderBy('m.bande', "DESC")
                ->setMaxResults(1)
                ->groupBy('m.bande')                              
                ->getQuery()
                ->getResult();    
  } 
    
    
    
    
}
