<?php

namespace TargetApi\Types;

/**
 * Description of LeadFormTypes.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LeadFormTypes extends AbstractTypes
{
    /**
     * @var null|string
     */
    private $fields;

    /**
     * LeadFormTypes constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return null|string
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }

    /**
     * @param null|string $fields
     *
     * @return LeadFormTypes
     */
    public function setFields(string $fields = null): self
    {
        $this->fields = $fields;

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
     * @return LeadFormTypes
     */
    public function setCampaignId(string $campaignId = null): self
    {
        $this->campaignId = $campaignId;

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
     * @return LeadFormTypes
     */
    public function setCampaignIdIn(string $campaignIdIn = null): self
    {
        $this->campaignIdIn = $campaignIdIn;

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
     * @return LeadFormTypes
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
     * @return LeadFormTypes
     */
    public function setBannerId(string $bannerId = null): self
    {
        $this->bannerId = $bannerId;

        return $this;
    }
}
