<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of UserSegment.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class UserSegment
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Ключ доступа имеет неверный тип: {{ type }}."
     * )
     *
     * @var null|string
     */
    private $key;

    /**
     * @Assert\NotBlank(message="Идентификатор источника обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=9223372036854775807,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $objectId;

    /**
     * @Assert\NotBlank(message="Тип источника обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Тип источника имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "users_list", "counter", "campaign_list", "custom_audience", "pricelist", "segment", "lookalike_audience" },
     *     message = "Тип источника имеет недопустимое значение"
     * )
     *
     * @var string
     */
    private $objectType;

    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $params;

    /**
     * @return null|string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param null|string $key
     *
     * @return UserSegment
     */
    public function setKey(string $key = null): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     *
     * @return UserSegment
     */
    public function setObjectId(int $objectId = null): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     *
     * @return UserSegment
     */
    public function setObjectType(string $objectType = null): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getParams(): ?array
    {
        return $this->params;
    }

    /**
     * @param array $params
     *
     * @return UserSegment
     */
    public function setParams(array $params = []): self
    {
        $this->params = $params;

        return $this;
    }
}
