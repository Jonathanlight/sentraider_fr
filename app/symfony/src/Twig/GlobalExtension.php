<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class GlobalExtension extends AbstractExtension
{
    /**
     * @return array|\Twig_Function[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('toPlainArray', [$this, 'toPlainArray']),
        ];
    }

    /**
     * @param array $arr
     * @return array|string
     */
    public function toPlainArray(array $arr)
    {
        asort($arr);

        $output = "[";

        foreach($arr as $val) {
            $output .= $val .", ";
        }

        return substr($output, 0, -2) . "]";
    }
}
