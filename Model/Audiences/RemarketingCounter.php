<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of RemarketingCounter.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingCounter
{
    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $counterId;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $flags;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|RemarketingCounterGoal[]
     */
    private $goals;

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
     * @Assert\Type(
     *     type="string",
     *     message="Название счетчика имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус счетчика в Top@Mail.Ru неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Статус счетчика в Top@Mail.Ru не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Системный статус (active/blocked/deleted) неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "active", "deleted", "blocked" },
     *     message = "Системный статус (active/blocked/deleted) не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $systemStatus;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Принадлежность счетчика неверного типа {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "own", "shared" },
     *     message = "Принадлежность счетчика не соответствует ни одному из вариантов"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|RemarketingCounterUser[]
     */
    private $users;

    /**
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var int
     */
    private $usersCount;

    /**
     * @Assert\Type(
     *     type="bool",
     *     message="Признак активности счетчика неверного типа {{ type }}."
     * )
     *
     * @var bool
     */
    private $working;

    /**
     * RemarketingCounter constructor.
     */
    public function __construct()
    {
        $this->goals = new ArrayCollection();
        $this->flags = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|RemarketingCounterUser[]
     */
    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    /**
     * @param null|RemarketingCounterUser $user
     *
     * @return RemarketingCounter
     */
    public function addUser(RemarketingCounterUser $user = null): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @param RemarketingCounterUser $user
     *
     * @return bool
     */
    public function removeUser(RemarketingCounterUser $user): bool
    {
        return $this->users->removeElement($user);
    }

    /**
     * @return null|int
     */
    public function getUsersCount(): ?int
    {
        return $this->usersCount;
    }

    /**
     * @param null|int $usersCount
     *
     * @return RemarketingCounter
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getCounterId(): ?int
    {
        return $this->counterId;
    }

    /**
     * @param null|int $counterId
     *
     * @return RemarketingCounter
     */
    public function setCounterId(int $counterId = null): self
    {
        $this->counterId = $counterId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return RemarketingCounter
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getFlags(): ArrayCollection
    {
        return $this->flags;
    }

    /**
     * @param null|string $flag
     *
     * @return RemarketingCounter
     */
    public function addFlag(string $flag = null): self
    {
        if (!$this->flags->contains($flag)) {
            $this->flags[] = $flag;
        }

        return $this;
    }

    /**
     * @param string $flag
     *
     * @return bool
     */
    public function removeFlag(string $flag): bool
    {
        return $this->flags->removeElement($flag);
    }

    /**
     * @return ArrayCollection|RemarketingCounterGoal[]
     */
    public function getGoals(): ArrayCollection
    {
        return $this->goals;
    }

    /**
     * @param null|RemarketingCounterGoal $goal
     *
     * @return RemarketingCounter
     */
    public function addGoal(RemarketingCounterGoal $goal = null): self
    {
        if (!$this->goals->contains($goal)) {
            $this->goals[] = $goal;
        }

        return $this;
    }

    /**
     * @param RemarketingCounterGoal $goal
     *
     * @return bool
     */
    public function removeGoal(RemarketingCounterGoal $goal): bool
    {
        return $this->goals->removeElement($goal);
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
     * @return RemarketingCounter
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return $this
     */
    public function setName(string $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return RemarketingCounter
     */
    public function setStatus(string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSystemStatus(): ?string
    {
        return $this->systemStatus;
    }

    /**
     * @param null|string $systemStatus
     *
     * @return RemarketingCounter
     */
    public function setSystemStatus(string $systemStatus = null): self
    {
        $this->systemStatus = $systemStatus;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return RemarketingCounter
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return null|bool
     */
    public function isWorking(): ?bool
    {
        return $this->working;
    }

    /**
     * @param bool $working
     *
     * @return RemarketingCounter
     */
    public function setWorking(bool $working = false): self
    {
        $this->working = $working;

        return $this;
    }
}
