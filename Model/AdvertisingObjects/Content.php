<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Content.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Content
{
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
     * @Assert\Valid
     *
     * @var array
     */
    private $variants;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null|int $id
     *
     * @return Content
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getVariants(): ?array
    {
        return $this->variants;
    }

    /**
     * @param null|array $variants
     *
     * @return Content
     */
    public function setVariants(array $variants = null): self
    {
        $this->variants = $variants;

        return $this;
    }
}
