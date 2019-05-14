<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingUserGeo as RemarketingUserGeoModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingUserGeos extends AbstaractResource
{
    /**
     * @param null|int    $id
     * @param null|string $fields
     *
     * @return object|string
     */
    public function get(int $id = null, string $fields = null)
    {
        return $this->call('get', [
            'id' => $id,
            'fields' => $fields,
        ]);
    }

    /**
     * @param null|int                $id
     * @param null|string             $fields
     * @param RemarketingUserGeoModel $model
     *
     * @return object|string
     */
    public function post(int $id = null, string $fields = null, RemarketingUserGeoModel $model)
    {
        return $this->call('post', [
            'id' => $id,
            'fields' => $fields,
        ], $model);
    }

    /**
     * @param null|int    $id
     * @param null|string $fields
     *
     * @return object|string
     */
    public function delete(int $id = null, string $fields = null)
    {
        return $this->call('delete', [
            'id' => $id,
            'fields' => $fields,
        ]);
    }
}
