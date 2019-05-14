<?php

namespace TargetApi\Model\Statistics;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of LeadForm.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LeadForm
{
    /**
     * @ArrayOfIntRange(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $bannerIds;

    /**
     * @ArrayOfIntRange(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $campaignIds;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $formId;

    /**
     * LeadForm constructor.
     */
    public function __construct()
    {
        $this->bannerIds = new ArrayCollection();
        $this->campaignIds = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getBannerIds(): ArrayCollection
    {
        return $this->bannerIds;
    }

    /**
     * @param int $bannerId
     *
     * @return $this
     */
    public function addBannerId(int $bannerId = null): self
    {
        if (!$this->bannerIds->contains($bannerId)) {
            $this->bannerIds[] = $bannerId;
        }

        return $this;
    }

    /**
     * @param int $bannerId
     *
     * @return bool
     */
    public function removeBannerId(int $bannerId): bool
    {
        return $this->bannerIds->removeElement($bannerId);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getCampaignIds(): ArrayCollection
    {
        return $this->campaignIds;
    }

    /**
     * @param null|int $campaignId
     *
     * @return LeadForm
     */
    public function addCampaignId(int $campaignId = null): self
    {
        if (!$this->campaignIds->contains($campaignId)) {
            $this->campaignIds[] = $campaignId;
        }

        return $this;
    }

    /**
     * @param int $campaignId
     *
     * @return bool
     */
    public function removeCampaignId(int $campaignId): bool
    {
        return $this->campaignIds->removeElement($campaignId);
    }

    /**
     * @return int
     */
    public function getFormId(): int
    {
        return $this->formId;
    }

    /**
     * @param int $formId
     *
     * @return LeadForm
     */
    public function setFormId(int $formId): self
    {
        $this->formId = $formId;

        return $this;
    }
}
