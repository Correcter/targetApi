<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of LocalGeoPoint.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LocalGeoPoint
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название счетчика, неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $address;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название точки неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $label;

    /**
     * @Assert\NotBlank(message="Широта обязательна для заполнения")
     * @Assert\Type(
     *     type="float",
     *     message="Широта неверного типа {{ type }}."
     * )
     *
     * @var float
     */
    private $lat;

    /**
     * @Assert\NotBlank(message="Долгота обязателена для заполнения")
     * @Assert\Type(
     *     type="float",
     *     message="Долгота неверного типа {{ type }}."
     * )
     *
     * @var float
     */
    private $lng;

    /**
     * @Assert\NotBlank(message="Радиус, в метрах обязателен для заполнения")
     * @Assert\Range(
     *     min=500,
     *     max=10000,
     *     maxMessage = "Поле не может быть больше {{ limit }}",
     *     minMessage = "Поле не может быть меньше {{ limit }}"
     * )
     *
     * @var int
     */
    private $radius;

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address = null)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label = null)
    {
        $this->label = $label;
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
     */
    public function setLat(float $lat)
    {
        $this->lat = $lat;
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
     */
    public function setLng(float $lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius)
    {
        $this->radius = $radius;
    }
}
