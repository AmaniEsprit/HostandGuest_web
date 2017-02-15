<?php

namespace HostGuest\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('HostGuestUserBundle:User:index.html.twig');
    }
    public function list_usersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:User")->findAll();
        return $this->render('HostGuestUserBundle:User:listuser.html.twig',array("us"=>$user));
    }
    public function delete_userAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $user=$em->getRepository("AppBundle:User")->find($id);

        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute("list_user");
    }
}
