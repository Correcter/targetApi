<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of BranchUserClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BranchUserClient
{
    /**
     * @Assert\Valid
     *
     * @var BranchUserAccount
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
     * @var AdditionalBranchClientInfo
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
     * @return BranchUserAccount
     */
    public function getAccount(): BranchUserAccount
    {
        return $this->account;
    }

    /**
     * @param BranchUserAccount $account
     */
    public function setAccount(BranchUserAccount $account = null)
    {
        $this->account = $account;
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
     * @return AdditionalBranchClientInfo
     */
    public function getAdditionalInfo(): AdditionalBranchClientInfo
    {
        return $this->additionalInfo;
    }

    /**
     * @param AdditionalBranchClientInfo $additionalInfo
     */
    public function setAdditionalInfo(AdditionalBranchClientInfo $additionalInfo = null)
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
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
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
    public function setUsername(string $username = null)
    {
        $this->username = $username;
    }
}
