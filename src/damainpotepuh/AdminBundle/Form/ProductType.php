<?php

namespace damainpotepuh\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use damainpotepuh\DemoBundle\Form\EventListener\AddNameFieldSubscriber;


class ProductType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, array(
                'attr'  => array('class' => 'span7'),
                'label' => 'Ime'
            ))
            ->add('price',null, array(
                'attr'  => array('class' => 'span7'),
                'label' => 'Cena'
            ))
            ->add('description', 'textarea', array(
                'attr'  => array('class' => 'span7', 'rows' => 5, 'cols'=>50),
                'label' => 'Opis'
            )) 
            ->add('category', 'entity', array('class'=>'damainpotepuhCoreBundle:Category',
                'property'  => 'label',
                'required'  => false,
                'empty_value' => 'Izberi kategorijo'
            ))
            ->add('file',null, array(
                'label' => 'Slika'
            ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'damainpotepuh\CoreBundle\Entity\Product'
        ));
    }

    public function getName()
    {
        return 'product';
    }
}
