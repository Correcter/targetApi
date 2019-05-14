<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of RemarketingPricelist.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingPricelist
{
    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $campaignIds;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

    /**
     * @Assert\Url
     * @Assert\NotBlank(message="Идентификатор счетчика обязателен для заполнения")
     *
     * @var string
     */
    private $exportUrl;

    /**
     * @Assert\NotBlank(message="Идентификатор прайс-листа внутри магазина обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $feedId;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Признак корректности установки кода динамического ремаркетинга. неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $hasCorrectCode;

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
    private $id;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $lastImportFinished;

    /**
     * @Assert\NotBlank(message="Название прайс-листа обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название прайс-листа имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=720,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $refreshPeriod;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Добавлять ли UTM-метки в URL офферов неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $removeUtmTags;

    /**
     * @Assert\NotBlank(message="Название прайс-листа обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $shopId;

    /**
     * @Assert\NotBlank(message="Статус прайс-листа обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Статус прайс-листа имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус прайс-листа не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|RemarketingPricelistUser[]
     */
    private $users;

    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $usersCount;

    /**
     * RemarketingPricelist constructor.
     */
    public function __construct()
    {
        $this->campaignIds = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|RemarketingUserCampaignList[]
     */
    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    /**
     * @param RemarketingUserCampaignList $user
     *
     * @return RemarketingPricelist
     */
    public function addUser(RemarketingUserCampaignList $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @param RemarketingUserCampaignList $user
     *
     * @return bool
     */
    public function removeUser(RemarketingUserCampaignList $user): bool
    {
        return $this->users->removeElement($user);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getCampaignIds(): ArrayCollection
    {
        return $this->campaignIds;
    }

    /**
     * @param int $campaignId
     *
     * @return RemarketingPricelist
     */
    public function addCampaignId(int $campaignId): self
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
     * @return string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * @param null|string $created
     *
     * @return RemarketingPricelist
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getExportUrl(): ?string
    {
        return $this->exportUrl;
    }

    /**
     * @param null|string $exportUrl
     *
     * @return RemarketingPricelist
     */
    public function setExportUrl(string $exportUrl = null): self
    {
        $this->exportUrl = $exportUrl;

        return $this;
    }

    /**
     * @return int
     */
    public function getFeedId(): ?int
    {
        return $this->feedId;
    }

    /**
     * @param null|int $feedId
     *
     * @return RemarketingPricelist
     */
    public function setFeedId(int $feedId = null): self
    {
        $this->feedId = $feedId;

        return $this;
    }

    /**
     * @return null|bool
     */
    public function isHasCorrectCode(): ?bool
    {
        return $this->hasCorrectCode;
    }

    /**
     * @param bool $hasCorrectCode
     *
     * @return RemarketingPricelist
     */
    public function setHasCorrectCode(bool $hasCorrectCode = false): self
    {
        $this->hasCorrectCode = $hasCorrectCode;

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
     * @return RemarketingPricelist
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastImportFinished(): ?string
    {
        return $this->lastImportFinished;
    }

    /**
     * @param null|string $lastImportFinished
     *
     * @return RemarketingPricelist
     */
    public function setLastImportFinished(string $lastImportFinished = null): self
    {
        $this->lastImportFinished = $lastImportFinished;

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
     * @return RemarketingPricelist
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getRefreshPeriod(): ?int
    {
        return $this->refreshPeriod;
    }

    /**
     * @param null|int $refreshPeriod
     *
     * @return RemarketingPricelist
     */
    public function setRefreshPeriod(int $refreshPeriod = null): self
    {
        $this->refreshPeriod = $refreshPeriod;

        return $this;
    }

    /**
     * @return null|bool
     */
    public function isRemoveUtmTags(): ?bool
    {
        return $this->removeUtmTags;
    }

    /**
     * @param bool $removeUtmTags
     *
     * @return RemarketingPricelist
     */
    public function setRemoveUtmTags(bool $removeUtmTags = false): self
    {
        $this->removeUtmTags = $removeUtmTags;

        return $this;
    }

    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param null|int $shopId
     *
     * @return RemarketingPricelist
     */
    public function setShopId(int $shopId = null): self
    {
        $this->shopId = $shopId;

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
     * @return RemarketingPricelist
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getUsersCount(): ?int
    {
        return $this->usersCount;
    }

    /**
     * @param null|int $usersCount
     *
     * @return RemarketingPricelist
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
