<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of BannerContent.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BannerContent
{
    /**
     * @Assert\NotBlank(message="Идентификатор содержимого обязательна для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="Идентификатор содержимого {{ value }} имеет неверный тип {{ type }}."
     * )
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
     * @Assert\Valid
     *
     * @var null|array
     */
    private $primary;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип содержимого имеет неверный тип {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "static", "animated", "rollovered", "video", "html5", "audio" },
     *     message = "Тип содержимого не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|ContentVariant[]
     */
    private $variants;

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
     * @return BannerContent
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getPrimary(): ?array
    {
        return $this->primary;
    }

    /**
     * @param null|array $primary
     *
     * @return BannerContent
     */
    public function setPrimary(array $primary = []): self
    {
        $this->primary = $primary;

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
     * @return BannerContent
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return ArrayCollection|ContentVariant[]
     */
    public function getVariants(): ArrayCollection
    {
        return $this->variants;
    }

    /**
     * @param ContentVariant $variant
     *
     * @return $this
     */
    public function addVariant(ContentVariant $variant = null)
    {
        if (!$this->variants->contains($variant)) {
            $this->variants[] = $variant;
        }

        return $this;
    }

    /**
     * @param ContentVariant $variant
     *
     * @return bool
     */
    public function removeVariant(ContentVariant $variant): bool
    {
        return $this->variants->removeElement($variant);
    }
}
