<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

/**
 * Class ArrayOfStringValidator.
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class ArrayOfStringValidator extends ConstraintValidator
{
    /**
     * @param mixed      $arrayOfString
     * @param Constraint $constraint
     */
    public function validate($arrayOfString, Constraint $constraint)
    {
        if (!$constraint instanceof ArrayOfString) {
            throw new UnexpectedTypeException($constraint, ArrayOfString::class);
        }

        if (null === $arrayOfString || '' === $arrayOfString) {
            return;
        }

        foreach ($arrayOfString as $string) {
            // Null is enabled
            if (null === $string) {
                continue;
            }

            if (!is_string($string)) {
                $this->context->buildViolation($constraint->invalidType)
                    ->setParameter('{{ value }}', $this->formatValue($string))
                    ->setParameter('{{ type }}', gettype($string))
                    ->addViolation();

                return;
            }

            if (!empty($constraint->choices) && !in_array($string, $constraint->choices, true)) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ value }}', $this->formatValue($string))
                    ->setParameter('{{ type }}', gettype($string))
                    ->addViolation();

                return;
            }
        }
    }
}
