<?php


namespace MyApp\UserBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;

class EmpresaRegistrationType extends RegistrationFormType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                ->add("nome")
                ->add("email")
                ->add("senha")
                ->add("confirmar senha");
    }
    

    public function getName() {
        return "myapp_empresa_registration";
    }
    
}
