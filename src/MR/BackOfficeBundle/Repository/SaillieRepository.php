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
                ->join('s.bande', 'b')
                ->addSelect("b.libelle")
                ->orderBy('s.bande', "DESC")
                ->setMaxResults(1)
                ->groupBy('s.bande')                              
                ->getQuery()
                ->getResult();
  } 
    
  public function getTotalSaillieBande($bande_id){
      
    return $this->createQueryBuilder('s')
                ->select('COUNT(s)')
                ->join('s.bande', 'b')
                ->where('b.id = :bande_id')
                ->setParameter('bande_id', $bande_id)
                ->getQuery()
                ->getSingleScalarResult();
    
  }  

  public function getTotalSuccesSaillieByBande($bande_id){
      
    return $this->createQueryBuilder('s')
                ->select('COUNT(s)')
                ->join('s.bande', 'b')
                ->where('b.id = :bande_id')
                ->andwhere('s.palpation = 1')
                ->setParameter('bande_id', $bande_id)
                ->getQuery()
                ->getSingleScalarResult();
    
  }   
    
}
