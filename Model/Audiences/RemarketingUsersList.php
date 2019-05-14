<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of RemarketingUsersList.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingUsersList
{
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
    private $base;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

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
    private $entriesCount;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|RemarketingUsersListHistory[]
     */
    private $history;

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
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $idsCount;

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
    private $matchedIdsCount;

    /**
     * @Assert\NotBlank(message="Название списка обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название списка имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Статус обработки обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Статус обработки неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "receiving", "received", "mapping", "mapped", "writing", "ready", "pending_delete", "deleting", "deleted", "deleted_to_notify" },
     *     message = "Статус обработки не соответствует ни одному из доступных вариантов"
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @Assert\NotBlank(message="Тип списка обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Тип списка неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "ok", "mm", "phones", "emails", "device_id", "android_id", "advertising_id", "idfa", "dmp_id", "dmp_top", "vk", "mac", "mparticle" },
     *     message = "Тип списка не соответствует ни одному из доступных вариантов"
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
     * @var ArrayCollection|RemarketingUsersListUser[]
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
     * RemarketingUsersList constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->history = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|RemarketingUsersListHistory[]
     */
    public function getHistory(): ArrayCollection
    {
        return $this->history;
    }

    /**
     * @param RemarketingCounterUser $hist
     *
     * @return RemarketingUsersList
     */
    public function addHistory(RemarketingCounterUser $hist): self
    {
        if (!$this->history->contains($hist)) {
            $this->history[] = $hist;
        }

        return $this;
    }

    /**
     * @param RemarketingCounterUser $hist
     *
     * @return bool
     */
    public function removeHistory(RemarketingCounterUser $hist): bool
    {
        return $this->history->removeElement($hist);
    }

    /**
     * @return ArrayCollection|RemarketingUsersListUser[]
     */
    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    /**
     * @param RemarketingUsersListUser $user
     *
     * @return RemarketingUsersList
     */
    public function addUser(RemarketingUsersListUser $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @param RemarketingCounterUser $user
     *
     * @return bool
     */
    public function removeUser(RemarketingCounterUser $user): bool
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
     * @return RemarketingUsersList
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getBase(): ?int
    {
        return $this->base;
    }

    /**
     * @param int $base
     */
    public function setBase(int $base = null): self
    {
        $this->base = $base;

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
     * @return RemarketingUsersList
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return int
     */
    public function getEntriesCount(): ?int
    {
        return $this->entriesCount;
    }

    /**
     * @param null|int $entriesCount
     *
     * @return RemarketingUsersList
     */
    public function setEntriesCount(int $entriesCount = null): self
    {
        $this->entriesCount = $entriesCount;

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
     * @return RemarketingUsersList
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdsCount(): ?int
    {
        return $this->idsCount;
    }

    /**
     * @param null|int $idsCount
     *
     * @return RemarketingUsersList
     */
    public function setIdsCount(int $idsCount = null): self
    {
        $this->idsCount = $idsCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getMatchedIdsCount(): ?int
    {
        return $this->matchedIdsCount;
    }

    /**
     * @param null|int $matchedIdsCount
     *
     * @return RemarketingUsersList
     */
    public function setMatchedIdsCount(int $matchedIdsCount = null): self
    {
        $this->matchedIdsCount = $matchedIdsCount;

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
     * @return RemarketingUsersList
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

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
     * @return RemarketingUsersList
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

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
     * @return RemarketingUsersList
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
     * @return RemarketingUsersList
     */
    public function setUpdated(string $updated = null): self
    {
        $this->updated = $updated;

        return $this;
    }
}
