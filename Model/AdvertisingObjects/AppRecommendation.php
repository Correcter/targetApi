<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AppRecommendation.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AppRecommendation
{
    /**
     * @Assert\NotBlank(message="Значение таргетинга обязателен для заполнения")
     * @Assert\Range(
     *     min=1,
     *     max=1000,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $value;

    /**
     * @Assert\NotBlank(message="Значение таргетинга обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Bundle ID приложения из Google Play имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $googleAppId;

    /**
     * @return null|int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param null|int $value
     *
     * @return AppRecommendation
     */
    public function setValue(int $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getGoogleAppId(): ?string
    {
        return $this->googleAppId;
    }

    /**
     * @param string $googleAppId
     *
     * @return AppRecommendation
     */
    public function setGoogleAppId(string $googleAppId): self
    {
        $this->googleAppId = $googleAppId;

        return $this;
    }
}
