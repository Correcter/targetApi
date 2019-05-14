<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Date;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of LookalikeAudience.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LookalikeAudience
{
    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

    /**
     * @Assert\Valid
     *
     * @var LookalikeCustomAudience
     */
    private $customAudience;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Причина ошибки создания неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $failReason;

    /**
     * @Assert\NotBlank(message="Идентификатор lookalike-аудитории обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Название lookalike-аудитории обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название lookalike-аудитории: {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Источник данных, на основе которого создана lookalike обязателен для заполнения")
     * @Assert\Valid
     *
     * @var LookalikeSource
     */
    private $remarketingSource;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "pending", "loading", "loaded", "failed", "unloaded" },
     *     message = "Статус не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @Assert\Date
     *
     * @var Date
     */
    private $timeleft;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Принадлежность lookalike-аудитории имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "own", "shared" },
     *     message = "Принадлежность lookalike-аудитории имеет неверное значение"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $updated;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|LookalikeAudienceUser[]
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
     * LookalikeAudience constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->timeleft = (new \DateTime())->format('Y-m-d');
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param null $created
     *
     * @return LookalikeAudience
     */
    public function setCreated($created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return LookalikeCustomAudience
     */
    public function getCustomAudience(): LookalikeCustomAudience
    {
        return $this->customAudience;
    }

    /**
     * @param LookalikeCustomAudience $customAudience
     *
     * @return LookalikeAudience
     */
    public function setCustomAudience(LookalikeCustomAudience $customAudience): self
    {
        $this->customAudience = $customAudience;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * @param null|string $failReason
     *
     * @return LookalikeAudience
     */
    public function setFailReason(string $failReason = null): self
    {
        $this->failReason = $failReason;

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
     * @return LookalikeAudience
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

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
     * @return LookalikeAudience
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return LookalikeSource
     */
    public function getRemarketingSource(): LookalikeSource
    {
        return $this->remarketingSource;
    }

    /**
     * @param LookalikeSource $remarketingSource
     *
     * @return LookalikeAudience
     */
    public function setRemarketingSource(LookalikeSource $remarketingSource = null): self
    {
        $this->remarketingSource = $remarketingSource;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return LookalikeAudience
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTimeleft(): ?string
    {
        return $this->timeleft;
    }

    /**
     * @param null|Assert\Date $timeleft
     *
     * @return LookalikeAudience
     */
    public function setTimeleft(Assert\Date $timeleft = null): self
    {
        $this->timeleft = $timeleft;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return LookalikeAudience
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

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
     * @return LookalikeAudience
     */
    public function setUpdated(string $updated = null): self
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return ArrayCollection|LookalikeAudienceUser[]
     */
    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    /**
     * @param null|LookalikeAudienceUser $user
     *
     * @return LookalikeAudience
     */
    public function addUser(LookalikeAudienceUser $user = null): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @param LookalikeAudienceUser $user
     *
     * @return bool
     */
    public function removeUser(LookalikeAudienceUser $user): bool
    {
        return $this->users->removeElement($user);
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
     * @return LookalikeAudience
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
