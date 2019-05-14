<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingCounterGoal;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CounterGoal extends AbstaractResource
{
    /**
     * @param int                    $counterId
     * @param int                    $goalId
     * @param RemarketingCounterGoal $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(int $counterId, int $goalId, RemarketingCounterGoal $model)
    {
        return $this->call('post', [
            'counter_id' => $counterId,
            'goal_id' => $goalId,
        ], $model);
    }
}
