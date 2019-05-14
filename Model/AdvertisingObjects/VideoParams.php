<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of VideoParams.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class VideoParams
{
    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Запускать ли видео автоматически имеет неверный тип {{ type }}."
     * )
     *
     * @var bool
     */
    private $autoplay;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Высота видео {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $height;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Зациклить ли видео имеет неверный тип {{ type }}."
     * )
     *
     * @var bool
     */
    private $loop;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Подложка поверх видео имеет неверный тип {{ type }}."
     * )
     *
     * @var bool
     */
    private $overVideo;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Звук по наведению через 3 секунды имеет неверный тип {{ type }}."
     * )
     *
     * @var bool
     */
    private $soundDelay;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Смещение видео по горизонтали {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $videoX;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Смещение видео по вертикали {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $videoY;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Ширина видео {{ value }} имеет неверный тип {{ type }}."
     * )
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $width;

    /**
     * @return bool
     */
    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }

    /**
     * @param bool $autoplay
     */
    public function setAutoplay(bool $autoplay = false)
    {
        $this->autoplay = $autoplay;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height = null)
    {
        $this->height = $height;
    }

    /**
     * @return bool
     */
    public function isLoop(): bool
    {
        return $this->loop;
    }

    /**
     * @param bool $loop
     */
    public function setLoop(bool $loop = false)
    {
        $this->loop = $loop;
    }

    /**
     * @return bool
     */
    public function isOverVideo(): bool
    {
        return $this->overVideo;
    }

    /**
     * @param bool $overVideo
     */
    public function setOverVideo(bool $overVideo = false)
    {
        $this->overVideo = $overVideo;
    }

    /**
     * @return bool
     */
    public function isSoundDelay(): bool
    {
        return $this->soundDelay;
    }

    /**
     * @param bool $soundDelay
     */
    public function setSoundDelay(bool $soundDelay = false)
    {
        $this->soundDelay = $soundDelay;
    }

    /**
     * @return int
     */
    public function getVideoX(): int
    {
        return $this->videoX;
    }

    /**
     * @param int $videoX
     */
    public function setVideoX(int $videoX = null)
    {
        $this->videoX = $videoX;
    }

    /**
     * @return int
     */
    public function getVideoY(): int
    {
        return $this->videoY;
    }

    /**
     * @param int $videoY
     */
    public function setVideoY(int $videoY = null)
    {
        $this->videoY = $videoY;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width = null)
    {
        $this->width = $width;
    }
}
