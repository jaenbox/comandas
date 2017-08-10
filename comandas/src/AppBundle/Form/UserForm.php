<?php
// src/AppBundle/Form/UserForm.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('username', 'text', ['label' => 'Username'])
        ->add('surname', 'text', ['label' => 'Surname'])
        ->add('dni', 'text', ['label' => 'DNI'])
        ->add('email', 'text', ['label' => 'Email'])
        ->add('phone', 'integer', ['label' => 'Phone'])
        ->add('address', 'text', ['label' => 'Address'])
        ->add('password', 'repeated', array(
            'type' => 'password',
            'invalid_message' => 'Deben de coincidir los campos de contraseña',
            'options' => array('label' => 'Password'),
            'first_options'  => array('label' => 'Password'),
            'second_options' => array('label' => 'Repetir Password'),
        ))
        ->add('save', 'submit', array('label' => 'Guardar'));
    }
    
    public function getName()
    {
        //return 'name';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User',
        ));
    }
    
}