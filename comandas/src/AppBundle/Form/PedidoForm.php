<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PedidoForm extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        /*->add('fecha', 'date', array(
            'label' => 'Fecha',
            'read_only' => true))*/
        /*->add('users', 'entity', array(
            'class' => 'AppBundle:Camarero',
            'label' => 'Camarero',
            'choice_label' => 'username'))*/                
        ->add('mesa', 'entity', array(
            'class' => 'AppBundle:Mesa',
            'label' => 'Mesa',
            'choice_label' => 'num'))            
        /*->add('estado', 'choice', array(
            'label' => 'Estado',
            'choices' => array(                
                'cocina' => 'cocina',
                'servido' => 'servido'),
                ))*/
        ->add('isPagado', 'checkbox', ['label' => 'Pagado'])
        ->add('save', 'submit', array('label' => 'Guardar'));
    }
    
    public function getName()
    {
        //return 'name';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pedido',
        ));
    }
}