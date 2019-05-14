<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of UserAccount.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class UserAccount
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Живой баланс {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $aBalance;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Баланс имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $balance;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Средства, замороженные на оплату CPI имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $currencyBalanceHold;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Идентификатор аккаунта {{ value }} имеет неверный тип {{ type }}."
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
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getABalance(): ?string
    {
        return $this->aBalance;
    }

    /**
     * @param null|string $aBalance
     *
     * @return UserAccount
     */
    public function setABalance(string $aBalance = null): self
    {
        $this->aBalance = $aBalance;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBalance(): ?string
    {
        return $this->balance;
    }

    /**
     * @param string $balance
     *
     * @return UserAccount
     */
    public function setBalance(string $balance = null): self
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrencyBalanceHold(): ?string
    {
        return $this->currencyBalanceHold;
    }

    /**
     * @param null|string $currencyBalanceHold
     *
     * @return UserAccount
     */
    public function setCurrencyBalanceHold(string $currencyBalanceHold = null): self
    {
        $this->currencyBalanceHold = $currencyBalanceHold;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return UserAccount
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return UserAccount
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

        return $this;
    }
}
