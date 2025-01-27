<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property DayEnum|null $day
 * @property TimeInput|null $start
 * @property TimeInput|null $end
 */
class OpeningHourInput extends ObjectType
{
    protected $casts = [
        "day" => DayEnum::class,
        "start" => TimeInput::class,
        "end" => TimeInput::class,
    ];

    /**
     * @param DayEnum $value
     *
     * @return self
     */
    public function setDay(DayEnum $value): self
    {
        $this->day = $value;

        return $this;
    }

    /**
     * @param TimeInput $value
     *
     * @return self
     */
    public function setStart(TimeInput $value): self
    {
        $this->start = $value;

        return $this;
    }

    /**
     * @param TimeInput $value
     *
     * @return self
     */
    public function setEnd(TimeInput $value): self
    {
        $this->end = $value;

        return $this;
    }

    /**
     * @return DayEnum|null
     */
    public function getDay(): ?DayEnum
    {
        return $this->day;
    }

    /**
     * @return TimeInput|null
     */
    public function getStart(): ?TimeInput
    {
        return $this->start;
    }

    /**
     * @return TimeInput|null
     */
    public function getEnd(): ?TimeInput
    {
        return $this->end;
    }
}
