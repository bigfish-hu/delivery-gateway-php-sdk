<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property DayEnum|null $day
 * @property Time|null $start
 * @property Time|null $end
 */
class OpeningHour extends ObjectType
{
    protected $casts = [
        "day" => DayEnum::class,
        "start" => Time::class,
        "end" => Time::class,
    ];

    /**
     * @return DayEnum|null
     */
    public function getDay(): ?DayEnum
    {
        return $this->day;
    }

    /**
     * @return Time|null
     */
    public function getStart(): ?Time
    {
        return $this->start;
    }

    /**
     * @return Time|null
     */
    public function getEnd(): ?Time
    {
        return $this->end;
    }
}
