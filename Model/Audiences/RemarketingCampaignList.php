<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of RemarketingCampaignList.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingCampaignList
{
    /**
     * @ArrayOfIntRange(
     *     noBlank = true,
     *     min=-2147483647,
     *     max=2147483647,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var ArrayCollection|int[]
     */
    private $campaignsIds;

    /**
     * @Assert\DateTime
     *
     * @var \DateTime
     */
    private $created;

    /**
     * @Assert\Range(
     *     min=1,
     *     max=2147483647,
     *     maxMessage = "Поле не может быть больше {{ limit }}",
     *     minMessage = "Поле не может быть меньше {{ limit }}"
     * )
     *
     * @var null|string
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Название списка обязателено для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название списка имеет неверный тип {{ type }}."
     * )
     *
     * @var null|string
     */
    private $name;

    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|RemarketingUserCampaignList[]
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
     * @var null|int
     */
    private $usersCount;

    /**
     * RemarketingCampaignList constructor.
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->campaignsIds = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getCampaignsIds(): ArrayCollection
    {
        return $this->campaignsIds;
    }

    /**
     * @param int $campaignsId
     *
     * @return RemarketingCampaignList
     */
    public function addCampaignsId(int $campaignsId): self
    {
        if (!$this->campaignsIds->contains($campaignsId)) {
            $this->campaignsIds[] = $campaignsId;
        }

        return $this;
    }

    /**
     * @param int $campaignsId
     *
     * @return bool
     */
    public function removeCampaignsId(int $campaignsId): bool
    {
        return $this->campaignsIds->removeElement($campaignsId);
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return RemarketingCampaignList
     */
    public function setCreated(string $created): self
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
     * @param int $id
     *
     * @return RemarketingCampaignList
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return RemarketingCampaignList
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ArrayCollection|RemarketingUserCampaignList[]
     */
    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    /**
     * @param RemarketingUserCampaignList $user
     *
     * @return RemarketingCampaignList
     */
    public function addUsers(RemarketingUserCampaignList $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @param RemarketingUserCampaignList $user
     *
     * @return bool
     */
    public function removeUsers(RemarketingUserCampaignList $user): bool
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
     * @return RemarketingCampaignList
     */
    public function setUsersCount(int $usersCount = null): self
    {
        $this->usersCount = $usersCount;

        return $this;
    }
}
