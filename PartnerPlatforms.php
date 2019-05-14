<?php

namespace TargetApi;

use TargetApi\Resource\PartnerPlatforms\BannerTopics;
use TargetApi\Resource\PartnerPlatforms\GroupPad;
use TargetApi\Resource\PartnerPlatforms\GroupPadByIds;
use TargetApi\Resource\PartnerPlatforms\GroupPadPad;
use TargetApi\Resource\PartnerPlatforms\GroupPadPads;
use TargetApi\Resource\PartnerPlatforms\GroupPads;
use TargetApi\Resource\PartnerPlatforms\Pad;
use TargetApi\Resource\PartnerPlatforms\PlatformPad;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class PartnerPlatforms
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
     * @return BannerTopics
     */
    public function bannerTopics()
    {
        if (!isset($this->services['bannerTopics'])) {
            $this->services['bannerTopics'] = new BannerTopics(
                $this->client,
                __CLASS__,
                'BannerTopics',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'banner_topics.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\BannerTopic[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['bannerTopics'];
    }

    /**
     * @return GroupPadPad
     */
    public function groupPadPad()
    {
        if (!isset($this->services['groupPadPad'])) {
            $this->services['groupPadPad'] = new GroupPadPad(
                $this->client,
                __CLASS__,
                'GroupPadPad',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'group_pads/{group_pad_id}/pads/{id}.json',
                            'parameters' => [
                                'group_pad_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\Pad',
                        ],
                        'post' => [
                            'path' => 'group_pads/{group_pad_id}/pads/{id}.json',
                            'parameters' => [
                                'group_pad_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\Pad',
                        ],
                    ],
                ]
            );
        }

        return $this->services['groupPadPad'];
    }

    /**
     * @return GroupPadPads
     */
    public function groupPadPads()
    {
        if (!isset($this->services['groupPadPads'])) {
            $this->services['groupPadPads'] = new GroupPadPads(
                $this->client,
                __CLASS__,
                'GroupPadPads',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'group_pads/{group_pad_id}/pads.json',
                            'parameters' => [
                                'group_pad_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\Pad',
                        ],
                    ],
                ]
            );
        }

        return $this->services['groupPadPads'];
    }

    /**
     * @return GroupPad
     */
    public function groupPad()
    {
        if (!isset($this->services['groupPad'])) {
            $this->services['groupPad'] = new GroupPad(
                $this->client,
                __CLASS__,
                'GroupPad',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'group_pads/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\GroupPad',
                        ],
                        'post' => [
                            'path' => 'group_pads/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\GroupPad',
                        ],
                    ],
                ]
            );
        }

        return $this->services['groupPad'];
    }

    /**
     * @return GroupPads
     */
    public function groupPads()
    {
        if (!isset($this->services['groupPads'])) {
            $this->services['groupPads'] = new GroupPads(
                $this->client,
                __CLASS__,
                'GroupPads',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'group_pads.json',
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
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\GroupPad[]',
                        ],
                        'post' => [
                            'path' => 'group_pads.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\GroupPad',
                        ],
                    ],
                ]
            );
        }

        return $this->services['groupPads'];
    }

    /**
     * @return GroupPadByIds
     */
    public function groupPadByIds()
    {
        if (!isset($this->services['groupPadByIds'])) {
            $this->services['groupPadByIds'] = new GroupPadByIds(
                $this->client,
                __CLASS__,
                'GroupPadByIds',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'group_pads/{id1},{id1}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'id1' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'id2' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\GroupPad[]',
                        ],
                        'post' => [
                            'path' => 'group_pads.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\GroupPad',
                        ],
                    ],
                ]
            );
        }

        return $this->services['groupPadByIds'];
    }

    /**
     * @return Pad
     */
    public function pad()
    {
        if (!isset($this->services['pad'])) {
            $this->services['pad'] = new Pad(
                $this->client,
                __CLASS__,
                'Pad',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'pads/{id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\Pad',
                        ],
                        'post' => [
                            'path' => 'pads/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\Pad',
                        ],
                    ],
                ]
            );
        }

        return $this->services['pad'];
    }

    /**
     * @return PlatformPad
     */
    public function platformPad()
    {
        if (!isset($this->services['platformPad'])) {
            $this->services['platformPad'] = new PlatformPad(
                $this->client,
                __CLASS__,
                'PlatformPad',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'platforms.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\PartnerPlatforms\PlatformPad',
                        ],
                    ],
                ]
            );
        }

        return $this->services['platformPad'];
    }
}
