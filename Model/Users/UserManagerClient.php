<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of UserManagerClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class UserManagerClient
{
    /**
     * @Assert\Valid
     *
     * @var UserAccount
     */
    private $account;

    /**
     * @Assert\Valid
     *
     * @var AdditionalClientInfo
     */
    private $additionalInfo;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Идентификатор клиента {{ value }} имеет неверный тип {{ type }}."
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
     *     message="Статус клиента неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус клиента не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя клиента внутри сервиса неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $username;

    /**
     * @return UserAccount
     */
    public function getAccount(): UserAccount
    {
        return $this->account;
    }

    /**
     * @param UserAccount $account
     */
    public function setAccount(UserAccount $account)
    {
        $this->account = $account;
    }

    /**
     * @return AdditionalClientInfo
     */
    public function getAdditionalInfo(): AdditionalClientInfo
    {
        return $this->additionalInfo;
    }

    /**
     * @param AdditionalClientInfo $additionalInfo
     */
    public function setAdditionalInfo(AdditionalClientInfo $additionalInfo)
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
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
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
    public function setUsername(string $username)
    {
        $this->username = $username;
    }
}
