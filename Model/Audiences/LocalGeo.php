<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\NotBlankObject;

/**
 * Description of LocalGeo.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LocalGeo
{
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
    private $id;

    /**
     * @Assert\NotBlank(message="Название списка обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название списка имеет неверный тип: {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @NotBlankObject
     *
     * @var ArrayCollection|LocalGeoPoint[]
     */
    private $regions;

    /**
     * LocalGeo constructor.
     */
    public function __construct()
    {
        $this->regions = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return $this
     */
    public function setId(int $id = null)
    {
        $this->id = $id;

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
     * @return LocalGeo
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ArrayCollection|LocalGeoPoint[]
     */
    public function getRegions(): ArrayCollection
    {
        return $this->regions;
    }

    /**
     * @param LocalGeoPoint $region
     *
     * @return LocalGeo
     */
    public function addRegion(LocalGeoPoint $region): self
    {
        if (!$this->regions->contains($region)) {
            $this->regions[] = $region;
        }

        return $this;
    }

    /**
     * @param LocalGeoPoint $region
     * @return bool
     */
    public function removeRegion(LocalGeoPoint $region): bool
    {
        return $this->regions->removeElement($region);
    }
}
