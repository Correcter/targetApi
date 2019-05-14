<?php

namespace TargetApi\Model\Audiences;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of SegmentRelation.
 *
 * @author Vitaly Dergunov <v.dergunov@icontext.ru>
 */
class SegmentRelation
{
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
     * @Assert\Range(
     *     min=-2147483647,
     *     max=9223372036854775807,
     *     minMessage = "Поле не может быть меньше {{ limit }}",
     *     maxMessage = "Поле не может быть больше {{ limit }}"
     * )
     *
     * @var null|int
     */
    private $objectId;

    /**
     * @Assert\NotBlank(message="Тип вложенного объекта обязателен для заполнения")
     * @Assert\Type(
     *     type="string",
     *     message="Тип вложенного объекта имеет неверный тип {{ type }}."
     * )
     * @Assert\Choice(
     *     choices = { "remarketing_search_phrases", "remarketing_game_player", "remarketing_vk_app", "remarketing_mobile_app", "remarketing_game_payer", "remarketing_player", "remarketing_app_category", "remarketing_group", "remarketing_pricelist", "remarketing_counter", "remarketing_inapp_event", "remarketing_vk_group", "remarketing_lookalike_audience", "remarketing_context_phrases", "remarketing_custom_audience", "remarketing_user_geo", "remarketing_users_list", "remarketing_campaign_list", "remarketing_local_geo", "segment", "remarketing_payer" },
     *     message = "Тип вложенного объекта имеет недопустимое значение"
     * )
     *
     * @var string
     */
    private $objectType;

    /**
     * @Assert\Type(
     *     type="array",
     *     message="Значение {{ value }} имеет неверный тип {{ type }}."
     * )
     *
     * @var array
     */
    private $params;

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
     * @return SegmentRelation
     */
    public function setId(int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * @param null|int $objectId
     *
     * @return SegmentRelation
     */
    public function setObjectId(int $objectId = null): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType(): string
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     *
     * @return SegmentRelation
     */
    public function setObjectType(string $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * @return null|array
     */
    public function getParams(): ?array
    {
        return $this->params;
    }

    /**
     * @param array $params
     *
     * @return SegmentRelation
     */
    public function setParams(array $params = []): self
    {
        $this->params = $params;

        return $this;
    }
}
