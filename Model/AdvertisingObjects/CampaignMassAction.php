<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of CampaignMassAction.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class CampaignMassAction
{
    /**
     * @Assert\NotBlank(message="Идентификатор кампании обязателен для заполнения")
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
     *     type="double",
     *     message="Цена за одно событие неверного типа {{ type }}."
     * )
     *
     * @var null|float
     */
    private $price;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус кампании имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус кампании не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

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
     * @return CampaignMassAction
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param null|float $price
     *
     * @return CampaignMassAction
     */
    public function setPrice(float $price = null): self
    {
        $this->price = $price;

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
     * @return CampaignMassAction
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }
}
