<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingOkApp.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingOkApp
{
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
     * @Assert\Type(
     *     type="string",
     *     message="Название приложения имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
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
     * @var int
     */
    private $objectId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Краткое название приложения имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $shortname;

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
     * @return null|int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return RemarketingOkApp
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

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
     * @return RemarketingOkApp
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
     * @param null|int $objectId
     *
     * @return $this
     */
    public function setObjectId(int $objectId = null): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortname(): ?string
    {
        return $this->shortname;
    }

    /**
     * @param null|string $shortname
     *
     * @return RemarketingOkApp
     */
    public function setShortname(string $shortname = null): self
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * @return int
     */
    public function getUsersCount(): ?int
    {
        return $this->usersCount;
    }

    /**
     * @param null|int $usersCount
     *
     * @return RemarketingOkApp
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
