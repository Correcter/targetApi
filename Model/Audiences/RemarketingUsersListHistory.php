<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingUsersListHistory.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingUsersListHistory
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус обработки списка неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $created;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $diff;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус обработки списка неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string|null $created
     * @return RemarketingUsersListHistory
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiff(): int
    {
        return $this->diff;
    }

    /**
     * @param int $diff
     */
    public function setDiff(int $diff)
    {
        $this->diff = $diff;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}
