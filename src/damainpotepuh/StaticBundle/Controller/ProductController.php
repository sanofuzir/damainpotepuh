<?php

namespace damainpotepuh\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use damainpotepuh\CoreBundle\Entity\Product;
use damainpotepuh\CoreBundle\Models\ProductManager;
use damainpotepuh\CoreBundle\Entity\Category;
use damainpotepuh\CoreBundle\Models\CategoryManager;
use damainpotepuh\CoreBundle\Entity\Subcategory;
use damainpotepuh\CoreBundle\Models\SubcategoryManager;

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
     * @return CategoryManager
     */
    private function getCategoryManager()
    {
        return $this->container->get('damainpotepuh.category_manager');
    }
    
    /**
     * @return SubcategotrManager
     */
    private function getSubcategoryManager()
    {
        return $this->container->get('damainpotepuh.subcategory_manager');
    }

    /**
     * @Route("/artikli", name="_artikli")
     * @Template()
     */
    public function productsAction()
    {
        $products = $this->getProductManager()->findAllProducts();
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return array( 'products' => $products );
    }
    
    /**
     * @Route("/artikli/psi", name="_dogs")
     * @Template()
     */
    public function dogsAction()
    {
        $name = "Psi";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    /**
     * @Route("/artikli/mačke", name="_cats")
     * @Template()
     */
    public function catsAction()
    {
        $name = "Mačke";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    /**
     * @Route("/artikli/ptiči", name="_birds")
     * @Template()
     */
    public function birdsAction()
    {
        $name = "Ptice";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    /**
     * @Route("/artikli/glodalci", name="_rodents")
     * @Template()
     */
    public function rodentsAction()
    {
        $name = "Glodalci";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    /**
     * @Route("/artikli/ribe", name="_fishes")
     * @Template()
     */
    public function fishesAction()
    {
        $name = "Ribe";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    /**
     * @Route("/artikli/akcijski_izdelki", name="_action_products")
     * @Template()
     */
    public function action_productsAction()
    {
        $name = "Akcijski izdelki";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    /**
     * @Route("/artikli/novi_izdelki", name="_new_products")
     * @Template()
     */
    public function new_productsAction()
    {
        $name = "Novi Izdelki";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    /**
     * @Route("/artikli/smensi-fensi", name="_fancy")
     * @Template()
     */
    public function fancyAction()
    {
        $name = "Šmensi-Fensi";
        $category = $this->getCategoryManager()->findCategoryByName($name);
        $products = $this->getProductManager()->findAllProductsByCategoryName($category);
        if (!$products) {
            throw new NotFoundHttpException("Za to kategorijo ni izdelkov!");
        }

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    }
    
    public function MenuAction($id)
    {        
        $category = $this->getCategoryManager()->findCategoryById($id);
        $subcategorys = $this->getProductManager()->findAllSubcategorysByCategory($category);
                
        return $this->render('damainpotepuhStaticBundle:Product:Menu.html.twig',
                array('subcategorys' => $subcategorys ));
    }
    
    /**
     * @Route("/artikli/{categoryName}/{subcategoryName}", name="_product_subcategory")
     * @Template()
     */
    public function subcategoryAction($categoryName, $subcategoryName)
    {
        $category = $this->getCategoryManager()->findCategoryByName($categoryName);
        $subcategory = $this->getSubcategoryManager()->findSubcategoryByName($subcategoryName);
        $products = $this->getProductManager()->findAllProductsByCategoryAndSubcategoryName($category, $subcategory);

        return $this->render('damainpotepuhStaticBundle:Product:products.html.twig',
                                array('products' => $products)
                            );
    
    }
    
    /**
     * @Route("/artikli/{id}", name="_single_product")
     * @Template()
     */
    public function singleProductAction ($id)
    {
        $product = $this->getProductManager()->findProduct($id);
        $category = $this->getCategoryManager()->findCategory($product->getCategory());
        
        if (!$id) {
            throw new NotFoundHttpException('Ta Izdelek ne obstaja!');
        }
        
        return array('product'  =>  $product,
                     'category' =>  $category
                    );
    }
}
