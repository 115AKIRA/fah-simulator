<?php

namespace App\Form;

use App\Entity\Element;
use App\Entity\Weapon;
use App\Entity\WeaponElement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WeaponElementForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('weapon_id', EntityType::class, [
                'class' => Weapon::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('element_id', EntityType::class, [
                'class' => Element::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => WeaponElement::class,
        ]);
    }
}
