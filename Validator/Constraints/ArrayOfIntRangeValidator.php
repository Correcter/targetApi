<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use TargetApi\Collections\ArrayCollection;

/**
 * Class ArrayOfIntRangeValidator.
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class ArrayOfIntRangeValidator extends ConstraintValidator
{
    /**
     * @param mixed      $arrayOfInt
     * @param Constraint $constraint
     */
    public function validate($arrayOfInt, Constraint $constraint)
    {
        // custom constraints should ignore null and empty values to allow
        // other constraints (NotBlank, NotNull, etc.) take care of that
        if (null === $arrayOfInt || '' === $arrayOfInt) {
            return;
        }

        if (true === $constraint->noBlank && 0 === $arrayOfInt->count()) {
            $this->context->buildViolation($constraint->noBlankMess)
                ->setParameter('{{ value }}', gettype($arrayOfInt))
                ->setParameter('{{ type }}', gettype($arrayOfInt))
                ->addViolation();

            return;
        }

        if (!($arrayOfInt instanceof ArrayCollection)) {
            $this->context->buildViolation($constraint->invalidType)
                ->setParameter('{{ value }}', gettype($arrayOfInt))
                ->setParameter('{{ type }}', gettype($arrayOfInt))
                ->addViolation();

            return;
        }

        foreach ($arrayOfInt as $int) {
            // Null is enabled
            if (null === $int) {
                continue;
            }

            if (!is_int($int)) {
                $this->context->buildViolation($constraint->invalidType)
                    ->setParameter('{{ value }}', $this->formatValue((string) $int))
                    ->setParameter('{{ type }}', gettype($int))
                    ->addViolation();

                return;
            }

            if ($int < $constraint->min) {
                $this->context->buildViolation($constraint->minMessage)
                    ->setParameter('{{ value }}', $this->formatValue((string) $int))
                    ->setParameter('{{ limit }}', $constraint->min)
                    ->addViolation();

                return;
            }

            if ($int > $constraint->max) {
                $this->context->buildViolation($constraint->maxMessage)
                    ->setParameter('{{ value }}', $this->formatValue((string) $int))
                    ->setParameter('{{ limit }}', $constraint->max)
                    ->addViolation();

                return;
            }
        }
    }
}
