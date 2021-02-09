<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('id', TextType::class, array('label'=>'Id du produit', 'attr'=>array('value'=>0, 'class'=>'form-control form-group')))
            ->add('libelle', TextType::class, array('required' => true, 'label'=>'Libellé du produit', 'attr'=>array('class'=>'form-control form-group')))
            ->add('qtStock', TextType::class, array('required' => true, 'label'=>'Quantité en stock du produit', 'attr'=>array('class'=>'form-control form-group')))
            ->add('Valider', SubmitType::class, array('attr' => array('class'=>'btn btn-success')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
