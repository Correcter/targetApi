<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AgencyClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AgencyClientsCount
{
    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Количество активных клиентов {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $active;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Количество заблокированных клиентов {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $blocked;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Количество удаленных клиентов {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $deleted;

    /**
     * @return int
     */
    public function getActive(): int
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active = null)
    {
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getBlocked(): int
    {
        return $this->blocked;
    }

    /**
     * @param int $blocked
     */
    public function setBlocked(int $blocked = null)
    {
        $this->blocked = $blocked;
    }

    /**
     * @return int
     */
    public function getDeleted(): int
    {
        return $this->deleted;
    }

    /**
     * @param int $deleted
     */
    public function setDeleted(int $deleted = null)
    {
        $this->deleted = $deleted;
    }
}
