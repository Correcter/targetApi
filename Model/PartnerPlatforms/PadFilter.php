<?php

namespace TargetApi\Model\PartnerPlatforms;

use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of PadFilter.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class PadFilter
{
    /**
     * @ArrayOfString(
     *     choices = { "static", "animated", "video", "html5" },
     *     message = "Разрешенные типы картинок не соответствуют ни одному допустимому значению"
     * )
     *
     * @var ArrayCollection|string[]
     */
    private $allowImageTypes;

    /**
     * @ArrayOfString(
     *     choices = { "static", "animated", "video", "html5" },
     *     message = "Запрещенные типы картинок не соответствуют ни одному допустимому значению"
     * )
     *
     * @var ArrayCollection|string[]
     */
    private $denyImageTypes;

    /**
     * PadFilter constructor.
     */
    public function __construct()
    {
        $this->allowImageTypes = new ArrayCollection();
        $this->denyImageTypes = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getAllowImageTypes(): ArrayCollection
    {
        return $this->allowImageTypes;
    }

    /**
     * @param string|null $allowImageType
     * @return PadFilter
     */
    public function addAllowImageType(string $allowImageType = null): self
    {
        if (!$this->allowImageTypes->contains($allowImageType)) {
            $this->allowImageTypes[] = $allowImageType;
        }

        return $this;
    }

    /**
     * @param string $allowImageType
     *
     * @return bool
     */
    public function removeEvent(string $allowImageType): bool
    {
        return $this->allowImageTypes->removeElement($allowImageType);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getDenyImageTypes(): ArrayCollection
    {
        return $this->denyImageTypes;
    }

    /**
     * @param string|null $denyImageType
     * @return PadFilter
     */
    public function addDenyImageType(string $denyImageType = null): self
    {
        if (!$this->denyImageTypes->contains($denyImageType)) {
            $this->denyImageTypes[] = $denyImageType;
        }

        return $this;
    }

    /**
     * @param string $denyImageType
     *
     * @return bool
     */
    public function removeDenyImageType(string $denyImageType): bool
    {
        return $this->denyImageTypes->removeElement($denyImageType);
    }
}
