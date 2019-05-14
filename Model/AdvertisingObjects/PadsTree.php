<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of PadsTree.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class PadsTree
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
     * @Assert\Valid
     *
     * @var null|ArrayCollection[]
     */
    private $tree;

    /**
     * PadsTree constructor.
     */
    public function __construct()
    {
        $this->tree = new ArrayCollection();
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
     * @return PadsTree
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getTree(): ArrayCollection
    {
        return $this->tree;
    }

    /**
     * @param null|array $tree
     *
     * @return PadsTree
     */
    public function addTree(array $tree = null): self
    {
        if (!$this->tree->contains($tree)) {
            $this->tree[] = $tree;
        }

        return $this;
    }

    /**
     * @param array $tree
     *
     * @return bool
     */
    public function removeTree(array $tree): bool
    {
        return $this->tree->removeElement($tree);
    }
}
