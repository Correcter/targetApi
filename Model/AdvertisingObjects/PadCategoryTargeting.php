<?php

namespace TargetApi\Model\AdvertisingObjects;

use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of PadCategoryTargeting.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class PadCategoryTargeting
{
    /**
     * @ArrayOfIntRange(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $Android;

    /**
     * @ArrayOfIntRange(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $iOS;

    /**
     * PadCategoryTargeting constructor.
     */
    public function __construct()
    {
        $this->Android = new ArrayCollection();
        $this->iOS = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getAndroid(): ArrayCollection
    {
        return $this->Android;
    }

    /**
     * @param null|int $android
     *
     * @return PadCategoryTargeting
     */
    public function addAndroid(int $android = null): self
    {
        if (!$this->Android->contains($android)) {
            $this->Android[] = $android;
        }

        return $this;
    }

    /**
     * @param int $android
     *
     * @return bool
     */
    public function removeAndroid(int $android): bool
    {
        return $this->Android->removeElement($android);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getiOS(): ArrayCollection
    {
        return $this->iOS;
    }

    /**
     * @param null|int $ios
     *
     * @return PadCategoryTargeting
     */
    public function addiOS(int $ios = null): self
    {
        if (!$this->iOS->contains($ios)) {
            $this->iOS[] = $ios;
        }

        return $this;
    }

    /**
     * @param int $ios
     *
     * @return bool
     */
    public function removeiOS(int $ios): bool
    {
        return $this->iOS->removeElement($ios);
    }
}
