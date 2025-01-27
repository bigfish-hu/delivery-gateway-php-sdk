<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property Date|null $start
 * @property Date|null $end
 */
class DateRangeFilter extends ObjectType
{
    protected $casts = [
        "start" => Date::class,
        "end" => Date::class,
    ];

    /**
     * @param Date|null $value
     *
     * @return self
     */
    public function setStart(?Date $value): self
    {
        $this->start = $value;

        return $this;
    }

    /**
     * @param Date|null $value
     *
     * @return self
     */
    public function setEnd(?Date $value): self
    {
        $this->end = $value;

        return $this;
    }

    /**
     * @return Date|null
     */
    public function getStart(): ?Date
    {
        return $this->start;
    }

    /**
     * @return Date|null
     */
    public function getEnd(): ?Date
    {
        return $this->end;
    }
}
