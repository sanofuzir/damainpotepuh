<?php

namespace damainpotepuh\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', 'textarea', array(
                'attr'  => array('class' => 'span7', 'rows' => 15, 'cols'=>80),
                'label' => 'Opis'
            ))
            ->add('file')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'damainpotepuh\CoreBundle\Entity\Image'
        ));
    }

    public function getName()
    {
        return 'image';
    }
}
