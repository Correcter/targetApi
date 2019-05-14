<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AdditionalUserInfo.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Agency
{
    /**
     * @Assert\Type(
     *     type="double",
     *     message="Комиссия представительства {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $buyerCommission;

    /**
     * @Assert\Type(
     *     type="double",
     *     message="Комиссия представительства имеет неверный тип {{ type }}."
     * )
     *
     * @var float
     */
    private $overridingCommission;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Признак, что агентство является представительством неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $isBuyer;

    /**
     * @return float
     */
    public function getBuyerCommission(): float
    {
        return $this->buyerCommission;
    }

    /**
     * @param float $buyerCommission
     */
    public function setBuyerCommission(float $buyerCommission = null)
    {
        $this->buyerCommission = $buyerCommission;
    }

    /**
     * @return float
     */
    public function getOverridingCommission(): float
    {
        return $this->overridingCommission;
    }

    /**
     * @param float $overridingCommission
     */
    public function setOverridingCommission(float $overridingCommission = null)
    {
        $this->overridingCommission = $overridingCommission;
    }

    /**
     * @return bool
     */
    public function getIsBuyer(): bool
    {
        return $this->isBuyer;
    }

    /**
     * @param bool $isBuyer
     */
    public function setIsBuyer(bool $isBuyer = false)
    {
        $this->isBuyer = $isBuyer;
    }
}
