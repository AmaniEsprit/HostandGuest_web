<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/02/2017
 * Time: 00:18
 */

namespace Pidev\homeBundle\Controller;
use Pidev\homeBundle\Entity\Experience;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\homeBundle\Form\ExperienceType;

class ExperienceController extends Controller
{
    public function bloglistAction()
    {
        $em = $this->getDoctrine()->getManager();
        $Experience = $em->getRepository("PidevhomeBundle:Experience")->findAll();
        return $this->render('PidevhomeBundle:home:blog2.html.twig', array("Experience" => $Experience));
    }
    public function blogaddAction(Request $request)
    {
        $Experience = new Experience();
        $Form = $this->createForm(ExperienceType::class, $Experience);

        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $Experience->uploadProfilePicture();
            $em->persist($Experience);
            $em->flush();
            $Experience->setUser($this->getUser());
            $em->persist($Experience);
            $em->flush();
            return $this->redirectToRoute('blog_page');

        }
        return $this->render('PidevhomeBundle:home:index1.html.twig', array('form'=> $Form->createView()));
    }
    public function blogdeleteAction($ID)
    {
        $em = $this->getDoctrine()->getManager();
        $Experience = $em->getRepository("PidevhomeBundle:Experience")->find($ID);
        $em->remove($Experience);
        $em->flush();
        return $this->redirectToRoute('blog_page');
    }
    public function blogupdateAction(Request $request, $ID)
    {
        $em = $this->getDoctrine()->getManager();

        $Experience = $em->getRepository("PidevhomeBundle:Experience")->find($ID);
        $Form = $this->createForm(ExperienceType::class, $Experience);
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $Experience->uploadProfilePicture();
            $em->persist($Experience);
            $em->flush();
            return $this->redirectToRoute('blog_page');
        }
        return $this->render('PidevhomeBundle:home:blog.html.twig', array('form' => $Form->createView()));
    }

}