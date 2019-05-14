<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of BranchClientsCount.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BranchClientsCount
{
    /**
     * @Assert\Range(
     *     max=2147483647,
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $active;

    /**
     * @Assert\Range(
     *     max=2147483647,
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $blocked;

    /**
     * @Assert\Range(
     *     max=2147483647,
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $deleted;

    /**
     * @return null|int
     */
    public function getActive(): ?int
    {
        return $this->active;
    }

    /**
     * @param int|null $active
     * @return BranchClientsCount
     */
    public function setActive(int $active = null): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getBlocked(): ?int
    {
        return $this->blocked;
    }

    /**
     * @param int|null $blocked
     * @return BranchClientsCount
     */
    public function setBlocked(int $blocked = null): self
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getDeleted(): ?int
    {
        return $this->deleted;
    }

    /**
     * @param int|null $deleted
     * @return BranchClientsCount
     */
    public function setDeleted(int $deleted = null): self
    {
        $this->deleted = $deleted;

        return $this;
    }
}
