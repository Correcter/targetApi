<?php

namespace TargetApi\Types;

/**
 * Description of CampaignsTypes.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class CampaignsTypes extends AbstractTypes
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $idIn;

    /**
     * @var string
     */
    private $status;

    /**
     * @var null|string
     */
    private $statusNe;

    /**
     * @var null|string
     */
    private $statusIn;

    /**
     * @var string
     */
    private $lastUpdated;

    /**
     * @var string
     */
    private $lastUpdatedGt;

    /**
     * @var string
     */
    private $lastUpdatedGte;

    /**
     * @var string
     */
    private $lastUpdatedLt;

    /**
     * @var string
     */
    private $lastUpdatedLte;

    /**
     * @var string
     */
    private $sorting;

    /**
     * @var string
     */
    private $fields;

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
     * @return CampaignsTypes
     */
    public function setIds(string $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }

    /**
     * @param null|string $fields
     *
     * @return CampaignsTypes
     */
    public function setFields(string $fields = null): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdIn(): ?string
    {
        return $this->idIn;
    }

    /**
     * @param string $idIn
     *
     * @return null|string
     */
    public function setIdIn(string $idIn = null): ?string
    {
        $this->idIn = $idIn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return CampaignsTypes
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatusNe(): ?string
    {
        return $this->statusNe;
    }

    /**
     * @param null|string $statusNe
     *
     * @return CampaignsTypes
     */
    public function setStatusNe(string $statusNe = null): self
    {
        $this->statusNe = $statusNe;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatusIn(): ?string
    {
        return $this->statusIn;
    }

    /**
     * @param $statusIn
     *
     * @return CampaignsTypes
     */
    public function setStatusIn(string $statusIn = null): self
    {
        $this->statusIn = $statusIn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastUpdated(): ?string
    {
        return $this->lastUpdated;
    }

    /**
     * @param string $lastUpdated
     *
     * @return CampaignsTypes
     */
    public function setLastUpdated(string $lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastUpdatedGt(): ?string
    {
        return $this->lastUpdatedGt;
    }

    /**
     * @param string $lastUpdatedGt
     *
     * @return CampaignsTypes
     */
    public function setLastUpdatedGt(string $lastUpdatedGt): self
    {
        $this->lastUpdatedGt = $lastUpdatedGt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastUpdatedGte(): ?string
    {
        return $this->lastUpdatedGte;
    }

    /**
     * @param null|string $lastUpdatedGte
     *
     * @return CampaignsTypes
     */
    public function setLastUpdatedGte(string $lastUpdatedGte = null): self
    {
        $this->lastUpdatedGte = $lastUpdatedGte;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastUpdatedLt(): ?string
    {
        return $this->lastUpdatedLt;
    }

    /**
     * @param null|string $lastUpdatedLt
     *
     * @return CampaignsTypes
     */
    public function setLastUpdatedLt(string $lastUpdatedLt = null): self
    {
        $this->lastUpdatedLt = $lastUpdatedLt;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdatedLte(): ?string
    {
        return $this->lastUpdatedLte;
    }

    /**
     * @param null|string $lastUpdatedLte
     *
     * @return CampaignsTypes
     */
    public function setLastUpdatedLte(string $lastUpdatedLte = null): self
    {
        $this->lastUpdatedLte = $lastUpdatedLte;

        return $this;
    }

    /**
     * @return string
     */
    public function getSorting(): ?string
    {
        return $this->sorting;
    }

    /**
     * @param null|string $sorting
     *
     * @return CampaignsTypes
     */
    public function setSorting(string $sorting = null): self
    {
        $this->sorting = $sorting;

        return $this;
    }
}
