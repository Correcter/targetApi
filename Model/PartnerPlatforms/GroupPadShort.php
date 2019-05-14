<?php

namespace TargetApi\Model\PartnerPlatforms;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of GroupPadShort.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class GroupPadShort
{
    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Идентификатор рекламной площадки {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var null|int
     */
    private $id;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return GroupPadShort
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }
}
