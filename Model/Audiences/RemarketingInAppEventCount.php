<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;
use TargetApi\Collections\ArrayCollection;

/**
 * Description of RemarketingInAppEventCount.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class RemarketingInAppEventCount
{
    /**
     * @Assert\Valid
     *
     * @var ArrayCollection|RemarketingInAppEventCountDate[]
     */
    private $rows;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
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
    private $total;

    /**
     * RemarketingInAppEventCount constructor.
     */
    public function __construct()
    {
        $this->rows = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|RemarketingInAppEventCountDate[]
     */
    public function getRows(): ArrayCollection
    {
        return $this->rows;
    }

    /**
     * @param RemarketingInAppEventCountDate $row
     *
     * @return RemarketingInAppEventCount
     */
    public function addRow(RemarketingInAppEventCountDate $row): self
    {
        if (!$this->rows->contains($row)) {
            $this->rows[] = $row;
        }

        return $this;
    }

    /**
     * @param RemarketingInAppEventCountDate $row
     *
     * @return bool
     */
    public function removeRow(RemarketingInAppEventCountDate $row): bool
    {
        return $this->rows->removeElement($row);
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total)
    {
        $this->total = $total;
    }
}
