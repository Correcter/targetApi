<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfIntRange;

/**
 * Description of RemarketingUserGeo.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingUserGeo
{
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
     * @Assert\NotBlank(message="Название добавленного списка обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Название добавленного списка имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @ArrayOfIntRange
     *
     * @var ArrayCollection|int[]
     */
    private $userGeoIds;

    /**
     * RemarketingUserGeo constructor.
     */
    public function __construct()
    {
        $this->userGeoIds = new ArrayCollection();
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
     * @return RemarketingUserGeo
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
     * @return RemarketingUserGeo
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ArrayCollection|int[]
     */
    public function getUserGeoIds(): ArrayCollection
    {
        return $this->userGeoIds;
    }

    /**
     * @param null|int $userGeoId
     *
     * @return RemarketingUserGeo
     */
    public function addUserGeoId(int $userGeoId = null): self
    {
        if (!$this->userGeoIds->contains($userGeoId)) {
            $this->userGeoIds[] = $userGeoId;
        }

        return $this;
    }

    /**
     * @param int $userGeoId
     *
     * @return bool
     */
    public function removeCampaignsId(int $userGeoId): ?bool
    {
        return $this->userGeoIds->removeElement($userGeoId);
    }
}
