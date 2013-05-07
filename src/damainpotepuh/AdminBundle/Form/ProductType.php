<?php

namespace damainpotepuh\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

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
            ->add('category', 'entity', array('class' => 'damainpotepuhCoreBundle:Category',
                'label' => 'Kategorija'
             ))
            ->add('subcategory', 'entity', array('class' => 'damainpotepuhCoreBundle:Subcategory',
                'label' => 'Podkategorija'
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
