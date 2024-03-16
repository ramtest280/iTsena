<?php

namespace App\Form;

use App\Entity\Argent;
use App\Entity\Cleint;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArgentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Poids')
            ->add('Prix_unitaire')
            ->add('Avance')
            ->add('Reste')
            ->add('Total')
            ->add('CreatedAt', null, [
                'widget' => 'single_text',
            ])
            ->add('UpdatedAt', null, [
                'widget' => 'single_text',
            ])
            ->add('Client', EntityType::class, [
                'class' => Cleint::class,
                'choice_label' => 'id',
            ])
            ->add('Produit', EntityType::class, [
                'class' => Produit::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Argent::class,
        ]);
    }
}
