<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ManagerClientsCount.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ManagerClientsCount
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
     * @param null|int $active
     *
     * @return ManagerClientsCount
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
     * @param null|int $blocked
     *
     * @return ManagerClientsCount
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
     * @param null|int $deleted
     *
     * @return ManagerClientsCount
     */
    public function setDeleted(int $deleted = null): self
    {
        $this->deleted = $deleted;

        return $this;
    }
}
