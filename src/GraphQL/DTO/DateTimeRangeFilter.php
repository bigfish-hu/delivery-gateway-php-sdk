<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property DateTimeTz|null $start
 * @property DateTimeTz|null $end
 */
class DateTimeRangeFilter extends ObjectType
{
    protected $casts = [
        "start" => DateTimeTz::class,
        "end" => DateTimeTz::class,
    ];

    /**
     * @param DateTimeTz|null $value
     *
     * @return self
     */
    public function setStart(?DateTimeTz $value): self
    {
        $this->start = $value;

        return $this;
    }

    /**
     * @param DateTimeTz|null $value
     *
     * @return self
     */
    public function setEnd(?DateTimeTz $value): self
    {
        $this->end = $value;

        return $this;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getStart(): ?DateTimeTz
    {
        return $this->start;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getEnd(): ?DateTimeTz
    {
        return $this->end;
    }
}
