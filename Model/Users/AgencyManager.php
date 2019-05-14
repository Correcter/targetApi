<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AgencyManager.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AgencyManager
{
    /**
     * @Assert\Valid
     *
     * @var null|UserManager
     */
    private $user;

    /**
     * @return UserManager
     */
    public function getUser(): ?UserManager
    {
        return $this->user;
    }

    /**
     * @param UserManager $user
     *
     * @return AgencyManager
     */
    public function setUser(UserManager $user): self
    {
        $this->user = $user;

        return $this;
    }
}
