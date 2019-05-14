<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of LookalikeCustomAudience.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LookalikeCustomAudience
{
    /**
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
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $maxScore;

    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $minScore;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название типовой аудитории имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return LookalikeCustomAudience
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getMaxScore(): ?int
    {
        return $this->maxScore;
    }

    /**
     * @param int $maxScore
     *
     * @return LookalikeCustomAudience
     */
    public function setMaxScore(int $maxScore = null): self
    {
        $this->maxScore = $maxScore;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getMinScore(): ?int
    {
        return $this->minScore;
    }

    /**
     * @param null|int $minScore
     *
     * @return LookalikeCustomAudience
     */
    public function setMinScore(int $minScore = null): self
    {
        $this->minScore = $minScore;

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
     * @return $this
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }
}
