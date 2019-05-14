<?php

namespace TargetApi\Model\Statistics;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of LeadInfo.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class LeadInfo
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
    private $bannerId;

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
    private $campaignId;

    /**
     * @Assert\DateTime
     *
     * @var null|\DateTime
     */
    private $createdTime;

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
    private $formId;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название формы LeadAds имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $formName;

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
     * @Assert\Date
     *
     * @var null|string
     */
    private $userBirthday;

    /**
     * @Assert\Email(
     *     message = "Почтовый адрес пользователя '{{ value }}' - невалидный email."
     * )
     *
     * @var null|string
     */
    private $userEmail;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя пользователя имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $userFullname;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Местоположение пользователя имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $userGeo;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Телефон пользователя имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $userPhone;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $userQuestions;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Пол пользователя неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "male", "female", "unknown" },
     *     message = "Пол пользователя не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $userSex;

    /**
     * LeadInfo constructor.
     */
    public function __construct()
    {
        $this->userQuestions = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getUserQuestions(): ArrayCollection
    {
        return $this->userQuestions;
    }

    /**
     * @param null|string $userQuestion
     *
     * @return LeadInfo
     */
    public function addUserQuestion(string $userQuestion = null): self
    {
        if (!$this->userQuestions->contains($userQuestion)) {
            $this->userQuestions[] = $userQuestion;
        }

        return $this;
    }

    /**
     * @param string $userQuestion
     *
     * @return bool
     */
    public function removeUserQuestion(string $userQuestion): bool
    {
        return $this->userQuestions->removeElement($userQuestion);
    }

    /**
     * @return int
     */
    public function getBannerId(): ?int
    {
        return $this->bannerId;
    }

    /**
     * @param null|int $bannerId
     *
     * @return LeadInfo
     */
    public function setBannerId(int $bannerId = null): self
    {
        $this->bannerId = $bannerId;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param null|int $campaignId
     *
     * @return LeadInfo
     */
    public function setCampaignId(int $campaignId = null): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedTime(): ?string
    {
        return $this->createdTime;
    }

    /**
     * @param null|string $createdTime
     *
     * @return LeadInfo
     */
    public function setCreatedTime(string $createdTime = null): self
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getFormId(): ?int
    {
        return $this->formId;
    }

    /**
     * @param null|int $formId
     *
     * @return LeadInfo
     */
    public function setFormId(int $formId = null): self
    {
        $this->formId = $formId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFormName(): ?string
    {
        return $this->formName;
    }

    /**
     * @param null|string $formName
     *
     * @return LeadInfo
     */
    public function setFormName(string $formName = null): self
    {
        $this->formName = $formName;

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
     * @return LeadInfo
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserBirthday(): ?string
    {
        return $this->userBirthday;
    }

    /**
     * @param null|string $userBirthday
     *
     * @return LeadInfo
     */
    public function setUserBirthday(string $userBirthday = null): self
    {
        $this->userBirthday = $userBirthday;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    /**
     * @param null|string $userEmail
     *
     * @return LeadInfo
     */
    public function setUserEmail(string $userEmail = null): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserFullname(): ?string
    {
        return $this->userFullname;
    }

    /**
     * @param null|string $userFullname
     *
     * @return LeadInfo
     */
    public function setUserFullname(string $userFullname = null): self
    {
        $this->userFullname = $userFullname;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserGeo(): ?string
    {
        return $this->userGeo;
    }

    /**
     * @param null|string $userGeo
     *
     * @return LeadInfo
     */
    public function setUserGeo(string $userGeo = null): self
    {
        $this->userGeo = $userGeo;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param null|string $userPhone
     *
     * @return LeadInfo
     */
    public function setUserPhone(string $userPhone = null): self
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserSex(): ?string
    {
        return $this->userSex;
    }

    /**
     * @param null|string $userSex
     *
     * @return LeadInfo
     */
    public function setUserSex(string $userSex = null): self
    {
        $this->userSex = $userSex;

        return $this;
    }
}
