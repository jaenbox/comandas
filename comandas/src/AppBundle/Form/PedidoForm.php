<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PedidoForm extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        /*
        ->add('id', 'text', array(
            'label' => 'Id',
            'read_only' => true))
        ->add('fecha', 'date', array(
            'label' => 'Fecha',
            'read_only' => true))
        ->add('estado', 'text', array(
                'label' => 'Estado',
                'read_only' => true))
        ->add('mesa', 'entity', array(
                'class' => 'AppBundle:Mesa',
                'label' => 'Mesa',
                'choice_label' => 'id',
            'read_only' => true))
        ->add('users', 'entity', array(
                'class' => 'AppBundle:User',
                'label' => 'User',
                'choice_label' => 'id',
                'read_only' => true))
        */
        ->add('id', 'text', array(
            'label' => 'Id',
            'read_only' => true))
        ->add('estado', 'choice', array(
                'label' => 'Estado',
                'choices' => array(
                    'cocina' => 'cocina',
                    'servido' => 'servido'),
        ))
        ->add('isPagado', 'checkbox', array(
                'label' => 'Pagado',
                'required' => false))
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