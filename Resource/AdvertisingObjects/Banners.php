<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\Banner as BannerModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Banners extends AbstaractResource
{
    /**
     * @param BannerModel $model
     * @param null        $limit
     * @param null        $offset
     * @param null        $_id
     * @param null        $_campaign_id
     * @param null        $_campaign_id__in
     * @param null        $_campaign_status
     * @param null        $_campaign_status__ne
     * @param null        $_campaign_status__in
     * @param null        $_status
     * @param null        $_status__ne
     * @param null        $_status__in
     * @param null        $_updated__gt
     * @param null        $_updated__gte
     * @param null        $_updated__lt
     * @param null        $_updated__lte
     * @param null        $_url
     * @param null        $_textblock
     *
     * @return object|string
     */
    public function get(
        $limit = null,
        $offset = null,
        $_id = null,
        $_campaign_id = null,
        $_campaign_id__in = null,
        $_campaign_status = null,
        $_campaign_status__ne = null,
        $_campaign_status__in = null,
        $_status = null,
        $_status__ne = null,
        $_status__in = null,
        $_updated__gt = null,
        $_updated__gte = null,
        $_updated__lt = null,
        $_updated__lte = null,
        $_url = null,
        $_textblock = null
) {
        return $this->call('get', [
            'limit' => $limit,
            'offset' => $offset,
            '_id' => $_id,
            '_campaign_id' => $_campaign_id,
            '_campaign_id__in' => $_campaign_id__in,
            '_campaign_status' => $_campaign_status,
            '_campaign_status__ne' => $_campaign_status__ne,
            '_campaign_status__in' => $_campaign_status__in,
            '_status' => $_status,
            '_status__ne' => $_status__ne,
            '_status__in' => $_status__in,
            '_updated__gt' => $_updated__gt,
            '_updated__gte' => $_updated__gte,
            '_updated__lt' => $_updated__lt,
            '_updated__lte' => $_updated__lte,
            '_url' => $_url,
            '_textblock' => $_textblock,
        ]);
    }
}
