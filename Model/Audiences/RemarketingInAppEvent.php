<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of RemarketingInAppEvent.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingInAppEvent
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название мобильного приложения имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $appName;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Платформа мобильного приложения неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "ios", "android" },
     *     message = "Платформа мобильного приложения не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $platform;

    /**
     * @Assert\Range(
     *     min=-214748364,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $rbMobileAppId;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|InAppTracker[]
     */
    private $trackers;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Ссылка на мобильное приложение неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $url;

    /**
     * RemarketingInAppEvent constructor.
     */
    public function __construct()
    {
        $this->trackers = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }

    /**
     * @param null|string $appName
     *
     * @return RemarketingInAppEvent
     */
    public function setAppName(string $appName = null): self
    {
        $this->appName = $appName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param null|string $created
     *
     * @return RemarketingInAppEvent
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @param null|string $platform
     *
     * @return RemarketingInAppEvent
     */
    public function setPlatform(string $platform = null): self
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * @return int
     */
    public function getRbMobileAppId(): int
    {
        return $this->rbMobileAppId;
    }

    /**
     * @param null|int $rbMobileAppId
     *
     * @return $this
     */
    public function setRbMobileAppId(int $rbMobileAppId = null): self
    {
        $this->rbMobileAppId = $rbMobileAppId;

        return $this;
    }

    /**
     * @return ArrayCollection|InAppTracker[]
     */
    public function getTrackers(): ArrayCollection
    {
        return $this->trackers;
    }

    /**
     * @param InAppTracker $tracker
     *
     * @return RemarketingInAppEvent
     */
    public function addTracker(InAppTracker $tracker): self
    {
        if (!$this->trackers->contains($tracker)) {
            $this->trackers[] = $tracker;
        }

        return $this;
    }

    /**
     * @param InAppTracker $tracker
     *
     * @return bool
     */
    public function removeTracker(InAppTracker $tracker): bool
    {
        return $this->trackers->removeElement($tracker);
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param null|string $url
     *
     * @return RemarketingInAppEvent
     */
    public function setUrl(string $url = null): self
    {
        $this->url = $url;

        return $this;
    }
}
