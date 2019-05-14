<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of Campaign.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Campaign
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Возрастные ограничения имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $ageRestrictions;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|AuditPixel[]
     */
    private $auditPixels;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Аукционная стратегия неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "fixed", "second_price", "second_price_mean" },
     *     message = "Аукционная стратегия не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $autobiddingMode;

    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $bannerUniqShowsLimit;

    /**
     * @var ArrayCollection|Banner[]
     */
    private $banners;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Общий бюджет кампании неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $budgetLimit;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Бюджет кампании на день неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $budgetLimitDay;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Верхний лимит на цену конверсии неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $crMaxPrice;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата создания кампании имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $created;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата окончания кампании имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $dateEnd;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата старта кампании имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $dateStart;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус трансляции кампании имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $delivery;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Добавлять ли UTM-метки в URL объявлений имеет неверный тип {{ type }}."
     * )
     *
     * @var null|bool
     */
    private $enableUtm;

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
    private $id;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection
     */
    private $issues;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип списка неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "recommended", "fastest" },
     *     message = "Распределение бюджета не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $mixing;

    /**
     * @Assert\NotBlank(message="Название кампании обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название кампании имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Цель рекламной кампании имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $objective;

    /**
     * @Assert\NotBlank(message="Идентификатор пакета обязателено для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $packageId;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Цена за одно событие неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $price;

    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $pricelistId;

    /**
     * @Assert\Range(
     *     min=-5000,
     *     max=999999999999999,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $showsLimit;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус кампании неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус кампании не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

    /**
     * @Assert\Valid
     *
     * @var null|Targetings
     */
    private $targetings;

    /**
     * @Assert\Range(
     *     min=0,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $uniqShowsLimit;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус кампании неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "day", "week", "month", "eternity" },
     *     message = "Периоды для показов не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $uniqShowsPeriod;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата обновления кампании имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $updated;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="UTM-метки для добавления в URL объявлений имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $utm;

    /**
     * Campaign constructor.
     */
    public function __construct()
    {
        $this->issues = new ArrayCollection();
        $this->auditPixels = new ArrayCollection();
        $this->banners = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|Banner[]
     */
    public function getBanners(): ArrayCollection
    {
        return $this->banners;
    }

    /**
     * @param null|Banner $banner
     *
     * @return Campaign
     */
    public function addBanner(Banner $banner = null): self
    {
        if (!$this->banners->contains($banner)) {
            $this->banners[] = $banner;
        }

        return $this;
    }

    /**
     * @param Banner $banner
     *
     * @return bool
     */
    public function removeBanner(Banner $banner): bool
    {
        return $this->banners->removeElement($banner);
    }

    /**
     * @return array[]|ArrayCollection
     */
    public function getIssues(): ArrayCollection
    {
        return $this->issues;
    }

    /**
     * @param null|array $issue
     *
     * @return Campaign
     */
    public function addIssue(array $issue = null): self
    {
        if (!$this->issues->contains($issue)) {
            $this->issues[] = $issue;
        }

        return $this;
    }

    /**
     * @param array $issue
     *
     * @return bool
     */
    public function removeIssue(array $issue): bool
    {
        return $this->issues->removeElement($issue);
    }

    /**
     * @return ArrayCollection|AuditPixel[]
     */
    public function getAuditPixels(): ArrayCollection
    {
        return $this->auditPixels;
    }

    /**
     * @param null|AuditPixel $auditPixel
     *
     * @return Campaign
     */
    public function addAuditPixel(AuditPixel $auditPixel = null): self
    {
        if (!$this->auditPixels->contains($auditPixel)) {
            $this->auditPixels[] = $auditPixel;
        }

        return $this;
    }

    /**
     * @param AuditPixel $auditPixel
     *
     * @return bool
     */
    public function removeAuditPixel(AuditPixel $auditPixel): bool
    {
        return $this->auditPixels->removeElement($auditPixel);
    }

    /**
     * @return null|string
     */
    public function getAgeRestrictions(): ?string
    {
        return $this->ageRestrictions;
    }

    /**
     * @param null|string $ageRestrictions
     *
     * @return Campaign
     */
    public function setAgeRestrictions(string $ageRestrictions = null): self
    {
        $this->ageRestrictions = $ageRestrictions;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAutobiddingMode(): ?string
    {
        return $this->autobiddingMode;
    }

    /**
     * @param null|string $autobiddingMode
     *
     * @return Campaign
     */
    public function setAutobiddingMode(string $autobiddingMode = null): self
    {
        $this->autobiddingMode = $autobiddingMode;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getBannerUniqShowsLimit(): ?int
    {
        return $this->bannerUniqShowsLimit;
    }

    /**
     * @param null|int $bannerUniqShowsLimit
     *
     * @return Campaign
     */
    public function setBannerUniqShowsLimit(int $bannerUniqShowsLimit = null): self
    {
        $this->bannerUniqShowsLimit = $bannerUniqShowsLimit;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBudgetLimit(): ?string
    {
        return $this->budgetLimit;
    }

    /**
     * @param null|string $budgetLimit
     *
     * @return Campaign
     */
    public function setBudgetLimit(string $budgetLimit = null): self
    {
        $this->budgetLimit = $budgetLimit;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBudgetLimitDay(): ?string
    {
        return $this->budgetLimitDay;
    }

    /**
     * @param null|string $budgetLimitDay
     *
     * @return Campaign
     */
    public function setBudgetLimitDay(string $budgetLimitDay = null): self
    {
        $this->budgetLimitDay = $budgetLimitDay;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCrMaxPrice(): ?string
    {
        return $this->crMaxPrice;
    }

    /**
     * @param null|string $crMaxPrice
     *
     * @return Campaign
     */
    public function setCrMaxPrice(string $crMaxPrice = null): self
    {
        $this->crMaxPrice = $crMaxPrice;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return Campaign
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDateEnd(): ?string
    {
        return $this->dateEnd;
    }

    /**
     * @param null|string $dateEnd
     *
     * @return Campaign
     */
    public function setDateEnd(string $dateEnd = null): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDateStart(): ?string
    {
        return $this->dateStart;
    }

    /**
     * @param null|string $dateStart
     *
     * @return Campaign
     */
    public function setDateStart(string $dateStart = null): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDelivery(): ?string
    {
        return $this->delivery;
    }

    /**
     * @param null|string $delivery
     *
     * @return Campaign
     */
    public function setDelivery(string $delivery = null): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return null|bool
     */
    public function isEnableUtm(): ?bool
    {
        return $this->enableUtm;
    }

    /**
     * @param bool $enableUtm
     *
     * @return Campaign
     */
    public function setEnableUtm(bool $enableUtm = false): self
    {
        $this->enableUtm = $enableUtm;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return Campaign
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMixing(): ?string
    {
        return $this->mixing;
    }

    /**
     * @param null|string $mixing
     *
     * @return Campaign
     */
    public function setMixing(string $mixing = null): self
    {
        $this->mixing = $mixing;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $objective
     *
     * @return Campaign
     */
    public function setObjective(string $objective = null): self
    {
        $this->objective = $objective;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getObjective(): ?string
    {
        return $this->objective;
    }

    /**
     * @param null|string $name
     *
     * @return Campaign
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getPackageId(): ?int
    {
        return $this->packageId;
    }

    /**
     * @param null|int $packageId
     *
     * @return Campaign
     */
    public function setPackageId(int $packageId = null): self
    {
        $this->packageId = $packageId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param null|string $price
     *
     * @return Campaign
     */
    public function setPrice(string $price = null): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getPricelistId(): ?int
    {
        return $this->pricelistId;
    }

    /**
     * @param null|int $pricelistId
     *
     * @return Campaign
     */
    public function setPricelistId(int $pricelistId = null): self
    {
        $this->pricelistId = $pricelistId;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getShowsLimit(): ?int
    {
        return $this->showsLimit;
    }

    /**
     * @param null|int $showsLimit
     *
     * @return Campaign
     */
    public function setShowsLimit(int $showsLimit = null): self
    {
        $this->showsLimit = $showsLimit;

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
     * @return Campaign
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Targetings
     */
    public function getTargetings(): ?Targetings
    {
        return $this->targetings;
    }

    /**
     * @param null|Targetings $targetings
     *
     * @return Campaign
     */
    public function setTargetings(Targetings $targetings = null): self
    {
        $this->targetings = $targetings;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getUniqShowsLimit(): ?int
    {
        return $this->uniqShowsLimit;
    }

    /**
     * @param null|int $uniqShowsLimit
     *
     * @return Campaign
     */
    public function setUniqShowsLimit(int $uniqShowsLimit = null): self
    {
        $this->uniqShowsLimit = $uniqShowsLimit;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUniqShowsPeriod(): ?string
    {
        return $this->uniqShowsPeriod;
    }

    /**
     * @param null|string $uniqShowsPeriod
     *
     * @return Campaign
     */
    public function setUniqShowsPeriod(string $uniqShowsPeriod = null): self
    {
        $this->uniqShowsPeriod = $uniqShowsPeriod;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    /**
     * @param null|string $updated
     *
     * @return Campaign
     */
    public function setUpdated(string $updated = null): self
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUtm(): ?string
    {
        return $this->utm;
    }

    /**
     * @param null|string $utm
     *
     * @return Campaign
     */
    public function setUtm(string $utm = null): self
    {
        $this->utm = $utm;

        return $this;
    }
}
