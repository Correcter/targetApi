<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of PackagePad.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class PackagePad
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание площадки неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $description;

    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $eyeUrl;

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
     * @Assert\Type(
     *     type="string",
     *     message="Имя площадки неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $patterns;

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     *
     * @return PackagePad
     */
    public function setDescription(string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getEyeUrl(): array
    {
        return $this->eyeUrl;
    }

    /**
     * @param null|array $eyeUrl
     *
     * @return PackagePad
     */
    public function setEyeUrl(array $eyeUrl = null): self
    {
        $this->eyeUrl = $eyeUrl;

        return $this;
    }

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
     * @return PackagePad
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
     * @return PackagePad
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getPatterns(): array
    {
        return $this->patterns;
    }

    /**
     * @param null|array $patterns
     *
     * @return PackagePad
     */
    public function setPatterns(array $patterns = null): self
    {
        $this->patterns = $patterns;

        return $this;
    }
}
