<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Goal.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Goal
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание цели, неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Краткое название цели, неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $goal;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getGoal(): string
    {
        return $this->goal;
    }

    /**
     * @param string $goal
     */
    public function setGoal(string $goal = null)
    {
        $this->goal = $goal;
    }
}
