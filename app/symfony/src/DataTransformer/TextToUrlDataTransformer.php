<?php

namespace App\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * @package App\DataTransformer
 */
class TextToUrlDataTransformer implements DataTransformerInterface
{
    /**
     * @param mixed $url
     * @return mixed|string
     */
    public function transform($url)
    {
        if (null === $url) {
            return '';
        }

        $newFormatUrl = explode('https://', $url);

        return $newFormatUrl[1];
    }

    /**
     * @param mixed $stringDate
     * @return mixed|string|null
     */
    public function reverseTransform($stringDate)
    {
        if (null === $stringDate) {
            return NULL;
        }

        return 'https://'.$stringDate;
    }
}