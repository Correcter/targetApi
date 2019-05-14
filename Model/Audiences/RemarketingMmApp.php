<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingMmApp.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingMmApp
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
     * @return RemarketingMmApp
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
     * @return RemarketingMmApp
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
     * @return RemarketingMmApp
     */
    public function setObjectId(int $objectId = null): self
    {
        $this->objectId = $objectId;

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
     * @return RemarketingMmApp
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
