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
            
            return $this->render('MRBackOfficeBundle:Admin:dashboard.html.twig',array(
                                 'nbr_saillie' => $nbr_saillie,
                                 'nbr_misebas' => $nbr_misebas));
            
        }

        return parent::indexAction($request);
}
}
