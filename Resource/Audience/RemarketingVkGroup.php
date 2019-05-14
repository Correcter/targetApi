<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingVkGroup extends AbstaractResource
{
    /**
     * @param int $id
     *
     * @return object|\TargetApi\Resource\string
     */
    public function delete(int $id)
    {
        return $this->call('delete', ['id' => $id]);
    }
}
