<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of Banner.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Banner
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Действие при клике по баннеру имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $callToAction;

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
    private $campaignId;

    /**
     * @Assert\Valid
     *
     * @var BannerContent
     */
    private $content;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Deeplink ссылка имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $deeplink;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Deeplink ссылка имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $delivery;

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
     * @Assert\Valid
     *
     * @var ArrayCollection|ModerationReason[]
     */
    private $moderationReasons;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус модерации объявления имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $moderationStatus;

    /**
     * @Assert\Valid
     *
     * @var Product
     */
    private $products;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус объявления имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус объявления не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

    /**
     * @var array[]|ArrayCollection
     */
    private $textBlocks;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $updated;

    /**
     * @var array[]
     */
    private $urls;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Статус возможности отправки баннера на перемодерацию неверного типа {{ type }}."
     * )
     *
     * @var null|bool
     */
    private $userCanRequestRemoderation;

    /**
     * @Assert\Valid
     *
     * @var VideoParams
     */
    private $videoParams;

    /**
     * Banner constructor.
     */
    public function __construct()
    {
        $this->issues = new ArrayCollection();
        $this->textBlocks = new ArrayCollection();
        $this->moderationReasons = new ArrayCollection();
    }

    /**
     * @return array
     */
    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @param null|string $url
     *
     * @return Banner
     */
    public function addUrl($url = null): self
    {
        $this->urls[] = $url;

        return $this;
    }

    /**
     * @return null|BannerContent
     */
    public function getContent(): ?BannerContent
    {
        return $this->content;
    }

    /**
     * @param null|BannerContent $bContent
     *
     * @return Banner
     */
    public function setContent(BannerContent $bContent = null): self
    {
        $this->content = $bContent;

        return $this;
    }

    /**
     * @return array[]|ArrayCollection
     */
    public function getIssues(): ArrayCollection
    {
        return $this->issues;
    }

    /**
     * @param array $issue
     *
     * @return Banner
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
     * @return ArrayCollection|ModerationReason[]
     */
    public function getModerationReasons(): ArrayCollection
    {
        return $this->moderationReasons;
    }

    /**
     * @param ModerationReason $moderationReason
     *
     * @return $this
     */
    public function addModerationReason(ModerationReason $moderationReason = null)
    {
        if (!$this->moderationReasons->contains($moderationReason)) {
            $this->moderationReasons[] = $moderationReason;
        }

        return $this;
    }

    /**
     * @param ModerationReason $moderationReason
     *
     * @return bool
     */
    public function removeModerationReason(ModerationReason $moderationReason): bool
    {
        return $this->moderationReasons->removeElement($moderationReason);
    }

    /**
     * @return array[]|ArrayCollection
     */
    public function getTextBlocks(): ArrayCollection
    {
        return $this->textBlocks;
    }

    /**
     * @param array $textBlock
     *
     * @return Banner
     */
    public function addTextBlock(array $textBlock = []): self
    {
        if (!$this->textBlocks->contains($textBlock)) {
            $this->textBlocks[] = $textBlock;
        }

        return $this;
    }

    /**
     * @param Textblock $textBlock
     *
     * @return bool
     */
    public function removeTextBlock(array $textBlock): bool
    {
        return $this->textBlocks->removeElement($textBlock);
    }

    /**
     * @return null|string
     */
    public function getCallToAction(): ?string
    {
        return $this->callToAction;
    }

    /**
     * @param null|string $callToAction
     *
     * @return Banner
     */
    public function setCallToAction(string $callToAction = null): self
    {
        $this->callToAction = $callToAction;

        return $this;
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
     * @return Banner
     */
    public function setCampaignId(int $campaignId = null): self
    {
        $this->campaignId = $campaignId;

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
     * @return Banner
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDeeplink(): ?string
    {
        return $this->deeplink;
    }

    /**
     * @param string $deeplink
     *
     * @return Banner
     */
    public function setDeeplink(string $deeplink = null): self
    {
        $this->deeplink = $deeplink;

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
     * @return Banner
     */
    public function setDelivery(string $delivery = null): self
    {
        $this->delivery = $delivery;

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
     * @return Banner
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

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
     * @return Banner
     */
    public function setModerationStatus(string $moderationStatus = null): self
    {
        $this->moderationStatus = $moderationStatus;

        return $this;
    }

    /**
     * @return null|Product
     */
    public function getProducts(): ?Product
    {
        return $this->products;
    }

    /**
     * @param Product $products
     *
     * @return Banner
     */
    public function setProducts(Product $products): self
    {
        $this->products = $products;

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
     * @return Banner
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    /**
     * @param null|string $updated
     *
     * @return Banner
     */
    public function setUpdated(string $updated = null): self
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return null|bool
     */
    public function isUserCanRequestRemoderation(): ?bool
    {
        return $this->userCanRequestRemoderation;
    }

    /**
     * @param bool $userCanRequestRemoderation
     *
     * @return Banner
     */
    public function setUserCanRequestRemoderation(bool $userCanRequestRemoderation): self
    {
        $this->userCanRequestRemoderation = $userCanRequestRemoderation;

        return $this;
    }

    /**
     * @return null|VideoParams
     */
    public function getVideoParams(): ?VideoParams
    {
        return $this->videoParams;
    }

    /**
     * @param VideoParams $videoParams
     *
     * @return Banner
     */
    public function setVideoParams(VideoParams $videoParams = null): self
    {
        $this->videoParams = $videoParams;

        return $this;
    }
}
