<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of AudienceScoreStat.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class AudienceScoreStat
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
    private $audienceId;

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
    private $count;

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
    private $score;

    /**
     * @return int
     */
    public function getAudienceId(): int
    {
        return $this->audienceId;
    }

    /**
     * @param null|int $audienceId
     *
     * @return $this
     */
    public function setAudienceId(int $audienceId = null)
    {
        $this->audienceId = $audienceId;

        return $this;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @param null|int $score
     *
     * @return $this
     */
    public function setScore(int $score = null)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param null|int $count
     *
     * @return $this
     */
    public function setCount(int $count = null)
    {
        $this->count = $count;

        return $this;
    }
}
