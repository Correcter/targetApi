<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of ProjectionPrediction.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ProjectionPrediction
{
    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $campaignId;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|PredictedRate[]
     */
    private $crCtr;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|Histogram[]
     */
    private $histograms;

    /**
     * @ArrayOfIntRange(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $packageIds;

    /**
     * @Assert\NotBlank(message="Таргетинги для расчета охвата обязателена для заполнения")
     *
     * @Assert\Valid
     *
     * @var ProjectionTargetings
     */
    private $targetings;

    /**
     * Histogram constructor.
     */
    public function __construct()
    {
        $this->crCtr = new ArrayCollection();
        $this->packageIds = new ArrayCollection();
        $this->histograms = new ArrayCollection();
    }

    /**
     * @return null|int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param null|int $campaignId
     *
     * @return ProjectionPrediction
     */
    public function setCampaignId(int $campaignId = null): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @return ArrayCollection|PredictedRate[]
     */
    public function getCrCtr(): ArrayCollection
    {
        return $this->crCtr;
    }

    /**
     * @param null|PredictedRate $crCtr
     *
     * @return ProjectionPrediction
     */
    public function addCrCtr(PredictedRate $crCtr = null): self
    {
        if (!$this->crCtr->contains($crCtr)) {
            $this->crCtr[] = $crCtr;
        }

        return $this;
    }

    /**
     * @param PredictedRate $crCtr
     *
     * @return bool
     */
    public function removeCrCtr(PredictedRate $crCtr): bool
    {
        return $this->crCtr->removeElement($crCtr);
    }

    /**
     * @return ArrayCollection|Histogram[]
     */
    public function getHistograms(): ArrayCollection
    {
        return $this->histograms;
    }

    /**
     * @param null|Histogram $histogram
     *
     * @return ProjectionPrediction
     */
    public function addHistogram(Histogram $histogram = null): self
    {
        if (!$this->histograms->contains($histogram)) {
            $this->histograms[] = $histogram;
        }

        return $this;
    }

    /**
     * @param Histogram $histogram
     *
     * @return bool
     */
    public function removeHistogram(Histogram $histogram): bool
    {
        return $this->histograms->removeElement($histogram);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getPackageIds(): ArrayCollection
    {
        return $this->packageIds;
    }

    /**
     * @param null|int $packageId
     *
     * @return ProjectionPrediction
     */
    public function addPackageId(int $packageId = null): self
    {
        if (!$this->packageIds->contains($packageId)) {
            $this->packageIds[] = $packageId;
        }

        return $this;
    }

    /**
     * @param int $packageId
     *
     * @return bool
     */
    public function removePackageId(int $packageId): bool
    {
        return $this->packageIds->removeElement($packageId);
    }

    /**
     * @return ProjectionTargetings
     */
    public function getTargetings(): ProjectionTargetings
    {
        return $this->targetings;
    }

    /**
     * @param ProjectionTargetings $targetings
     *
     * @return ProjectionPrediction
     */
    public function setTargetings(ProjectionTargetings $targetings): self
    {
        $this->targetings = $targetings;

        return $this;
    }
}
