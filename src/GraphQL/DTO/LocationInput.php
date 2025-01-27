<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $latitude
 * @property float|null $longitude
 */
class LocationInput extends ObjectType
{
    protected $casts = [
        "latitude" => "float",
        "longitude" => "float",
    ];

    /**
     * @param float $value
     *
     * @return self
     */
    public function setLatitude(float $value): self
    {
        $this->latitude = $value;

        return $this;
    }

    /**
     * @param float $value
     *
     * @return self
     */
    public function setLongitude(float $value): self
    {
        $this->longitude = $value;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }
}
