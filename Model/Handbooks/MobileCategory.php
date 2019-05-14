<?php

namespace TargetApi\Model\Handbooks;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of MobileCategory.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class MobileCategory
{
    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название категории {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Платформа категории (Android/iOS) {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $platform;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип категории (app/game) {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return $this
     */
    public function setId(int $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return $this
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @param null|string $platform
     *
     * @return $this
     */
    public function setPlatform(string $platform = null)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return $this
     */
    public function setType(string $type = null)
    {
        $this->type = $type;

        return $this;
    }
}
