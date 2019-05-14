<?php

namespace TargetApi;

use TargetApi\Resource\AdvertisingObjects\AuditPixelCheck;
use TargetApi\Resource\AdvertisingObjects\Banner;
use TargetApi\Resource\AdvertisingObjects\BannerFormats;
use TargetApi\Resource\AdvertisingObjects\BannerMassAction;
use TargetApi\Resource\AdvertisingObjects\BannerMassReplace;
use TargetApi\Resource\AdvertisingObjects\Banners;
use TargetApi\Resource\AdvertisingObjects\Campaign;
use TargetApi\Resource\AdvertisingObjects\CampaignBanners;
use TargetApi\Resource\AdvertisingObjects\CampaignBlackList;
use TargetApi\Resource\AdvertisingObjects\CampaignBlackLists;
use TargetApi\Resource\AdvertisingObjects\CampaignMassAction;
use TargetApi\Resource\AdvertisingObjects\Campaigns;
use TargetApi\Resource\AdvertisingObjects\Content;
use TargetApi\Resource\AdvertisingObjects\CreateUrl;
use TargetApi\Resource\AdvertisingObjects\Packages;
use TargetApi\Resource\AdvertisingObjects\PackagesPads;
use TargetApi\Resource\AdvertisingObjects\PadsTree;
use TargetApi\Resource\AdvertisingObjects\ProjectionPrediction;
use TargetApi\Resource\AdvertisingObjects\ReadUrl;
use TargetApi\Resource\AdvertisingObjects\ReadUrls;
use TargetApi\Resource\AdvertisingObjects\TargetingsTree;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class AdvertisingObjects
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
    public function auditPixelCheck()
    {
        if (!isset($this->services['auditPixelCheck'])) {
            $this->services['auditPixelCheck'] = new AuditPixelCheck(
                $this->client,
                __CLASS__,
                'AuditPixelCheck',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'audit_pixels.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\AuditPixelCheck[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['auditPixelCheck'];
    }

    /**
     * @return mixed
     */
    public function bannerMassReplace()
    {
        if (!isset($this->services['bannerMassReplace'])) {
            $this->services['bannerMassReplace'] = new BannerMassReplace(
                $this->client,
                __CLASS__,
                'BannerMassReplace',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'banners/mass_replace.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\BannerMassReplace[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['bannerMassReplace'];
    }

    /**
     * @return mixed
     */
    public function banner()
    {
        if (!isset($this->services['banner'])) {
            $this->services['banner'] = new Banner(
                $this->client,
                __CLASS__,
                'Banner',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'banners/{banner_id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'banner_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Banner',
                        ],
                        'post' => [
                            'path' => 'banners/{banner_id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'banner_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Banner',
                        ],
                        'delete' => [
                            'path' => 'banners/{banner_id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'banner_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Banner',
                        ],
                    ],
                ]
            );
        }

        return $this->services['banner'];
    }

    /**
     * @return mixed
     */
    public function bannerFormats()
    {
        if (!isset($this->services['bannerFormats'])) {
            $this->services['bannerFormats'] = new BannerFormats(
                $this->client,
                __CLASS__,
                'BannerFormats',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'banner_formats.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\BannerFormat[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['bannerFormats'];
    }

    /**
     * @return Banners
     */
    public function banners()
    {
        if (!isset($this->services['banners'])) {
            $this->services['banners'] = new Banners(
                $this->client,
                __CLASS__,
                'Banners',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'banners.json',
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
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_campaign_id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_campaign_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_campaign_status' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_campaign_status__ne' => [
                                    'location' => 'query',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                '_campaign_status__in' => [
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
                                '_updated__gt' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_updated__gte' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_updated__lt' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_updated__lte' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_url' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_textblock' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Banner[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['banners'];
    }

    /**
     * @return mixed
     */
    public function bannerMassAction()
    {
        if (!isset($this->services['bannerMassAction'])) {
            $this->services['bannerMassAction'] = new BannerMassAction(
                $this->client,
                __CLASS__,
                'BannerMassAction',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'banners/mass_action.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\BannerMassAction[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['bannerMassAction'];
    }

    /**
     * @return mixed
     */
    public function campaign()
    {
        if (!isset($this->services['campaign'])) {
            $this->services['campaign'] = new Campaign(
                $this->client,
                __CLASS__,
                'Campaign',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'campaigns/{campaign_id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'campaign_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Campaign',
                        ],
                        'post' => [
                            'path' => 'campaigns/{campaign_id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'campaign_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Campaign',
                        ],
                        'delete' => [
                            'path' => 'campaigns/{campaign_id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'campaign_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Campaign',
                        ],
                    ],
                ]
            );
        }

        return $this->services['campaign'];
    }

    /**
     * @return mixed
     */
    public function campaignBanners()
    {
        if (!isset($this->services['campaignBanners'])) {
            $this->services['campaignBanners'] = new CampaignBanners(
                $this->client,
                __CLASS__,
                'CampaignBanners',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'campaigns/{campaign_id}/banners.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'campaign_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Banner',
                        ],
                    ],
                ]
            );
        }

        return $this->services['campaignBanners'];
    }

    /**
     * @return mixed
     */
    public function campaignMassAction()
    {
        if (!isset($this->services['campaignMassAction'])) {
            $this->services['campaignMassAction'] = new CampaignMassAction(
                $this->client,
                __CLASS__,
                'CampaignMassAction',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'campaigns/mass_action.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\CampaignMassAction',
                        ],
                    ],
                ]
            );
        }

        return $this->services['campaignMassAction'];
    }

    /**
     * @return mixed
     */
    public function campaigns()
    {
        if (!isset($this->services['campaigns'])) {
            $this->services['campaigns'] = new Campaigns(
                $this->client,
                __CLASS__,
                'Campaigns',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'campaigns.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'fields' => [
                                    'location' => 'query',
                                    'type' => 'string',
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
                                '_last_updated' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_last_updated__gt' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_last_updated__gte' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_last_updated__lt' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_last_updated__lte' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'sorting' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Campaign[]',
                        ],
                        'post' => [
                            'path' => 'campaigns.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Campaign',
                        ],
                    ],
                ]
            );
        }

        return $this->services['campaigns'];
    }

    /**
     * @return mixed
     */
    public function content()
    {
        if (!isset($this->services['content'])) {
            $this->services['content'] = new Content(
                $this->client,
                __CLASS__,
                'Content',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'content/{content_name}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'content_name' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Content',
                        ],
                    ],
                ]
            );
        }

        return $this->services['content'];
    }

    /**
     * @return mixed
     */
    public function packages()
    {
        if (!isset($this->services['packages'])) {
            $this->services['packages'] = new Packages(
                $this->client,
                __CLASS__,
                'Packages',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'packages.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\Package[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['packages'];
    }

    /**
     * @return mixed
     */
    public function packagesPads()
    {
        if (!isset($this->services['packagesPads'])) {
            $this->services['packagesPads'] = new PackagesPads(
                $this->client,
                __CLASS__,
                'PackagePad',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'packages_pads.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\PackagePad[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['packagesPads'];
    }

    /**
     * @return PadsTree
     */
    public function padsTree()
    {
        if (!isset($this->services['padsTree'])) {
            $this->services['padsTree'] = new PadsTree(
                $this->client,
                __CLASS__,
                'PadsTree',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'pads_trees.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\PadsTree[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['padsTree'];
    }

    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    /**
     * @return mixed
     */
    public function targetingsTree()
    {
        if (!isset($this->services['targetingsTree'])) {
            $this->services['targetingsTree'] = new TargetingsTree(
                $this->client,
                __CLASS__,
                'TargetingsTree',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'targetings_tree.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'targetings' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\TargetingsTree',
                        ],
                    ],
                ]
            );
        }

        return $this->services['targetingsTree'];
    }

    /**
     * @return \TargetApi\Model\AdvertisingObjects\BlackList
     */
    public function campaignBlackLists()
    {
        if (!isset($this->services['campaignBlackLists'])) {
            $this->services['campaignBlackLists'] = new CampaignBlackLists(
                $this->client,
                __CLASS__,
                'CampaignBlackLists',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'place_black_lists.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'type' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\BlackList[]',
                        ],
                        'post' => [
                            'path' => 'place_black_lists.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\BlackList',
                        ],
                    ],
                ]
            );
        }

        return $this->services['campaignBlackLists'];
    }

    /**
     * @return mixed
     */
    public function campaignBlackList()
    {
        if (!isset($this->services['campaignBlackList'])) {
            $this->services['campaignBlackList'] = new CampaignBlackList(
                $this->client,
                __CLASS__,
                'CampaignBlackList',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'place_black_lists/{blacklist_id}.json',
                            'httpMethod' => 'POST',
                            'parameters' => [
                                'blacklist_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\BlackList',
                        ],
                        'delete' => [
                            'path' => 'place_black_lists/{blacklist_id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'blacklist_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\BlackList',
                        ],
                    ],
                ]
            );
        }

        return $this->services['campaignBlackList'];
    }

    /**
     * @return mixed
     */
    public function createUrl()
    {
        if (!isset($this->services['createUrl'])) {
            $this->services['createUrl'] = new CreateUrl(
                $this->client,
                __CLASS__,
                'createUrl',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'urls.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\URL',
                        ],
                    ],
                ]
            );
        }

        return $this->services['createUrl'];
    }

    /**
     * @return mixed
     */
    public function readUrl()
    {
        if (!isset($this->services['readUrl'])) {
            $this->services['readUrl'] = new ReadUrl(
                $this->client,
                __CLASS__,
                'ReadUrl',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'urls/{url_id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'url_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\URL',
                        ],
                    ],
                ]
            );
        }

        return $this->services['readUrl'];
    }

    /**
     * @return mixed
     */
    public function readUrls()
    {
        if (!isset($this->services['readUrls'])) {
            $this->services['readUrls'] = new ReadUrls(
                $this->client,
                __CLASS__,
                'ReadUrls',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'urls/{url_id1},{url_id2},{url_id3}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'url_id1' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'url_id2' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                                'url_id3' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\URL[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['readUrls'];
    }

    /**
     * @return mixed
     */
    public function projectionPrediction()
    {
        if (!isset($this->services['projectionPrediction'])) {
            $this->services['projectionPrediction'] = new ProjectionPrediction(
                $this->client,
                __CLASS__,
                'ProjectionPrediction',
                [
                    'methods' => [
                        'post' => [
                            'path' => 'projection.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\AdvertisingObjects\ProjectionPrediction',
                        ],
                    ],
                ]
            );
        }

        return $this->services['projectionPrediction'];
    }
}
