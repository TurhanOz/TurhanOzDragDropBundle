<?php

namespace TurhanOz\DragDropBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DragDropType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

/*
    public function getParent()
    {
        return 'dragdrop';
    }
*/
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TurhanOz\DragDropBundle\Entity\MechanicalPart'
        ));
    }

    /*
     * doit retourner le nom du template customisé dans Resources/views/Form/fields.html.twig
     */
    public function getName()
    {
        //return 'turhanoz_dragdropbundle_dragdroptype';
        return 'dragdrop';
    }
}
