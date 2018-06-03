<?php

namespace MyApp\AquitemBicoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VagasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomeVaga')->add('local')->add('estado')->add('cidade')->add('numeroVagas')->add('horario1')->add('horario2')->add('horario3')->add('horario4')->add('data')->add('remuneracao')->add('observacao')->add('idEmpresa')->add('dataCadastro')->add('telefone');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\AquitemBicoBundle\Entity\Vagas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myapp_aquitembicobundle_vagas';
    }


}
