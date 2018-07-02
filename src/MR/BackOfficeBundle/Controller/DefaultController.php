<?php

namespace MR\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        //return $this->render('@MRBackOffice/Default/index.html.twig');
        return $this->container->get('templating')->renderResponse('MRMainBundle:Security:login.html.twig', $data);
    }
}
