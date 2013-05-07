<?php

namespace damainpotepuh\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use damainpotepuh\CoreBundle\Entity\Product;
use damainpotepuh\CoreBundle\Models\ProductManager;
use damainpotepuh\AdminBundle\Form\ProductType;

class ProductController extends Controller
{
    private $manager;

    /**
     * @return ProductManager
     */
    private function getProductManager()
    {
        return $this->container->get('damainpotepuh.product_manager');
    }
    
    /**
     * @Route("/products", name="_admin_products")
     * @Template()
     */
    public function productsAction()
    {
        $products = $this->getProductManager()->findAllProducts();

        return array( 'products' => $products);
    }
    
    /**
     * @Route("/product/delete/{id}", name="_admin_delete_product", requirements={"id" = "\d+"})
     */
    public function deleteProductAction($id)
    {

        $this->getProductManager()->deleteProduct($id);
        $this->get('session')->getFlashBag()->add('success', 'Izdelek je bil uspešno odstranjen!');
        return $this->redirect($this->generateUrl('_admin_products'));
    }

    /**
     * @Route("/product/add", name="_admin_add_product")
     * @Route("/product/edit/{id}", name="_admin_edit_product", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editProductAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getProductManager()->createProduct();
        } else {
            $entity = $this->getProductAction($id);
        }

        $form  = $this->createForm(new ProductType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getProductManager()->saveProduct($entity);
                $this->get('session')->getFlashBag()->add('success', 'Izdelek je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_admin_products'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'product' => $entity,
        );
    }
    
    /**
     * get single Product by id
     *
     * @param  int $id
     * @return Product
     */
    public function getProductAction($id)
    {
        $product = $this->getProductManager()->findProduct($id);
        if (!$product) {
            throw new NotFoundHttpException("Izdelek ne obstaja.");
        }
        return $product;
    }
}