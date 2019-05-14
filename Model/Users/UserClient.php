<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of UserClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class UserClient
{
    /**
     * @Assert\Valid
     *
     * @var UserAccount
     */
    private $account;

    /**
     * @ArrayOfString(
     *     email = true,
     *     message = "Значение не соответствует валидному email {{ value }}"
     * )
     *
     * @var ArrayCollection|string[]
     */
    private $additionalEmails;

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
     * UserClient constructor.
     */
    public function __construct()
    {
        $this->additionalEmails = new ArrayCollection();
    }

    /**
     * @return UserAccount
     */
    public function getAccount(): UserAccount
    {
        return $this->account;
    }

    /**
     * @param UserAccount $account
     *
     * @return UserClient
     */
    public function setAccount(UserAccount $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getAdditionalEmails(): ArrayCollection
    {
        return $this->additionalEmails;
    }

    /**
     * @param string $mobileInstall
     *
     * @return $this
     */
    public function addAdditionalEmail(string $mobileInstall = null)
    {
        if (!$this->additionalEmails->contains($mobileInstall)) {
            $this->additionalEmails[] = $mobileInstall;
        }

        return $this;
    }

    /**
     * @param string $additionalEmail
     *
     * @return bool
     */
    public function removeAdditionalEmail(string $additionalEmail): bool
    {
        return $this->additionalEmails->removeElement($additionalEmail);
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
    public function setAdditionalInfo(AdditionalClientInfo $additionalInfo = null)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return UserClient
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return UserClient
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param null|string $username
     *
     * @return UserClient
     */
    public function setUsername(string $username = null): self
    {
        $this->username = $username;

        return $this;
    }
}
