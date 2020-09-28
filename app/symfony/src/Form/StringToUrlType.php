<?php

namespace App\Form;

use App\DataTransformer\TextToUrlDataTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StringToUrlType extends AbstractType
{
    private $transformer;

    public function __construct(TextToUrlDataTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'invalid_message' => 'message error',
        ]);
    }

    public function getParent()
    {
        return TextType::class;
    }
}
