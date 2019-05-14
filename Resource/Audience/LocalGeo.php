<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\LocalGeo as LocalGeoModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class LocalGeo extends AbstaractResource
{
    /**
     * @param null|int      $id
     * @param LocalGeoModel $model
     *
     * @return object|string
     */
    public function post(int $id = null, LocalGeoModel $model)
    {
        return $this->call('post', [
            'id' => $id,
        ], $model);
    }

    /**
     * @param null|string $id
     *
     * @return object|string
     */
    public function delete(string $id = null)
    {
        return $this->call('delete', [
            'id' => $id,
        ]);
    }
}
