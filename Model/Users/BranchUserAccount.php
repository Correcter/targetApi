<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of BranchUserAccount.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BranchUserAccount
{
    /**
     * @Assert\Type(
     *     type="double",
     *     message="Живой баланс {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $aBalance;

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
     *     message="Средства замороженные на оплату CPI имеет неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $currencyBalanceHold;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип имеет неверный тип {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "juridical", "physical" },
     *     message = "Тип не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @return float
     */
    public function getABalance(): float
    {
        return $this->aBalance;
    }

    /**
     * @param float $aBalance
     */
    public function setABalance(float $aBalance = null)
    {
        $this->aBalance = $aBalance;
    }

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
    public function setBalance(float $balance = null)
    {
        $this->balance = $balance;
    }

    /**
     * @return float
     */
    public function getCurrencyBalanceHold(): float
    {
        return $this->currencyBalanceHold;
    }

    /**
     * @param float $currencyBalanceHold
     */
    public function setCurrencyBalanceHold(float $currencyBalanceHold = null)
    {
        $this->currencyBalanceHold = $currencyBalanceHold;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->type = $type;
    }
}
