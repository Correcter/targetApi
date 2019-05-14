<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use TargetApi\Collections\ArrayCollection;

/**
 * Class NotBlankObjectValidator.
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class NotBlankObjectValidator extends ConstraintValidator
{
    /**
     * @param mixed      $arrayOfInt
     * @param Constraint $constraint
     * @param mixed      $object
     */
    public function validate($object, Constraint $constraint)
    {
        // custom constraints should ignore null and empty values to allow
        // other constraints (NotBlank, NotNull, etc.) take care of that

        if (!($object instanceof ArrayCollection)) {
            $this->context->buildViolation($constraint->invalidType)
                ->setParameter('{{ value }}', gettype($object))
                ->setParameter('{{ type }}', gettype($object))
                ->addViolation();

            return;
        }

        if (0 === $object->count()) {
            $this->context->buildViolation($constraint->noBlankMess)
                ->setParameter('{{ value }}', gettype($object))
                ->setParameter('{{ type }}', gettype($object))
                ->addViolation();

            return;
        }

        if (true === $constraint->noBlankInside) {
            foreach ($object as $ob) {
                if (empty($ob)) {
                    $this->context->buildViolation($constraint->noBlankInsideMess)
                        ->setParameter('{{ value }}', gettype($object))
                        ->setParameter('{{ type }}', gettype($object))
                        ->addViolation();

                    return;
                }
            }
        }
    }
}
