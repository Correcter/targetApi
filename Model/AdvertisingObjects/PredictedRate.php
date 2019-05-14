<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of PredictedRate.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class PredictedRate
{
    /**
     * @Assert\Type(
     *     type="float",
     *     message="Предсказываемый conversion rate {{ value }} имеет неверный тип {{ type }}."
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
    private $avgCr;

    /**
     * @Assert\Type(
     *     type="float",
     *     message="Предсказываемый click-through rate {{ value }} имеет неверный тип {{ type }}."
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
    private $avgCtr;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="ID кампании {{ value }} имеет неверный тип {{ type }}."
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
    private $campaignId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="ID гистограммы {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $histogramId;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="ID пакета {{ value }} имеет неверный тип {{ type }}."
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
    private $packageId;

    /**
     * @return float
     */
    public function getAvgCr(): float
    {
        return $this->avgCr;
    }

    /**
     * @param null|float $avgCr
     *
     * @return $this
     */
    public function setAvgCr(float $avgCr = null)
    {
        $this->avgCr = $avgCr;

        return $this;
    }

    /**
     * @return float
     */
    public function getAvgCtr(): float
    {
        return $this->avgCtr;
    }

    /**
     * @param null|float $avgCtr
     *
     * @return $this
     */
    public function setAvgCtr(float $avgCtr = null)
    {
        $this->avgCtr = $avgCtr;

        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): int
    {
        return $this->campaignId;
    }

    /**
     * @param null|int $campaignId
     *
     * @return $this
     */
    public function setCampaignId(int $campaignId = null)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @return string
     */
    public function getHistogramId(): string
    {
        return $this->histogramId;
    }

    /**
     * @param null|string $histogramId
     *
     * @return $this
     */
    public function setHistogramId(string $histogramId = null)
    {
        $this->histogramId = $histogramId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPackageId(): int
    {
        return $this->packageId;
    }

    /**
     * @param null|int $packageId
     *
     * @return $this
     */
    public function setPackageId(int $packageId = null)
    {
        $this->packageId = $packageId;

        return $this;
    }
}
