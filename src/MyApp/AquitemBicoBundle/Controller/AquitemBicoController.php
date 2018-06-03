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

}
