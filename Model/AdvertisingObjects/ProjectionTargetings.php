<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of ProjectionTargetings.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ProjectionTargetings
{
    /**
     * @ArrayOfIntRange(
     *     min=1,
     *     max=79,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $age;

    /**
     * @Assert\Valid
     *
     * @var AppRecommendation
     */
    private $appRecommendation;

    /**
     * @Assert\Valid
     *
     * @var FulltimeTargeting
     */
    private $fulltime;

    /**
     * @Assert\Valid
     *
     * @var GroupRecommendation
     */
    private $groupRecommendation;

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
    private $interests;

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
    private $interestsSocDem;

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
    private $interestsStable;

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
    private $mobileOperationSystems;

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
    private $mobileOperators;

    /**
     * @ArrayOfString
     *
     * @var string[]
     */
    private $mobileTypes;

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
    private $mobileVendors;

    /**
     * @ArrayOfIntRange(
     *     noBlank = true,
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $pads;

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
    private $regions;

    /**
     * @ArrayOfString
     *
     * @var string[]
     */
    private $sex;

    /**
     * ProjectionTargetings constructor.
     */
    public function __construct()
    {
        $this->age = new ArrayCollection();
        $this->interests = new ArrayCollection();
        $this->interestsSocDem = new ArrayCollection();
        $this->interestsStable = new ArrayCollection();
        $this->mobileOperationSystems = new ArrayCollection();
        $this->mobileOperators = new ArrayCollection();
        $this->mobileTypes = new ArrayCollection();
        $this->mobileVendors = new ArrayCollection();
        $this->regions = new ArrayCollection();
        $this->sex = new ArrayCollection();
        $this->pads = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getAge(): ArrayCollection
    {
        return $this->age;
    }

    /**
     * @param null|int $age
     *
     * @return $this
     */
    public function addAge(int $age = null): self
    {
        if (!$this->age->contains($age)) {
            $this->age[] = $age;
        }

        return $this;
    }

    /**
     * @param int $age
     *
     * @return bool
     */
    public function removeAge(int $age): bool
    {
        return $this->age->removeElement($age);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getInterests(): ArrayCollection
    {
        return $this->interests;
    }

    /**
     * @param null|int $interest
     *
     * @return ProjectionTargetings
     */
    public function addInterest(int $interest = null): self
    {
        if (!$this->interests->contains($interest)) {
            $this->interests[] = $interest;
        }

        return $this;
    }

    /**
     * @param int $interest
     *
     * @return bool
     */
    public function removeInterest(int $interest): bool
    {
        return $this->interests->removeElement($interest);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getInterestsSocDem(): ArrayCollection
    {
        return $this->interestsSocDem;
    }

    /**
     * @param null|int $socDem
     *
     * @return ProjectionTargetings
     */
    public function addInterestsSocDem(int $socDem = null): self
    {
        if (!$this->interestsSocDem->contains($socDem)) {
            $this->interestsSocDem[] = $socDem;
        }

        return $this;
    }

    /**
     * @param int $socDem
     *
     * @return bool
     */
    public function removeInterestsSocDem(int $socDem): bool
    {
        return $this->interestsSocDem->removeElement($socDem);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getInterestsStable(): ArrayCollection
    {
        return $this->interestsStable;
    }

    /**
     * @param null|int $iStable
     *
     * @return ProjectionTargetings
     */
    public function addInterestsStable(int $iStable = null): self
    {
        if (!$this->interestsStable->contains($iStable)) {
            $this->interestsStable[] = $iStable;
        }

        return $this;
    }

    /**
     * @param int $iStable
     *
     * @return bool
     */
    public function removeInterestsStable(int $iStable): bool
    {
        return $this->interestsStable->removeElement($iStable);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getMobileOperationSystems(): ArrayCollection
    {
        return $this->mobileOperationSystems;
    }

    /**
     * @param null|int $mos
     *
     * @return ProjectionTargetings
     */
    public function addMobileOperationSystem(int $mos = null): self
    {
        if (!$this->mobileOperationSystems->contains($mos)) {
            $this->mobileOperationSystems[] = $mos;
        }

        return $this;
    }

    /**
     * @param int $mos
     *
     * @return bool
     */
    public function removeMobileOperationSystem(int $mos): bool
    {
        return $this->mobileOperationSystems->removeElement($mos);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getMobileOperators(): ArrayCollection
    {
        return $this->mobileOperators;
    }

    /**
     * @param null|int $mo
     *
     * @return ProjectionTargetings
     */
    public function addMobileOperator(int $mo = null): self
    {
        if (!$this->mobileOperators->contains($mo)) {
            $this->mobileOperators[] = $mo;
        }

        return $this;
    }

    /**
     * @param int $mo
     *
     * @return bool
     */
    public function removeMobileOperator(int $mo): bool
    {
        return $this->mobileOperators->removeElement($mo);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getMobileTypes(): ArrayCollection
    {
        return $this->mobileTypes;
    }

    /**
     * @param null|string $mobileType
     *
     * @return ProjectionTargetings
     */
    public function addMobileType(string $mobileType = null): self
    {
        if (!$this->mobileTypes->contains($mobileType)) {
            $this->mobileTypes[] = $mobileType;
        }

        return $this;
    }

    /**
     * @param string $mobileType
     *
     * @return bool
     */
    public function removeMobileType(string $mobileType): bool
    {
        return $this->mobileTypes->removeElement($mobileType);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getMobileVendors(): ArrayCollection
    {
        return $this->mobileVendors;
    }

    /**
     * @param null|int $mobileVendor
     *
     * @return ProjectionTargetings
     */
    public function addMobileVendor(int $mobileVendor = null): self
    {
        if (!$this->mobileVendors->contains($mobileVendor)) {
            $this->mobileVendors[] = $mobileVendor;
        }

        return $this;
    }

    /**
     * @param int $mobileVendor
     *
     * @return bool
     */
    public function removeMobileVendor(int $mobileVendor): bool
    {
        return $this->mobileVendors->removeElement($mobileVendor);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getPads(): ArrayCollection
    {
        return $this->pads;
    }

    /**
     * @param null|int $pad
     *
     * @return ProjectionTargetings
     */
    public function addPad(int $pad = null): self
    {
        if (!$this->pads->contains($pad)) {
            $this->pads[] = $pad;
        }

        return $this;
    }

    /**
     * @param int $pad
     *
     * @return bool
     */
    public function removePad(int $pad): bool
    {
        return $this->pads->removeElement($pad);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getRegions(): ArrayCollection
    {
        return $this->regions;
    }

    /**
     * @param null|int $region
     *
     * @return ProjectionTargetings
     */
    public function addRegion(int $region = null): self
    {
        if (!$this->regions->contains($region)) {
            $this->regions[] = $region;
        }

        return $this;
    }

    /**
     * @param int $region
     *
     * @return bool
     */
    public function removeRegion(int $region): bool
    {
        return $this->regions->removeElement($region);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getSex(): ArrayCollection
    {
        return $this->sex;
    }

    /**
     * @param null|string $sex
     *
     * @return ProjectionTargetings
     */
    public function addSex(string $sex = null): self
    {
        if (!$this->sex->contains($sex)) {
            $this->sex[] = $sex;
        }

        return $this;
    }

    /**
     * @param string $sex
     *
     * @return bool
     */
    public function removeSex(string $sex): bool
    {
        return $this->sex->removeElement($sex);
    }

    /**
     * @return AppRecommendation
     */
    public function getAppRecommendation(): ?AppRecommendation
    {
        return $this->appRecommendation;
    }

    /**
     * @param AppRecommendation $appRecommendation
     *
     * @return ProjectionTargetings
     */
    public function setAppRecommendation(AppRecommendation $appRecommendation): self
    {
        $this->appRecommendation = $appRecommendation;

        return $this;
    }

    /**
     * @return null|FulltimeTargeting
     */
    public function getFulltime(): ?FulltimeTargeting
    {
        return $this->fulltime;
    }

    /**
     * @param FulltimeTargeting $fulltime
     *
     * @return ProjectionTargetings
     */
    public function setFulltime(FulltimeTargeting $fulltime): self
    {
        $this->fulltime = $fulltime;

        return $this;
    }

    /**
     * @return null|GroupRecommendation
     */
    public function getGroupRecommendation(): ?GroupRecommendation
    {
        return $this->groupRecommendation;
    }

    /**
     * @param GroupRecommendation $groupRecommendation
     *
     * @return ProjectionTargetings
     */
    public function setGroupRecommendation(GroupRecommendation $groupRecommendation): self
    {
        $this->groupRecommendation = $groupRecommendation;

        return $this;
    }
}
