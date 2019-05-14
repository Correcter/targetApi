<?php

namespace TargetApi\Model\PartnerPlatforms;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of Pad.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Pad
{
    /**
     * @Assert\Range(
     *     min=1,
     *     max=10,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $bannersCount;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Блок кода неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $codeBlock;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Комментарий для блока в интерфейсе неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $comment;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус трансляции блока неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $delivery;

    /**
     * @Assert\NotBlank(message="Имя блока в интерфейсе обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Имя блока в интерфейсе неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Код заглушки сторонней сети неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $dummyHtml;

    /**
     * @Assert\Valid
     *
     * @var PadFilter
     */
    private $filters;

    /**
     * @Assert\NotBlank(message="ID форматной площадки, которые можно получить из PlatformPad обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $formatId;

    /**
     * @Assert\Valid
     *
     * @var GroupPadShort
     */
    private $groupPad;

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
     *     type="string",
     *     message="Тип интеграции партнерской площадки с платформой myTarget неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "js_sdk", "js_tag", "s2s_ap", "vast_tag" },
     *     message = "Тип интеграции партнерской площадки с платформой myTarget не соответствует ни одному из вариантов"
     * )
     *
     * @var null|string
     */
    private $integrationType;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection
     */
    private $issues;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Площадки MD5 неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $padMd5;

    /**
     * @Assert\Range(
     *     max=100000000,
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $partnerAblockCpmLimit;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=4294967296,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $showsInterval;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=65536,
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
     *     message="Период для лимита показов уникальному пользователю неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "day", "week", "month", "eternity" },
     *     message = "Период для лимита показов уникальному пользователю не соответствует ни одному из вариантов"
     * )
     *
     * @var null|string
     */
    private $showsPeriod;

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
    private $slotId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Период для лимита показов уникальному пользователю неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус блока не соответствует ни одному из вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Query-параметры, добавляемые к URL баннеров при показе на площадке неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $updateQueryParams;

    /**
     * GroupPad constructor.
     */
    public function __construct()
    {
        $this->issues = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|array[]
     */
    public function getIssues(): ArrayCollection
    {
        return $this->issues;
    }

    /**
     * @param array $issue
     *
     * @return Pad
     */
    public function addIssue(array $issue): self
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
     * @return null|int
     */
    public function getBannersCount(): ?int
    {
        return $this->bannersCount;
    }

    /**
     * @param null|int $bannersCount
     *
     * @return Pad
     */
    public function setBannersCount(int $bannersCount = null): self
    {
        $this->bannersCount = $bannersCount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCodeBlock(): ?string
    {
        return $this->codeBlock;
    }

    /**
     * @param null|string $codeBlock
     *
     * @return Pad
     */
    public function setCodeBlock(string $codeBlock = null): self
    {
        $this->codeBlock = $codeBlock;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param null|string $comment
     *
     * @return Pad
     */
    public function setComment(string $comment = null): self
    {
        $this->comment = $comment;

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
     * @return Pad
     */
    public function setDelivery(string $delivery = null): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return null|string
     */
    public function getDummyHtml(): ?string
    {
        return $this->dummyHtml;
    }

    /**
     * @param string $dummyHtml
     *
     * @return Pad
     */
    public function setDummyHtml(string $dummyHtml): self
    {
        $this->dummyHtml = $dummyHtml;

        return $this;
    }

    /**
     * @return PadFilter
     */
    public function getFilters(): PadFilter
    {
        return $this->filters;
    }

    /**
     * @param PadFilter $filters
     *
     * @return Pad
     */
    public function setFilters(PadFilter $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @return int
     */
    public function getFormatId(): int
    {
        return $this->formatId;
    }

    /**
     * @param int $formatId
     *
     * @return Pad
     */
    public function setFormatId(int $formatId): self
    {
        $this->formatId = $formatId;

        return $this;
    }

    /**
     * @return GroupPadShort
     */
    public function getGroupPad(): GroupPadShort
    {
        return $this->groupPad;
    }

    /**
     * @param GroupPadShort $groupPad
     *
     * @return Pad
     */
    public function setGroupPad(GroupPadShort $groupPad): self
    {
        $this->groupPad = $groupPad;

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
     * @return Pad
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getIntegrationType(): ?string
    {
        return $this->integrationType;
    }

    /**
     * @param null|string $integrationType
     *
     * @return Pad
     */
    public function setIntegrationType(string $integrationType = null): self
    {
        $this->integrationType = $integrationType;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPadMd5(): ?string
    {
        return $this->padMd5;
    }

    /**
     * @param null|string $padMd5
     *
     * @return Pad
     */
    public function setPadMd5(string $padMd5 = null): self
    {
        $this->padMd5 = $padMd5;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getPartnerAblockCpmLimit(): ?int
    {
        return $this->partnerAblockCpmLimit;
    }

    /**
     * @param null|int $partnerAblockCpmLimit
     *
     * @return Pad
     */
    public function setPartnerAblockCpmLimit(int $partnerAblockCpmLimit = null): self
    {
        $this->partnerAblockCpmLimit = $partnerAblockCpmLimit;

        return $this;
    }

    /**
     * @return int
     */
    public function getShowsInterval(): ?int
    {
        return $this->showsInterval;
    }

    /**
     * @param null|int $showsInterval
     *
     * @return Pad
     */
    public function setShowsInterval(int $showsInterval = null): self
    {
        $this->showsInterval = $showsInterval;

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
     * @return Pad
     */
    public function setShowsLimit(int $showsLimit = null): self
    {
        $this->showsLimit = $showsLimit;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getShowsPeriod(): ?string
    {
        return $this->showsPeriod;
    }

    /**
     * @param null|string $showsPeriod
     *
     * @return Pad
     */
    public function setShowsPeriod(string $showsPeriod = null): self
    {
        $this->showsPeriod = $showsPeriod;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getSlotId(): ?int
    {
        return $this->slotId;
    }

    /**
     * @param null|int $slotId
     *
     * @return Pad
     */
    public function setSlotId(int $slotId = null): self
    {
        $this->slotId = $slotId;

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
     * @return Pad
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateQueryParams(): ?string
    {
        return $this->updateQueryParams;
    }

    /**
     * @param null|string $updateQueryParams
     *
     * @return Pad
     */
    public function setUpdateQueryParams(string $updateQueryParams = null): self
    {
        $this->updateQueryParams = $updateQueryParams;

        return $this;
    }
}
