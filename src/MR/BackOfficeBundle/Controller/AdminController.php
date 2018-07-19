<?php

namespace MR\BackOfficeBundle\Controller;
use MR\BackOfficeBundle\Entity\Saillie;
use MR\BackOfficeBundle\Entity\MiseBas;
use MR\BackOfficeBundle\Entity\Bande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\Request;




class AdminController extends BaseAdminController
{
 /**
     * @Route("/", name="dashboard")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $this->initialize($request);

        if (null === $request->query->get('entity')) {
            $em = $this->getDoctrine()->getManager();

            /**
             * Get Bande-1
             */
            $repository = $em->getRepository('MRBackOfficeBundle:Bande');
            $last_bandes = $repository->getLastsBandes();
            
            foreach($last_bandes as  $key => $value){
              if($key == 1) {
                  $bande_id = $last_bandes[$key]['id'];
                  $bande_libelle = $last_bandes[$key]['libelle'];
              }
            }
            
            $repository = $em->getRepository('MRBackOfficeBundle:Saillie');
            $nbr_saillie = $repository->getCountSaillies();
            
            $repository_mb = $em->getRepository('MRBackOfficeBundle:MiseBas');
            $nbr_misebas = $repository_mb->getCountMiseBas();
            $total_vivants_adoptes = $repository_mb->getTotalLapinsVivantsAdaptesByBande($bande_id);
            
            
            $repository_eng = $em->getRepository('MRBackOfficeBundle:Engraissement');
            $nbr_engraissement = $repository_eng->getCountEngraissement();
            $nbr_lapains_vendus = $repository_eng->getTotalLapinsVendusByBande($bande_id);
            $nbr_lapains_sevrage =  $repository_eng->getTotalLapinsSevrageByBande($bande_id);
            
            $total_lapins_pre_sevrage = $total_vivants_adoptes - $nbr_lapains_sevrage;
            $pre_sevrage_pourcentage = number_format( ($total_lapins_pre_sevrage*100)/$total_vivants_adoptes,2);
            
            $total_lapins_post_sevrage = $nbr_lapains_sevrage - $nbr_lapains_vendus;
            $post_sevrage_pourcentage = number_format( ($total_lapins_post_sevrage*100)/$nbr_lapains_sevrage,2);
            /**
             * Bloc Stats For sales
             */
            $repository_bande = $em->getRepository('MRBackOfficeBundle:Saillie');
            $totalSaillieBybande = $repository_bande->getTotalSaillieBande($bande_id);
            $totalSuccesSaillieBybande = $repository_bande->getTotalSuccesSaillieByBande($bande_id);
            
            $succes_pourcentage = number_format(($totalSuccesSaillieBybande*100)/$totalSaillieBybande,2);
            
            
            
            return $this->render('MRBackOfficeBundle:Admin:dashboard.html.twig',array(
                                 'nbr_saillie' => $nbr_saillie,
                                 'nbr_misebas' => $nbr_misebas,
                                 'nbr_engraissement' => $nbr_engraissement,
                                 'bande_libelle' => $bande_libelle,
                                 'succes_pourcentage' => $succes_pourcentage,
                                 'nbr_lapains_vendus' => $nbr_lapains_vendus,
                                 'pre_sevrage_pourcentage' => $pre_sevrage_pourcentage,
                                 'post_sevrage_pourcentage' => $post_sevrage_pourcentage));
            
        }

        return parent::indexAction($request);
}
}
