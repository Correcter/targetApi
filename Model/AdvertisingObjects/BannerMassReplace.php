<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of BannerMassReplace.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BannerMassReplace
{
    /**
     * @Assert\NotBlank(message="Текст, который будет найден и заменен обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Текст, который будет найден и заменен имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $changeFrom;

    /**
     * @Assert\NotBlank(message="Новый текст, который будет использован после замены обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Новый текст, который будет использован после замены имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $changeTo;

    /**
     * @Assert\NotBlank(message="Новый текст, который будет использован после замены обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Новый текст, который будет использован после замены имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "urls", "textblocks" },
     *     message = "Новый текст, который будет использован после замены, не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $field;

    /**
     * @ArrayOfIntRange(
     *     noBlank = true,
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $ids;

    /**
     * BannerMassReplace constructor.
     */
    public function __construct()
    {
        $this->ids = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getChangeFrom(): string
    {
        return $this->changeFrom;
    }

    /**
     * @param string $changeFrom
     *
     * @return BannerMassReplace
     */
    public function setChangeFrom(string $changeFrom): self
    {
        $this->changeFrom = $changeFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getChangeTo(): string
    {
        return $this->changeTo;
    }

    /**
     * @param string $changeTo
     *
     * @return BannerMassReplace
     */
    public function setChangeTo(string $changeTo): self
    {
        $this->changeTo = $changeTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param string $field
     *
     * @return BannerMassReplace
     */
    public function setField(string $field): self
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getIds(): ArrayCollection
    {
        return $this->ids;
    }

    /**
     * @param null|int $id
     *
     * @return BannerMassReplace
     */
    public function addId(int $id = null): self
    {
        if (!$this->ids->contains($id)) {
            $this->ids[] = $id;
        }

        return $this;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function removeId(int $id): bool
    {
        return $this->ids->removeElement($id);
    }
}
