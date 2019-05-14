<?php

namespace TargetApi\Model\Finance;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of Transaction.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Transaction
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Баланс агентства неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $agencyBalance;

    /**
     * @Assert\NotBlank(message="Сумма обязательна для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Сумма неверного типа {{ type }}."
     * )
     * @Assert\Range(
     *     min=0.01,
     *     max=9999999999,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     * @var string
     */
    private $amount;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Баланс клиента неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $clientBalance;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя клиента имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $clientUsername;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата и время создания имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $createdAt;


    /**
     * @param null|string $agencyBalance
     *
     * @return Transaction
     */
    public function setAgencyBalance(string $agencyBalance = null): self
    {
        $this->agencyBalance = $agencyBalance;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAgencyBalance(): ?string
    {
        return $this->agencyBalance;
    }

    /**
     * @param string $amount
     *
     * @return Transaction
     */
    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param null|string $clientBalance
     *
     * @return Transaction
     */
    public function setClientBalance(string $clientBalance = null): self
    {
        $this->clientBalance = $clientBalance;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getClientBalance(): ?string
    {
        return $this->clientBalance;
    }


    /**
     * @param null|string $clientUsername
     *
     * @return Transaction
     */
    public function setClientUsername(string $clientUsername = null): self
    {
        $this->clientUsername = $clientUsername;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getClientUsername(): ?string
    {
        return $this->clientUsername;
    }


    /**
     * @param null|string $createdAt
     *
     * @return Transaction
     */
    public function setCreatedAt(string $createdAt = null): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
}
