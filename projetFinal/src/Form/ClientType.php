<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',null,[
                'attr'=>['class'=>'form-control'],
                'row_attr' => [
                    'class' => 'form-group'
                ],            ])
            ->add('prenom',null,[
                'attr'=>['class'=>'form-control'],
                'row_attr' => [
                    'class' => 'form-group'
                ],            ])
            ->add('tel',null,[
                'attr'=>['class'=>'form-control'],
                'row_attr' => [
                    'class' => 'form-group'
                ],            ])
            ->add('email',null,[
                'attr'=>['class'=>'form-control'],
                'row_attr' => [
                    'class' => 'form-group'
                ],            ])
            ->add('adresse',null,[
                'attr'=>['class'=>'form-control'],
                'row_attr' => [
                    'class' => 'form-group'
                ],            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
