<?php

namespace BRMainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BRMainBundle\Entity\MatosTypes;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('BRMainBundle:MatosTypes');

        // $sound = new MatosTypes();
        // $sound->setName('Images');

        // $em->persist($sound);
        // $em->flush();

        $matosTypesList = $rep->findAll();
        return $this->render('BRMainBundle:Default:index.html.twig', array('matosTypesList' => $matosTypesList));
    }
}
