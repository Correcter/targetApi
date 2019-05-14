<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of GeoCoverage.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class GeoCoverage
{
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
    private $coverage;

    /**
     * @Assert\NotBlank(message="Широта центра области обязательна для заполнения")
     * @Assert\Type(
     *     type="float",
     *     message="Широта центра области неверного типа {{ type }}."
     * )
     * @Assert\Range(
     *     min=-90,
     *     max=90,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var float
     */
    private $lat;

    /**
     * @Assert\NotBlank(message="Долгота центра области обязателена для заполнения")
     * @Assert\Type(
     *     type="float",
     *     message="Долгота центра области неверного типа {{ type }}."
     * )
     * @Assert\Range(
     *     min=-180,
     *     max=180,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var float
     */
    private $lng;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Уточненный тип посещения пользователями текущей позиции, доступен при type=usual неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "home", "work", "all" },
     *     message = "Уточненный тип посещения пользователями текущей позиции, доступен при type=usual не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $locType;

    /**
     * @Assert\NotBlank(message="Радиус, в метрах обязателен для заполнения")
     * @Assert\Type(
     *     type="float",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     max=10000,
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var float
     */
    private $radius;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип посещения пользователями данной области неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "now", "usual" },
     *     message = "Тип посещения пользователями данной области не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @return null|int
     */
    public function getCoverage(): ?int
    {
        return $this->coverage;
    }

    /**
     * @param null|int $coverage
     *
     * @return GeoCoverage
     */
    public function setCoverage(int $coverage = null): self
    {
        $this->coverage = $coverage;

        return $this;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     *
     * @return GeoCoverage
     */
    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @return float
     */
    public function getLng(): float
    {
        return $this->lng;
    }

    /**
     * @param float $lng
     *
     * @return GeoCoverage
     */
    public function setLng(float $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLocType(): ?string
    {
        return $this->locType;
    }

    /**
     * @param null|string $locType
     *
     * @return GeoCoverage
     */
    public function setLocType(string $locType = null): self
    {
        $this->locType = $locType;

        return $this;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     *
     * @return GeoCoverage
     */
    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

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
     * @param null|string $type
     *
     * @return $this
     */
    public function setType(string $type = null)
    {
        $this->type = $type;

        return $this;
    }
}
