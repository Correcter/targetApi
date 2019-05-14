<?php

namespace TargetApi\Model\Handbooks;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of MobileOperationSystem.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class MobileOperationSystem
{
    /**
     * @Assert\NotBlank(message="Описание мобильной операционной системы обязательна для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Описание мобильной операционной системы {{ value }} имеет неверный тип {{ type }}."
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
     * @Assert\NotBlank(message="Описание мобильной операционной системы обязательна для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название мобильной операционной системы {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $os;

    /**
     * @Assert\NotBlank(message="Описание мобильной операционной системы обязательна для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Версия мобильной операционной системы {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $version;

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

    /**
     * @return string
     */
    public function getOs(): string
    {
        return $this->os;
    }

    /**
     * @param string $os
     */
    public function setOs(string $os)
    {
        $this->os = $os;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }
}
