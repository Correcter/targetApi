<?php

namespace TargetApi\Model\PartnerPlatforms;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of GroupPad.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class GroupPad
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Комментарий для площадки в интерфейсе неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $comment;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус трансляции площадки неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $delivery;

    /**
     * @Assert\NotBlank(message="Имя площадки в интерфейсе обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Имя площадки в интерфейсе неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @Assert\Valid
     *
     * @var GroupPadFilter
     */
    private $filters;

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
     *     message="Причина модерации неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $moderationReasonDisplay;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус модерации неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "new", "allowed", "banned" },
     *     message = "Статус модерации не соответствует ни одному из вариантов"
     * )
     *
     * @var null|string
     */
    private $moderationStatus;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя площадки в системе имеет неверный тип: {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|Pad[]
     */
    private $pads;

    /**
     * @Assert\NotBlank(message="ID платформенной площадки, которые можно получить из PlatformPad обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $platformId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус площадки неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус площадки не соответствует ни одному из вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

    /**
     * @Assert\NotBlank(message="URL площадки обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="URL площадки имеет неверный тип: {{ type }}."
     * )
     *
     * @var null|string
     */
    private $url;

    /**
     * GroupPad constructor.
     */
    public function __construct()
    {
        $this->pads = new ArrayCollection();
        $this->issues = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|Pad[]
     */
    public function getPads(): ArrayCollection
    {
        return $this->pads;
    }

    /**
     * @param Pad $pad
     *
     * @return GroupPad
     */
    public function addPad(Pad $pad): self
    {
        if (!$this->pads->contains($pad)) {
            $this->pads[] = $pad;
        }

        return $this;
    }

    /**
     * @param Pad $pad
     *
     * @return bool
     */
    public function removePad(Pad $pad): bool
    {
        return $this->pads->removeElement($pad);
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
     * @return GroupPad
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
     * @return null|string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param null|string $comment
     *
     * @return GroupPad
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
     * @return GroupPad
     */
    public function setDelivery(string $delivery = null): self
    {
        $this->delivery = $delivery;

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
     * @return GroupPad
     */
    public function setDescription(string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return GroupPadFilter
     */
    public function getFilters(): GroupPadFilter
    {
        return $this->filters;
    }

    /**
     * @param \TargetApi\Model\PartnerPlatforms\GroupPadFilter $filters
     *
     * @return GroupPad
     */
    public function setFilters(GroupPadFilter $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return GroupPad
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getModerationReasonDisplay(): ?string
    {
        return $this->moderationReasonDisplay;
    }

    /**
     * @param null|string $moderationReasonDisplay
     *
     * @return GroupPad
     */
    public function setModerationReasonDisplay(string $moderationReasonDisplay = null): self
    {
        $this->moderationReasonDisplay = $moderationReasonDisplay;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getModerationStatus(): ?string
    {
        return $this->moderationStatus;
    }

    /**
     * @param null|string $moderationStatus
     *
     * @return GroupPad
     */
    public function setModerationStatus(string $moderationStatus = null): self
    {
        $this->moderationStatus = $moderationStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return GroupPad
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * @param null|int $platformId
     *
     * @return GroupPad
     */
    public function setPlatformId(int $platformId = null): self
    {
        $this->platformId = $platformId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return GroupPad
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param null|string $url
     *
     * @return GroupPad
     */
    public function setUrl(string $url = null): self
    {
        $this->url = $url;

        return $this;
    }
}
