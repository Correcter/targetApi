<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of CounterGoal.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class CounterGoal
{
    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $counterId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название счетчика, неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $counterName;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание цели, неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $description;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Краткое название цели, неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $goal;

    /**
     * @return int
     */
    public function getCounterId(): int
    {
        return $this->counterId;
    }

    /**
     * @param null|int $counterId
     *
     * @return $this
     */
    public function setCounterId(int $counterId = null)
    {
        $this->counterId = $counterId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCounterName(): string
    {
        return $this->counterName;
    }

    /**
     * @param null|string $counterName
     *
     * @return $this
     */
    public function setCounterName(string $counterName = null)
    {
        $this->counterName = $counterName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     *
     * @return $this
     */
    public function setDescription(string $description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoal(): string
    {
        return $this->goal;
    }

    /**
     * @param null|string $goal
     *
     * @return $this
     */
    public function setGoal(string $goal = null)
    {
        $this->goal = $goal;

        return $this;
    }
}
