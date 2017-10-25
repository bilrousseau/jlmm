<?php

namespace BRMainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RenterController extends Controller
{
    public function indexAction()
    {
        return $this->render('BRMainBundle:Renter:index.html.twig', array(
            // ...
        ));
    }

}
