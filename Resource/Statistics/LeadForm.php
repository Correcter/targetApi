<?php

namespace TargetApi\Resource\Statistics;

use TargetApi\Resource\AbstaractResource;
use TargetApi\Types\LeadFormTypes;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class LeadForm extends AbstaractResource
{
    /**
     * @param LeadFormTypes $types
     *
     * @return object|string
     */
    public function get(LeadFormTypes $types)
    {
        return $this->call('get', [
            'fields' => $types->getFields(),
            'limit' => $types->getLimit(),
            'offset' => $types->getOffset(),
            '_campaign_id' => $types->getCampaignId(),
            '_campaign_id__in' => $types->getCampaignIdIn(),
            '_banner_id__in' => $types->getBannerIdIn(),
            '_banner_id' => $types->getBannerId(),
        ]);
    }
}
