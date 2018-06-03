<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller {

    public function loginoucadastroAction() {
        return $this->render('MyAppAquitemBicoBundle:Registration:loginoucadastro.html.twig');
    }
    
    
    public function registercompanyAction() {
        
         /*return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('MyApp\AquitemBicoBundle\Entity\Empresa');*/
        return $this->render('MyAppAquitemBicoBundle:Registration:registercompany.html.twig');
    }
    public function registerpersonAction() {
        
        //return $this->container
                    //->get('pugx_multi_user.registration_manager')
                    //->register('MyApp\AquitemBicoBundle\Entity\Candidato');
        return $this->render('MyAppAquitemBicoBundle:Registration:registerperson.html.twig');

    }

}
