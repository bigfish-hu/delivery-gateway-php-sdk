<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $start
 * @property float|null $end
 */
class FloatRange extends ObjectType
{
    protected $casts = [
        "start" => "float",
        "end" => "float",
    ];

    /**
     * @return float|null
     */
    public function getStart(): ?float
    {
        return $this->start;
    }

    /**
     * @return float|null
     */
    public function getEnd(): ?float
    {
        return $this->end;
    }
}
