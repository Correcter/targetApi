<?php

namespace TargetApi\Model\Statistics;

use TargetApi\Collections\ArrayCollection;

/**
 * Description of LeadForm.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class Statistic
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var ArrayCollection
     */
    private $rows;

    /**
     * @var ArrayCollection
     */
    private $total;

    /**
     * Statistic constructor.
     */
    public function __construct()
    {
        $this->rows = new ArrayCollection();
        $this->total = new ArrayCollection();
    }

    /**
     * @param null|int $id
     *
     * @return Statistic
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return ArrayCollection
     */
    public function getRows(): ArrayCollection
    {
        return $this->rows;
    }

    /**
     * @param []|array $row
     *
     * @return Statistic
     */
    public function addRow(array $row = []): self
    {
        if (!$this->rows->contains($row)) {
            $this->rows[] = $row;
        }

        return $this;
    }

    /**
     * @param array $row
     *
     * @return bool
     */
    public function removeRow(array $row): bool
    {
        return $this->rows->removeElement($row);
    }

    /**
     * @return ArrayCollection
     */
    public function getTotal(): ArrayCollection
    {
        return $this->total;
    }

    /**
     * @param array $total
     *
     * @return Statistic
     */
    public function addTotal(array $total = []): self
    {
        if (!$this->total->contains($total)) {
            $this->total[] = $total;
        }

        return $this;
    }

    /**
     * @param array $total
     *
     * @return bool
     */
    public function removeTotal(array $total): bool
    {
        return $this->total->removeElement($total);
    }
}
