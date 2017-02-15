<?php

namespace Pidev\homeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function homeAction()
    {
        return $this->render('PidevhomeBundle:home:home.html.twig');
    }
    public function indexAction()
    {
        return $this->render('PidevhomeBundle:home:index1.html.twig');
    }
    public function register_methodeAction()
    {
        return $this->render('PidevhomeBundle:home:register2.html.twig');
    }
    public function about_UsAction()
    {
        return $this->render('PidevhomeBundle:home:aboutUs2.html.twig');
    }
    public function search_resultAction()
    {
        return $this->render('PidevhomeBundle:home:search-result2.html.twig');
    }
    public function search_detailAction()
    {
        return $this->render('PidevhomeBundle:home:search_detail2.html.twig');
    }
    public function blog_detailsAction()
    {
        return $this->render('PidevhomeBundle:home:blog-details2.html.twig');
    }
    public function news_detailsAction()
    {
        return $this->render('PidevhomeBundle:home:news-details2.html.twig');
    }
    public function booking_step1Action()
    {
        return $this->render('PidevhomeBundle:home:booking_step1.html.twig');
    }
    public function booking_step2Action()
    {
        return $this->render('PidevhomeBundle:home:booking_step2.html.twig');
    }
    public function booking_step3Action()
    {
        return $this->render('PidevhomeBundle:home:booking_step3.html.twig');
    }
    public function career_methodeAction()
    {
        return $this->render('PidevhomeBundle:home:career2.html.twig');
    }
    public function mapView_methodeAction()
    {
        return $this->render('PidevhomeBundle:home:mapView2.html.twig');
    }

    public function privacy_policyAction()
    {
        return $this->render('PidevhomeBundle:home:privacy_policy2.html.twig');
    }
    public function account_profileAction()
    {
        return $this->render('PidevhomeBundle:home:account_profile2.html.twig');
    }
    public function account_bookingAction()
    {
        return $this->render('PidevhomeBundle:home:account_booking2.html.twig');
    }
    public function account_passwordAction()
    {
        return $this->render('PidevhomeBundle:home:account_password2.html.twig');
    }
    public function team_mathodeAction()
    {
        return $this->render('PidevhomeBundle:home:team2.html.twig');
    }
    public function wishlist_mathodeAction()
    {
        return $this->render('PidevhomeBundle:home:wishlist2.html.twig');
    }
    public function faq_mathodeAction()
    {
        return $this->render('PidevhomeBundle:home:faq2.html.twig');
    }
    public function contact_mathodeAction()
    {
        return $this->render('PidevhomeBundle:home:contact2.html.twig');
    }


}
