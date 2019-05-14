<?php

namespace TargetApi\Model\Handbooks;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of WindowsPhoneApp.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class WindowsPhoneApp
{
    /**
     * @Assert\NotBlank(message="Возрастное ограничение приложения мобильного приложения обязательно для заполнения")
     * @Assert\Regex("/\d{2}\+/")
     *
     * @var string
     */
    private $contentRating;

    /**
     * @Assert\NotBlank(message="Описание мобильного приложения обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Описание мобильного приложения {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @Assert\NotBlank(message="Внутрений уникальный идентификатор иконки мобильного приложения обязателен для заполнения")
     * @Assert\Valid
     *
     * @var IconImage
     */
    private $iconImage;

    /**
     * @Assert\NotBlank(message="Внутрений уникальный идентификатор категории мобильного приложения - MobileCategory обязателен для заполнения")
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
     * @Assert\NotBlank(message="Идентификатор приложения в WindowsPhoneStore обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Идентификатор приложения в WindowsPhoneStore {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Название мобильного приложения обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название мобильного приложения {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @Assert\NotBlank(message="Тип (game, application) мобильного приложения обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Тип (game, application) мобильного приложения {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getContentRating(): string
    {
        return $this->contentRating;
    }

    /**
     * @param string $contentRating
     */
    public function setContentRating(string $contentRating)
    {
        $this->contentRating = $contentRating;
    }

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
     * @return IconImage
     */
    public function getIconImage(): IconImage
    {
        return $this->iconImage;
    }

    /**
     * @param IconImage $iconImage
     */
    public function setIconImage(IconImage $iconImage)
    {
        $this->iconImage = $iconImage;
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

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
}
