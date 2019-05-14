<?php

namespace TargetApi\Resource\PriceLists;

use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class CarsPricelist extends AbstaractResource
{
    /**
     * @param int $sourceId
     *
     * @return object|string
     */
    public function delete(int $sourceId = null)
    {
        return $this->call('delete', [
            'source_id' => $sourceId,
        ]);
    }
}
