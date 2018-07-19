<?php

namespace MR\BackOfficeBundle\Controller;
use MR\BackOfficeBundle\Entity\Saillie;
use MR\BackOfficeBundle\Entity\MiseBas;
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
            
            $repository = $em->getRepository('MRBackOfficeBundle:Saillie');
            $nbr_saillie = $repository->getCountSaillies();
            
            $repository = $em->getRepository('MRBackOfficeBundle:MiseBas');
            $nbr_misebas = $repository->getCountMiseBas(); 
            
            $repository = $em->getRepository('MRBackOfficeBundle:Engraissement');
            $nbr_engraissement = $repository->getCountEngraissement();
            
            /**
             * Get Last Before Bande ID
             */
            $repository = $em->getRepository('MRBackOfficeBundle:Bande');
            $last_bandes = $repository->getLastsBandes();                      
            foreach($last_bandes as  $key => $value){
              if($key == 1) $bande_id = $last_bandes[$key]['id'];
            }
            
            return $this->render('MRBackOfficeBundle:Admin:dashboard.html.twig',array(
                                 'nbr_saillie' => $nbr_saillie,
                                 'nbr_misebas' => $nbr_misebas,
                                 'nbr_engraissement' => $nbr_engraissement));
            
        }

        return parent::indexAction($request);
}
}
