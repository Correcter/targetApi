<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of DmpSegment.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class DmpSegment
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
    private $entriesCount;

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
     *     type="bool",
     *     message="Сегмент у пользователя неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $isActivated;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Ключ доступа, по которому можно получить доступ к сегменту, неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $key;

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
    private $lastUpdate;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название сегмента обязательно для заполнения неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Идентификатор предоставленного источника данных объекта обязателен для заполнения")
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
     * @Assert\NotBlank(message="Тип предоставленного источника данных обязателен для заполнения")
     * @Assert\Choice(
     *     choices = { "users_list", "counter", "campaign_list", "custom_audience", "pricelist", "segment", "lookalike_audience" },
     *     message = "Выберите тип предоставленного источника данных..."
     * )
     *
     * @var string
     */
    private $objectType;

    /**
     * @Assert\Type(
     *     type="DmpSegmentOwner",
     *     message="Информация о владельце сегмента имеет неверный тип {{ type }}"
     * )
     *
     * @var DmpSegmentOwner
     */
    private $owner;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Цена за 1000 показов неверного типа ({{ type }})"
     * )
     *
     * @var float
     */
    private $price;

    /**
     * @return int
     */
    public function getEntriesCount(): int
    {
        return $this->entriesCount;
    }

    /**
     * @param int $entriesCount
     *
     * @return DmpSegment
     */
    public function setEntriesCount(int $entriesCount = null): self
    {
        $this->entriesCount = $entriesCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return DmpSegment
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIsActivated(): bool
    {
        return $this->isActivated;
    }

    /**
     * @param bool $isActivated
     *
     * @return DmpSegment
     */
    public function setIsActivated(bool $isActivated = false): self
    {
        $this->isActivated = $isActivated;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param null|string $key
     *
     * @return DmpSegment
     */
    public function setKey(string $key = null): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return int
     */
    public function getLastUpdate(): int
    {
        return $this->lastUpdate;
    }

    /**
     * @param null|int $lastUpdate
     *
     * @return DmpSegment
     */
    public function setLastUpdate(int $lastUpdate = null): self
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return DmpSegment
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     *
     * @return $this
     */
    public function setObjectId(int $objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType(): string
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     *
     * @return $this
     */
    public function setObjectType(string $objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * @return DmpSegmentOwner
     */
    public function getOwner(): DmpSegmentOwner
    {
        return $this->owner;
    }

    /**
     * @param null|DmpSegmentOwner $owner
     *
     * @return $this
     */
    public function setOwner(DmpSegmentOwner $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): double
    {
        return $this->price;
    }

    /**
     * @param null|float $price
     *
     * @return $this
     */
    public function setPrice(double $price = null)
    {
        $this->price = $price;

        return $this;
    }
}
