<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingOkGroup.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingOkGroup
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
     *     message="Название группы или тематики в соцсети Одноклассники имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Идентификатор группы или тематики групп в соцсети Одноклассники обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=9223372036854775807,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $objectId;

    /**
     * @Assert\NotBlank(message="Тип сущности (группа/тематика групп) обязателен для заполнения"
     * @Assert\Type(
     *     type="string",
     *     message="Тип сущности (группа/тематика групп) имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "group", "scope" },
     *     message = "Тип сущности (группа/тематика групп) имеет неверное значение"
     * )
     *
     * @var string
     */
    private $type;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return RemarketingOkGroup
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
     * @return RemarketingOkGroup
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * @param null|int $objectId
     *
     * @return RemarketingOkGroup
     */
    public function setObjectId(int $objectId = null): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return RemarketingOkGroup
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

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
     * @return RemarketingOkGroup
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
