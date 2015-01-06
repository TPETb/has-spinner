<?php

namespace HAS\SpinnerBundle\Controller;

use HAS\SpinnerBundle\Document\Category;
use HAS\SpinnerBundle\Document\Section;
use HAS\SpinnerBundle\Form\SectionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SectionController
 * @package HAS\SpinnerBundle\Controller
 */
class SectionController extends Controller
{
    /**
     * Displays a form to create a new Section.
     *
     * @Route("/section/new", name="section_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Section();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Section.
     *
     * @Route("/section", name="section_create")
     * @Method("POST")
     * @Template("HASSpinner:Section:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Section();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($entity);
            $dm->flush();

            return $this->redirect($this->generateUrl('section_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Section .
     *
     * @param Section
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Section $entity)
    {
        $form = $this->createForm(new SectionType(), $entity, array(
            'action' => $this->generateUrl('section_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * @Route("section/{id}", name="section_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $entity = $dm->getRepository('HASSpinnerBundle:Section')->findOneById($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Section.');
        }

        //$deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            //'delete_form' => $deleteForm->createView(),
        );
    }
}
