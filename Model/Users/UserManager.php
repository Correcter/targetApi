<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of UserManager.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class UserManager
{
    /**
     * @Assert\Valid
     *
     * @var AdditionalManagerInfo
     */
    private $additionalInfo;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|ManagerClientInfo[]
     */
    private $clients;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Идентификатор менеджера {{ value }} имеет неверный тип {{ type }}."
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
     *     message="Имя менеджера внутри сервиса неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $username;

    /**
     * UserClient constructor.
     */
    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|ManagerClientInfo[]
     */
    public function getClients(): ArrayCollection
    {
        return $this->clients;
    }

    /**
     * @param ManagerClientInfo $client
     *
     * @return $this
     */
    public function addClient(ManagerClientInfo $client = null)
    {
        if (!$this->clients->contains($client)) {
            $this->clients[] = $client;
        }

        return $this;
    }

    /**
     * @param ManagerClientInfo $client
     *
     * @return bool
     */
    public function removeClient(ManagerClientInfo $client): bool
    {
        return $this->clients->removeElement($client);
    }

    /**
     * @return AdditionalManagerInfo
     */
    public function getAdditionalInfo(): AdditionalManagerInfo
    {
        return $this->additionalInfo;
    }

    /**
     * @param AdditionalManagerInfo $additionalInfo
     */
    public function setAdditionalInfo(AdditionalManagerInfo $additionalInfo = null)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id = null)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username = null)
    {
        $this->username = $username;
    }
}
