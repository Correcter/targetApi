<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of Goals.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Goals
{
    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|Goal[]
     */
    private $mobileInstall;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|Goal[]
     */
    private $okGame;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|Goal[]
     */
    private $okGroup;

    /**
     * @Assert\Valid
     *
     * @var CounterGoal[]
     */
    private $topmailru;

    /**
     * Goals constructor.
     */
    public function __construct()
    {
        $this->mobileInstall = new ArrayCollection();
        $this->okGame = new ArrayCollection();
        $this->okGroup = new ArrayCollection();
        $this->topmailru = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|Goal[]
     */
    public function getMobileInstall(): ArrayCollection
    {
        return $this->mobileInstall;
    }

    /**
     * @param Goal $mobileInstall
     *
     * @return bool
     */
    public function removeMobileInstall(Goal $mobileInstall): bool
    {
        return $this->mobileInstall->removeElement($mobileInstall);
    }

    /**
     * @param Goal $mobileInstall
     *
     * @return $this
     */
    public function addMobileInstall(Goal $mobileInstall = null)
    {
        if (!$this->mobileInstall->contains($mobileInstall)) {
            $this->mobileInstall[] = $mobileInstall;
        }

        return $this;
    }

    /**
     * @return ArrayCollection|Goal[]
     */
    public function getOkGame(): ArrayCollection
    {
        return $this->okGame;
    }

    /**
     * @param Goal $okGame
     *
     * @return bool
     */
    public function removeOkGame(Goal $okGame): bool
    {
        return $this->okGame->removeElement($okGame);
    }

    /**
     * @param Goal $okGame
     *
     * @return Goals
     */
    public function addOkGame(Goal $okGame = null): self
    {
        if (!$this->okGame->contains($okGame)) {
            $this->okGame[] = $okGame;
        }

        return $this;
    }

    /**
     * @return ArrayCollection|Goal[]
     */
    public function getOkGroup(): ArrayCollection
    {
        return $this->okGroup;
    }

    /**
     * @param Goal $okGroup
     *
     * @return bool
     */
    public function removeOkGroup(Goal $okGroup): bool
    {
        return $this->okGroup->removeElement($okGroup);
    }

    /**
     * @param null|Goal $okGroup
     *
     * @return Goals
     */
    public function addOkGroup(Goal $okGroup = null): self
    {
        if (!$this->okGroup->contains($okGroup)) {
            $this->okGroup[] = $okGroup;
        }

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getTopmailru(): ArrayCollection
    {
        return $this->topmailru;
    }

    /**
     * @param CounterGoal $topmailru
     *
     * @return bool
     */
    public function removeTopmailru(CounterGoal $topmailru): bool
    {
        return $this->topmailru->removeElement($topmailru);
    }

    /**
     * @param null|CounterGoal $topmailru
     *
     * @return Goals
     */
    public function addTopmailru(CounterGoal $topmailru = null): self
    {
        if (!$this->topmailru->contains($topmailru)) {
            $this->topmailru[] = $topmailru;
        }

        return $this;
    }
}
