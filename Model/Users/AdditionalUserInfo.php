<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AdditionalUserInfo.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AdditionalUserInfo
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Адрес {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $address;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Заметки агентства о клиенте {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $clientInfo;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя клиента агентства {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $clientName;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя и фамилия {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Номер телефона {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $phone;

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getClientInfo(): string
    {
        return $this->clientInfo;
    }

    /**
     * @param string $clientInfo
     */
    public function setClientInfo(string $clientInfo)
    {
        $this->clientInfo = $clientInfo;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     */
    public function setClientName(string $clientName)
    {
        $this->clientName = $clientName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }
}
