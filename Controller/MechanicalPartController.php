<?php

namespace TurhanOz\DragDropBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TurhanOz\DragDropBundle\Entity\MechanicalPart;
use TurhanOz\DragDropBundle\Form\MechanicalPartType;

/**
 * MechanicalPart controller.
 *
 * @Route("/mechanicalpart")
 */
class MechanicalPartController extends Controller
{
    /**
     * Lists all MechanicalPart entities.
     *
     * @Route("/", name="mechanicalpart")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TurhanOzDragDropBundle:MechanicalPart')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new MechanicalPart entity.
     *
     * @Route("/", name="mechanicalpart_create")
     * @Method("POST")
     * @Template("TurhanOzDragDropBundle:MechanicalPart:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new MechanicalPart();
        $form = $this->createForm(new MechanicalPartType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mechanicalpart_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new MechanicalPart entity.
     *
     * @Route("/new", name="mechanicalpart_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new MechanicalPart();
        $form   = $this->createForm(new MechanicalPartType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a MechanicalPart entity.
     *
     * @Route("/{id}", name="mechanicalpart_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TurhanOzDragDropBundle:MechanicalPart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MechanicalPart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing MechanicalPart entity.
     *
     * @Route("/{id}/edit", name="mechanicalpart_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TurhanOzDragDropBundle:MechanicalPart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MechanicalPart entity.');
        }

        $editForm = $this->createForm(new MechanicalPartType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing MechanicalPart entity.
     *
     * @Route("/{id}", name="mechanicalpart_update")
     * @Method("PUT")
     * @Template("TurhanOzDragDropBundle:MechanicalPart:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TurhanOzDragDropBundle:MechanicalPart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MechanicalPart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MechanicalPartType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mechanicalpart_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a MechanicalPart entity.
     *
     * @Route("/{id}", name="mechanicalpart_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TurhanOzDragDropBundle:MechanicalPart')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MechanicalPart entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mechanicalpart'));
    }

    /**
     * Creates a form to delete a MechanicalPart entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
