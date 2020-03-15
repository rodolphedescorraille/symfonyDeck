<?php

namespace App\Form;

use App\Entity\Card;
use App\Entity\Deck;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityCard;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\integerType;

class CardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Deck', EntityDeck::class, [
                'class'=> Deck::class,
                'choice_label' =>'name'
            ])
            ->add('Card', EntityCard::class, [
                'class'=> Card::class,
                'choice_label' =>'name'
            ])
            ->add('number', IntegerType::class)
            ->add('submite', SubmitType::class)
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Card::class,
        ]);
    }
}
