<?php

namespace TargetApi\Model\PartnerPlatforms;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of PlatformPad.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class PlatformPad
{
    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|FormatPad
     */
    private $children;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя платформенной площадки в интерфейсе неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $description;

    /**
     * @Assert\Valid
     *
     * @var array
     */
    private $formatOptions;

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
     * @Assert\Valid
     *
     * @var array
     */
    private $interfaceOptions;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя платформенной площадки внутри системы имеет неверный тип: {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @return ArrayCollection|FormatPad
     */
    public function getChildren(): ArrayCollection
    {
        return $this->children;
    }

    /**
     * @param FormatPad $children
     *
     * @return PlatformPad
     */
    public function addChildren(FormatPad $children): self
    {
        if (!$this->children->contains($children)) {
            $this->children[] = $children;
        }

        return $this;
    }

    /**
     * @param FormatPad $children
     *
     * @return bool
     */
    public function removeChildren(FormatPad $children): bool
    {
        return $this->children->removeElement($children);
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     *
     * @return PlatformPad
     */
    public function setDescription(string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getFormatOptions(): ?array
    {
        return $this->formatOptions;
    }

    /**
     * @param null|array $formatOptions
     *
     * @return PlatformPad
     */
    public function setFormatOptions(array $formatOptions = null): self
    {
        $this->formatOptions = $formatOptions;

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
     * @param null|int $id
     *
     * @return PlatformPad
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return array
     */
    public function getInterfaceOptions(): ?array
    {
        return $this->interfaceOptions;
    }

    /**
     * @param null|array $interfaceOptions
     *
     * @return PlatformPad
     */
    public function setInterfaceOptions(array $interfaceOptions = null): self
    {
        $this->interfaceOptions = $interfaceOptions;

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
     * @return PlatformPad
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }
}
