<?php

namespace TurhanOz\DragDropBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MechanicalPartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('imageName')
            ->add('cars')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TurhanOz\DragDropBundle\Entity\MechanicalPart'
        ));
    }

    public function getName()
    {
        return 'turhanoz_dragdropbundle_mechanicalparttype';
    }
}
