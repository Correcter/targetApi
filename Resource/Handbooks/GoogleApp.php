<?php

namespace TargetApi\Resource\Handbooks;

use TargetApi\Model\Handbooks\GoogleApp as GoogleAppModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class GoogleApp extends AbstaractResource
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
     * @param null|string    $appName
     * @param GoogleAppModel $model
     *
     * @return object|string
     */
    public function post(string $appName = null, GoogleAppModel $model)
    {
        return $this->call('post', [
            'app_name' => $appName,
        ], $model);
    }
}
