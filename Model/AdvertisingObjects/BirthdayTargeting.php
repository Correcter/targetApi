<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of BirthdayTargeting.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class BirthdayTargeting
{
    /**
     * @Assert\NotBlank(message="Поле дней после дня рождения обязателено для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="Поле дней после дня рождения {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=0,
     *     max=30,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $daysAfter;

    /**
     * @Assert\NotBlank(message="Поле дней до дня рождения обязателено для заполнения")
     * @Assert\Type(
     *     type="integer",
     *     message="Поле дней после дня рождения {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=0,
     *     max=30,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $daysBefore;

    /**
     * @return null|int
     */
    public function getDaysAfter(): ?int
    {
        return $this->daysAfter;
    }

    /**
     * @param null|int $daysAfter
     *
     * @return BirthdayTargeting
     */
    public function setDaysAfter(int $daysAfter = null): self
    {
        $this->daysAfter = $daysAfter;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getDaysBefore(): ?int
    {
        return $this->daysBefore;
    }

    /**
     * @param null|int $daysBefore
     *
     * @return BirthdayTargeting
     */
    public function setDaysBefore(int $daysBefore = null): self
    {
        $this->daysBefore = $daysBefore;

        return $this;
    }
}
