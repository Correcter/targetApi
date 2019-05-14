<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ReservedAmounts.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ReservedAmounts
{
    /**
     * @Assert\Valid
     *
     * @var ReservedAmount
     */
    private $reservedAmounts;

    /**
     * @return ReservedAmount
     */
    public function getReservedAmounts(): ?ReservedAmount
    {
        return $this->reservedAmounts;
    }

    /**
     * @param ReservedAmount $reservedAmounts
     *
     * @return ReservedAmounts
     */
    public function setReservedAmounts(ReservedAmount $reservedAmounts): self
    {
        $this->reservedAmounts = $reservedAmounts;

        return $this;
    }
}
