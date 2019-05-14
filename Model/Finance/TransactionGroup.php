<?php

namespace TargetApi\Model\Finance;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of TransactionGroup.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class TransactionGroup
{
    /**
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
     * @var null|string
     */
    private $amount;

    /**
     * \@Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $clientId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Месяц (дата в формате YY-MM-01) имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $date;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $description;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата и время первой транзакции в группе имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $firstAt;

    /**
     * \@Assert\Range(
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
     * @ArrayOfIntRange(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $invoices;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Группа коммерческих транзакций имееют неверный тип {{ type }}."
     * )
     *
     * @var null|bool
     */
    private $isCommercial;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Дата и время последней транзакции в группе имееют неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $lastAt;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Сумма неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $paymentsTotal;

    /**
     * @Assert\Url
     *
     * @var null|string
     */
    protected $receipt;

    /**
     * @var null|string
     */
    private $taxAmount;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип списка неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "charge", "charge_credit", "deposit" , "deposit_credit" },
     *     message = "Тип не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $type;

    /**
     * TransactionGroup constructor.
     */
    public function __construct()
    {
        $this->invoices= new ArrayCollection();
    }

    /**
     * @param null|string $amount
     *
     * @return TransactionGroup
     */
    public function setAmount(string $amount = null): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getClientBalance(): ?string
    {
        return $this->amount;
    }

    /**
     * @param null|int $clientId
     *
     * @return TransactionGroup
     */
    public function setClientId(int $clientId = null): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * @param null|string $date
     *
     * @return TransactionGroup
     */
    public function setAate(string $date = null): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param null|string $description
     *
     * @return TransactionGroup
     */
    public function setDescription(string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $firstAt
     *
     * @return TransactionGroup
     */
    public function setFirstAt(string $firstAt = null): self
    {
        $this->firstAt = $firstAt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirstAt(): ?string
    {
        return $this->firstAt;
    }

    /**
     * @param null|int $id
     *
     * @return TransactionGroup
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

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
     * @return ArrayCollection|int[]
     */
    public function getInvoice(): ArrayCollection
    {
        return $this->invoices;
    }

    /**
     * @param null|int $invoice
     *
     * @return TransactionGroup
     */
    public function addInvoice(int $invoice = null): self
    {
        if (!$this->invoices->contains($invoice)) {
            $this->invoices[] = $invoice;
        }

        return $this;
    }

    /**
     * @param int $invoice
     *
     * @return bool
     */
    public function removeInvoice(int $invoice): bool
    {
        return $this->invoices->removeElement($invoice);
    }

    /**
     * @return bool
     */
    public function isCommercial(): ?bool
    {
        return $this->isCommercial;
    }

    /**
     * @param bool $isCommercial
     *
     * @return TransactionGroup
     */
    public function setIsCommercial(bool $isCommercial = false): self
    {
        $this->isCommercial = $isCommercial;

        return $this;
    }

    /**
     * @param null|string $lastAt
     *
     * @return TransactionGroup
     */
    public function setLastAt(string $lastAt = null): self
    {
        $this->lastAt = $lastAt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastAt(): ?string
    {
        return $this->lastAt;
    }

    /**
     * @param null|string $paymentsTotal
     *
     * @return TransactionGroup
     */
    public function setPaymentsTotal(string $paymentsTotal = null): self
    {
        $this->paymentsTotal = $paymentsTotal;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPaymentsTotal(): ?string
    {
        return $this->paymentsTotal;
    }

    /**
     * @param null|string $receipt
     *
     * @return TransactionGroup
     */
    public function setReceipt(string $receipt = null): self
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReceipt(): ?string
    {
        return $this->receipt;
    }

    /**
     * @param null|string $taxAmount
     *
     * @return TransactionGroup
     */
    public function setTaxAmount(string $taxAmount = null): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @param null|string $type
     *
     * @return TransactionGroup
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
