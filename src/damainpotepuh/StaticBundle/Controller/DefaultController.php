<?php

namespace damainpotepuh\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use damainpotepuh\CoreBundle\Entity\Image;
use damainpotepuh\CoreBundle\Models\ImageManager;
use damainpotepuh\CoreBundle\Entity\Product;
use damainpotepuh\CoreBundle\Models\ProductManager;

class DefaultController extends Controller
{
    private $manager;
    
    /**
     * @return ImageManager
     */
    private function getImageManager()
    {
        return $this->container->get('damainpotepuh.image_manager');
    }
    
    /**
     * @return ProductManager
     */
    private function getProductManager()
    {
        return $this->container->get('damainpotepuh.product_manager');
    }
    
    /**
     * @Route("/", name="_home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/o_nas", name="_o_nas")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }    
    
    /**
     * @Route("/galerija", name="_galerija")
     * @Template()
     */
    public function galleryAction()
    {
        $images = $this->getImageManager()->findAllImages();

        return array( 'images' => $images);
    }
    
    /**
     * @Route("/kontakt", name="_kontakt")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }
    
    /**
     * @Route("/artikli", name="_artikli")
     * @Template()
     */
    public function productsAction()
    {
        $products = $this->getProductManager()->findAllProducts();

        return array( 'products' => $products);
    }
}
