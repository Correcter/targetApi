<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\NotBlankObject;

/**
 * Description of BlackList.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BlackList
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
    private $campaignsCount;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата создания списка имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $created;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Флаг применения списка для всех кампаний пользователя имеет неверный тип {{ type }}."
     * )
     *
     * @var bool
     */
    private $forUser;

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
    private $id;

    /**
     * @Assert\NotBlank(message="Имя списка обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Имя списка имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @NotBlankObject(noBlankMess="Описание списка обязатлено для заполнения")
     *
     * @var ArrayCollection|string[]
     */
    private $placeList;

    /**
     * @Assert\NotBlank(message="Тип списка обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Тип списка неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "domain", "mobile_app" },
     *     message = "Тип списка не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата обновления списка имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $updated;

    /**
     * BlackList constructor.
     */
    public function __construct()
    {
        $this->placeList = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getPlaceList(): ArrayCollection
    {
        return $this->placeList;
    }

    /**
     * @param null|string $placeList
     *
     * @return BlackList
     */
    public function addPlaceList(string $placeList = null): self
    {
        if (!$this->placeList->contains($placeList)) {
            $this->placeList[] = $placeList;
        }

        return $this;
    }

    /**
     * @param string $placeList
     *
     * @return bool
     */
    public function removePlaceList(string $placeList): bool
    {
        return $this->placeList->removeElement($placeList);
    }

    /**
     * @return int
     */
    public function getCampaignsCount(): ?int
    {
        return $this->campaignsCount;
    }

    /**
     * @param null|int $campaignsCount
     *
     * @return BlackList
     */
    public function setCampaignsCount(int $campaignsCount = null): self
    {
        $this->campaignsCount = $campaignsCount;

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
     * @return BlackList
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return bool
     */
    public function getForUser(): ?bool
    {
        return $this->forUser;
    }

    /**
     * @param null|bool $forUser
     *
     * @return BlackList
     */
    public function setForUser(bool $forUser = null): self
    {
        $this->forUser = $forUser;

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
     * @return BlackList
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
     * @return BlackList
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

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
     * @return BlackList
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
     * @return BlackList
     */
    public function setUpdated(string $updated = null): self
    {
        $this->updated = $updated;

        return $this;
    }
}
