<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property WaybillSortEnum|null $field
 * @property OrderDirectionEnum|null $direction
 */
class WaybillSortInput extends ObjectType
{
    protected $casts = [
        "field" => WaybillSortEnum::class,
        "direction" => OrderDirectionEnum::class,
    ];

    /**
     * @param WaybillSortEnum $value
     *
     * @return self
     */
    public function setField(WaybillSortEnum $value): self
    {
        $this->field = $value;

        return $this;
    }

    /**
     * @param OrderDirectionEnum|null $value
     *
     * @return self
     */
    public function setDirection(?OrderDirectionEnum $value): self
    {
        $this->direction = $value;

        return $this;
    }

    /**
     * @return WaybillSortEnum|null
     */
    public function getField(): ?WaybillSortEnum
    {
        return $this->field;
    }

    /**
     * @return OrderDirectionEnum|null
     */
    public function getDirection(): ?OrderDirectionEnum
    {
        return $this->direction;
    }
}
