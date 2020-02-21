<?php

namespace App\Form;

use App\Entity\DeliveryAddress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeliveryAddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userId')
            ->add('provinceId')
            ->add('cityId')
            ->add('districtId')
            ->add('neighborhoodId')
            ->add('extra')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('isDefault')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DeliveryAddress::class,
        ]);
    }
}
