<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of GroupRecommendation.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class GroupRecommendation
{
    /**
     * @Assert\NotBlank(message="ID группы OK обязателен для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="ID группы OK {{ value }} имеет неверный тип {{ type }}."
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
    private $groupId;

    /**
     * @Assert\NotBlank(message="Значение таргетинга обязателен для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="Значение таргетинга {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=1000,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $value;

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     *
     * @return GroupRecommendation
     */
    public function setGroupId(int $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return GroupRecommendation
     */
    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }
}
