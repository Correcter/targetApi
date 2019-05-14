<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingPricelist as RemarketingPricelistModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingPricelist extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get(int $id)
    {
        return $this->call('get', ['id' => $id]);
    }

    /**
     * @param int                       $id
     * @param RemarketingPricelistModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(int $id, RemarketingPricelistModel $model)
    {
        return $this->call('post', ['id' => $id], $model);
    }

    /**
     * @param int $id
     *
     * @return object|\TargetApi\Resource\string
     */
    public function delete(int $id)
    {
        return $this->call('delete', ['id' => $id]);
    }
}
