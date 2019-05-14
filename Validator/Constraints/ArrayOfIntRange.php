<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class ArrayOfIntRange extends Constraint
{
    public $min;
    public $max;
    public $invalidType;
    public $maxMessage;
    public $minMessage;
    public $charset;
    public $noBlank;
    public $noBlankMess;

    /**
     * ArrayOfIntRange constructor.
     *
     * @param null $options
     */
    public function __construct($options = null)
    {
        $this->min = $options['min'] ?? -2147483647;
        $this->max = $options['max'] ?? 2147483647;
        $this->noBlank = $options['noBlank'] ?? false;
        $this->noBlankMess = $options['noBlankMess'] ?? 'Объект не может быть пуст';
        $this->maxMessage = $options['maxMessage'] ?? 'Значение {{ value }} не может быть больше {{ limit }}';
        $this->minMessage = $options['minMessage'] ?? 'Значение {{ value }} не может быть меньше {{ limit }}';
        $this->invalidType = $options['invalidType'] ?? 'Значение {{ value }} имеет неверный тип: {{ type }}';
        $this->charset = $options['charset'] ?? 'UTF-8';

        parent::__construct($options);
    }
}
