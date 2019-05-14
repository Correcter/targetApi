<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of BranchClient.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BranchClient
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип доступа представительства к учетной записи клиента неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "full_access" },
     *     message = "Тип доступа представительства к учетной записи клиента не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var null|string
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
     * @var null|BranchUserClient
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
     * @param null|string $accessType
     *
     * @return BranchClient
     */
    public function setAccessType(string $accessType = null): self
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
     * @return $this
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return BranchUserClient
     */
    public function getUser(): ?BranchUserClient
    {
        return $this->user;
    }

    /**
     * @param null|BranchUserClient $user
     *
     * @return BranchClient
     */
    public function setUser(BranchUserClient $user = null): self
    {
        $this->user = $user;

        return $this;
    }
}
