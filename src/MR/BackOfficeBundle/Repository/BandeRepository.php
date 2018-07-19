<?php

namespace MR\BackOfficeBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class BandeRepository extends EntityRepository
{
    
  public function getLastsBandes()
  { 
    return $this->createQueryBuilder('b')
                ->select('b.id')
                ->orderBy('b.id', "DESC")
                ->setMaxResults(2)                            
                ->getQuery()
                ->getResult();
  } 
    
}
