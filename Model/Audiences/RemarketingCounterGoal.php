<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingCounterGoal.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingCounterGoal
{
    /**
     * @Assert\NotBlank(message="Идентификатор пользователя обязателен для заполнения")
     * @Assert\Choice(
     *     choices = { "uss", "rss", "jse", "hd", "ts" }
     * )
     *
     * @var string
     */
    private $condition;

    /**
     * @Assert\Choice(
     *     choices = { "content", "search", "basket", "wishlist", "checkout", "payment_info", "purchase", "lead", "registration", "custom" }
     * )
     *
     * @var string
     */
    private $goalType;

    /**
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
     * @Assert\NotBlank(message="Название цели")
     * @Assert\Type(
     *     type="string",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Строка условия цели")
     * @Assert\Type(
     *     type="string",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $substr;

    /**
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
    private $value;

    /**
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     *
     * @return $this
     */
    public function setCondition(string $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoalType(): string
    {
        return $this->goalType;
    }

    /**
     * @param null|string $goalType
     *
     * @return $this
     */
    public function setGoalType(string $goalType = null)
    {
        $this->goalType = $goalType;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return RemarketingCounterGoal
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubstr(): ?string
    {
        return $this->substr;
    }

    /**
     * @param null|string $substr
     *
     * @return RemarketingCounterGoal
     */
    public function setSubstr(string $substr = null): self
    {
        $this->substr = $substr;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return $this
     */
    public function setValue(int $value = null): self
    {
        $this->value = $value;

        return $this;
    }
}
