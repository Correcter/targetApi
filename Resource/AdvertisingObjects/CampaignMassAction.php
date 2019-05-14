<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\CampaignMassAction as CampaignMassActionModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CampaignMassAction extends AbstaractResource
{
    /**
     * @param CampaignMassActionModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(CampaignMassActionModel $model)
    {
        return $this->call('post', [], $model);
    }
}
