<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of TargetingsTreeElement.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class TargetingsTreeElement
{
    /**
     * @Assert\Valid
     *
     * @var ArrayCollection
     */
    private $children;

    /**
     * @Assert\Range(
     *     min=-2147483647,
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
     *     message="Название интереса неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Не чекбокс неверного типа {{ type }}."
     * )
     *
     * @var null|bool
     */
    private $noCheckbox;

    /**
     * @ArrayOfString
     *
     * @var string[]
     */
    private $synonyms;

    /**
     * TargetingsTreeElement constructor.
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->synonyms = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|array[]
     */
    public function getChildren(): ArrayCollection
    {
        return $this->children;
    }

    /**
     * @param array $children
     *
     * @return TargetingsTreeElement
     */
    public function addChildren($children = null): self
    {
        if (!$this->children->contains($children)) {
            $this->children[] = $children;
        }

        return $this;
    }

    /**
     * @param array $children
     *
     * @return bool
     */
    public function removeChildren($children): bool
    {
        return $this->children->removeElement($children);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getSynonyms(): ArrayCollection
    {
        return $this->synonyms;
    }

    /**
     * @param string $synonym
     *
     * @return TargetingsTreeElement
     */
    public function addSynonym(string $synonym = null): self
    {
        if (!$this->synonyms->contains($synonym)) {
            $this->synonyms[] = $synonym;
        }

        return $this;
    }

    /**
     * @param string $synonym
     *
     * @return bool
     */
    public function removeSynonym(string $synonym): bool
    {
        return $this->synonyms->removeElement($synonym);
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
     * @return TargetingsTreeElement
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return TargetingsTreeElement
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|bool
     */
    public function getNoCheckbox(): ?bool
    {
        return $this->noCheckbox;
    }

    /**
     * @param bool $noCheckbox
     *
     * @return TargetingsTreeElement
     */
    public function setNoCheckbox(bool $noCheckbox = null): self
    {
        $this->noCheckbox = $noCheckbox;

        return $this;
    }
}
