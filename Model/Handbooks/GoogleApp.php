<?php

namespace TargetApi\Model\Handbooks;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of GoogleApp.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class GoogleApp
{
    /**
     * @Assert\NotBlank(message="Внутрений уникальный идентификатор категории мобильного приложения - MobileCategory обязателен для заполнения")
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $categoryId;

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
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Идентификатор приложения в GooglePlay обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Идентификатор приложения в GooglePlay {{ value }} имеет неверный тип {{ type }}."
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
     * @return null|int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return GoogleApp
     */
    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentRating(): string
    {
        return $this->contentRating;
    }

    /**
     * @param string $contentRating
     *
     * @return GoogleApp
     */
    public function setContentRating(string $contentRating): self
    {
        $this->contentRating = $contentRating;

        return $this;
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
     *
     * @return GoogleApp
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
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
     *
     * @return GoogleApp
     */
    public function setIconImage(IconImage $iconImage): self
    {
        $this->iconImage = $iconImage;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return GoogleApp
     */
    public function setId(int $id = null): self
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
     * @param string $name
     *
     * @return GoogleApp
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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
     *
     * @return GoogleApp
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

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
     * @param string $type
     *
     * @return GoogleApp
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
