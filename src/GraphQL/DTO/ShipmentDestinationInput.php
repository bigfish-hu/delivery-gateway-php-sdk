<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $pickupPointId
 * @property AddressInput|null $address
 * @property LocationInput|null $location
 */
class ShipmentDestinationInput extends ObjectType
{
    protected $casts = [
        "pickupPointId" => "string",
        "address" => AddressInput::class,
        "location" => LocationInput::class,
    ];

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setPickupPointId(?string $value): self
    {
        $this->pickupPointId = $value;

        return $this;
    }

    /**
     * @param AddressInput|null $value
     *
     * @return self
     */
    public function setAddress(?AddressInput $value): self
    {
        $this->address = $value;

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
     * @return string|null
     */
    public function getPickupPointId(): ?string
    {
        return $this->pickupPointId;
    }

    /**
     * @return AddressInput|null
     */
    public function getAddress(): ?AddressInput
    {
        return $this->address;
    }

    /**
     * @return LocationInput|null
     */
    public function getLocation(): ?LocationInput
    {
        return $this->location;
    }
}
