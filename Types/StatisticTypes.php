<?php

namespace TargetApi\Types;

/**
 * Description of StatisticTypes.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class StatisticTypes extends AbstractTypes
{
    /**
     * @var null|string
     */
    private $id;

    /**
     * @var null|string
     */
    private $type;

    /**
     * @var null|string
     */
    private $period;

    /**
     * @var null|string
     */
    private $dateFrom;

    /**
     * @var null|string
     */
    private $dateTo;

    /**
     * @var null|string
     */
    private $metrics;

    /**
     * @return string
     */
    public function getIds(): ?string
    {
        return $this->id;
    }

    /**
     * @param null|string $id
     *
     * @return StatisticTypes
     */
    public function setIds(string $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMetrics(): ?string
    {
        return $this->metrics;
    }

    /**
     * @param null|string $metrics
     *
     * @return StatisticTypes
     */
    public function setMetrics(string $metrics = null): self
    {
        $this->metrics = $metrics;

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
     * @return StatisticTypes
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }

    /**
     * @param null|string $period
     *
     * @return StatisticTypes
     */
    public function setPeriod(string $period = null): self
    {
        $this->period = $period;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }

    /**
     * @param null|string $dateFrom
     *
     * @return StatisticTypes
     */
    public function setDateFrom(string $dateFrom = null): self
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }

    /**
     * @param null|string $dateTo
     *
     * @return StatisticTypes
     */
    public function setDateTo(string $dateTo = null): self
    {
        $this->dateTo = $dateTo;

        return $this;
    }
}
