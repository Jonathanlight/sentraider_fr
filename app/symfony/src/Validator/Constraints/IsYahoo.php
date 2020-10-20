<?php

namespace App\Validator\Constraints;

use \Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class IsYahoo extends Constraint
{
    public string $message = 'Désole, votre email doit etre du format Yahoo - {{ string }}';

    /**
     * @return string
     */
    public function validatedBy(): string
    {
        return \get_class($this).'Validator';
    }
}