<?php

namespace TargetApi\Resource\Handbooks;

use TargetApi\Model\Handbooks\AppleApp as AppleAppModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AppleApp extends AbstaractResource
{
    /**
     * @param null|string $appName
     *
     * @return object|string
     */
    public function get(string $appName = null)
    {
        return $this->call('get', [
            'app_name' => $appName,
        ]);
    }

    /**
     * @param null|string   $appName
     * @param AppleAppModel $model
     *
     * @return object|string
     */
    public function post(string $appName = null, AppleAppModel $model)
    {
        return $this->call('post', [
            'app_name' => $appName,
        ], $model);
    }
}
