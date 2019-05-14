<?php

namespace TargetApi\Model\Handbooks;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of MobileVendors.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class MobileVendors
{
    /**
     * @Assert\NotBlank(message="Производитель мобильного устройства обязательна для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Производитель мобильного устройства {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $description;

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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id = null)
    {
        $this->id = $id;
    }
}
