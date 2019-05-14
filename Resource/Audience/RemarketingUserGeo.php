<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingUserGeo as RemarketingUserGeoModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingUserGeo extends AbstaractResource
{
    /**
     * @param $fields
     *
     * @return object|\TargetApi\Resource\string
     */
    public function get(string $fields = null)
    {
        return $this->call('get', ['fields' => $fields]);
    }

    /**
     * @param string                  $fields
     * @param RemarketingUserGeoModel $model
     *
     * @return object|\TargetApi\Resource\string
     */
    public function post(string $fields, RemarketingUserGeoModel $model)
    {
        return $this->call('post', ['fields' => $fields], $model);
    }
}
