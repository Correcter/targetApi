<?php

namespace TargetApi\Resource\Statistics;

use TargetApi\Resource\AbstaractResource;
use TargetApi\Types\StatisticTypes as TypeOfStatistic;

/**
 * Class Statistic.
 *
 * @author Vitaly Dergunov <correcter@inbox.ru>
 */
class Statistic extends AbstaractResource
{
    /**
     * @param TypeOfStatistic $types
     * @param bool            $validate
     *
     * @return object|string
     */
    public function get(TypeOfStatistic $types, $validate = true)
    {
        return $this->call('get', [
            'type' => $types->getType(),
            'period' => $types->getPeriod(),
            'id' => $types->getIds(),
            'date_from' => $types->getDateFrom(),
            'date_to' => $types->getDateTo(),
            'metrics' => $types->getMetrics(),
        ], null, null, $validate);
    }
}
