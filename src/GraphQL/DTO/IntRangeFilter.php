<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property int|null $start
 * @property int|null $end
 */
class IntRangeFilter extends ObjectType
{
    protected $casts = [
        "start" => "int",
        "end" => "int",
    ];

    /**
     * @param int|null $value
     *
     * @return self
     */
    public function setStart(?int $value): self
    {
        $this->start = $value;

        return $this;
    }

    /**
     * @param int|null $value
     *
     * @return self
     */
    public function setEnd(?int $value): self
    {
        $this->end = $value;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getStart(): ?int
    {
        return $this->start;
    }

    /**
     * @return int|null
     */
    public function getEnd(): ?int
    {
        return $this->end;
    }
}
