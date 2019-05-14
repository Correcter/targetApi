<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AdditionalManagerInfo.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AdditionalManagerInfo
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Имя менеджера агентства {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $clientName;

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     */
    public function setClientName(string $clientName)
    {
        $this->clientName = $clientName;
    }
}
