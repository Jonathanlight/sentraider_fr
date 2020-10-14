<?php

namespace App\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

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

        if (isset($newUrl[1])) {
            return $newUrl[1];
        }

        return $newFormatUrl[1];
    }

    /**
     * @param mixed $string
     * @return mixed|string|null
     */
    public function reverseTransform($string)
    {
        if (null === $string) {
            return NULL;
        }

        return 'https://'.$string;
    }
}