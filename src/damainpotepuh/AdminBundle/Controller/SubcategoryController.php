<?php

namespace damainpotepuh\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use damainpotepuh\CoreBundle\Entity\Subcategory;
use damainpotepuh\CoreBundle\Models\SubcategoryManager;
use damainpotepuh\AdminBundle\Form\SubcategoryType;

class SubcategoryController extends Controller
{
    private $manager;

    /**
     * @return SubcategoryManager
     */
    private function getSubcategoryManager()
    {
        return $this->container->get('damainpotepuh.subcategory_manager');
    }

    /**
     * @Route("/subcategorys", name="_admin_subcategorys")
     * @Template()
     */
    public function subcategorysAction()
    {
        $subcategorys = $this->getSubcategoryManager()->findAllSubcategorys();

        return array( 'subcategorys' => $subcategorys);
    }
    
    /**
     * @Route("/subcategory/delete/{id}", name="_admin_delete_subcategory", requirements={"id" = "\d+"})
     */
    public function deleteSubcategoryAction($id)
    {

        $this->getSubcategoryManager()->deleteSubcategory($id);
        $this->get('session')->getFlashBag()->add('success', 'Podkategorija je bila uspešno odstranjena!');
        return $this->redirect($this->generateUrl('_admin_subcategorys'));
    }
    
    /**
     * @Route("/subcategory/add", name="_admin_add_subcategory")
     * @Route("/subcategory/edit/{id}", name="_admin_edit_subcategory", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editSubcategoryAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getSubcategoryManager()->createSubcategory();
        } else {
            $entity = $this->getSubcategoryAction($id);
        }

        $form  = $this->createForm(new SubcategoryType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getSubcategoryManager()->saveSubcategory($entity);
                $this->get('session')->getFlashBag()->add('success', 'Podkategorija je bila uspešno shranjena!');
                return $this->redirect($this->generateUrl('_admin_subcategorys'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'subcategory' => $entity,
        );
    }
    
    /**
     * get single Subcategory by id
     *
     * @param  int $id
     * @return Subcategory
     */
    public function getSubcategoryAction($id)
    {
        $subcategory = $this->getSubcategoryManager()->findSubcategory($id);
        if (!$subcategory) {
            throw new NotFoundHttpException("Podkategorija ne obstaja.");
        }
        return $subcategory;
    }
}