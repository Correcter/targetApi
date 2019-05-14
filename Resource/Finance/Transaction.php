<?php

namespace TargetApi\Resource\Finance;

use TargetApi\Model\Finance\Transaction as TransactionModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Transaction extends AbstaractResource
{
    /**
     * @param null $mode
     * @param null $user_id
     * @param  TransactionModel $model
     *
     * @return object|string
     */
    public function post(
        $mode = null,
        $user_id = null,
        TransactionModel $model
    ) {
        return $this->call('post', [
            'mode' =>$mode,
            'user_id' => $user_id,
        ], $model);
    }
}
