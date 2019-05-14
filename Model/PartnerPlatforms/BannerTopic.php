<?php

namespace TargetApi\Model\PartnerPlatforms;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of BannerTopic.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BannerTopic
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Идентификатор {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
