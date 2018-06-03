<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApprenantRegistrationType
 *
 * @author kello
 */
namespace MyApp\UserBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;

class CandidateRegistrationType extends RegistrationFormType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                ->add("nome")
                ->add("email")
                ->add("senha")
                ->add("confirmar senha")
                ;
        
        
        
        
    }
    
    
    public function getName() {
        return "myapp_candidate_registration";
    }
    
}
