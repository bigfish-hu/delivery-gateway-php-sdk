<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property PickupPoint|null $pickupPoint
 * @property Address|null $address
 * @property Location|null $location
 */
class ShipmentOrigin extends ObjectType
{
    protected $casts = [
        "pickupPoint" => PickupPoint::class,
        "address" => Address::class,
        "location" => Location::class,
    ];

    /**
     * @return PickupPoint|null
     */
    public function getPickupPoint(): ?PickupPoint
    {
        return $this->pickupPoint;
    }

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }
}
