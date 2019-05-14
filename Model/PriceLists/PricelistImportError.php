<?php

namespace TargetApi\Model\PriceLists;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of PricelistImportError.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class PricelistImportError
{
    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $code;

    /**
     * @Assert\DateTime
     *
     * @var null|\DateTime
     */
    private $created;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="XML-элемент прайс-листа, в котором произошла ошибка имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $element;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Сообщение имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $message;

    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $offerId;

    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $pricelistId;

    /**
     * @return null|int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param null|int $code
     *
     * @return PricelistImportError
     */
    public function setCode(int $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * @param null|string $created
     *
     * @return PricelistImportError
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getElement(): ?string
    {
        return $this->element;
    }

    /**
     * @param null|string $element
     *
     * @return PricelistImportError
     */
    public function setElement(string $element = null): self
    {
        $this->element = $element;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param null|string $message
     *
     * @return PricelistImportError
     */
    public function setMessage(string $message = null): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getOfferId(): ?int
    {
        return $this->offerId;
    }

    /**
     * @param int $offerId
     *
     * @return PricelistImportError
     */
    public function setOfferId(int $offerId): self
    {
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getPricelistId(): ?int
    {
        return $this->pricelistId;
    }

    /**
     * @param null|int $pricelistId
     *
     * @return PricelistImportError
     */
    public function setPricelistId(int $pricelistId = null): self
    {
        $this->pricelistId = $pricelistId;

        return $this;
    }
}
