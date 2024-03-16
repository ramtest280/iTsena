<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Livraison;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Chauffeur')
            ->add('Nombre_colis')
            ->add('createdAt', null, [
                'widget' => 'single_text',
            ])
            ->add('Frais')
            ->add('Fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
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
            'data_class' => Livraison::class,
        ]);
    }
}
