<?php

namespace TargetApi\Types;

/**
 * Description of LeadInfoTypes.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LeadInfoTypes extends AbstractTypes
{
    /**
     * @var null|int
     */
    private $formId;

    /**
     * @var null|string
     */
    private $createdTimeLt;

    /**
     * @var null|string
     */
    private $createdTimeGt;

    /**
     * @var null|string
     */
    private $createdTimeLte;

    /**
     * @var null|string
     */
    private $createdTimeGte;

    /**
     * LeadInfoTypes constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return null|string
     */
    public function getFormId(): ?string
    {
        return $this->formId;
    }

    /**
     * @param null|string $formId
     *
     * @return LeadInfoTypes
     */
    public function setFormId(string $formId = null): self
    {
        $this->formId = $formId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreatedTimeLt(): ?string
    {
        return $this->createdTimeLt;
    }

    /**
     * @param null|string $createdTimeLt
     *
     * @return LeadInfoTypes
     */
    public function setCreatedTimeLt(string $createdTimeLt = null): self
    {
        $this->createdTimeLt = $createdTimeLt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreatedTimeGt(): ?string
    {
        return $this->createdTimeGt;
    }

    /**
     * @param null|string $createdTimeGt
     *
     * @return LeadInfoTypes
     */
    public function setCreatedTimeGt(string $createdTimeGt = null): self
    {
        $this->createdTimeGt = $createdTimeGt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreatedTimeLte(): ?string
    {
        return $this->createdTimeLte;
    }

    /**
     * @param null|string $createdTimeLte
     *
     * @return LeadInfoTypes
     */
    public function setCreatedTimeLte(string $createdTimeLte = null): self
    {
        $this->createdTimeLte = $createdTimeLte;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreatedTimeGte(): ?string
    {
        return $this->createdTimeGte;
    }

    /**
     * @param null|string $createdTimeGte
     *
     * @return LeadInfoTypes
     */
    public function setCreatedTimeGte(string $createdTimeGte = null): self
    {
        $this->createdTimeGte = $createdTimeGte;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCampaignIdIn(): ?string
    {
        return $this->campaignIdIn;
    }

    /**
     * @param null|string $campaignIdIn
     *
     * @return LeadInfoTypes
     */
    public function setCampaignIdIn(string $campaignIdIn = null): self
    {
        $this->campaignIdIn = $campaignIdIn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    /**
     * @param null|string $campaignId
     *
     * @return LeadInfoTypes
     */
    public function setCampaignId(string $campaignId = null): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBannerIdIn(): ?string
    {
        return $this->bannerIdIn;
    }

    /**
     * @param null|string $bannerIdIn
     *
     * @return LeadInfoTypes
     */
    public function setBannerIdIn(string $bannerIdIn = null): self
    {
        $this->bannerIdIn = $bannerIdIn;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBannerId(): ?string
    {
        return $this->bannerId;
    }

    /**
     * @param null|string $bannerId
     *
     * @return LeadInfoTypes
     */
    public function setBannerId(string $bannerId = null): self
    {
        $this->bannerId = $bannerId;

        return $this;
    }
}
