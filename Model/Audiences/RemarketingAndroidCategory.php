<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of RemarketingAndroidCategory.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingAndroidCategory
{
    /**
     * @Assert\NotBlank(message="Идентификатор категории приложений Android (из MobileCategory) обязателен для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $categoryId;

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
     * @return null|int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return RemarketingAndroidCategory
     */
    public function setCategoryId(int $categoryId = null): self
    {
        $this->categoryId = $categoryId;

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
     * @return RemarketingAndroidCategory
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }
}
