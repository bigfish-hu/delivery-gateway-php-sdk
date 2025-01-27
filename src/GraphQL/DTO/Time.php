<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property int|null $hour
 * @property int|null $minute
 */
class Time extends ObjectType
{
    protected $casts = [
        "hour" => "int",
        "minute" => "int",
    ];

    /**
     * @return int|null
     */
    public function getHour(): ?int
    {
        return $this->hour;
    }

    /**
     * @return int|null
     */
    public function getMinute(): ?int
    {
        return $this->minute;
    }
}
