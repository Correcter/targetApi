<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ManagerClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ManagerClient
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип доступа менеджера к аккаунту клиента неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "full_access", "readonly", "fin_readonly", "ads_readonly" },
     *     message = "Тип доступа менеджера к аккаунту клиента не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $accessType;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус связи с учётной записью клиента неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус связи с учётной записью клиента не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
     */
    private $status;

    /**
     * @Assert\Valid
     *
     * @var null|UserClient
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
     * @param string|null $accessType
     * @return ManagerClient
     */
    public function setAccessType(string $accessType = null): self
    {
        $this->accessType = $accessType;

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
     * @param string|null $status
     * @return ManagerClient
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return UserClient
     */
    public function getUser(): UserClient
    {
        return $this->user;
    }

    /**
     * @param UserClient|null $user
     * @return ManagerClient
     */
    public function setUser(UserClient $user = null): self
    {
        $this->user = $user;

        return $this;
    }
}
