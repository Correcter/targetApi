<?php

namespace TargetApi;

use TargetApi\Resource\PriceLists\CarsPricelist;
use TargetApi\Resource\PriceLists\CarsPricelists;
use TargetApi\Resource\PriceLists\PricelistImportErrors;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class PriceLists
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
    public function carsPricelist()
    {
        if (!isset($this->services['carsPricelist'])) {
            $this->services['carsPricelist'] = new CarsPricelist(
                $this->client,
                __CLASS__,
                'CarsPricelist',
                [
                    'methods' => [
                        'delete' => [
                            'path' => 'remarketing/pricelists/cars/{source_id}.json',
                            'httpMethod' => 'DELETE',
                            'parameters' => [
                                'source_id' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\PriceLists\CarsPricelist',
                        ],
                    ],
                ]
            );
        }

        return $this->services['carsPricelist'];
    }

    /**
     * @return CarsPricelists
     */
    public function carsPricelists()
    {
        if (!isset($this->services['carsPricelists'])) {
            $this->services['carsPricelists'] = new CarsPricelists(
                $this->client,
                __CLASS__,
                'CarsPricelists',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'remarketing/pricelists/cars.json',
                            'httpMethod' => 'GET',
                            'responseModel' => 'TargetApi\Model\PriceLists\CarsPricelist[]',
                        ],
                        'post' => [
                            'path' => 'remarketing/pricelists/cars.json',
                            'httpMethod' => 'POST',
                            'responseModel' => 'TargetApi\Model\PriceLists\CarsPricelist',
                        ],
                    ],
                ]
            );
        }

        return $this->services['carsPricelists'];
    }

    /**
     * @return PricelistImportErrors
     */
    public function pricelistImportErrors()
    {
        if (!isset($this->services['pricelistImportErrors'])) {
            $this->services['pricelistImportErrors'] = new PricelistImportErrors(
                $this->client,
                __CLASS__,
                'CarsPricelists',
                [
                    'methods' => [
                        'get' => [
                            'path' => 'pricelists/{pricelistIdOne},{pricelistIdTwo}/import_errors.json',
                            'httpMethod' => 'GET',
                            'parameters' => [
                                'pricelistIdOne' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                                'pricelistIdTwo' => [
                                    'location' => 'path',
                                    'type' => 'int',
                                    'required' => true,
                                ],
                            ],
                            'responseModel' => 'TargetApi\Model\PriceLists\PricelistImportError[]',
                        ],
                    ],
                ]
            );
        }

        return $this->services['pricelistImportErrors'];
    }
}
