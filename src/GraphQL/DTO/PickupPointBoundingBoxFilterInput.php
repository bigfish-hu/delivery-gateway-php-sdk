<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property LocationInput|null $southWest
 * @property LocationInput|null $northEast
 */
class PickupPointBoundingBoxFilterInput extends ObjectType
{
    protected $casts = [
        "southWest" => LocationInput::class,
        "northEast" => LocationInput::class,
    ];

    /**
     * @param LocationInput $value
     *
     * @return self
     */
    public function setSouthWest(LocationInput $value): self
    {
        $this->southWest = $value;

        return $this;
    }

    /**
     * @param LocationInput $value
     *
     * @return self
     */
    public function setNorthEast(LocationInput $value): self
    {
        $this->northEast = $value;

        return $this;
    }

    /**
     * @return LocationInput|null
     */
    public function getSouthWest(): ?LocationInput
    {
        return $this->southWest;
    }

    /**
     * @return LocationInput|null
     */
    public function getNorthEast(): ?LocationInput
    {
        return $this->northEast;
    }
}
