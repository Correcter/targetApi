<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AgencyManagerClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AgencyManagerClient
{
    /**
     * @Assert\NotBlank(message="Тип доступа менеджера к учетной записи клиента обязательна для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Статус клиента неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "full_access", "readonly", "fin_readonly", "ads_readonly" },
     *     message = "Статус клиента не соответствует ни одному из допустимых вариантов"
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
     * @var null|UserManagerClient
     */
    private $user;

    /**
     * @return string
     */
    public function getAccessType(): string
    {
        return $this->accessType;
    }

    /**
     * @param string $accessType
     *
     * @return AgencyManagerClient
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
     * @return AgencyManagerClient
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|UserManagerClient
     */
    public function getUser(): ?UserManagerClient
    {
        return $this->user;
    }

    /**
     * @param null|UserManagerClient $user
     *
     * @return AgencyManagerClient
     */
    public function setUser(UserManagerClient $user = null): self
    {
        $this->user = $user;

        return $this;
    }
}
