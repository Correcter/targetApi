<?php

namespace TargetApi;

use TargetApi\Resource\Audience\AudienceScoreStats;
use TargetApi\Resource\Audience\CounterGoal;
use TargetApi\Resource\Audience\CounterGoals;
use TargetApi\Resource\Audience\DmpProviders;
use TargetApi\Resource\Audience\DmpRequest;
use TargetApi\Resource\Audience\DmpSegment;
use TargetApi\Resource\Audience\GeoCoverage;
use TargetApi\Resource\Audience\Goals;
use TargetApi\Resource\Audience\LocalGeo;
use TargetApi\Resource\Audience\LookalikeAudience;
use TargetApi\Resource\Audience\LookalikeAudiences;
use TargetApi\Resource\Audience\RemarketingAndroidCategories;
use TargetApi\Resource\Audience\RemarketingAndroidCategory;
use TargetApi\Resource\Audience\RemarketingCampaignList;
use TargetApi\Resource\Audience\RemarketingCampaignLists;
use TargetApi\Resource\Audience\RemarketingCounter;
use TargetApi\Resource\Audience\RemarketingCounters;
use TargetApi\Resource\Audience\RemarketingInAppEvents;
use TargetApi\Resource\Audience\RemarketingMmApp;
use TargetApi\Resource\Audience\RemarketingMmApps;
use TargetApi\Resource\Audience\RemarketingOkApp;
use TargetApi\Resource\Audience\RemarketingOkApps;
use TargetApi\Resource\Audience\RemarketingOkGroup;
use TargetApi\Resource\Audience\RemarketingOkGroups;
use TargetApi\Resource\Audience\RemarketingPricelist;
use TargetApi\Resource\Audience\RemarketingPricelists;
use TargetApi\Resource\Audience\RemarketingUserGeo;
use TargetApi\Resource\Audience\RemarketingUserGeos;
use TargetApi\Resource\Audience\RemarketingUsersList;
use TargetApi\Resource\Audience\RemarketingUsersLists;
use TargetApi\Resource\Audience\RemarketingVkApp;
use TargetApi\Resource\Audience\RemarketingVkApps;
use TargetApi\Resource\Audience\RemarketingVkGroup;
use TargetApi\Resource\Audience\RemarketingVkGroups;
use TargetApi\Resource\Audience\Segment;
use TargetApi\Resource\Audience\SegmentRelation;
use TargetApi\Resource\Audience\SegmentRelations;
use TargetApi\Resource\Audience\SegmentRelationsDelete;
use TargetApi\Resource\Audience\Segments;
use TargetApi\Resource\Audience\SharingKeyUser;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Audience
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
     * @return AudienceScoreStats
     */
    public function audienceScoreStats()
    {
        if (!isset($this->services['audienceScoreStats'])) {
            $this->services['audienceScoreStats'] = new AudienceScoreStats(
                $this->client,
                __CLASS__,
                'AudienceScoreStats',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/custom_audiences/{audience_id}/histogram.json',
                            'parameters' => [
                                'audience_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\AudienceScoreStat[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['audienceScoreStats'];
    }

    /**
     * @return Goals
     */
    public function goals()
    {
        if (!isset($this->services['goals'])) {
            $this->services['goals'] = new Goals(
                $this->client,
                __CLASS__,
                'Goals',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'goals.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\Goals',
                        ],
                    ],
                ]
            );
        }

        return $this->services['goals'];
    }

    /**
     * @return CounterGoal
     */
    public function counterGoal()
    {
        if (!isset($this->services['counterGoal'])) {
            $this->services['counterGoal'] = new CounterGoal(
                $this->client,
                __CLASS__,
                'CounterGoal',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'remarketing/counters/{counter_id}/goals/{goal_id}.json',
                            'parameters' => [
                                'counter_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'goal_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounterGoal',
                        ],
                    ],
                ]
            );
        }

        return $this->services['counterGoal'];
    }

    /**
     * @return CounterGoals
     */
    public function counterGoals()
    {
        if (!isset($this->services['counterGoals'])) {
            $this->services['counterGoals'] = new CounterGoals(
                $this->client,

                __CLASS__,
                'CounterGoals',
                    [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/counters/{counter_id}/goals.json',
                            'parameters' => [
                                'counter_id' => [
                                  'location' => 'path',
                                  'type' => 'string',
                                  'required' => true,
                                ],
                            ],
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounterGoal[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/counters/{counter_id}/goals.json',
                            'parameters' => [
                                'counter_id' => [
                                  'location' => 'path',
                                  'type' => 'string',
                                  'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounterGoal',
                        ],
                    ],
                ]
            );
        }

        return $this->services['counterGoals'];
    }

    /**
     * @return DmpProviders
     */
    public function dmpProviders()
    {
        if (!isset($this->services['dmpProviders'])) {
            $this->services['dmpProviders'] = new DmpProviders(
                $this->client,
                __CLASS__,
                'DmpProviders',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/dmp/providers.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\DmpProvider[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['dmpProviders'];
    }

    /**
     * @return DmpRequest
     */
    public function dmpRequest()
    {
        if (!isset($this->services['dmpRequest'])) {
            $this->services['dmpRequest'] = new DmpRequest(
                $this->client,

                __CLASS__,
                'DmpRequest',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'dmp/requests.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\DmpRequest',
                        ],
                    ],
                ]
            );
        }

        return $this->services['dmpRequest'];
    }

    /**
     * @return DmpSegment
     */
    public function dmpSegment()
    {
        if (!isset($this->services['dmpSegment'])) {
            $this->services['dmpSegment'] = new DmpSegment(
                $this->client,

                __CLASS__,
                'DmpSegment',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'dmp/segments.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\DmpSegment[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['dmpSegment'];
    }

    /**
     * @return LookalikeAudience
     */
    public function lookalikeAudience()
    {
        if (!isset($this->services['lookalikeAudience'])) {
            $this->services['lookalikeAudience'] = new LookalikeAudience(
                $this->client,

                __CLASS__,
                'LookalikeAudience',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/lookalike_audiences/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\LookalikeAudience[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/lookalike_audiences/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\LookalikeAudience',
                        ],
                        'delete' => [
                            'path' => 'remarketing/lookalike_audiences/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Audiences\LookalikeAudience',
                        ],
                    ],
                ]
            );
        }

        return $this->services['lookalikeAudience'];
    }

    /**
     * @return LookalikeAudiences
     */
    public function lookalikeAudiences()
    {
        if (!isset($this->services['lookalikeAudiences'])) {
            $this->services['lookalikeAudiences'] = new LookalikeAudiences(
                $this->client,

                __CLASS__,
                'LookalikeAudiences',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/lookalike_audiences.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\LookalikeAudience[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/lookalike_audiences.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\LookalikeAudience',
                        ],
                    ],
                ]
            );
        }

        return $this->services['lookalikeAudiences'];
    }

    /**
     * @return RemarketingCampaignList
     */
    public function remarketingCampaignList()
    {
        if (!isset($this->services['remarketingCampaignList'])) {
            $this->services['remarketingCampaignList'] = new RemarketingCampaignList(
                $this->client,

                __CLASS__,
                'RemarketingCampaignList',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'remarketing/campaign_lists/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCampaignList',
                        ],
                        'delete' => [
                            'path' => 'remarketing/campaign_lists/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCampaignList',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingCampaignList'];
    }

    /**
     * @return RemarketingCampaignLists
     */
    public function remarketingCampaignLists()
    {
        if (!isset($this->services['remarketingCampaignLists'])) {
            $this->services['remarketingCampaignLists'] = new RemarketingCampaignLists(
                $this->client,

                __CLASS__,
                'RemarketingCampaignLists',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/campaign_lists.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCampaignList[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/campaign_lists.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCampaignList',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingCampaignLists'];
    }

    /**
     * @return RemarketingCounter
     */
    public function remarketingCounter()
    {
        if (!isset($this->services['remarketingCounter'])) {
            $this->services['remarketingCounter'] = new RemarketingCounter(
                $this->client,

                __CLASS__,
                'RemarketingCounter',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/counters/{counter_id}.json',
                            'parameters' => [
                                'counter_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounter[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/counters/{counter_id}.json',
                            'parameters' => [
                                'counter_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounter',
                        ],
                        'delete' => [
                            'path' => 'remarketing/counters/{counter_id}.json',
                            'parameters' => [
                                'counter_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounter',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingCounter'];
    }

    /**
     * @return RemarketingCounters
     */
    public function remarketingCounters()
    {
        if (!isset($this->services['remarketingCounters'])) {
            $this->services['remarketingCounters'] = new RemarketingCounters(
                $this->client,

                __CLASS__,
                'RemarketingCounters',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/counters.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounter[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/counters.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingCounter',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingCounters'];
    }

    /**
     * @return RemarketingInAppEvents
     */
    public function remarketingInAppEvents()
    {
        if (!isset($this->services['remarketingInAppEvents'])) {
            $this->services['remarketingInAppEvents'] = new RemarketingInAppEvents(
                $this->client,

                __CLASS__,
                'RemarketingInAppEvents',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/inapp_events.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingInAppEvent[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingInAppEvents'];
    }

    /**
     * @return RemarketingAndroidCategory
     */
    public function remarketingAndroidCategory()
    {
        if (!isset($this->services['remarketingAndroidCategory'])) {
            $this->services['remarketingAndroidCategory'] = new RemarketingAndroidCategory(
                $this->client,

                __CLASS__,
                'RemarketingAndroidCategory',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingAndroidCategory',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingAndroidCategory'];
    }

    /**
     * @return RemarketingAndroidCategories
     */
    public function remarketingAndroidCategories()
    {
        if (!isset($this->services['remarketingAndroidCategories'])) {
            $this->services['remarketingAndroidCategories'] = new RemarketingAndroidCategories(
                $this->client,

                __CLASS__,
                'RemarketingAndroidCategories',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/android_categories.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingAndroidCategory[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/android_categories.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingAndroidCategory',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingAndroidCategories'];
    }

    /**
     * @return RemarketingMmApp
     */
    public function remarketingMmApp()
    {
        if (!isset($this->services['remarketingMmApp'])) {
            $this->services['remarketingMmApp'] = new RemarketingMmApp(
                $this->client,

                __CLASS__,
                'RemarketingMmApp',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/mm_apps/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingMmApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingMmApp'];
    }

    /**
     * @return RemarketingMmApps
     */
    public function remarketingMmApps()
    {
        if (!isset($this->services['remarketingMmApps'])) {
            $this->services['remarketingMmApps'] = new RemarketingMmApps(
                $this->client,

                __CLASS__,
                'RemarketingMmApps',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/mm_apps.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingMmApp[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/mm_apps.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingMmApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingMmApps'];
    }

    /**
     * @return RemarketingOkApp
     */
    public function remarketingOkApp()
    {
        if (!isset($this->services['remarketingOkApp'])) {
            $this->services['remarketingOkApp'] = new RemarketingOkApp(
                $this->client,

                __CLASS__,
                'RemarketingOkApp',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/ok_apps/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingOkApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingOkApp'];
    }

    /**
     * @return RemarketingOkApps
     */
    public function remarketingOkApps()
    {
        if (!isset($this->services['remarketingOkApps'])) {
            $this->services['remarketingOkApps'] = new RemarketingOkApps(
                $this->client,

                __CLASS__,
                'RemarketingOkApps',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/ok_apps.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingOkApp[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/ok_apps.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingOkApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingOkApps'];
    }

    /**
     * @return RemarketingOkGroup
     */
    public function remarketingOkGroup()
    {
        if (!isset($this->services['remarketingOkGroup'])) {
            $this->services['remarketingOkGroup'] = new RemarketingOkGroup(
                $this->client,

                __CLASS__,
                'RemarketingOkGroup',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/ok_groups/{id}.json',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'httpMethod' => 'DELETE',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingOkGroup',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingOkGroup'];
    }

    /**
     * @return RemarketingOkGroups
     */
    public function remarketingOkGroups()
    {
        if (!isset($this->services['remarketingOkGroups'])) {
            $this->services['remarketingOkGroups'] = new RemarketingOkGroups(
                $this->client,

                __CLASS__,
                'RemarketingOkGroups',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/ok_groups.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingOkGroup[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/ok_groups.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingOkGroup',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingOkGroups'];
    }

    /**
     * @return RemarketingPricelist
     */
    public function remarketingPricelist()
    {
        if (!isset($this->services['remarketingPricelist'])) {
            $this->services['remarketingPricelist'] = new RemarketingPricelist(
                $this->client,

                __CLASS__,
                'RemarketingPricelist',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/pricelists/{id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingPricelist[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/pricelists/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingPricelist',
                        ],
                        'delete' => [
                            'path' => 'remarketing/pricelists/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingPricelist',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingPricelist'];
    }

    /**
     * @return RemarketingPricelists
     */
    public function remarketingPricelists()
    {
        if (!isset($this->services['remarketingPricelists'])) {
            $this->services['remarketingPricelists'] = new RemarketingPricelists(
                $this->client,

                __CLASS__,
                'RemarketingPricelists',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/pricelists.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingPricelist[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/pricelists.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingPricelist',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingPricelists'];
    }

    /**
     * @return RemarketingUserGeo
     */
    public function remarketingUserGeo()
    {
        if (!isset($this->services['remarketingUserGeo'])) {
            $this->services['remarketingUserGeo'] = new RemarketingUserGeo(
                $this->client,

                __CLASS__,
                'RemarketingUserGeo',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/user_geo.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUserGeo[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/user_geo.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUserGeo',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingUserGeo'];
    }

    /**
     * @return RemarketingUserGeos
     */
    public function remarketingUserGeos()
    {
        if (!isset($this->services['remarketingUserGeos'])) {
            $this->services['remarketingUserGeos'] = new RemarketingUserGeos(
                $this->client,

                __CLASS__,
                'RemarketingUserGeos',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/user_geo/{id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUserGeo',
                        ],
                        'post' => [
                            'path' => 'remarketing/user_geo/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUserGeo',
                        ],
                        'delete' => [
                            'path' => 'remarketing/user_geo/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUserGeo',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingUserGeos'];
    }

    /**
     * @return RemarketingUsersList
     */
    public function remarketingUsersList()
    {
        if (!isset($this->services['remarketingUsersList'])) {
            $this->services['remarketingUsersList'] = new RemarketingUsersList(
                $this->client,

                __CLASS__,
                'RemarketingUsersList',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/users_lists/{id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUsersList',
                        ],
                        'post' => [
                            'path' => 'remarketing/users_lists/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUsersList',
                        ],
                        'delete' => [
                            'path' => 'remarketing/users_lists/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUsersList',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingUsersList'];
    }

    /**
     * @return RemarketingUsersLists
     */
    public function remarketingUsersLists()
    {
        if (!isset($this->services['remarketingUsersLists'])) {
            $this->services['remarketingUsersLists'] = new RemarketingUsersLists(
                $this->client,

                __CLASS__,
                'RemarketingUsersLists',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/users_lists.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUsersList[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/users_lists.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingUsersList',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingUsersLists'];
    }

    /**
     * @return RemarketingVkApp
     */
    public function remarketingVkApp()
    {
        if (!isset($this->services['remarketingVkApp'])) {
            $this->services['remarketingVkApp'] = new RemarketingVkApp(
                $this->client,

                __CLASS__,
                'RemarketingVkApp',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/vk_apps/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingVkApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingVkApp'];
    }

    /**
     * @return RemarketingVkApps
     */
    public function remarketingVkApps()
    {
        if (!isset($this->services['remarketingVkApps'])) {
            $this->services['remarketingVkApps'] = new RemarketingVkApps(
                $this->client,

                __CLASS__,
                'RemarketingVkApps',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/vk_apps.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingVkApp[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/vk_apps.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingVkApp',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingVkApps'];
    }

    /**
     * @return RemarketingVkGroup
     */
    public function remarketingVkGroup()
    {
        if (!isset($this->services['remarketingVkGroup'])) {
            $this->services['remarketingVkGroup'] = new RemarketingVkGroup(
                $this->client,

                __CLASS__,
                'RemarketingVkGroup',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/vk_groups/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingVkGroup',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingVkGroup'];
    }

    /**
     * @return RemarketingVkGroups
     */
    public function remarketingVkGroups()
    {
        if (!isset($this->services['remarketingVkGroups'])) {
            $this->services['remarketingVkGroups'] = new RemarketingVkGroups(
                $this->client,

                __CLASS__,
                'RemarketingVkGroups',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/vk_groups.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingVkGroup[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/vk_groups.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\RemarketingVkGroup',
                        ],
                    ],
                ]
            );
        }

        return $this->services['remarketingVkGroups'];
    }

    /**
     * @return Segment
     */
    public function segment()
    {
        if (!isset($this->services['segment'])) {
            $this->services['segment'] = new Segment(
                $this->client,

                __CLASS__,
                'Segment',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/segments/{id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\Segment',
                        ],
                        'post' => [
                            'path' => 'remarketing/segments/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\Segment',
                        ],
                        'delete' => [
                            'path' => 'remarketing/segments/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\Segment',
                        ],
                    ],
                ]
            );
        }

        return $this->services['segment'];
    }

    /**
     * @return SegmentRelation
     */
    public function segmentRelation()
    {
        if (!isset($this->services['segmentRelation'])) {
            $this->services['segmentRelation'] = new SegmentRelation(
                $this->client,

                __CLASS__,
                'SegmentRelation',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'remarketing/segments/{segment_id}/relations/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'segment_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\SegmentRelation',
                        ],
                        'delete' => [
                            'path' => 'remarketing/segments/{segment_id}/relations/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'segment_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\SegmentRelation',
                        ],
                    ],
                ]
            );
        }

        return $this->services['segmentRelation'];
    }

    /**
     * @return SegmentRelations
     */
    public function segmentRelations()
    {
        if (!isset($this->services['segmentRelations'])) {
            $this->services['segmentRelations'] = new SegmentRelations(
                $this->client,

                __CLASS__,
                'SegmentRelations',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/segments/{segment_id}/relations.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'segment_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\SegmentRelation[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/segments/{segment_id}/relations.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'segment_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\SegmentRelation[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['segmentRelations'];
    }

    /**
     * @return SegmentRelationsDelete
     */
    public function segmentRelationsDelete()
    {
        if (!isset($this->services['segmentRelationsDelete'])) {
            $this->services['segmentRelationsDelete'] = new SegmentRelationsDelete(
                $this->client,

                __CLASS__,
                'SegmentRelationsDelete',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/segments/{segment_id}/relations/{id1},{id2}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'segment_id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'id1' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'id2' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\SegmentRelation',
                        ],
                    ],
                ]
            );
        }

        return $this->services['segmentRelationsDelete'];
    }

    /**
     * @return Segments
     */
    public function segments()
    {
        if (!isset($this->services['segments'])) {
            $this->services['segments'] = new Segments(
                $this->client,

                __CLASS__,
                'Segments',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/segments.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'limit' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'offset' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
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
                                '_name' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_name__startswith' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\Segment[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/segments.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\Segment',
                        ],
                    ],
                ]
            );
        }

        return $this->services['segments'];
    }

    /**
     * @return SharingKeyUser
     */
    public function sharingKeyUser()
    {
        if (!isset($this->services['sharingKeyUser'])) {
            $this->services['sharingKeyUser'] = new SharingKeyUser(
                $this->client,

                __CLASS__,
                'SharingKeyUser',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'sharing_keys/{key}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'key' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\SharingKeyUser',
                        ],
                        'delete' => [
                            'path' => 'sharing_keys/{key}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'key' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\SharingKeyUser',
                        ],
                    ],
                ]
            );
        }

        return $this->services['sharingKeyUser'];
    }

    /**
     * @return GeoCoverage
     */
    public function geoCoverage()
    {
        if (!isset($this->services['geoCoverage'])) {
            $this->services['geoCoverage'] = new GeoCoverage(
                $this->client,

                __CLASS__,
                'GeoCoverage',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'geo/coverage.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\Audiences\GeoCoverage[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['geoCoverage'];
    }

    /**
     * @return LocalGeo
     */
    public function localGeo()
    {
        if (!isset($this->services['localGeo'])) {
            $this->services['localGeo'] = new LocalGeo(
                $this->client,

                __CLASS__,
                'LocalGeo',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'remarketing/local_geo/{id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\LocalGeo',
                        ],
                        'delete' => [
                            'path' => 'remarketing/local_geo/{id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'id' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Audiences\LocalGeo',
                        ],
                    ],
                ]
            );
        }

        return $this->services['localGeo'];
    }
}
