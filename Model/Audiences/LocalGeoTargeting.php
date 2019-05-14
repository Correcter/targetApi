<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;
use TargetApi\Validator\Constraints\NotBlankObject;

/**
 * Description of LocalGeoTargeting.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LocalGeoTargeting
{
    /**
     * @ArrayOfString(
     *     choices = { "home", "work" },
     *     message = "Тип предоставленного источника данных не соответствует допустимому значению"
     * )
     *
     * @var ArrayCollection|string[]
     */
    private $locType;

    /**
     * @NotBlankObject(noBlankMess="Cписок точек обязатлен для заполнения")
     *
     * @var ArrayCollection|LocalGeoPoint[]
     */
    private $locations;

    /**
     * @Assert\NotBlank(message="Тип посещения обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Тип посещения неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "now", "usual" },
     *     message = "Тип посещения не соответствует ни одному из допустимых значений"
     * )
     *
     * @var string
     */
    private $visitType;

    /**
     * LocalGeoTargeting constructor.
     */
    public function __construct()
    {
        $this->locations = new ArrayCollection();
        $this->locType = new ArrayCollection();
    }

    /**
     * @return array
     */
    public function getLocType(): array
    {
        return $this->locType;
    }

    /**
     * @param string $locType
     *
     * @return LocalGeoTargeting
     */
    public function addLocType(string $locType = null): self
    {
        if (!$this->locType->contains($locType)) {
            $this->locType[] = $locType;
        }

        return $this;
    }

    /**
     * @param string $locType
     *
     * @return bool
     */
    public function removeLocType(string $locType): bool
    {
        return $this->locType->removeElement($locType);
    }

    /**
     * @return ArrayCollection|LocalGeoPoint[]
     */
    public function getLocations(): ArrayCollection
    {
        return $this->locations;
    }

    /**
     * @param LocalGeoPoint $location
     *
     * @return LocalGeoTargeting
     */
    public function addLocation(LocalGeoPoint $location): self
    {
        if (!$this->locations->contains($location)) {
            $this->locations[] = $location;
        }

        return $this;
    }

    /**
     * @param LocalGeoPoint $location
     *
     * @return bool
     */
    public function removeLocation(LocalGeoPoint $location): bool
    {
        return $this->locations->removeElement($location);
    }

    /**
     * @return string
     */
    public function getVisitType(): string
    {
        return $this->visitType;
    }

    /**
     * @param string $visitType
     */
    public function setVisitType(string $visitType)
    {
        $this->visitType = $visitType;
    }
}
