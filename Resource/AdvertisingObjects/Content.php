<?php

namespace TargetApi\Resource\AdvertisingObjects;

use TargetApi\Model\AdvertisingObjects\Content as ContentModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Content extends AbstaractResource
{
    /**
     * @param null         $contentName
     * @param ContentModel $model
     * @param null|string  $contentType
     *
     * @return object|string
     */
    public function post($contentName, ContentModel $model, string $contentType = null)
    {
        return $this->call('post', [
            'content_name' => $contentName,
        ], $model, $contentType);
    }
}
