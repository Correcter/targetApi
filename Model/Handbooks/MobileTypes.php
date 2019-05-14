<?php

namespace TargetApi\Model\Handbooks;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of MobileTypes.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class MobileTypes
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Описание типа устройства {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Внутрений уникальный идентификатор типа устройства {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     *
     * @return $this
     */
    public function setDescription(string $description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param null|string $id
     *
     * @return $this
     */
    public function setId(string $id = null)
    {
        $this->id = $id;

        return $this;
    }
}
