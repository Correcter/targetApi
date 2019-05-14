<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingInAppEventCountDate.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingInAppEventCountDate
{
    /**
     * @Assert\Date
     */
    protected $date;
    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     * @Assert\Type(
     *     type="integer",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var int
     */
    private $count;

    /**
     * RemarketingInAppEventCountDate constructor.
     */
    public function __construct()
    {
        $this->date = (new \DateTime())->format('Y-m-d');
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getDate(): Assert\Date
    {
        return $this->date;
    }

    /**
     * @param Assert\Date $date
     */
    public function setDate(Assert\Date $date)
    {
        $this->date = $date;
    }
}
