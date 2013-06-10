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
use damainpotepuh\CoreBundle\Entity\News;
use damainpotepuh\CoreBundle\Models\NewsManager;

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
     * @return NewsManager
     */
    private function getNewsManager()
    {
        return $this->container->get('damainpotepuh.news_manager');
    }
    
    /**
     * @Route("/", name="_home")
     * @Template()
     */
    public function indexAction()
    {
        $news = $this->getNewsManager()->findAllWithLimit(3);

        return array( 'news' => $news);
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
}
