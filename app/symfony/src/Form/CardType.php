<?php

namespace App\Form;

use App\Entity\Card;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CardType extends AbstractType
{
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Card::class,
        ]);
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'form.user.email',
                    'class' => 'form-control',
                ],
            ])
            ->add('url', StringToUrlType::class, [
                'attr' => [
                    'placeholder' => 'form.user.url',
                    'class' => 'form-control',
                ],
            ])
        ;

        /*$builder->get('tags')
            ->addModelTransformer(new CallbackTransformer(
                function ($stringAsUrl) {
                    $newFormatUrl = explode('https://', $stringAsUrl);
                    return $newFormatUrl[1];
                },
                function ($urlAsString) {
                    return 'https://'.$urlAsString;
                }
            ))
        ;*/
    }
}
