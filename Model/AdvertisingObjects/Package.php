<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of Package.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Package
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
    private $bannerFormatId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="GET-параметры, добавляемые к URL каждого объявления имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $bannerUrlGetParams;

    /**
     * @Assert\DateTime
     *
     * @var null|\DateTime
     */
    private $created;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание пакета имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $description;

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
     * @Assert\Type(
     *     type="double",
     *     message="Максимальная стоимость кампании, которую можно установить в рамках выбранного пакета неверного типа {{ type }}."
     * )
     *
     * @var null|float
     */
    private $maxPricePerUnit;

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
    private $maxUniqShowsLimit;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название пакета имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @ArrayOfString
     *
     * @var string[]
     */
    private $objective;

    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $options;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус доступности пакета пользователю имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $packageRequest;

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
    private $padsTreeId;

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
    private $paidEventType;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Стоимость рекламной кампании в выбранном пакете  неверного типа {{ type }}."
     * )
     *
     * @var null|float
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
    private $pricedEventType;

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
    private $relatedPackageIds;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус пакета неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус пакета не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

    /**
     * @Assert\DateTime
     *
     * @var null|\DateTime
     */
    private $updated;

    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $urlTypes;

    /**
     * Package constructor.
     */
    public function __construct()
    {
        $this->relatedPackageIds = new ArrayCollection();
        $this->objective = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getObjective(): ArrayCollection
    {
        return $this->objective;
    }

    /**
     * @param null|string $objective
     *
     * @return Package
     */
    public function addObjective(string $objective = null): self
    {
        if (!$this->objective->contains($objective)) {
            $this->objective[] = $objective;
        }

        return $this;
    }

    /**
     * @param string $objective
     *
     * @return bool
     */
    public function removeObjective(string $objective): bool
    {
        return $this->objective->removeElement($objective);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getPlaceList(): ArrayCollection
    {
        return $this->relatedPackageIds;
    }

    /**
     * @param int $relatedPackageId
     *
     * @return $this
     */
    public function addPlaceList(int $relatedPackageId = null): self
    {
        if (!$this->relatedPackageIds->contains($relatedPackageId)) {
            $this->relatedPackageIds[] = $relatedPackageId;
        }

        return $this;
    }

    /**
     * @param int $relatedPackageId
     *
     * @return bool
     */
    public function removePlaceList(int $relatedPackageId): ?bool
    {
        return $this->relatedPackageIds->removeElement($relatedPackageId);
    }

    /**
     * @return int
     */
    public function getBannerFormatId(): ?int
    {
        return $this->bannerFormatId;
    }

    /**
     * @param null|int $bannerFormatId
     *
     * @return Package
     */
    public function setBannerFormatId(int $bannerFormatId = null): self
    {
        $this->bannerFormatId = $bannerFormatId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerUrlGetParams(): ?string
    {
        return $this->bannerUrlGetParams;
    }

    /**
     * @param null|string $bannerUrlGetParams
     *
     * @return Package
     */
    public function setBannerUrlGetParams(string $bannerUrlGetParams = null): self
    {
        $this->bannerUrlGetParams = $bannerUrlGetParams;

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
     * @param null|string $created
     *
     * @return Package
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     *
     * @return Package
     */
    public function setDescription(string $description = null): self
    {
        $this->description = $description;

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
     * @return Package
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|float
     */
    public function getMaxPricePerUnit(): ?float
    {
        return $this->maxPricePerUnit;
    }

    /**
     * @param null|float $maxPricePerUnit
     *
     * @return Package
     */
    public function setMaxPricePerUnit(float $maxPricePerUnit = null): self
    {
        $this->maxPricePerUnit = $maxPricePerUnit;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getMaxUniqShowsLimit(): ?int
    {
        return $this->maxUniqShowsLimit;
    }

    /**
     * @param null|int $maxUniqShowsLimit
     *
     * @return Package
     */
    public function setMaxUniqShowsLimit(int $maxUniqShowsLimit = null): self
    {
        $this->maxUniqShowsLimit = $maxUniqShowsLimit;

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
     * @param null|string $name
     *
     * @return Package
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param null|array $options
     *
     * @return Package
     */
    public function setOptions(array $options = null): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPackageRequest(): ?string
    {
        return $this->packageRequest;
    }

    /**
     * @param null|string $packageRequest
     *
     * @return Package
     */
    public function setPackageRequest(string $packageRequest = null): self
    {
        $this->packageRequest = $packageRequest;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getPadsTreeId(): ?int
    {
        return $this->padsTreeId;
    }

    /**
     * @param null|int $padsTreeId
     *
     * @return Package
     */
    public function setPadsTreeId(int $padsTreeId = null): self
    {
        $this->padsTreeId = $padsTreeId;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getPaidEventType(): ?int
    {
        return $this->paidEventType;
    }

    /**
     * @param null|int $paidEventType
     *
     * @return Package
     */
    public function setPaidEventType(int $paidEventType = null): self
    {
        $this->paidEventType = $paidEventType;

        return $this;
    }

    /**
     * @return null|float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param null|float $price
     *
     * @return Package
     */
    public function setPrice(float $price = null): self
    {
        $this->price = $price;
    }

    /**
     * @return null|int
     */
    public function getPricedEventType(): ?int
    {
        return $this->pricedEventType;
    }

    /**
     * @param null|int $pricedEventType
     *
     * @return Package
     */
    public function setPricedEventType(int $pricedEventType = null): self
    {
        $this->pricedEventType = $pricedEventType;

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
     * @return Package
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

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
     * @return Package
     */
    public function setUpdated(string $updated = null): self
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getUrlTypes(): ?array
    {
        return $this->urlTypes;
    }

    /**
     * @param null|array $urlTypes
     *
     * @return Package
     */
    public function setUrlTypes(array $urlTypes = null): self
    {
        $this->urlTypes = $urlTypes;

        return $this;
    }
}
