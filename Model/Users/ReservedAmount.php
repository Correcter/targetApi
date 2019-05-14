<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ReservedAmount.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ReservedAmount
{
    /**
     * @Assert\Type(
     *     type="double",
     *     message="Баланс имеет неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $balance;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Количество кредитных денег на аккаунте {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $credit;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Бонусные деньги от активации купонов имеют неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $gBalance;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Средства, замороженные на оплату CPI имеют неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $hold;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Кредитный лимит имеют неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $holdOverdraftLimit;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="ID пользователя {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $userId;

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     */
    public function setBalance(float $balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return float
     */
    public function getCredit(): float
    {
        return $this->credit;
    }

    /**
     * @param float $credit
     */
    public function setCredit(float $credit)
    {
        $this->credit = $credit;
    }

    /**
     * @return float
     */
    public function getGBalance(): float
    {
        return $this->gBalance;
    }

    /**
     * @param float $gBalance
     */
    public function setGBalance(float $gBalance)
    {
        $this->gBalance = $gBalance;
    }

    /**
     * @return float
     */
    public function getHold(): float
    {
        return $this->hold;
    }

    /**
     * @param float $hold
     */
    public function setHold(float $hold)
    {
        $this->hold = $hold;
    }

    /**
     * @return float
     */
    public function getHoldOverdraftLimit(): float
    {
        return $this->holdOverdraftLimit;
    }

    /**
     * @param float $holdOverdraftLimit
     */
    public function setHoldOverdraftLimit(float $holdOverdraftLimit)
    {
        $this->holdOverdraftLimit = $holdOverdraftLimit;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
}
