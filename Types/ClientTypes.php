<?php

namespace TargetApi\Types;

/**
 * Description of ClientTypes.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ClientTypes extends AbstractTypes
{
    /**
     * @var null|string
     */
    private $userUsername;

    /**
     * @var null|string
     */
    private $userUsernameIn;

    /**
     * @var null|string
     */
    private $status;

    /**
     * @var null|string
     */
    private $statusNe;

    /**
     * @var null|string
     */
    private $statusIn;

    /**
     * LeadFormTypes constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return null|string
     */
    public function getUserUsername(): ?string
    {
        return $this->userUsername;
    }

    /**
     * @param null|string $userUsername
     *
     * @return ClientTypes
     */
    public function setUserUsername(string $userUsername = null): self
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserUsernameIn(): ?string
    {
        return $this->userUsernameIn;
    }

    /**
     * @param null|string $userUsernameIn
     *
     * @return ClientTypes
     */
    public function setUserUsernameIn(string $userUsernameIn = null): self
    {
        $this->userUsernameIn = $userUsernameIn;

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
     * @return ClientTypes
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatusNe(): ?string
    {
        return $this->statusNe;
    }

    /**
     * @param null|string $statusNe
     *
     * @return ClientTypes
     */
    public function setStatusNe(string $statusNe = null): self
    {
        $this->statusNe = $statusNe;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatusIn(): ?string
    {
        return $this->statusIn;
    }

    /**
     * @param $statusIn
     *
     * @return ClientTypes
     */
    public function setStatusIn(string $statusIn = null): self
    {
        $this->statusIn = $statusIn;

        return $this;
    }
}
