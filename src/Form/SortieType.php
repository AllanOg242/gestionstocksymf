<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Sortie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateS', DateType::class, array('required' => true, 'label'=>"Date d'entree", 'attr'=>array('class'=>'form-control form-group')))
            ->add('qtS', TextType::class, array('required' => true, 'label'=>'Quantite achete', 'attr'=>array('class'=>'form-control form-group')))
            ->add('produit', EntityType::class, array('class' => Produit::class, 'required' => true, 'label'=>'Libellé du produit', 'attr'=>array('class'=>'form-control form-group')))
            ->add('Valider', SubmitType::class, array('attr' => array('class'=>'btn btn-success')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
