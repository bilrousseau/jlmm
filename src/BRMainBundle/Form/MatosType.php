<?php

namespace BRMainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class MatosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('price', MoneyType::class, array('label' => 'Prix'))
        ->add('state', EntityType::class, array('class' => 'BRMainBundle:State', 'choice_label' => 'name', 'label' => 'Etat'))
        ->add('guarantee', MoneyType::class, array('label' => 'Caution'))
        ->add('age')
        ->add('brand')
        //->add('publicationDate')
        //->add('clickNb')
        //->add('update')
        //->add('dbStatus')
        ->add('matosType', EntityType::class, array('class' => 'BRMainBundle:MatosTypes', 'choice_label' => 'name', 'label' => 'Type de matériel'));
        //->add('user', EntityType::class, array('class' => 'BRUserBundle:SecurityUser', 'choice_label' => 'username', 'label' => 'Utilisateur'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BRMainBundle\Entity\Matos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'brmainbundle_matos';
    }


}
