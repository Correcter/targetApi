<?php

namespace TargetApi\Model\Handbooks;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of Region.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Region
{
    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $flags;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Код страны в формате ISO 3166-1 alpha-3 {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $isoAlpha3;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название региона {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $parentId;

    /**
     * Region constructor.
     */
    public function __construct()
    {
        $this->flags = new ArrayCollection();
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return $this
     */
    public function setId(int $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsoAlpha3(): string
    {
        return $this->isoAlpha3;
    }

    /**
     * @param null|string $isoAlpha3
     *
     * @return $this
     */
    public function setIsoAlpha3(string $isoAlpha3 = null)
    {
        $this->isoAlpha3 = $isoAlpha3;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return $this
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * @param null|int $parentId
     *
     * @return $this
     */
    public function setParentId(int $parentId = null)
    {
        $this->parentId = $parentId;

        return $this;
    }
}
