<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of DmpRequest.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class DmpRequest
{
    /**
     * @Assert\NotBlank(message="Текст запроса в свободной форме обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Текст запроса в свободной форме неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $comment;

    /**
     * @Assert\NotBlank(message="ID DMP-пользователя обязателен для заполнения")
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поля не может быть меньше {{ limit }}",
     *     maxMessage = "Поля не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $dmpUserId;

    /**
     * @Assert\NotBlank(message="Адрес электронной почты, на который будет отправлен ответ обратной связи")
     * @Assert\Email(
     *     message = "Адрес электронной почты '{{ value }}' - не валидный email."
     * )
     *
     * @var string
     */
    private $replyEmail;

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param null|string $comment
     *
     * @return DmpRequest
     */
    public function setComment(string $comment = null): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return int
     */
    public function getDmpUserId(): int
    {
        return $this->dmpUserId;
    }

    /**
     * @param null|int $dmpUserId
     *
     * @return DmpRequest
     */
    public function setDmpUserId(int $dmpUserId = null): self
    {
        $this->dmpUserId = $dmpUserId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplyEmail(): string
    {
        return $this->replyEmail;
    }

    /**
     * @param null|string $replyEmail
     *
     * @return DmpRequest
     */
    public function setReplyEmail(string $replyEmail = null): self
    {
        $this->replyEmail = $replyEmail;

        return $this;
    }
}
