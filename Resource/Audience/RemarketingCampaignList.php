<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingCampaignList as RemarketingCampaignListModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingCampaignList extends AbstaractResource
{
    /**
     * @return \TargetApi\Resource\string|object
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingCampaignListModel $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(RemarketingCampaignListModel $model)
    {
        return $this->call('post', [], $model);
    }
}
