<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of LookalikeSource.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LookalikeSource
{
    /**
     * @Assert\NotBlank(message="Идентификатор источника обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $remarketingId;

    /**
     * @Assert\NotBlank(message="Тип источника обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Тип источника неверный: {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "users_list", "counter" },
     *     message = "Тип источника не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $remarketingType;

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
    private $remarketingUpdated;

    /**
     * @return int
     */
    public function getRemarketingId(): int
    {
        return $this->remarketingId;
    }

    /**
     * @param int $remarketingId
     *
     * @return LookalikeSource
     */
    public function setRemarketingId(int $remarketingId): self
    {
        $this->remarketingId = $remarketingId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemarketingType(): string
    {
        return $this->remarketingType;
    }

    /**
     * @param string $remarketingType
     *
     * @return LookalikeSource
     */
    public function setRemarketingType(string $remarketingType): self
    {
        $this->remarketingType = $remarketingType;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getRemarketingUpdated(): ?int
    {
        return $this->remarketingUpdated;
    }

    /**
     * @param null|int $remarketingUpdated
     *
     * @return LookalikeSource
     */
    public function setRemarketingUpdated(int $remarketingUpdated = null): self
    {
        $this->remarketingUpdated = $remarketingUpdated;

        return $this;
    }
}
