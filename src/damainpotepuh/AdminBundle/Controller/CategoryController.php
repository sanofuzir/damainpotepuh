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
     * @Route("/categorys", name="_admin_categorys")
     * @Template()
     */
    public function categorysAction()
    {
        $categorys = $this->getCategoryManager()->findAllCategorys();

        return array( 'categorys' => $categorys);
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
    
    
}