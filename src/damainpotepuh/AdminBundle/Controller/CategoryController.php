<?php

namespace damainpotepuh\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use damainpotepuh\CoreBundle\Entity\Category;
use damainpotepuh\CoreBundle\Models\CategoryManager;
use damainpotepuh\AdminBundle\Form\CategoryType;
use damainpotepuh\CoreBundle\Entity\Subcategory;
use damainpotepuh\CoreBundle\Models\SubcategoryManager;
use damainpotepuh\AdminBundle\Form\SubcategoryType;

class CategoryController extends Controller
{
    private $manager;

    /**
     * @return CategoryManager
     */
    private function getCategoryManager()
    {
        return $this->container->get('damainpotepuh.category_manager');
    }

    /**
     * @return SubcategoryManager
     */
    private function getSubcategoryManager()
    {
        return $this->container->get('damainpotepuh.subcategory_manager');
    }
    
    /**
     * @Route("/categorys", name="_admin_categorys")
     * @Template()
     */
    public function categorysAction()
    {
        $categorys = $this->getCategoryManager()->findAllCategorys();
        $subcategorys = $this->getSubcategoryManager()->findAllSubcategorys();

        return array( 'categorys'   =>  $categorys,
                      'subcategorys' =>  $subcategorys);
    }
       
    /**
     * @Route("/category/delete/{id}", name="_admin_delete_category", requirements={"id" = "\d+"})
     */
    public function deleteCategoryAction($id)
    {

        $this->getCategoryManager()->deleteCategory($id);
        $this->get('session')->getFlashBag()->add('success', 'Kategorija je bila uspešno odstranjena!');
        return $this->redirect($this->generateUrl('_admin_categorys'));
    }

    /**
     * @Route("/subcategory/delete/{id}", name="_admin_delete_subcategory", requirements={"id" = "\d+"})
     */
    public function deleteSubcategoryAction($id)
    {

        $this->getSubcategoryManager()->deleteSubcategory($id);
        $this->get('session')->getFlashBag()->add('success', 'Podkategorija je bila uspešno odstranjena!');
        return $this->redirect($this->generateUrl('_admin_categorys'));
    }
    
    /**
     * @Route("/category/add", name="_admin_add_category")
     * @Route("/category/edit/{id}", name="_admin_edit_category", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editCategoryAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getCategoryManager()->createCategory();
        } else {
            $entity = $this->getCategoryAction($id);
        }

        $form  = $this->createForm(new CategoryType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getCategoryManager()->saveCategory($entity);
                $this->get('session')->getFlashBag()->add('success', 'Kategorija je bila uspešno shranjena!');
                return $this->redirect($this->generateUrl('_admin_categorys'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'category' => $entity,
        );
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
                return $this->redirect($this->generateUrl('_admin_categorys'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'subcategory' => $entity,
        );
    }
    
    /**
     * get single Category by id
     *
     * @param  int $id
     * @return Category
     */
    public function getCategoryAction($id)
    {
        $category = $this->getCategoryManager()->findCategory($id);
        if (!$category) {
            throw new NotFoundHttpException("Kategorija ne obstaja.");
        }
        return $category;
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