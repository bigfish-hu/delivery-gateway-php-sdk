<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ShipmentSortEnum|null $field
 * @property OrderDirectionEnum|null $direction
 */
class ShipmentSortInput extends ObjectType
{
    protected $casts = [
        "field" => ShipmentSortEnum::class,
        "direction" => OrderDirectionEnum::class,
    ];

    /**
     * @param ShipmentSortEnum $value
     *
     * @return self
     */
    public function setField(ShipmentSortEnum $value): self
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
     * @return ShipmentSortEnum|null
     */
    public function getField(): ?ShipmentSortEnum
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
