<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingCounter as RemarketingCounterModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingCounter extends AbstaractResource
{
    /**
     * @param int $counterId
     *
     * @return \TargetApi\Resource\string|object
     */
    public function get(int $counterId)
    {
        return $this->call('get', ['counter_id' => $counterId]);
    }

    /**
     * @param int                     $counterId
     * @param RemarketingCounterModel $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(int $counterId, RemarketingCounterModel $model)
    {
        return $this->call('post', ['counter_id' => $counterId], $model);
    }

    /**
     * @param int $counterId
     *
     * @return \TargetApi\Resource\string|object
     */
    public function delete(int $counterId)
    {
        return $this->call('delete', ['counter_id' => $counterId]);
    }
}
