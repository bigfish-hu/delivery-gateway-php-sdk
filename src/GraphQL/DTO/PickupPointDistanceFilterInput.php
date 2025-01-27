<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property LocationInput|null $location
 * @property int|null $distance
 */
class PickupPointDistanceFilterInput extends ObjectType
{
    protected $casts = [
        "location" => LocationInput::class,
        "distance" => "int",
    ];

    /**
     * @param LocationInput $value
     *
     * @return self
     */
    public function setLocation(LocationInput $value): self
    {
        $this->location = $value;

        return $this;
    }

    /**
     * @param int $value
     *
     * @return self
     */
    public function setDistance(int $value): self
    {
        $this->distance = $value;

        return $this;
    }

    /**
     * @return LocationInput|null
     */
    public function getLocation(): ?LocationInput
    {
        return $this->location;
    }

    /**
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }
}
