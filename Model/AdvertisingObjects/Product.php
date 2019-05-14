<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Product.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Product
{
    /**
     * @Assert\Valid
     *
     * @var null|array
     */
    private $appearance;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Увеличивать ли товар при наведении на него неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $productZoom;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Тип шаблона отображения неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $templateType;

    /**
     * @return array
     */
    public function getAppearance(): array
    {
        return $this->appearance;
    }

    /**
     * @param array $appearance
     */
    public function setAppearance(array $appearance = null)
    {
        $this->appearance = $appearance;
    }

    /**
     * @return bool
     */
    public function isProductZoom(): bool
    {
        return $this->productZoom;
    }

    /**
     * @param bool $productZoom
     */
    public function setProductZoom(bool $productZoom = false)
    {
        $this->productZoom = $productZoom;
    }

    /**
     * @return string
     */
    public function getTemplateType(): string
    {
        return $this->templateType;
    }

    /**
     * @param string $templateType
     */
    public function setTemplateType(string $templateType = null)
    {
        $this->templateType = $templateType;
    }
}
