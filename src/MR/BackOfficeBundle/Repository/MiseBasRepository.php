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
    
   public function getTotalLapinsVivantsAdaptesByBande($bande_id)
  { 
    return $this->createQueryBuilder('m')
                ->select('(SUM(m.nombre_vivants)+SUM(m.nombre_adoptes))')
                ->join('m.bande', 'b')
                ->where('b.id = :bande_id')
                ->setParameter('bande_id', $bande_id)                             
                ->getQuery()
                ->getSingleScalarResult();
  }    
    
    
}
