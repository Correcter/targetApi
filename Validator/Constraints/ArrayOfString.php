<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class ArrayOfString extends Constraint
{
    public $message;
    public $invalidType;
    public $charset;
    public $choices;
    public $email;

    /**
     * ArrayOfString constructor.
     *
     * @param null $options
     */
    public function __construct($options = null)
    {
        $this->email = $options['email'] ?? false;
        $this->choices = $options['choices'] ?? [];
        $this->message = $options['message'] ?? 'Поле не соответствует ни одному из допустимых значений {{ value }}';
        $this->invalidType = $options['invalidType'] ?? 'Значение {{ value }} имеет неверный тип: {{ type }}';
        $this->charset = $options['charset'] ?? 'UTF-8';

        parent::__construct($options);
    }
}
