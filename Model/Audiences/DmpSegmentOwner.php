<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of DmpSegmentOwner.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class DmpSegmentOwner
{
    /**
     * @Assert\NotBlank(message="Идентификатор пользователя")
     * @Assert\Type(
     *     type="integer",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Имя пользователя обязательно для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Имя пользователя неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Флаг, указывающий на возможность запроса доступа к сегментам этого пользователя, неверного типа {{ type }}."
     * )
     * @Assert\NotBlank(message="Флаг, указывающий на возможность запроса доступа к сегментам этого пользователя. обязателен для заполнения")
     *
     * @var bool
     */
    private $segmentRequestsAllowed;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isSegmentRequestsAllowed(): bool
    {
        return $this->segmentRequestsAllowed;
    }

    /**
     * @param bool $segmentRequestsAllowed
     */
    public function setSegmentRequestsAllowed(bool $segmentRequestsAllowed)
    {
        $this->segmentRequestsAllowed = $segmentRequestsAllowed;
    }
}
