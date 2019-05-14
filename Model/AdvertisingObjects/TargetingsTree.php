<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of TargetingsTree.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class TargetingsTree
{
    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|TargetingsTreeElement[]
     */
    private $interests;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|TargetingsTreeElement[]
     */
    private $interestsShort;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|TargetingsTreeElement[]
     */
    private $interestsStable;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|TargetingsTreeElement[]
     */
    private $interestsSocDem;

    /**
     * TargetingsTree constructor.
     */
    public function __construct()
    {
        $this->interests = new ArrayCollection();
        $this->interestsShort = new ArrayCollection();
        $this->interestsStable = new ArrayCollection();
        $this->interestsSocDem = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|TargetingsTreeElement[]
     */
    public function getInterestsShort(): ArrayCollection
    {
        return $this->interestsShort;
    }

    /**
     * @param TargetingsTreeElement $interestsShort
     *
     * @return TargetingsTree
     */
    public function addInterestsShort(TargetingsTreeElement $interestsShort = null): self
    {
        if (!$this->interestsShort->contains($interestsShort)) {
            $this->interestsShort[] = $interestsShort;
        }

        return $this;
    }

    /**
     * @param TargetingsTreeElement $interestsShort
     *
     * @return bool
     */
    public function removeInterestsShort(TargetingsTreeElement $interestsShort): bool
    {
        return $this->interestsShort->removeElement($interestsShort);
    }

    /**
     * @return ArrayCollection|TargetingsTreeElement[]
     */
    public function getInterests(): ArrayCollection
    {
        return $this->interests;
    }

    /**
     * @param TargetingsTreeElement $interest
     *
     * @return TargetingsTree
     */
    public function addInterest(TargetingsTreeElement $interest = null): self
    {
        if (!$this->interests->contains($interest)) {
            $this->interests[] = $interest;
        }

        return $this;
    }

    /**
     * @param TargetingsTreeElement $interest
     *
     * @return bool
     */
    public function removeInterest(TargetingsTreeElement $interest): bool
    {
        return $this->interests->removeElement($interest);
    }

    /**
     * @return ArrayCollection|TargetingsTreeElement[]
     */
    public function getInterestsStable(): ArrayCollection
    {
        return $this->interestsStable;
    }

    /**
     * @param TargetingsTreeElement $interestStable
     *
     * @return TargetingsTree
     */
    public function addInterestStable(TargetingsTreeElement $interestStable = null): self
    {
        if (!$this->interestsStable->contains($interestStable)) {
            $this->interestsStable[] = $interestStable;
        }

        return $this;
    }

    /**
     * @param TargetingsTreeElement $interestStable
     *
     * @return bool
     */
    public function removeInterestsStable(TargetingsTreeElement $interestStable): bool
    {
        return $this->interestsStable->removeElement($interestStable);
    }

    /**
     * @return ArrayCollection|TargetingsTreeElement[]
     */
    public function getInterestsSocDem(): ArrayCollection
    {
        return $this->interestsSocDem;
    }

    /**
     * @param TargetingsTreeElement $interestsSocDem
     *
     * @return TargetingsTree
     */
    public function addInterestsSocDem(TargetingsTreeElement $interestsSocDem = null): self
    {
        if (!$this->interestsSocDem->contains($interestsSocDem)) {
            $this->interestsSocDem[] = $interestsSocDem;
        }

        return $this;
    }

    /**
     * @param TargetingsTreeElement $interestsSocDem
     *
     * @return bool
     */
    public function removeInterestsSocDem(TargetingsTreeElement $interestsSocDem): bool
    {
        return $this->interestsSocDem->removeElement($interestsSocDem);
    }

}
