<?php

namespace MyApp\AquitemBicoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VacanciesController extends Controller {

    public function indexAction() {
        //$deleteForm = $this->createDeleteForm($vaga);
        return $this->render('MyAppAquitemBicoBundle:Vacancies:vacancy.html.twig');
            //'delete_form' => $deleteForm->createView(),
        // array('vaga' => $vaga,));
   
        //return $this->render('MyAppAquitemBicoBundle:Vacancies:vacancy.html.twig');
        
    }
    public function applicationsAction() {
        return $this->render('MyAppAquitemBicoBundle:Vacancies:applicationsforvacancy.html.twig');
    }
    public function candidatesAction() {
        return $this->render('MyAppAquitemBicoBundle:Vacancies:candidatesforvacancies.html.twig');
    }
}
