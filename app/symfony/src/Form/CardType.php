<?php

namespace App\Form;

use App\Entity\Card;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
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


        /*$builder->get('url')
            ->addModelTransformer(new CallbackTransformer(
                //transform
                function ($urlToSting) {
                    $newUrl = explode('https://', $urlToSting);
                    if (isset($newUrl[1])) {
                        return $newUrl[1];
                    }

                    return '';
                },

                //reverseTransform
                function ($stringToUrl) {
                    return 'https://'. $stringToUrl;
                }
            ))
        ;*/
    }
}
