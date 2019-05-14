<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of BannerFormat.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BannerFormat
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание баннерного формата неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $description;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип формата неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $type;

    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $fields;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название баннерного формата неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return BannerFormat
     */
    public function setDescription(string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return BannerFormat
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param array|null $fields
     * @return BannerFormat
     */
    public function setFields(array $fields = null): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return BannerFormat
     */
    public function setId(int $id = null): self
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
     * @param string|null $name
     * @return BannerFormat
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }
}
