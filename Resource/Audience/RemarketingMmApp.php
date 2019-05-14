<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingMmApp extends AbstaractResource
{    /**
     * @param int $id
     *
     * @return \TargetApi\Resource\string|object
     */
    public function delete(int $id)
    {
        return $this->call('delete', ['id' => $id]);
    }
}
