<?php

namespace BRMainBundle\Controller;

use BRMainBundle\Entity\Matos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Mato controller.
 *
 * @Route("matos")
 */
class MatosController extends Controller
{
    /**
     * Lists all mato entities.
     *
     * @Route("/", name="matos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matos = $em->getRepository('BRMainBundle:Matos')->findAll();

        return $this->render('matos/index.html.twig', array(
            'matos' => $matos,
        ));
    }

    /**
     * Creates a new mato entity.
     *
     * @Route("/new", name="matos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $mato = new Matos();

        $user = $this->getDoctrine()->getManager()->getRepository('BRMainBundle:Users')->find('1');
        $mato->setUser($user);
        $mato->setPublicationDate(new \DateTime());
        $mato->setClickNb($mato->getClickNb() + 1);
        $form = $this->createForm('BRMainBundle\Form\MatosType', $mato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mato);
            $em->flush();

            return $this->redirectToRoute('matos_show', array('id' => $mato->getId()));
        }

        return $this->render('matos/new.html.twig', array(
            'mato' => $mato,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mato entity.
     *
     * @Route("/{id}", name="matos_show")
     * @Method("GET")
     */
    public function showAction(Matos $mato)
    {
        $deleteForm = $this->createDeleteForm($mato);

        return $this->render('matos/show.html.twig', array(
            'mato' => $mato,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mato entity.
     *
     * @Route("/{id}/edit", name="matos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Matos $mato)
    {
        $deleteForm = $this->createDeleteForm($mato);
        $editForm = $this->createForm('BRMainBundle\Form\MatosType', $mato);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matos_edit', array('id' => $mato->getId()));
        }

        return $this->render('matos/edit.html.twig', array(
            'mato' => $mato,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mato entity.
     *
     * @Route("/{id}", name="matos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Matos $mato)
    {
        $form = $this->createDeleteForm($mato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mato);
            $em->flush();
        }

        return $this->redirectToRoute('matos_index');
    }

    /**
     * Creates a form to delete a mato entity.
     *
     * @param Matos $mato The mato entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matos $mato)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('matos_delete', array('id' => $mato->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
