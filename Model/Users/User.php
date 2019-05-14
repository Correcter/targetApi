<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of User.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class User
{
    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $account;

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
    private $activeBanners;

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
     * @var null|AdditionalUserInfo
     */
    private $additionalInfo;

    /**
     * @Assert\Valid
     *
     * @var null|Agency
     */
    private $agency;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя пользователя родительского агентства {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $agencyUsername;

    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $allowedGeo;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $availableMailings;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя пользователя родительского представительства неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $branchUsername;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Валюта пользователя неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $currency;

    /**
     * @Assert\Email(
     *     message = "Значение поля '{{ value }}' - невалидный email."
     * )
     *
     * @var null|string
     */
    private $email;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $firstname;

    /**
     * @Assert\Range(
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
     * @Assert\Type(
     *     type="string",
     *     message="Справочная валюта пользователя неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $infoCurrency;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Язык пользователя неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "ru", "en" },
     *     message = "Язык пользователя не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $language;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Фамилия неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $lastname;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $mailings;

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
    private $maxActiveBanners;

    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $permissions;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $types;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя пользователя внутри сервиса неверного типа {{ type }}."
     * )
     *
     * @var null|string
     */
    private $username;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->additionalEmails = new ArrayCollection();
        $this->availableMailings = new ArrayCollection();
        $this->allowedGeo = new ArrayCollection();
        $this->mailings = new ArrayCollection();
        $this->types = new ArrayCollection();
    }

    /**
     * @return null|array
     */
    public function getAccount(): ?array
    {
        return $this->account;
    }

    /**
     * @param null|array $account
     *
     * @return User
     */
    public function setAccount(array $account = null): self
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
     * @param null|string $additionalEmail
     *
     * @return User
     */
    public function addAdditionalEmail(string $additionalEmail = null): self
    {
        if (!$this->additionalEmails->contains($additionalEmail)) {
            $this->additionalEmails[] = $additionalEmail;
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
     * @return null|int
     */
    public function getActiveBanners(): ?int
    {
        return $this->activeBanners;
    }

    /**
     * @param null|int $activeBanners
     *
     * @return User
     */
    public function setActiveBanners(int $activeBanners = null): self
    {
        $this->activeBanners = $activeBanners;

        return $this;
    }

    /**
     * @return null|AdditionalUserInfo
     */
    public function getAdditionalInfo(): ?AdditionalUserInfo
    {
        return $this->additionalInfo;
    }

    /**
     * @param null|AdditionalUserInfo $additionalInfo
     *
     * @return User
     */
    public function setAdditionalInfo(AdditionalUserInfo $additionalInfo = null): self
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * @return null|Agency
     */
    public function getAgency(): ?Agency
    {
        return $this->agency;
    }

    /**
     * @param null|Agency $agency
     *
     * @return User
     */
    public function setAgency(Agency $agency = null): self
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAgencyUsername(): ?string
    {
        return $this->agencyUsername;
    }

    /**
     * @param null|string $agencyUsername
     *
     * @return User
     */
    public function setAgencyUsername(string $agencyUsername = null): self
    {
        $this->agencyUsername = $agencyUsername;

        return $this;
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getAllowedGeo(): ArrayCollection
    {
        return $this->allowedGeo;
    }

    /**
     * @param null|int $allowedGeo
     *
     * @return User
     */
    public function addAllowedGeo(int $allowedGeo = null): self
    {
        if (!$this->allowedGeo->contains($allowedGeo)) {
            $this->allowedGeo[] = $allowedGeo;
        }

        return $this;
    }

    /**
     * @param int $allowedGeo
     *
     * @return bool
     */
    public function removeAllowedGeo(int $allowedGeo): bool
    {
        return $this->allowedGeo->removeElement($allowedGeo);
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getAvailableMailings(): ArrayCollection
    {
        return $this->availableMailings;
    }

    /**
     * @param null|string $availableMailing
     *
     * @return User
     */
    public function addAvailableMailing(string $availableMailing = null): self
    {
        if (!$this->additionalEmails->contains($availableMailing)) {
            $this->additionalEmails[] = $availableMailing;
        }

        return $this;
    }

    /**
     * @param string $availableMailing
     *
     * @return bool
     */
    public function removeAvailableMailing(string $availableMailing): bool
    {
        return $this->availableMailings->removeElement($availableMailing);
    }

    /**
     * @return null|string
     */
    public function getBranchUsername(): ?string
    {
        return $this->branchUsername;
    }

    /**
     * @param null|string $branchUsername
     *
     * @return User
     */
    public function setBranchUsername(string $branchUsername = null): self
    {
        $this->branchUsername = $branchUsername;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param null|string $currency
     *
     * @return User
     */
    public function setCurrency(string $currency = null): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     *
     * @return User
     */
    public function setEmail(string $email = null): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param null|string $firstname
     *
     * @return User
     */
    public function setFirstname(string $firstname = null): self
    {
        $this->firstname = $firstname;

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
     * @param null|int $id
     *
     * @return User
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getInfoCurrency(): ?string
    {
        return $this->infoCurrency;
    }

    /**
     * @param null|string $infoCurrency
     *
     * @return User
     */
    public function setInfoCurrency(string $infoCurrency = null): self
    {
        $this->infoCurrency = $infoCurrency;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param null|string $language
     *
     * @return User
     */
    public function setLanguage(string $language = null): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param null|string $lastname
     *
     * @return User
     */
    public function setLastname(string $lastname = null): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getMailings(): ArrayCollection
    {
        return $this->mailings;
    }

    /**
     * @param null|string $mailing
     *
     * @return User
     */
    public function addMailing(string $mailing = null): self
    {
        if (!$this->mailings->contains($mailing)) {
            $this->mailings[] = $mailing;
        }

        return $this;
    }

    /**
     * @param string $mailing
     *
     * @return bool
     */
    public function removeMailing(string $mailing): bool
    {
        return $this->mailings->removeElement($mailing);
    }

    /**
     * @return int
     */
    public function getMaxActiveBanners(): ?int
    {
        return $this->maxActiveBanners;
    }

    /**
     * @param null|int $maxActiveBanners
     *
     * @return User
     */
    public function setMaxActiveBanners(int $maxActiveBanners = null): self
    {
        $this->maxActiveBanners = $maxActiveBanners;

        return $this;
    }

    /**
     * @return array
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }

    /**
     * @param null|array $permissions
     *
     * @return User
     */
    public function setPermissions(array $permissions = null): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return User
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getTypes(): ArrayCollection
    {
        return $this->types;
    }

    /**
     * @param null|string $type
     *
     * @return User
     */
    public function addType(string $type = null): self
    {
        if (!$this->types->contains($type)) {
            $this->types[] = $type;
        }

        return $this;
    }

    /**
     * @param string $type
     *
     * @return bool
     */
    public function removeType(string $type): bool
    {
        return $this->types->removeElement($type);
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
     * @return User
     */
    public function setUsername(string $username = null): self
    {
        $this->username = $username;

        return $this;
    }
}
