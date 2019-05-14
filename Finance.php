<?php

namespace TargetApi;

use TargetApi\Resource\Finance\Transaction;
use TargetApi\Resource\Finance\TransactionGroups;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Finance
{
    /**
     * @var TargetClient
     */
    private $client;
    private $services;

    /**
     * @param \TargetApi\TargetClient $client
     */
    public function __construct(TargetClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function transaction()
    {
        if (!isset($this->services['transaction'])) {
            $this->services['transaction'] = new Transaction(
                $this->client,
                __CLASS__,
                'Transaction',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'billing/transactions/{mode}/{user_id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'mode' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'user_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Finance\Transaction',
                        ],
                    ],
                ]
            );
        }

        return $this->services['transaction'];
    }

    /**
     * @return mixed
     */
    public function transactionGroups()
    {
        if (!isset($this->services['transactionGroups'])) {
            $this->services['transactionGroups'] = new TransactionGroups(
                $this->client,
                __CLASS__,
                'TransactionGroups',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'billing/transaction_groups.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Finance\TransactionGroup[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['transactionGroups'];
    }
}
