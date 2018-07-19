<?php

namespace MR\BackOfficeBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class EngraissementRepository extends EntityRepository
{
    
   public function getCountEngraissement()
  { 
    return $this->createQueryBuilder('e')
                ->select('COUNT(e)','SUM(e.nombre_laperaux_sevrage) as nombre_laperaux_sevrage')
                ->addSelect('SUM(e.nombre_laperaux) as nombre_laperaux')
                ->addSelect('SUM(e.nombre_laperaux_vente) as nombre_laperaux_vente')
                ->join('e.bande', 'b')
                ->addSelect("b.libelle")
                ->orderBy('e.bande', "DESC")
                ->setMaxResults(1)
                ->groupBy('e.bande')                              
                ->getQuery()
                ->getResult();
  } 
    
    
    
    
}
