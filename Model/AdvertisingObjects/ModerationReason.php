<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ModerationReason.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ModerationReason
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Внутренний код причины неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $code;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание причины неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message = null)
    {
        $this->message = $message;
    }
}
