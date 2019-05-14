<?php

namespace TargetApi\Types;

/**
 * Class AbstractTypes.
 */
abstract class AbstractTypes
{
    /**
     * @var null|int
     */
    protected $limit;

    /**
     * @var null|int
     */
    protected $offset;

    /**
     * @var null|int
     */
    protected $campaignId;

    /**
     * @var null|string
     */
    protected $campaignIdIn;

    /**
     * @var null|string
     */
    protected $bannerIdIn;

    /**
     * @var null|int
     */
    protected $bannerId;

    /**
     * AbstractTypes constructor.
     */
    public function __construct()
    {
        $this->limit = 20;
        $this->offset = 0;
    }

    /**
     * @return null|int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param null|int $limit
     *
     * @return AbstractTypes
     */
    public function setLimit(int $limit = null): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param null|int $offset
     *
     * @return AbstractTypes
     */
    public function setOffset(int $offset = null): self
    {
        $this->offset = $offset;

        return $this;
    }
}
