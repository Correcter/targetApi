<?php

namespace TargetApi\Model\AdvertisingObjects;

use TargetApi\Collections\ArrayCollection;

/**
 * Description of FulltimeTargeting.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class FulltimeTargeting
{
    /**
     * @ArrayOfString
     *
     * @var string[]
     */
    private $flags;

    /**
     * @ArrayOfIntRange(
     *     min=0,
     *     max=23,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $fri;

    /**
     * @ArrayOfIntRange(
     *     min=0,
     *     max=23,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $mon;

    /**
     * @ArrayOfIntRange(
     *     min=0,
     *     max=23,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $sat;

    /**
     * @ArrayOfIntRange(
     *     min=0,
     *     max=23,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $sun;

    /**
     * @ArrayOfIntRange(
     *     min=0,
     *     max=23,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $thu;

    /**
     * @ArrayOfIntRange(
     *     min=0,
     *     max=23,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $tue;

    /**
     * @ArrayOfIntRange(
     *     min=0,
     *     max=23,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $wed;

    /**
     * FulltimeTargeting constructor.
     */
    public function __construct()
    {
        $this->flags = new ArrayCollection();
        $this->fri = new ArrayCollection();
        $this->mon = new ArrayCollection();
        $this->sat = new ArrayCollection();
        $this->sun = new ArrayCollection();
        $this->thu = new ArrayCollection();
        $this->tue = new ArrayCollection();
        $this->wed = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getFlags(): ArrayCollection
    {
        return $this->flags;
    }

    /**
     * @param string $flag
     *
     * @return $this
     */
    public function addFlag(string $flag = null)
    {
        if (!$this->flags->contains($flag)) {
            $this->flags[] = $flag;
        }

        return $this;
    }

    /**
     * @param string $flag
     *
     * @return bool
     */
    public function removeFlag(string $flag): bool
    {
        return $this->flags->removeElement($flag);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getFri(): ArrayCollection
    {
        return $this->fri;
    }

    /**
     * @param int $fri
     *
     * @return $this
     */
    public function addFri(int $fri = null)
    {
        if (!$this->fri->contains($fri)) {
            $this->fri[] = $fri;
        }

        return $this;
    }

    /**
     * @param int $fri
     *
     * @return bool
     */
    public function removeFri(int $fri): bool
    {
        return $this->fri->removeElement($fri);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getMon(): ArrayCollection
    {
        return $this->mon;
    }

    /**
     * @param int $mon
     *
     * @return $this
     */
    public function addMon(int $mon = null)
    {
        if (!$this->mon->contains($mon)) {
            $this->mon[] = $mon;
        }

        return $this;
    }

    /**
     * @param int $mon
     *
     * @return bool
     */
    public function removeMon(int $mon): bool
    {
        return $this->mon->removeElement($mon);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getSat(): ArrayCollection
    {
        return $this->sat;
    }

    /**
     * @param int $sat
     *
     * @return $this
     */
    public function addSat(int $sat = null)
    {
        if (!$this->sat->contains($sat)) {
            $this->sat[] = $sat;
        }

        return $this;
    }

    /**
     * @param int $sat
     *
     * @return bool
     */
    public function removeSat(int $sat): bool
    {
        return $this->sat->removeElement($sat);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getSun(): ArrayCollection
    {
        return $this->sun;
    }

    /**
     * @param int $sun
     *
     * @return $this
     */
    public function addSun(int $sun = null)
    {
        if (!$this->sun->contains($sun)) {
            $this->sun[] = $sun;
        }

        return $this;
    }

    /**
     * @param int $sun
     *
     * @return bool
     */
    public function removeSun(int $sun): bool
    {
        return $this->sun->removeElement($sun);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getThu(): ArrayCollection
    {
        return $this->thu;
    }

    /**
     * @param int $thu
     *
     * @return $this
     */
    public function addThu(int $thu = null)
    {
        if (!$this->thu->contains($thu)) {
            $this->thu[] = $thu;
        }

        return $this;
    }

    /**
     * @param int $thu
     *
     * @return bool
     */
    public function removeThu(int $thu): bool
    {
        return $this->thu->removeElement($thu);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getTue(): ArrayCollection
    {
        return $this->tue;
    }

    /**
     * @param int $tue
     *
     * @return $this
     */
    public function addTue(int $tue = null)
    {
        if (!$this->tue->contains($tue)) {
            $this->tue[] = $tue;
        }

        return $this;
    }

    /**
     * @param int $tue
     *
     * @return bool
     */
    public function removeTue(int $tue): bool
    {
        return $this->tue->removeElement($tue);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getWed(): ArrayCollection
    {
        return $this->wed;
    }

    /**
     * @param int $wed
     *
     * @return $this
     */
    public function addWed(int $wed = null)
    {
        if (!$this->tue->contains($wed)) {
            $this->wed[] = $wed;
        }

        return $this;
    }

    /**
     * @param int $wed
     *
     * @return bool
     */
    public function removeWed(int $wed): bool
    {
        return $this->wed->removeElement($wed);
    }
}
