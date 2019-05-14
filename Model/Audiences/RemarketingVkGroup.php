<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingVkGroup.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingVkGroup
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
    private $id;

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
    private $loadedUsersCount;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название группы имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

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
    private $objectId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Краткое название группы имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $shortname;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Состояние загрузки пользователей неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "loading", "loaded", "unloaded" },
     *     message = "Состояние загрузки пользователей не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $status;

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
    private $usersCount;

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
     * @return RemarketingVkGroup
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getLoadedUsersCount(): ?int
    {
        return $this->loadedUsersCount;
    }

    /**
     * @param null|int $loadedUsersCount
     *
     * @return RemarketingVkGroup
     */
    public function setLoadedUsersCount(int $loadedUsersCount = null): self
    {
        $this->loadedUsersCount = $loadedUsersCount;

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
     * @return RemarketingVkGroup
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     *
     * @return RemarketingVkGroup
     */
    public function setObjectId(int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getShortname(): ?string
    {
        return $this->shortname;
    }

    /**
     * @param null|string $shortname
     *
     * @return RemarketingVkGroup
     */
    public function setShortname(string $shortname = null): self
    {
        $this->shortname = $shortname;

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
     * @return RemarketingVkGroup
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
     * @return RemarketingVkGroup
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
