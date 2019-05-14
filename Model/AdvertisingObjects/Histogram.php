<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of Histogram.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Histogram
{
    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|HistogramBin[]
     */
    private $histogram;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="ID гистограммы {{ value }} имеет неверный тип {{ type }}."
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
     * Histogram constructor.
     */
    public function __construct()
    {
        $this->histogram = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|HistogramBin[]
     */
    public function getHistogram(): ArrayCollection
    {
        return $this->histogram;
    }

    /**
     * @param null|HistogramBin $histogram
     *
     * @return $this
     */
    public function addHistogram(HistogramBin $histogram = null)
    {
        if (!$this->histogram->contains($histogram)) {
            $this->histogram[] = $histogram;
        }

        return $this;
    }

    /**
     * @param HistogramBin $histogram
     *
     * @return bool
     */
    public function removeHistogram(HistogramBin $histogram): bool
    {
        return $this->histogram->removeElement($histogram);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return $this
     */
    public function setId(int $id = null)
    {
        $this->id = $id;

        return $this;
    }
}
