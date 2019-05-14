<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of InAppEvent.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class InAppEvent
{
    /**
     * @Assert\NotBlank(message="Идентификатор события обязателен для заполнения")
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
     *     message="Название события имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Количество событий за последние несколько дней обязателено для заполнения")
     * @Assert\Type(
     *     type="RemarketingInAppEventCount",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var RemarketingInAppEventCount
     */
    private $count;

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
     * @return RemarketingInAppEventCount
     */
    public function getCount(): RemarketingInAppEventCount
    {
        return $this->count;
    }

    /**
     * @param RemarketingInAppEventCount $count
     */
    public function setCount(RemarketingInAppEventCount $count)
    {
        $this->count = $count;
    }
}
