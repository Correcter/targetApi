<?php

namespace TargetApi;

use TargetApi\Resource\Users\AgencyClient;
use TargetApi\Resource\Users\AgencyClients;
use TargetApi\Resource\Users\AgencyClientsCount;
use TargetApi\Resource\Users\AgencyManager;
use TargetApi\Resource\Users\AgencyManagerClient;
use TargetApi\Resource\Users\AgencyManagerClientMassAction;
use TargetApi\Resource\Users\AgencyManagerClients;
use TargetApi\Resource\Users\AgencyManagers;
use TargetApi\Resource\Users\BranchClient;
use TargetApi\Resource\Users\BranchClients;
use TargetApi\Resource\Users\BranchClientsCount;
use TargetApi\Resource\Users\ManagerClients;
use TargetApi\Resource\Users\ManagerClientsCount;
use TargetApi\Resource\Users\ReservedAmounts;
use TargetApi\Resource\Users\User;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Users
{
    /**
     * @var TargetClient
     */
    private $client;
    private $services;

    /**
     * @param string $rootUrl
     */
    public function __construct(TargetClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return AgencyClient
     */
    public function agencyClient()
    {
        if (!isset($this->services['agencyClient'])) {
            $this->services['agencyClient'] = new AgencyClient(
                $this->client,
                __CLASS__,
                'AgencyClient',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'agency/clients/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Users\AgencyClient',
                        ],
                        'delete' => [
                            'path' => 'agency/clients/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Users\AgencyClient',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyClient'];
    }

    /**
     * @return AgencyClients
     */
    public function agencyClients()
    {
        if (!isset($this->services['agencyClients'])) {
            $this->services['agencyClients'] = new AgencyClients(
                $this->client,
                __CLASS__,
                'AgencyClients',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'agency/clients.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'limit' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                'offset' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_user__username' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_user__username__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__ne' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyClient[]',
                        ],
                        'post' => [
                            'path' => 'agency/clients.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Users\AgencyClient',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyClients'];
    }

    /**
     * @return AgencyClientsCount
     */
    public function agencyClientsCount()
    {
        if (!isset($this->services['agencyClientsCount'])) {
            $this->services['agencyClientsCount'] = new AgencyClientsCount(
                $this->client,
                __CLASS__,
                'AgencyClientsCount',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'clients/count.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Users\AgencyClientsCount',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyClientsCount'];
    }

    /**
     * @return AgencyManager
     */
    public function agencyManager()
    {
        if (!isset($this->services['agencyManager'])) {
            $this->services['agencyManager'] = new AgencyManager(
                $this->client,
                __CLASS__,
                'AgencyManager',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'agency/managers/{manager_id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManager',
                        ],
                        'delete' => [
                            'path' => 'agency/managers/{manager_id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManager',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyManager'];
    }

    /**
     * @return AgencyManagers
     */
    public function agencyManagers()
    {
        if (!isset($this->services['agencyManagers'])) {
            $this->services['agencyManagers'] = new AgencyManagers(
                $this->client,
                __CLASS__,
                'AgencyManagers',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'agency/managers.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'limit' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                'offset' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_manager__username' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_manager__username_in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManager[]',
                        ],
                        'post' => [
                            'path' => 'agency/managers.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Users\AgencyManager',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyManagers'];
    }

    /**
     * @return AgencyManagerClient
     */
    public function agencyManagerClient()
    {
        if (!isset($this->services['agencyManagerClient'])) {
            $this->services['agencyManagerClient'] = new AgencyManagerClient(
                $this->client,
                __CLASS__,
                'AgencyManagerClient',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'agency/managers/{manager_id}/clients/{client_id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'client_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManagerClient',
                        ],
                        'delete' => [
                            'path' => 'agency/managers/{manager_id}/clients/{client_id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'client_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManagerClient',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyManagerClient'];
    }

    /**
     * @return AgencyManagerClients
     */
    public function agencyManagerClients()
    {
        if (!isset($this->services['agencyManagerClients'])) {
            $this->services['agencyManagerClients'] = new AgencyManagerClients(
                $this->client,
                __CLASS__,
                'AgencyManagerClients',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'agency/managers/{manager_id}/clients.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'limit' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                'offset' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_user__username' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_user__username__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__ne' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManagerClient[]',
                        ],
                        'post' => [
                            'path' => 'agency/managers/{manager_id}/clients.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManagerClient',
                        ],
                        'delete' => [
                            'path' => 'agency/managers/{manager_id}/clients.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManagerClient',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyManagerClients'];
    }

    /**
     * @return AgencyManagerClientMassAction
     */
    public function agencyManagerClientMassAction()
    {
        if (!isset($this->services['agencyManagerClientMassAction'])) {
            $this->services['agencyManagerClientMassAction'] = new AgencyManagerClientMassAction(
                $this->client,
                __CLASS__,
                'AgencyManagerClientMassAction',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'agency/managers/{manager_id}/clients/mass_action.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'manager_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\AgencyManagerClient',
                        ],
                    ],
                ]
            );
        }

        return $this->services['agencyManagerClientMassAction'];
    }

    /**
     * @return BranchClient
     */
    public function branchClient()
    {
        if (!isset($this->services['branchClient'])) {
            $this->services['branchClient'] = new BranchClient(
                $this->client,
                __CLASS__,
                'BranchClient',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'branch/clients/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\BranchClient',
                        ],
                    ],
                ]
            );
        }

        return $this->services['branchClient'];
    }

    /**
     * @return BranchClients
     */
    public function branchClients()
    {
        if (!isset($this->services['branchClients'])) {
            $this->services['branchClients'] = new BranchClients(
                $this->client,
                __CLASS__,
                'BranchClients',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'branch/clients.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'limit' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                'offset' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_user__username' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_user__username__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__ne' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\BranchClient[]',
                        ],
                        'post' => [
                            'path' => 'branch/clients.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Users\BranchClient',
                        ],
                    ],
                ]
            );
        }

        return $this->services['branchClients'];
    }

    /**
     * @return BranchClientsCount
     */
    public function branchClientsCount()
    {
        if (!isset($this->services['branchClientsCount'])) {
            $this->services['branchClientsCount'] = new BranchClientsCount(
                $this->client,
                __CLASS__,
                'BranchClientsCount',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'branch/clients/count.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Users\BranchClientsCount',
                        ],
                    ],
                ]
            );
        }

        return $this->services['branchClientsCount'];
    }

    /**
     * @return ManagerClients
     */
    public function managerClients()
    {
        if (!isset($this->services['managerClients'])) {
            $this->services['managerClients'] = new ManagerClients(
                $this->client,
                __CLASS__,
                'ManagerClients',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'manager/clients.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'limit' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                'offset' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_user__username' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_user__username__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__ne' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_status__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\ManagerClients[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['managerClients'];
    }

    /**
     * @return ManagerClientsCount
     */
    public function managerClientsCount()
    {
        if (!isset($this->services['managerClientsCount'])) {
            $this->services['managerClientsCount'] = new ManagerClientsCount(
                $this->client,
                __CLASS__,
                'ManagerClientsCount',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'manager/clients/count.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Users\ManagerClientsCount',
                        ],
                    ],
                ]
            );
        }

        return $this->services['managerClientsCount'];
    }

    /**
     * @return ReservedAmounts
     */
    public function reservedAmounts()
    {
        if (!isset($this->services['reservedAmounts'])) {
            $this->services['reservedAmounts'] = new ReservedAmounts(
                $this->client,
                __CLASS__,
                'ReservedAmounts',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'reserved_amounts/{userIdOne};{userIdTwo}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'userIdOne' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'userIdTwo' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Users\ReservedAmounts[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['reservedAmounts'];
    }

    /**
     * @return User
     */
    public function user()
    {
        if (!isset($this->services['user'])) {
            $this->services['user'] = new User(
                $this->client,
                __CLASS__,
                'User',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'user.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Users\User',
                        ],
                        'post' => [
                            'path' => 'user.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Users\User',
                        ],
                    ],
                ]
            );
        }

        return $this->services['user'];
    }
}
