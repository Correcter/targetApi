<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingVkApp.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingVkApp
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
     *     message="Название приложения имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Идентификатор приложения обязателен для заполнения")
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
     * @Assert\NotBlank(message="Краткое название приложения обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Краткое название приложения имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $shortname;

    /**
     * @Assert\NotBlank(message="Состояние загрузки пользователей обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Статус неверного типа {{ type }}."
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
     * @return RemarketingVkApp
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
     * @return RemarketingVkApp
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
     * @return RemarketingVkApp
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
     * @return $this
     */
    public function setObjectId(int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortname(): string
    {
        return $this->shortname;
    }

    /**
     * @param null|string $shortname
     *
     * @return RemarketingVkApp
     */
    public function setShortname(string $shortname = null): self
    {
        $this->shortname = $shortname;

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
     * @param string $status
     *
     * @return RemarketingVkApp
     */
    public function setStatus(string $status): self
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
     * @return RemarketingVkApp
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
