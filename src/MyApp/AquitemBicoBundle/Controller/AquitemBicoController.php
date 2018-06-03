<?php

namespace MyApp\AquitemBicoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AquitemBicoController extends Controller {

    public function homeAction() {
        return $this->render('MyAppAquitemBicoBundle:Home:home.html.twig');
    }

    public function galleryAction() {
        return $this->render('MyAppAquitemBicoBundle:Home:gallery.html.twig');
    }

    public function aboutAction() {
        return $this->render('MyAppAquitemBicoBundle:Home:about.html.twig');
    }

    public function contactAction() {
        return $this->render('MyAppAquitemBicoBundle:Home:contact.html.twig');
    }
    
    public function termsconditionsAction(){
        return $this->render('MyAppAquitemBicoBundle:FooterRedirects:termsandconditions.html.twig');
    }
    public function privacypolicyAction(){
        return $this->render('MyAppAquitemBicoBundle:FooterRedirects:privacypolicy.html.twig');
    }
    public function sitemapAction(){
        return $this->render('MyAppAquitemBicoBundle:FooterRedirects:sitemap.html.twig');
    }
    public function faqsAction(){
        return $this->render('MyAppAquitemBicoBundle:FooterRedirects:faqs.html.twig');
    }
    public function helpAction(){
        return $this->render('MyAppAquitemBicoBundle:FooterRedirects:help.html.twig');
    }

}
