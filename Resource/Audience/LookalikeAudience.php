<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\LookalikeAudience as LookalikeAudienceModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class LookalikeAudience extends AbstaractResource
{
    /**
     * @param int $id
     *
     * @return \TargetApi\Resource\string|object
     */
    public function get(int $id)
    {
        return $this->call('get', ['id' => $id]);
    }

    /**
     * @param int                    $id
     * @param LookalikeAudienceModel $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(int $id, LookalikeAudienceModel $model)
    {
        return $this->call('post', ['id' => $id], $model);
    }

    /**
     * @param int $id
     *
     * @return \TargetApi\Resource\string|object
     */
    public function delete(int $id)
    {
        return $this->call('delete', ['id' => $id]);
    }
}
