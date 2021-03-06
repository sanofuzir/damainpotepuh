<?php

namespace damainpotepuh\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use damainpotepuh\CoreBundle\Entity\Ad;
use damainpotepuh\CoreBundle\Models\AdManager;
use damainpotepuh\StaticBundle\Form\AdType;

class AdController extends Controller
{
    private $manager;
    
    /**
     * @return AdManager
     */
    private function getAdManager()
    {
        return $this->container->get('damainpotepuh.ad_manager');
    }
    
    /**
     * @Route("/zmenkarije", name="_zmenkarije")
     * @Template()
     */
    public function adsAction()
    {
        $ads = $this->getAdManager()->findAllAds();

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
