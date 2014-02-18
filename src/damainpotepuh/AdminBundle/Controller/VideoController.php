<?php

namespace damainpotepuh\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use damainpotepuh\CoreBundle\Entity\Video;
use damainpotepuh\CoreBundle\Models\VideoManager;
use damainpotepuh\AdminBundle\Form\VideoType;

class VideoController extends Controller
{
    private $manager;

    /**
     * @return VideoManager
     */
    private function getVideoManager()
    {
        return $this->container->get('damainpotepuh.video_manager');
    }
    
    /**
     * @Route("/video", name="_admin_videos")
     * @Template()
     */
    public function videoAction()
    {
        $videos = $this->getVideoManager()->findAllVideos();

        return array( 'videos' => $videos);
    }
    
    /**
     * @Route("/video/delete/{id}", name="_admin_delete_video", requirements={"id" = "\d+"})
     */
    public function deleteVideoAction($id)
    {

        $this->getVideoManager()->deleteVideo($id);
        $this->get('session')->getFlashBag()->add('success', 'Video je bil uspešno odstranjen!');
        return $this->redirect($this->generateUrl('_admin_videos'));
    }
    
    /**
     * @Route("/video/add", name="_admin_add_video")
     * @Route("/video/edit/{id}", name="_admin_edit_video", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editVideoAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getVideoManager()->createVideo();
        } else {
            $entity = $this->getVideoAction($id);
        }

        $form  = $this->createForm(new VideoType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getVideoManager()->saveVideo($entity);
                $this->get('session')->getFlashBag()->add('success', 'Video je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_admin_videos'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'video' => $entity,
        );
    }
    
    /**
     * get single Video by id
     *
     * @param  int $id
     * @return Video
     */
    public function getVideoAction($id)
    {
        $video = $this->getVideoManager()->findVideo($id);
        if (!$video) {
            throw new NotFoundHttpException("Video ne obstaja.");
        }
        return $video;
    }
}