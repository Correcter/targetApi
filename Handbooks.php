<?php

namespace TargetApi;

use TargetApi\Resource\Handbooks\AppleApp;
use TargetApi\Resource\Handbooks\GoogleApp;
use TargetApi\Resource\Handbooks\MobileCategory;
use TargetApi\Resource\Handbooks\MobileOperationSystem;
use TargetApi\Resource\Handbooks\MobileOperator;
use TargetApi\Resource\Handbooks\MobileTypes;
use TargetApi\Resource\Handbooks\MobileVendors;
use TargetApi\Resource\Handbooks\Region;
use TargetApi\Resource\Handbooks\UserGeo;
use TargetApi\Resource\Handbooks\WindowsPhoneApp;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Handbooks
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
     * @return AppleApp
     */
    public function appleApp()
    {
        if (!isset($this->services['appleApp'])) {
            $this->services['appleApp'] = new AppleApp(
                $this->client,
                __CLASS__,
                'AppleApp',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'apple_apps/{app_name}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'app_name' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Handbooks\AppleApp',
                        ],
                        'post' => [
                            'path' => 'apple_apps/{app_name}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'app_name' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Handbooks\AppleApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['appleApp'];
    }

    /**
     * @return GoogleApp
     */
    public function googleApp()
    {
        if (!isset($this->services['googleApp'])) {
            $this->services['googleApp'] = new GoogleApp(
                $this->client,
                __CLASS__,
                'GoogleApp',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'google_apps/{app_name}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'app_name' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Handbooks\GoogleApp',
                        ],
                        'post' => [
                            'path' => 'google_apps/{app_name}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'app_name' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Handbooks\GoogleApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['googleApp'];
    }

    /**
     * @return MobileCategory
     */
    public function mobileCategory()
    {
        if (!isset($this->services['mobileCategory'])) {
            $this->services['mobileCategory'] = new MobileCategory(
                $this->client,
                __CLASS__,
                'MobileCategory',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'mobile_categories.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Handbooks\MobileCategory[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['mobileCategory'];
    }

    /**
     * @return MobileOperationSystem
     */
    public function mobileOperationSystem()
    {
        if (!isset($this->services['mobileOperationSystem'])) {
            $this->services['mobileOperationSystem'] = new MobileOperationSystem(
                $this->client,
                __CLASS__,
                'MobileOperationSystem',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'mobile_os.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Handbooks\MobileOperationSystem[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['mobileOperationSystem'];
    }

    /**
     * @return MobileOperator
     */
    public function mobileOperator()
    {
        if (!isset($this->services['mobileOperator'])) {
            $this->services['mobileOperator'] = new MobileOperator(
                $this->client,
                __CLASS__,
                'MobileOperator',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'mobile_operators.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Handbooks\MobileOperator[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['mobileOperator'];
    }

    /**
     * @return MobileVendors
     */
    public function mobileVendors()
    {
        if (!isset($this->services['mobileVendors'])) {
            $this->services['mobileVendors'] = new MobileVendors(
                $this->client,
                __CLASS__,
                'MobileVendors',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'mobile_vendors.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Handbooks\MobileVendors[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['mobileVendors'];
    }

    /**
     * @return MobileTypes
     */
    public function mobileTypes()
    {
        if (!isset($this->services['mobileTypes'])) {
            $this->services['mobileTypes'] = new MobileTypes(
                $this->client,
                __CLASS__,
                'MobileTypes',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'mobile_types.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Handbooks\MobileTypes[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['mobileTypes'];
    }

    /**
     * @return Region
     */
    public function region()
    {
        if (!isset($this->services['region'])) {
            $this->services['region'] = new Region(
                $this->client,
                __CLASS__,
                'Region',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'regions.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                '_id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_parent_id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_parent_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_q' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_flags' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_flags__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Handbooks\Region[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['region'];
    }

    /**
     * @return UserGeo
     */
    public function userGeo()
    {
        if (!isset($this->services['userGeo'])) {
            $this->services['userGeo'] = new UserGeo(
                $this->client,
                __CLASS__,
                'UserGeo',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'user_geo.json',
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
                                '_id' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_q' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Handbooks\UserGeo[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['userGeo'];
    }

    /**
     * @return WindowsPhoneApp
     */
    public function windowsPhoneApp()
    {
        if (!isset($this->services['windowsPhoneApp'])) {
            $this->services['windowsPhoneApp'] = new WindowsPhoneApp(
                $this->client,
                __CLASS__,
                'WindowsPhoneApp',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'windows_phone_apps/{app_name}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'app_name' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Handbooks\WindowsPhoneApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['windowsPhoneApp'];
    }
}
