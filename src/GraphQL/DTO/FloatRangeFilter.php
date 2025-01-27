<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $start
 * @property float|null $end
 */
class FloatRangeFilter extends ObjectType
{
    protected $casts = [
        "start" => "float",
        "end" => "float",
    ];

    /**
     * @param float|null $value
     *
     * @return self
     */
    public function setStart(?float $value): self
    {
        $this->start = $value;

        return $this;
    }

    /**
     * @param float|null $value
     *
     * @return self
     */
    public function setEnd(?float $value): self
    {
        $this->end = $value;

        return $this;
    }

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
