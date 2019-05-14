<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of TextBlock.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class TextBlock
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Настройка Текст объявления неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $text;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Заголовок объявления неверного типа {{ type }}."
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param null|string $text
     *
     * @return Textblock
     */
    public function setText(string $text = null): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     *
     * @return Textblock
     */
    public function setTitle(string $title = null): self
    {
        $this->title = $title;

        return $this;
    }
}
