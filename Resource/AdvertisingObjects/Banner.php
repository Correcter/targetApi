<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\Banner as BannerModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Banner extends AbstaractResource
{
    /**
     * @param int $bannerId
     * @return object|string
     */
    public function get(int $bannerId)
    {
        return $this->call('get', [
            'banner_id' => $bannerId,
        ]);
    }

    /**
     * @param int         $bannerId
     * @param BannerModel $model
     *
     * @return object|string
     */
    public function post(int $bannerId, BannerModel $model)
    {
        return $this->call('post', [
            'banner_id' => $bannerId,
        ], $model);
    }

    /**
     * @param int $bannerId
     * @return object|string
     */
    public function delete(int $bannerId)
    {
        return $this->call('delete', [
            'banner_id' => $bannerId,
        ]);
    }

}
