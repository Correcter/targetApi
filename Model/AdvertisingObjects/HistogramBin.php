<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of HistogramBin.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class HistogramBin
{
    /**
     * @Assert\Type(
     *     type="float",
     *     message="Цена за 1000 показов в валюте пользователя {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=-3.402823466e+38,
     *     max=3.402823466e+38,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var float
     */
    private $price;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Охват в процентах {{ value }} имеет неверный тип {{ type }}."
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
    private $share;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Количество уникальных пользователей {{ value }} имеет неверный тип {{ type }}."
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
    private $uniqs;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param null|float $price
     *
     * @return $this
     */
    public function setPrice(float $price = null)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getShare(): int
    {
        return $this->share;
    }

    /**
     * @param null|int $share
     *
     * @return $this
     */
    public function setShare(int $share = null)
    {
        $this->share = $share;

        return $this;
    }

    /**
     * @return int
     */
    public function getUniqs(): int
    {
        return $this->uniqs;
    }

    /**
     * @param null|int $uniqs
     *
     * @return $this
     */
    public function setUniqs(int $uniqs = null)
    {
        $this->uniqs = $uniqs;

        return $this;
    }
}
