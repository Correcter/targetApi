<?php

namespace TargetApi;

use TargetApi\Resource\Statistics\LeadForm;
use TargetApi\Resource\Statistics\LeadInfo;
use TargetApi\Resource\Statistics\Statistic;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class Statistics
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
     * @return Statistic
     */
    public function statstic()
    {
        if (!isset($this->services['statistic'])) {
            $this->services['statistic'] = new Statistic(
                $this->client,
                __CLASS__,
                'Statistic',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'statistics/{type}/{period}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'type' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'period' => [
                                    'location' => 'path',
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'date_from' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'date_to' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'metrics' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Statistics\Statistic[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['statistic'];
    }

    /**
     * @return LeadForm
     */
    public function leadForm()
    {
        if (!isset($this->services['leadForm'])) {
            $this->services['leadForm'] = new LeadForm(
                $this->client,
                __CLASS__,
                'LeadForm',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'ok/lead_ads/forms.json',
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
                                '_campaign_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_campaign_id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_banner_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_banner_id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Statistics\LeadForm[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['leadForm'];
    }

    /**
     * @return LeadInfo
     */
    public function leadInfo()
    {
        if (!isset($this->services['leadInfo'])) {
            $this->services['leadInfo'] = new LeadInfo(
                $this->client,
                __CLASS__,
                'LeadInfo',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'ok/lead_ads/{form_id}.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'form_id' => [
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
                                '_created_time__lt' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_created_time__gt' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_created_time__lte' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_created_time__gte' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_campaign_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_campaign_id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_banner_id__in' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                '_banner_id' => [
                                    'location' => 'query',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\Statistics\LeadInfo[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['leadInfo'];
    }
}
