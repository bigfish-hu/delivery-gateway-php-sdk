<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property PickupPointSortEnum|null $field
 * @property OrderDirectionEnum|null $direction
 * @property LocationInput|null $location
 */
class PickupPointSortInput extends ObjectType
{
    protected $casts = [
        "field" => PickupPointSortEnum::class,
        "direction" => OrderDirectionEnum::class,
        "location" => LocationInput::class,
    ];

    /**
     * @param PickupPointSortEnum $value
     *
     * @return self
     */
    public function setField(PickupPointSortEnum $value): self
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
     * @param LocationInput|null $value
     *
     * @return self
     */
    public function setLocation(?LocationInput $value): self
    {
        $this->location = $value;

        return $this;
    }

    /**
     * @return PickupPointSortEnum|null
     */
    public function getField(): ?PickupPointSortEnum
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

    /**
     * @return LocationInput|null
     */
    public function getLocation(): ?LocationInput
    {
        return $this->location;
    }
}
