<?php

namespace App\Validator\Constraints;

use http\Exception\UnexpectedValueException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class IsYahooValidator extends ConstraintValidator
{
    const MAIL_VALIDE = "yahoo.com";

    /**
     * @param mixed $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint): void
    {
        if (null === $value || '' === $value) {
            return;
        }

        if (!is_string($value)){
            throw new UnexpectedValueException($value, 'string');
        }

        if (strpos($value, self::MAIL_VALIDE) === false) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation()
                ;
        }
    }
}