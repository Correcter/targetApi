<?php

namespace TargetApi\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class NotBlankObject extends Constraint
{
    public $noBlankMess;
    public $noBlankInside;
    public $noBlankInsideMess;
    public $invalidType;

    /**
     * NotBlankObject constructor.
     *
     * @param null $options
     */
    public function __construct($options = null)
    {
        $this->noBlankInside = $options['noBlankInside'] ?? false;
        $this->invalidType = $options['invalidType'] ?? 'Объект {{ value }} имеет неверный тип: {{ type }}';
        $this->noBlankInsideMess = $options['noBlankInsideMess'] ?? 'Объект не может иметь ни одного элемента с пустым значеним';
        $this->noBlankMess = $options['noBlankMess'] ?? 'Объект не может быть пуст';

        parent::__construct($options);
    }
}
