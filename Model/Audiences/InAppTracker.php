<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of InAppTracker.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class InAppTracker
{
    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|InAppEvent[]
     */
    private $events;

    /**
     * @Assert\NotBlank(message="Идентификатор трекера обязателен для заполнения")
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
    private $id;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Название трекера имеет неверный тип: {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * InAppTracker constructor.
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|InAppEvent[]
     */
    public function getEvents(): ArrayCollection
    {
        return $this->events;
    }

    /**
     * @param InAppEvent $event
     *
     * @return InAppTracker
     */
    public function addEvent(InAppEvent $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
        }

        return $this;
    }

    /**
     * @param InAppEvent $event
     * @return bool
     */
    public function removeEvent(InAppEvent $event): bool
    {
        return $this->events->removeElement($event);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
