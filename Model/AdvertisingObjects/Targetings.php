<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Model\Audiences\LocalGeoTargeting;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of Targetings.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Targetings
{
    /**
     * @Assert\Valid
     *
     * @var AgeTargeting
     */
    private $age;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Таргетинг вероятности установки рекламируемого приложения пользователем {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=1000,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $appRecommendation;

    /**
     * @Assert\Valid
     *
     * @var BirthdayTargeting
     */
    private $birthday;

    /**
     * @ArrayOfString
     *
     * @var string[]
     */
    private $browser;

    /**
     * @Assert\Valid
     *
     * @var FulltimeTargeting
     */
    private $fulltime;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Вхождение в группу ОК/VK имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "all", "group_member", "not_group_member" },
     *     message = "Вхождение в группу ОК/VK не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $groupMembers;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Таргетинг вероятности перехода в рекламируемую пользователем группу {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=1000,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
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
     * @Assert\Valid
     *
     * @var LocalGeoTargeting
     */
    private $localGeo;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Вхождение в группу ОК/VK имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "never_installed", "now", "deleted" },
     *     message = "Установленность приложений не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $mobileApps;

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
    private $mobilePrefix;

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
     * @Assert\Valid
     *
     * @var PadCategoryTargeting
     */
    private $padCategory;

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
     * @ArrayOfIntRange(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $segments;

    /**
     * @var string
     */
    private $sex;

    /**
     * Targetings constructor.
     */
    public function __construct()
    {
        $this->interests = new ArrayCollection();
        $this->browser = new ArrayCollection();
        $this->interestsSocDem = new ArrayCollection();
        $this->interestsStable = new ArrayCollection();
        $this->mobileOperationSystems = new ArrayCollection();
        $this->mobileOperators = new ArrayCollection();
        $this->mobilePrefix = new ArrayCollection();
        $this->mobileTypes = new ArrayCollection();
        $this->mobileVendors = new ArrayCollection();
        $this->pads = new ArrayCollection();
        $this->regions = new ArrayCollection();
        $this->segments = new ArrayCollection();
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
     * @return Targetings
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
     * @return ArrayCollection|string[]
     */
    public function getBrowser(): ArrayCollection
    {
        return $this->browser;
    }

    /**
     * @param string $browser
     *
     * @return $this
     */
    public function addBrowser(string $browser = null)
    {
        if (!$this->browser->contains($browser)) {
            $this->browser[] = $browser;
        }

        return $this;
    }

    /**
     * @param string $browser
     *
     * @return bool
     */
    public function removeBrowser(string $browser): bool
    {
        return $this->browser->removeElement($browser);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getInterestsSocDem(): ArrayCollection
    {
        return $this->interestsSocDem;
    }

    /**
     * @param int $interestsSocDem
     *
     * @return $this
     */
    public function addInterestsSocDem(int $interestsSocDem = null)
    {
        if (!$this->interestsSocDem->contains($interestsSocDem)) {
            $this->interestsSocDem[] = $interestsSocDem;
        }

        return $this;
    }

    /**
     * @param int $interestsSocDem
     *
     * @return bool
     */
    public function removeInterestsSocDem(int $interestsSocDem): bool
    {
        return $this->interestsSocDem->removeElement($interestsSocDem);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getInterestsStable(): ArrayCollection
    {
        return $this->interestsStable;
    }

    /**
     * @param int $interestsStable
     *
     * @return $this
     */
    public function addInterestsStable(int $interestsStable = null)
    {
        if (!$this->interestsStable->contains($interestsStable)) {
            $this->interestsStable[] = $interestsStable;
        }

        return $this;
    }

    /**
     * @param int $interestsStable
     *
     * @return bool
     */
    public function removeInterestsStable(int $interestsStable): bool
    {
        return $this->interestsStable->removeElement($interestsStable);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getMobileOperationSystems(): ArrayCollection
    {
        return $this->mobileOperationSystems;
    }

    /**
     * @param int $mobileOperationSystem
     *
     * @return $this
     */
    public function addMobileOperationSystem(int $mobileOperationSystem = null)
    {
        if (!$this->mobileOperationSystems->contains($mobileOperationSystem)) {
            $this->mobileOperationSystems[] = $mobileOperationSystem;
        }

        return $this;
    }

    /**
     * @param int $mobileOperationSystem
     *
     * @return bool
     */
    public function removeMobileOperationSystem(int $mobileOperationSystem): bool
    {
        return $this->mobileOperationSystems->removeElement($mobileOperationSystem);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getMobileOperators(): ArrayCollection
    {
        return $this->mobileOperators;
    }

    /**
     * @param int $mobileOperator
     *
     * @return $this
     */
    public function addMobileOperator(int $mobileOperator = null)
    {
        if (!$this->mobileOperators->contains($mobileOperator)) {
            $this->mobileOperators[] = $mobileOperator;
        }

        return $this;
    }

    /**
     * @param int $mobileOperator
     *
     * @return bool
     */
    public function removeMobileOperator(int $mobileOperator): bool
    {
        return $this->mobileOperators->removeElement($mobileOperator);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getMobilePrefix(): ArrayCollection
    {
        return $this->mobilePrefix;
    }

    /**
     * @param string $mobilePrefix
     *
     * @return $this
     */
    public function addMobilePrefix(string $mobilePrefix = null)
    {
        if (!$this->mobilePrefix->contains($mobilePrefix)) {
            $this->mobilePrefix[] = $mobilePrefix;
        }

        return $this;
    }

    /**
     * @param string $mobilePrefix
     *
     * @return bool
     */
    public function removeMobilePrefix(string $mobilePrefix): bool
    {
        return $this->mobilePrefix->removeElement($mobilePrefix);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getMobileTypes(): ArrayCollection
    {
        return $this->mobileTypes;
    }

    /**
     * @param string $mobileType
     *
     * @return $this
     */
    public function addMobileType(string $mobileType = null)
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
     * @param int $mobileVendor
     *
     * @return $this
     */
    public function addMobileVendor(int $mobileVendor = null)
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
    public function removeMobileVendors(int $mobileVendor): bool
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
     * @param int $pad
     *
     * @return $this
     */
    public function addPads(int $pad = null)
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
     * @param int $region
     *
     * @return $this
     */
    public function addRegion(int $region = null)
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
     * @return ArrayCollection|int[]
     */
    public function getSegments(): ArrayCollection
    {
        return $this->segments;
    }

    /**
     * @param int $segment
     *
     * @return $this
     */
    public function addSegments(int $segment = null)
    {
        if (!$this->segments->contains($segment)) {
            $this->segments[] = $segment;
        }

        return $this;
    }

    /**
     * @param int $segment
     *
     * @return bool
     */
    public function removeSegment(int $segment): bool
    {
        return $this->segments->removeElement($segment);
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param null|string $sex
     *
     * @return Targetings
     */
    public function setSex(string $sex = null): self
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @return AgeTargeting
     */
    public function getAge(): AgeTargeting
    {
        return $this->age;
    }

    /**
     * @param AgeTargeting $age
     */
    public function setAge(AgeTargeting $age)
    {
        $this->age = $age;
    }

    /**
     * @return null|int
     */
    public function getAppRecommendation(): ?int
    {
        return $this->appRecommendation;
    }

    /**
     * @param int $appRecommendation
     */
    public function setAppRecommendation(int $appRecommendation)
    {
        $this->appRecommendation = $appRecommendation;
    }

    /**
     * @return BirthdayTargeting
     */
    public function getBirthday(): BirthdayTargeting
    {
        return $this->birthday;
    }

    /**
     * @param BirthdayTargeting $birthday
     */
    public function setBirthday(BirthdayTargeting $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return FulltimeTargeting
     */
    public function getFulltime(): FulltimeTargeting
    {
        return $this->fulltime;
    }

    /**
     * @param FulltimeTargeting $fulltime
     */
    public function setFulltime(FulltimeTargeting $fulltime)
    {
        $this->fulltime = $fulltime;
    }

    /**
     * @return string
     */
    public function getGroupMembers(): string
    {
        return $this->groupMembers;
    }

    /**
     * @param string $groupMembers
     */
    public function setGroupMembers(string $groupMembers)
    {
        $this->groupMembers = $groupMembers;
    }

    /**
     * @return int
     */
    public function getGroupRecommendation(): int
    {
        return $this->groupRecommendation;
    }

    /**
     * @param int $groupRecommendation
     */
    public function setGroupRecommendation(int $groupRecommendation)
    {
        $this->groupRecommendation = $groupRecommendation;
    }

    /**
     * @return LocalGeoTargeting
     */
    public function getLocalGeo(): LocalGeoTargeting
    {
        return $this->localGeo;
    }

    /**
     * @param LocalGeoTargeting $localGeo
     */
    public function setLocalGeo(LocalGeoTargeting $localGeo)
    {
        $this->localGeo = $localGeo;
    }

    /**
     * @return string
     */
    public function getMobileApps(): string
    {
        return $this->mobileApps;
    }

    /**
     * @param string $mobileApps
     */
    public function setMobileApps(string $mobileApps)
    {
        $this->mobileApps = $mobileApps;
    }

    /**
     * @return PadCategoryTargeting
     */
    public function getPadCategory(): PadCategoryTargeting
    {
        return $this->padCategory;
    }

    /**
     * @param PadCategoryTargeting $padCategory
     */
    public function setPadCategory(PadCategoryTargeting $padCategory)
    {
        $this->padCategory = $padCategory;
    }
}
