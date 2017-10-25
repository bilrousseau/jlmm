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
        $sound = new MatosTypes();
        $sound->setName('Ecrans LCD');

        $em->persist($sound);
        $em->flush();

        return $this->render('BRMainBundle:Default:index.html.twig', array());
    }
}
