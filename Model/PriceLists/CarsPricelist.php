<?php

namespace TargetApi\Model\PriceLists;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of CarsPricelist.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class CarsPricelist
{
    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

    /**
     * @Assert\NotBlank(message="Название прайс-листа обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название прайс-листа имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="ID региона обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $regionId;

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
    private $sourceId;

    /**
     * @Assert\NotBlank(message="URL файла с прайс-листом обязателен для заполнения")
     * @Assert\Url
     *
     * @var string
     */
    private $sourceUrl;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус прайс-листа в Авто@Mail.Ru имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "NEW", "FILE_DOWNLOADING", "FILE_DOWNLOADED", "FILE_PARSING", "FILE_PARSED", "IMAGES_DOWNLOADING", "IMAGES_DOWNLOADED", "CAMPAIGNS_CREATING", "CAMPAIGNS_CREATED", "BANNERS_DELETING", "BANNERS_DELETED" },
     *     message = "Статус прайс-листа не соответствует ни одному из вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

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
     * @return $this
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

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
     * @param string $name
     *
     * @return CarsPricelist
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getRegionId(): int
    {
        return $this->regionId;
    }

    /**
     * @param int $regionId
     *
     * @return CarsPricelist
     */
    public function setRegionId(int $regionId): self
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getSourceId(): ?int
    {
        return $this->sourceId;
    }

    /**
     * @param int $sourceId
     *
     * @return CarsPricelist
     */
    public function setSourceId(int $sourceId): self
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     *
     * @return CarsPricelist
     */
    public function setSourceUrl(string $sourceUrl): self
    {
        $this->sourceUrl = $sourceUrl;

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
     * @return CarsPricelist
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }
}
