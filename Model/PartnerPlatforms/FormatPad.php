<?php

namespace TargetApi\Model\PartnerPlatforms;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of FormatPad.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class FormatPad
{
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
    private $bannersCount;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|[]
     */
    private $children;

    /**
     * @Assert\NotBlank(message="Имя площадки в интерфейсе обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Имя площадки в интерфейсе неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @Assert\Valid
     *
     * @var array
     */
    private $formatOptions;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
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
     *     message="Имя форматной площадки внутри системы имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Размер слота имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $slotsSize;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус форматной площадки неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @return int
     */
    public function getBannersCount(): int
    {
        return $this->bannersCount;
    }

    /**
     * @param int $bannersCount
     */
    public function setBannersCount(int $bannersCount)
    {
        $this->bannersCount = $bannersCount;
    }

    /**
     * @return ArrayCollection
     */
    public function getChildren(): ArrayCollection
    {
        return $this->children;
    }

    /**
     * @param array $children
     * @return FormatPad
     */
    public function addChildren(array $children): self
    {
        if (!$this->children->contains($children)) {
            $this->children[] = $children;
        }

        return $this;
    }

    /**
     * @param array $children
     * @return bool
     */
    public function removeChildren(array $children): bool
    {
        return $this->children->removeElement($children);
    }

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
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getFormatOptions(): array
    {
        return $this->formatOptions;
    }

    /**
     * @param array $formatOptions
     */
    public function setFormatOptions(array $formatOptions)
    {
        $this->formatOptions = $formatOptions;
    }

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
     * @return array
     */
    public function getInterfaceOptions(): array
    {
        return $this->interfaceOptions;
    }

    /**
     * @param array $interfaceOptions
     */
    public function setInterfaceOptions(array $interfaceOptions)
    {
        $this->interfaceOptions = $interfaceOptions;
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
     * @return string
     */
    public function getSlotsSize(): string
    {
        return $this->slotsSize;
    }

    /**
     * @param string $slotsSize
     */
    public function setSlotsSize(string $slotsSize)
    {
        $this->slotsSize = $slotsSize;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}
