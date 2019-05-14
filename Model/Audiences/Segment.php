<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;
use TargetApi\Validator\Constraints\ArrayOfString;
use TargetApi\Validator\Constraints\NotBlankObject;

/**
 * Description of Segment.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Segment
{
    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $campaignIds;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime|string
     */
    private $created;

    /**
     * @ArrayOfString
     *
     * @var ArrayCollection|string[]
     */
    private $flags;

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
     * @Assert\Type(
     *     type="string",
     *     message="Название сегмента имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Условие включения пользователя в сегмент обязателен для заполнения")
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $passCondition;

    /**
     * @Assert\Valid
     *
     * @NotBlankObject(noBlankMess="Источники данных в сегменте обязателен для заполнения")
     *
     * @var ArrayCollection|SegmentRelation[]
     */
    private $relations;

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
    private $relationsCount;

    /**
     * @Assert\DateTime
     *
     * @var null|\DateTime
     */
    private $updated;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|SegmentUser[]
     */
    private $users;

    /**
     * Segment constructor.
     */
    public function __construct()
    {
        $this->relations = new ArrayCollection();
        $this->campaignIds = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->flags = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getFlags(): ArrayCollection
    {
        return $this->flags;
    }

    /**
     * @param string $flag
     *
     * @return Segment
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
     * @return ArrayCollection|int[]
     */
    public function getCampaignIds(): ArrayCollection
    {
        return $this->campaignIds;
    }

    /**
     * @param int $campaignId
     *
     * @return Segment
     */
    public function addCampaignId(int $campaignId = null): self
    {
        if (!$this->campaignIds->contains($campaignId)) {
            $this->campaignIds[] = $campaignId;
        }

        return $this;
    }

    /**
     * @param int $campaignId
     *
     * @return bool
     */
    public function removeCampaignId(int $campaignId): bool
    {
        return $this->campaignIds->removeElement($campaignId);
    }

    /**
     * @return ArrayCollection|SegmentUser[]
     */
    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    /**
     * @param SegmentUser $user
     *
     * @return Segment
     */
    public function addUser(SegmentUser $user = null): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @param SegmentUser $user
     *
     * @return bool
     */
    public function removeUser(SegmentUser $user): bool
    {
        return $this->users->removeElement($user);
    }

    /**
     * @return ArrayCollection|SegmentRelation[]
     */
    public function getRelation(): ArrayCollection
    {
        return $this->relations;
    }

    /**
     * @param SegmentRelation $relation
     *
     * @return Segment
     */
    public function addRelation(SegmentRelation $relation = null): self
    {
        if (!$this->relations->contains($relation)) {
            $this->relations[] = $relation;
        }

        return $this;
    }

    /**
     * @param SegmentRelation $relation
     *
     * @return bool
     */
    public function removeRelation(SegmentRelation $relation): bool
    {
        return $this->relations->removeElement($relation);
    }

    /**
     * @return null|string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * @param null|string $created
     *
     * @return Segment
     */
    public function setCreated(string $created = null): self
    {
        $this->created = $created;

        return $this;
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
     * @return Segment
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
     * @return Segment
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getPassCondition(): ?int
    {
        return $this->passCondition;
    }

    /**
     * @param null|int $passCondition
     *
     * @return Segment
     */
    public function setPassCondition(int $passCondition = null): self
    {
        $this->passCondition = $passCondition;

        return $this;
    }

    /**
     * @return null|int
     */
    public function getRelationsCount(): ?int
    {
        return $this->relationsCount;
    }

    /**
     * @param null|int $relationsCount
     *
     * @return $this
     */
    public function setRelationsCount(int $relationsCount = null)
    {
        $this->relationsCount = $relationsCount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    /**
     * @param null|string $updated
     *
     * @return Segment
     */
    public function setUpdated(string $updated = null): self
    {
        $this->updated = $updated;

        return $this;
    }
}
