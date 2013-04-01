<?php

namespace TurhanOz\DragDropBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('mechanicalParts', new DragDropType(), array(
                'required' => false,
               'data_class' => null))

//            ->add('mechanicalParts', new MechanicalPartType(), array(
//                'required' => false,
//               'data_class' => null))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TurhanOz\DragDropBundle\Entity\Car'
        ));
    }

    public function getName()
    {
        return 'turhanoz_dragdropbundle_cartype';
    }
}
