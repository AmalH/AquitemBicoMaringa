<?php

namespace MyApp\AquitemBicoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CandidateDashboardController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $vagas = $em->getRepository('MyAppAquitemBicoBundle:Vagas')->findAll();
        
        return $this->render('MyAppAquitemBicoBundle:Candidates:candidateDashboard.html.twig', array(
            'vagas' => $vagas,
        ));
    }
    public function editprofilAction() {
        return $this->render('MyAppAquitemBicoBundle:Candidates:candidateEditProfil.html.twig');
    }
    public function profilAction() {
        return $this->render('MyAppAquitemBicoBundle:Candidates:candidateMyProfil.html.twig');
    }
    public function contractingHistoryAction() {
        return $this->render('MyAppAquitemBicoBundle:Candidates:candidateContractingHistory.html.twig');
    }
    public function vacanciesAction() {
        return $this->render('MyAppAquitemBicoBundle:Candidates:candidateVacancies.html.twig');
    }
    public function evaluationsAction() {
        return $this->render('MyAppAquitemBicoBundle:Candidates:candidateEvaluations.html.twig');
    }
  


}

