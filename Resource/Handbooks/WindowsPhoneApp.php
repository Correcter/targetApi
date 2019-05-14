<?php

namespace TargetApi\Resource\Handbooks;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class WindowsPhoneApp extends AbstaractResource
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
}
