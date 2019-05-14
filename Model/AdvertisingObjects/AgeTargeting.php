<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of AgeTargeting.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AgeTargeting
{
    /**
     * @Assert\NotBlank(message="Возраст обязателен для заполнения")
     * @ArrayOfIntRange(
     *     min=0,
     *     max=79,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $ageList;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Расширять ограничения неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $expand;

    /**
     * AgeTargeting constructor.
     */
    public function __construct()
    {
        $this->ageList = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getAgeList(): ArrayCollection
    {
        return $this->ageList;
    }

    /**
     * @param int $ageList
     *
     * @return $this
     */
    public function addAgeList(int $ageList = null)
    {
        if (!$this->ageList->contains($ageList)) {
            $this->ageList[] = $ageList;
        }

        return $this;
    }

    /**
     * @param int $ageList
     *
     * @return bool
     */
    public function removeAgeList(int $ageList): bool
    {
        return $this->ageList->removeElement($ageList);
    }

    /**
     * @return bool
     */
    public function isExpand(): bool
    {
        return $this->expand;
    }

    /**
     * @param bool $expand
     */
    public function setExpand(bool $expand = false)
    {
        $this->expand = $expand;
    }
}
