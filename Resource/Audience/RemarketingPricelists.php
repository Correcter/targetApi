<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingPricelist as RemarketingPricelistModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingPricelists extends AbstaractResource
{
    /**
     * @return object|\TargetApi\Resource\string
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingPricelistModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(RemarketingPricelistModel $model)
    {
        return $this->call('post', [], $model);
    }
}
