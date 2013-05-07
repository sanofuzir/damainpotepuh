<?php

namespace damainpotepuh\StaticBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, array(
                'attr'  => array('class' => 'span7'),
                'label' => 'Ime oglasa'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span7', 'rows' => 15, 'cols'=>80),
                'label' => 'Oglas'
            ))
            ->add('file')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'damainpotepuh\CoreBundle\Entity\Ad'
        ));
    }

    public function getName()
    {
        return 'ad';
    }
}
