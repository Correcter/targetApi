<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Urls.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Urls
{
    /**
     * @Assert\NotBlank(message="Идентификатор ссылки обязателен для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="Идентификатор ссылки {{ value }} имеет неверный тип {{ type }}."
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
     *     message="Ссылка имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $url;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Идентификатор связанного объекта имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $urlObjectId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип связанного объекта имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $urlObjectType;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип урла имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $urlTypes;

    /**
     * @return null|int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url = null)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrlObjectId(): string
    {
        return $this->urlObjectId;
    }

    /**
     * @param string $urlObjectId
     */
    public function setUrlObjectId(string $urlObjectId = null)
    {
        $this->urlObjectId = $urlObjectId;
    }

    /**
     * @return string
     */
    public function getUrlObjectType(): string
    {
        return $this->urlObjectType;
    }

    /**
     * @param string $urlObjectType
     */
    public function setUrlObjectType(string $urlObjectType = null)
    {
        $this->urlObjectType = $urlObjectType;
    }

    /**
     * @return string
     */
    public function getUrlTypes(): string
    {
        return $this->urlTypes;
    }

    /**
     * @param string $urlTypes
     */
    public function setUrlTypes(string $urlTypes = null)
    {
        $this->urlTypes = $urlTypes;
    }
}
