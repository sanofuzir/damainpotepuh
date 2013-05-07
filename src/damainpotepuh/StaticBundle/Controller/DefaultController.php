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
use damainpotepuh\CoreBundle\Entity\Ad;
use damainpotepuh\CoreBundle\Models\AdManager;
use damainpotepuh\StaticBundle\Form\AdType;
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
     * @return AdManager
     */
    private function getAdManager()
    {
        return $this->container->get('damainpotepuh.ad_manager');
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
     * @Route("/artikli", name="_artikli")
     * @Template()
     */
    public function productsAction()
    {
        $products = $this->getProductManager()->findAllProducts();

        return array( 'products' => $products);
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
     * @Route("/zmenkarije", name="_zmenkarije")
     * @Template()
     */
    public function datingAction()
    {
        $ads = $this->getAdManager()->findAllads();

        return array( 'ads' => $ads);
    }
    
    /**
     * @Route("/ad/add", name="_add_ad")
     * @Route("/ad/edit/{id}", name="_edit_ad", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editAdAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getAdManager()->createAd();
        } else {
            $entity = $this->getAdAction($id);
        }

        $form  = $this->createForm(new AdType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getAdManager()->saveAd($entity);
                $this->get('session')->getFlashBag()->add('success', 'Oglas je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_zmenkarije'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'ad' => $entity,
        );
    }
    
    /**
     * get single Ad by id
     *
     * @param  int $id
     * @return Ad
     */
    public function getAdAction($id)
    {
        $ad = $this->getAdManager()->findAd($id);
        if (!$ad) {
            throw new NotFoundHttpException("Oglas ne obstaja.");
        }
        return $ad;
    }
    
}
