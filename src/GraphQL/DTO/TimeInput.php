<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property int|null $hour
 * @property int|null $minute
 */
class TimeInput extends ObjectType
{
    protected $casts = [
        "hour" => "int",
        "minute" => "int",
    ];

    /**
     * @param int $value
     *
     * @return self
     */
    public function setHour(int $value): self
    {
        $this->hour = $value;

        return $this;
    }

    /**
     * @param int $value
     *
     * @return self
     */
    public function setMinute(int $value): self
    {
        $this->minute = $value;

        return $this;
    }

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
