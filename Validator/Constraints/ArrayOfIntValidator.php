<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

/**
 * Class ArrayOfIntValidator.
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class ArrayOfIntValidator extends ConstraintValidator
{
    /**
     * @param mixed      $arrayOfInt
     * @param Constraint $constraint
     */
    public function validate($arrayOfInt, Constraint $constraint)
    {
        if (!$constraint instanceof ArrayOfInt) {
            throw new UnexpectedTypeException($constraint, ArrayOfInt::class);
        }

        // custom constraints should ignore null and empty values to allow
        // other constraints (NotBlank, NotNull, etc.) take care of that
        if (null === $arrayOfInt || '' === $arrayOfInt) {
            return;
        }

        foreach ($arrayOfInt as $int) {
            // Null is enabled
            if (null === $int) {
                continue;
            }

            if (!is_int($int)) {
                $this->context->buildViolation($constraint->invalidType)
                    ->setParameter('{{ value }}', $this->formatValue($int))
                    ->addViolation();

                return;
            }
        }
    }
}
