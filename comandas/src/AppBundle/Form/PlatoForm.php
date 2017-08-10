<?php
//src/AppBundle/Form/Type/PlatoForm.php
namespace  AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Plato;

class PlatoForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', ['label' => 'Nombre'])
            ->add('category', 'choice', array(
                'label' => 'Category',
                'choices' => array( 
                    'al' => 'almuerzo', 
                    'co' => 'comida', 
                    'ce' => 'cena'),
            ))
            ->add('price', 'text', ['label' => 'Precio'])
            ->add('description', 'text', ['label' => 'Descripcion'])
            ->add('file')
            ->add('save', 'submit')
        ;
    }
    
    public function getName()
    {
        //return 'name';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Plato',
        ));
    }
    
}