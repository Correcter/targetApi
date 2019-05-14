<?php

namespace TargetApi\Model\PartnerPlatforms;

use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of GroupPadFilter.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class GroupPadFilter
{
    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $allowMobileAndroidCategory;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $allowMobileApps;

    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $allowMobileCategory;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $allowPadUrl;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $allowTopics;

    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $denyMobileAndroidCategory;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $denyMobileApps;

    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $denyMobileCategory;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $denyPadUrl;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $denyTopics;

    /**
     * GroupPadFilter constructor.
     */
    public function __construct()
    {
        $this->allowMobileApps = new ArrayCollection();
        $this->allowMobileCategory = new ArrayCollection();
        $this->allowMobileAndroidCategory = new ArrayCollection();
        $this->allowTopics = new ArrayCollection();
        $this->allowPadUrl = new ArrayCollection();
        $this->denyMobileAndroidCategory = new ArrayCollection();
        $this->denyMobileApps = new ArrayCollection();
        $this->denyMobileCategory = new ArrayCollection();
        $this->denyPadUrl = new ArrayCollection();
        $this->denyTopics = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getAllowMobileAndroidCategories(): ArrayCollection
    {
        return $this->allowMobileAndroidCategory;
    }

    /**
     * @param null|int $allowMobileAndroidCategory
     *
     * @return GroupPadFilter
     */
    public function addAllowMobileAndroidCategory(int $allowMobileAndroidCategory = null): self
    {
        if (!$this->allowMobileAndroidCategory->contains($allowMobileAndroidCategory)) {
            $this->allowMobileAndroidCategory[] = $allowMobileAndroidCategory;
        }

        return $this;
    }

    /**
     * @param int $allowMobileAndroidCategory
     *
     * @return bool
     */
    public function removeAllowMobileAndroidCategory(int $allowMobileAndroidCategory): bool
    {
        return $this->allowMobileAndroidCategory->removeElement($allowMobileAndroidCategory);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getAllowMobileApps(): ArrayCollection
    {
        return $this->allowMobileApps;
    }

    /**
     * @param null|string $allowMobileApp
     *
     * @return GroupPadFilter
     */
    public function addAllowMobileApp(string $allowMobileApp = null): self
    {
        if (!$this->allowMobileApps->contains($allowMobileApp)) {
            $this->allowMobileApps[] = $allowMobileApp;
        }

        return $this;
    }

    /**
     * @param string $allowMobileApp
     *
     * @return bool
     */
    public function removeAllowMobileApp(string $allowMobileApp): bool
    {
        return $this->allowMobileApps->removeElement($allowMobileApp);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getAllowMobileCategory(): ArrayCollection
    {
        return $this->allowMobileCategory;
    }

    /**
     * @param null|int $allowMobileCategory
     *
     * @return GroupPadFilter
     */
    public function addAllowMobileCategory(int $allowMobileCategory = null): self
    {
        if (!$this->allowMobileCategory->contains($allowMobileCategory)) {
            $this->allowMobileCategory[] = $allowMobileCategory;
        }

        return $this;
    }

    /**
     * @param int $allowMobileCategory
     *
     * @return bool
     */
    public function removeAllowMobileCategory(int $allowMobileCategory): bool
    {
        return $this->allowMobileCategory->removeElement($allowMobileCategory);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getAllowPadUrl(): ArrayCollection
    {
        return $this->allowPadUrl;
    }

    /**
     * @param null|string $allowPadUrl
     *
     * @return GroupPadFilter
     */
    public function addAllowPadUrl(string $allowPadUrl = null): self
    {
        if (!$this->allowPadUrl->contains($allowPadUrl)) {
            $this->allowPadUrl[] = $allowPadUrl;
        }

        return $this;
    }

    /**
     * @param string $allowPadUrl
     *
     * @return bool
     */
    public function removeAllowPadUrl(string $allowPadUrl): bool
    {
        return $this->allowPadUrl->removeElement($allowPadUrl);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getAllowTopics(): ArrayCollection
    {
        return $this->allowTopics;
    }

    /**
     * @param null|string $allowTopic
     *
     * @return GroupPadFilter
     */
    public function addAllowTopic(string $allowTopic = null): self
    {
        if (!$this->allowTopics->contains($allowTopic)) {
            $this->allowTopics[] = $allowTopic;
        }

        return $this;
    }

    /**
     * @param string $allowTopic
     *
     * @return bool
     */
    public function removeAllowTopic(string $allowTopic): bool
    {
        return $this->allowTopics->removeElement($allowTopic);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getDenyMobileAndroidCategory(): ArrayCollection
    {
        return $this->denyMobileAndroidCategory;
    }

    /**
     * @param null|int $denyMobileAndroidCategory
     *
     * @return GroupPadFilter
     */
    public function addDenyMobileAndroidCategory(int $denyMobileAndroidCategory = null): self
    {
        if (!$this->denyMobileAndroidCategory->contains($denyMobileAndroidCategory)) {
            $this->denyMobileAndroidCategory[] = $denyMobileAndroidCategory;
        }

        return $this;
    }

    /**
     * @param int $denyMobileAndroidCategory
     *
     * @return bool
     */
    public function removeDenyMobileAndroidCategory(int $denyMobileAndroidCategory): bool
    {
        return $this->denyMobileAndroidCategory->removeElement($denyMobileAndroidCategory);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getDenyMobileApps(): ArrayCollection
    {
        return $this->denyMobileApps;
    }

    /**
     * @param null|string $denyMobileApp
     *
     * @return GroupPadFilter
     */
    public function addDenyMobileApp(string $denyMobileApp = null): self
    {
        if (!$this->denyMobileApps->contains($denyMobileApp)) {
            $this->denyMobileApps[] = $denyMobileApp;
        }

        return $this;
    }

    /**
     * @param string $denyMobileApp
     *
     * @return bool
     */
    public function removeDenyMobileApp(string $denyMobileApp): bool
    {
        return $this->denyMobileApps->removeElement($denyMobileApp);
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getDenyMobileCategory(): ArrayCollection
    {
        return $this->denyMobileCategory;
    }

    /**
     * @param null|int $denyMobileCategory
     *
     * @return GroupPadFilter
     */
    public function addDenyMobileCategory(int $denyMobileCategory = null): self
    {
        if (!$this->denyMobileCategory->contains($denyMobileCategory)) {
            $this->denyMobileCategory[] = $denyMobileCategory;
        }

        return $this;
    }

    /**
     * @param int $denyMobileCategory
     *
     * @return bool
     */
    public function removeDenyMobileCategory(int $denyMobileCategory): bool
    {
        return $this->denyMobileCategory->removeElement($denyMobileCategory);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getDenyPadUrl(): ArrayCollection
    {
        return $this->denyPadUrl;
    }

    /**
     * @param null|string $denyPadUrl
     *
     * @return GroupPadFilter
     */
    public function addDenyPadUrl(string $denyPadUrl = null): self
    {
        if (!$this->denyPadUrl->contains($denyPadUrl)) {
            $this->denyPadUrl[] = $denyPadUrl;
        }

        return $this;
    }

    /**
     * @param string $denyPadUrl
     *
     * @return bool
     */
    public function removeDenyPadUrl(string $denyPadUrl): bool
    {
        return $this->denyPadUrl->removeElement($denyPadUrl);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getDenyTopics(): ArrayCollection
    {
        return $this->denyTopics;
    }

    /**
     * @param null|string $denyTopic
     *
     * @return GroupPadFilter
     */
    public function addDenyTopic(string $denyTopic = null): self
    {
        if (!$this->denyTopics->contains($denyTopic)) {
            $this->denyTopics[] = $denyTopic;
        }

        return $this;
    }

    /**
     * @param string $denyTopic
     *
     * @return bool
     */
    public function removeDenyTopic(string $denyTopic): bool
    {
        return $this->denyTopics->removeElement($denyTopic);
    }
}
