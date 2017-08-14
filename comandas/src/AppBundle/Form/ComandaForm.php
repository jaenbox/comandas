<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComandaForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('cantidad', 'integer', ['label' => 'Cantidad'])
        ->add('plato', 'entity', array(
                'class' => 'AppBundle:Plato',
                'label' => 'Plato',
                'choice_label' => 'id'))
        ->add('mesa', 'entity', array(
                    'class' => 'AppBundle:Mesa',
                    'label' => 'Mesa',
                    'choice_label' => 'num'))
        ->add('observaciones', 'text', ['label' => 'Observaciones'])
        
                
        ->add('save', 'submit', array('label' => 'Guardar'));
    }
    
    public function getName()
    {
        //return 'name';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Comanda',
        ));
    }
}