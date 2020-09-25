<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;

class MyExtension extends AbstractExtension
{
    /**
     * @return array|\Twig_Function[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('cutString', [$this, 'cutStringTwig']),
        ];
    }

    public function getFilters()
    {
        return [
            new TwigFilter('priceEuro', [$this, 'formatPriceTwig']),
        ];
    }

    public function cutStringTwig($message)
    {
        return substr($message, 0, 20) . '...';
    }

    public function formatPriceTwig($price, $monney)
    {
        return $price . ' ' . $monney;
    }
}

// https://symfony.com/doc/current/templating/twig_extension.html