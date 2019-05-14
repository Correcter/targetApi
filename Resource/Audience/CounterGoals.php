<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingCounterGoal;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CounterGoals extends AbstaractResource
{
    /**
     * @param int $counterId
     *
     * @return \TargetApi\Resource\string|object
     */
    public function get(int $counterId)
    {
        $params = ['counter_id' => $counterId];

        return $this->call('get', $params);
    }

    /**
     * @param int                    $counterId
     * @param RemarketingCounterGoal $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(int $counterId, RemarketingCounterGoal $model)
    {
        $params = ['counter_id' => $counterId];

        return $this->call('post', $params, $model);
    }
}
