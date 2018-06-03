<?php

namespace MyApp\AquitemBicoBundle\Controller;

use MyApp\AquitemBicoBundle\Entity\Vagas;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Vaga controller.
 *
 */
class VagasController extends Controller
{
    /**
     * Lists all vaga entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $vagas = $em->getRepository('MyAppAquitemBicoBundle:Vagas')->findAll();
        return $this->render('vagas/index.html.twig', array(
            'vagas' => $vagas,
        ));
    }

    /**
     * Creates a new vaga entity.
     *
     */
    public function newAction(Request $request)
    {
        $vaga = new Vaga();
        $form = $this->createForm('MyApp\AquitemBicoBundle\Form\VagasType', $vaga);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vaga);
            $em->flush();

            return $this->redirectToRoute('vagas_show', array('id' => $vaga->getId()));
        }

        return $this->render('vagas/new.html.twig', array(
            'vaga' => $vaga,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vaga entity.
     *
     */
    public function showAction(Vagas $vaga)
    {
        $deleteForm = $this->createDeleteForm($vaga);

        return $this->render('vagas/show.html.twig', array(
            'vaga' => $vaga,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vaga entity.
     *
     */
    public function editAction(Request $request, Vagas $vaga)
    {
        $deleteForm = $this->createDeleteForm($vaga);
        $editForm = $this->createForm('MyApp\AquitemBicoBundle\Form\VagasType', $vaga);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vagas_edit', array('id' => $vaga->getId()));
        }

        return $this->render('vagas/edit.html.twig', array(
            'vaga' => $vaga,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vaga entity.
     *
     */
    public function deleteAction(Request $request, Vagas $vaga)
    {
        $form = $this->createDeleteForm($vaga);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vaga);
            $em->flush();
        }

        return $this->redirectToRoute('vagas_index');
    }

    /**
     * Creates a form to delete a vaga entity.
     *
     * @param Vagas $vaga The vaga entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vagas $vaga)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vagas_delete', array('id' => $vaga->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
