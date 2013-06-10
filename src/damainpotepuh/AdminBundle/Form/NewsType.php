<?php

namespace damainpotepuh\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, array(
                'attr'  => array('class' => 'span7'),
                'label' => 'Naslov novice'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span7', 'rows' => 15, 'cols'=>80),
                'label' => 'Novica'
            ))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'damainpotepuh\CoreBundle\Entity\News'
        ));
    }

    public function getName()
    {
        return 'news';
    }
}
