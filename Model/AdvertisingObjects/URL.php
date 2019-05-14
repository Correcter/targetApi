<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of URL.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class URL
{
    /**
     * @Assert\NotBlank(message="Ссылка, обязательно в схеме http:// или https:// обязателена для заполнения")
     *
     * @Assert\Url
     *
     * @var null|string
     */
    protected $url;

    /**
     * @ArrayOfString
     *
     * @var null|string[]
     */
    private $counters;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Флаг, определяющий достаточно ли конверсий лидов в установки собрало рекламируемое по ссылке приложение неверного типа {{ type }}."
     * )
     *
     * @var null|bool
     */
    private $hasGoals;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Ссылка предварительного просмотра, если он доступен {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $previewLink;

    /**
     * @ArrayOfString
     *
     * @var null|string[]
     */
    private $urlTypes;

    /**
     * URL constructor.
     */
    public function __construct()
    {
        $this->counters = new ArrayCollection();
        $this->urlTypes = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getCounters(): ArrayCollection
    {
        return $this->counters;
    }

    /**
     * @param null|string $counter
     *
     * @return URL
     */
    public function addCounter(string $counter = null): self
    {
        if (!$this->counters->contains($counter)) {
            $this->counters[] = $counter;
        }

        return $this;
    }

    /**
     * @param string $counter
     *
     * @return bool
     */
    public function removeCounter(string $counter): bool
    {
        return $this->counters->removeElement($counter);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getUrlTypes(): ArrayCollection
    {
        return $this->urlTypes;
    }

    /**
     * @param null|string $urlType
     *
     * @return URL
     */
    public function addUrlType(string $urlType = null): self
    {
        if (!$this->urlTypes->contains($urlType)) {
            $this->urlTypes[] = $urlType;
        }

        return $this;
    }

    /**
     * @param string $urlType
     *
     * @return bool
     */
    public function removeUrlType(string $urlType): bool
    {
        return $this->urlTypes->removeElement($urlType);
    }

    /**
     * @return bool
     */
    public function isHasGoals(): ?bool
    {
        return $this->hasGoals;
    }

    /**
     * @param bool $hasGoals
     *
     * @return URL
     */
    public function setHasGoals(bool $hasGoals): self
    {
        $this->hasGoals = $hasGoals;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return URL
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPreviewLink(): ?string
    {
        return $this->previewLink;
    }

    /**
     * @param null|string $previewLink
     *
     * @return URL
     */
    public function setPreviewLink(string $previewLink = null): self
    {
        $this->previewLink = $previewLink;

        return $this;
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
     * @return URL
     */
    public function setUrl(string $url = null): self
    {
        $this->url = $url;

        return $this;
    }
}
