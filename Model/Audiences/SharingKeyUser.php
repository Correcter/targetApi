<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of SharingKeyUser.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class SharingKeyUser
{
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
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $key;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|UserSegment[]
     */
    private $sources;

    /**
     * @Assert\NotBlank(message="Имя пользователя в сегмент обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $username;

    /**
     * SharingKeyUser constructor.
     */
    public function __construct()
    {
        $this->sources = new ArrayCollection();
    }

    /**
     * @return null|int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return SharingKeyUser
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return SharingKeyUser
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return ArrayCollection|UserSegment[]
     */
    public function getSource(): ArrayCollection
    {
        return $this->sources;
    }

    /**
     * @param UserSegment $source
     *
     * @return SharingKeyUser
     */
    public function addSource(UserSegment $source): self
    {
        if (!$this->sources->contains($source)) {
            $this->sources[] = $source;
        }

        return $this;
    }

    /**
     * @param UserSegment $source
     *
     * @return SharingKeyUser
     */
    public function removeSource(UserSegment $source): bool
    {
        return $this->sources->removeElement($source);
    }

    /**
     * @return null|string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return SharingKeyUser
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
}
