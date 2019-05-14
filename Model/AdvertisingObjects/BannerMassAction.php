<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of BannerMassAction.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BannerMassAction
{
    /**
     * @Assert\NotBlank(message="Идентификатор баннера обязателен для заполнения")
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
     *     message="Статус баннера имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус баннера не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $status;

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
     * @return BannerMassAction
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

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
     * @return BannerMassAction
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }
}
