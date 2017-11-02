<?php
//src/AppBundle/Form/Type/MesaForm.php
namespace  AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Plato;

class MesaForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('num', 'integer', ['label' => 'Número'])
        ->add('comensales', 'integer', ['label' => 'Comensales'])        
        ->add('save', 'submit');        
    }
    
    public function getName()
    {
        //return 'name';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Mesa',
        ));
    }
    
}