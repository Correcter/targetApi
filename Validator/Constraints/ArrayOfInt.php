<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class ArrayOfInt extends Constraint
{
    public $invalidType = 'Значение {{ value }} имеет неверный тип';
    public $charset = 'UTF-8';

    /**
     * ArrayOfInt constructor.
     *
     * @param null $options
     */
    public function __construct($options = null)
    {
        if (isset($options['invalidType'])) {
            $this->invalidType = $options['invalidType'];
        }

        parent::__construct($options);
    }
}
