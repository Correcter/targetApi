<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AgencyClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AgencyClient
{
    /**
     * @Assert\NotBlank(message="Тип доступа агентства к учетной записи клиента обязателен для заполнения")
     *
     * @Assert\Type(
     *     type="string",
     *     message="Тип доступа агентства к учетной записи клиента неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "full_access", "readonly", "fin_readonly", "ads_readonly" },
     *     message = "Тип доступа агентства к учетной записи клиента не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $accessType;

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
     * @var null|string
     */
    private $status;

    /**
     * @Assert\Valid
     *
     * @var UserClient
     */
    private $user;

    /**
     * @return null|string
     */
    public function getAccessType(): ?string
    {
        return $this->accessType;
    }

    /**
     * @param string $accessType
     *
     * @return AgencyClient
     */
    public function setAccessType(string $accessType): self
    {
        $this->accessType = $accessType;

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
     * @return AgencyClient
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|UserClient
     */
    public function getUser(): ?UserClient
    {
        return $this->user;
    }

    /**
     * @param null|UserClient $user
     *
     * @return AgencyClient
     */
    public function setUser(UserClient $user = null): self
    {
        $this->user = $user;

        return $this;
    }
}
