<?php

namespace TargetApi\Model\Users;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of ManagerClientInfo.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class ManagerClientInfo
{
    /**
     * @Assert\Type(
     *     type="string",
     *     message="Статус клиента неверного типа {{ type }}."
     * )
     *
     * @Assert\Choice(
     *     choices = { "full_access", "readonly", "fin_readonly", "ads_readonly" },
     *     message = "Тип доступа менеджера к аккаунту клиента не соответствует ни одному из допустимых вариантов"
     * )
     *
     * @var string
     */
    private $accessType;

    /**
     * @Assert\Type(
     *     type="integer",
     *     message="Идентификатор клиента {{ value }} имеет неверный тип {{ type }}."
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
     * @return string
     */
    public function getAccessType(): string
    {
        return $this->accessType;
    }

    /**
     * @param string $accessType
     */
    public function setAccessType(string $accessType)
    {
        $this->accessType = $accessType;
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
}
