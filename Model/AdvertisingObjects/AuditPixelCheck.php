<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AuditPixelCheck.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AuditPixelCheck
{
    /**
     * @Assert\NotBlank(message="Ссылка на пиксель аудита обязатлена для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Ссылка на пиксель аудита {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $auditPixel;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Используется ли пиксель в какой-либо кампании неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $used;

    /**
     * @return string
     */
    public function getAuditPixel(): string
    {
        return $this->auditPixel;
    }

    /**
     * @param string $auditPixel
     *
     * @return AuditPixelCheck
     */
    public function setAuditPixel(string $auditPixel): self
    {
        $this->auditPixel = $auditPixel;

        return $this;
    }

    /**
     * @return null|bool
     */
    public function isUsed(): ?bool
    {
        return $this->used;
    }

    /**
     * @param null|bool $used
     *
     * @return AuditPixelCheck
     */
    public function setUsed(bool $used = null): self
    {
        $this->used = $used;

        return $this;
    }
}
