<?php

namespace TargetApi\Resource\Users;

use TargetApi\Model\Users\BranchClient as BranchClientModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class BranchClient extends AbstaractResource
{
    /**
     * @param int|null $id
     * @param BranchClientModel $model
     * @return object|string
     */
    public function post(int $id = null, BranchClientModel $model)
    {
        return $this->call('post', [
            'id' => $id,
        ], $model);
    }
}
