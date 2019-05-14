<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingPricelistUser.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingPricelistUser
{
    /**
     * @Assert\NotBlank(message="Идентификатор пользователя обязателен для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Поле тип имеет неверный тип данных {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "master", "slave" },
     *     message = "Тип не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $username;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }
}
