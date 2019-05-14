<?php

namespace TargetApi\Resource\Statistics;

use TargetApi\Resource\AbstaractResource;
use TargetApi\Types\LeadInfoTypes;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class LeadInfo extends AbstaractResource
{
    /**
     * @param LeadInfoTypes $types
     *
     * @return object|string
     */
    public function get(LeadInfoTypes $types)
    {
        return $this->call('get', [
            'form_id' => $types->getFormId(),
            'limit' => $types->getLimit(),
            'offset' => $types->getOffset(),
            '_created_time__lt' => $types->getCreatedTimeLt(),
            '_created_time__gt' => $types->getCreatedTimeGt(),
            '_created_time__lte' => $types->getCreatedTimeLte(),
            '_created_time__gte' => $types->getCreatedTimeGte(),
            '_campaign_id__in' => $types->getCampaignIdIn(),
            '_campaign_id' => $types->getCampaignId(),
            '_banner_id__in' => $types->getBannerIdIn(),
            '_banner_id' => $types->getBannerId(),
        ]);
    }
}
