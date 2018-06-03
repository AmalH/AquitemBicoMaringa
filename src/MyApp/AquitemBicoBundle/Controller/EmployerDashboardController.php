<?php

namespace MyApp\AquitemBicoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmployerDashboardController extends Controller {

    public function indexAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerDashboard.html.twig');
    }

    public function profilAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerProfil.html.twig');
    }

    public function editprofilAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerEditProfil.html.twig');
    }

    public function createVacancyAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerAddVacancy.html.twig');
    }

    public function favouritesAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerFavs.html.twig');
    }

    public function vacanciesAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerVacancies.html.twig');
    }

    public function evaluateCandidateAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerEvaluation.html.twig');
    }
    public function accountSettingsAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerAccountSettings.html.twig');
    }
    public function editvacancyAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerEditVacancy.html.twig');
    }
    public function receivedEvalsAction() {
        return $this->render('MyAppAquitemBicoBundle:Employers:employerReceivedEvals.html.twig');
    }
}
