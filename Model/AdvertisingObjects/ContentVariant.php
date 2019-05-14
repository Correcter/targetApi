<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ContentVariant.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ContentVariant
{
    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Высота содержимого {{ value }} имеет неверный тип {{ type }}."
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
    private $height;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Размер содержимого {{ value }} имеет неверный тип {{ type }}."
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
    private $size;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Ссылка на вариант содержимого неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $url;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Ширина содержимого {{ value }} имеет неверный тип {{ type }}."
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
    private $width;

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height = null)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size = null)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url = null)
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width = null)
    {
        $this->width = $width;
    }
}
