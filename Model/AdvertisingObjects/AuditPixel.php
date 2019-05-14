<?php

namespace TargetApi\Model\AdvertisingObjects;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;
use TargetApi\Validator\Constraints\ArrayOfString;

/**
 * Description of AuditPixel.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AuditPixel
{
    /**
     * @Assert\NotBlank(message="Ссылка на аудит пиксель обязательна для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Ссылка на аудит пиксель {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $auditPixel;

    /**
     * @Assert\Type(
     *     type="string",
     *     message="Событие, на которое будет срабатывать данный пиксель аудита {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var string
     */
    private $role;

    /**
     * @ArrayOfString
     *
     * @var string[]
     */
    private $roles;

    /**
     * AgeTargeting constructor.
     */
    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getAuditPixel(): string
    {
        return $this->auditPixel;
    }

    /**
     * @param string $auditPixel
     */
    public function setAuditPixel(string $auditPixel)
    {
        $this->auditPixel = $auditPixel;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role = null)
    {
        $this->role = $role;
    }

    /**
     * @return ArrayCollection|string[]
     */
    public function getRoles(): ArrayCollection
    {
        return $this->roles;
    }

    /**
     * @param string $role
     *
     * @return $this
     */
    public function addRole(string $role = null)
    {
        if (!$this->roles->contains($role)) {
            $this->roles[] = $role;
        }

        return $this;
    }

    /**
     * @param int $role
     *
     * @return bool
     */
    public function removeRole(int $role): bool
    {
        return $this->roles->removeElement($role);
    }
}
