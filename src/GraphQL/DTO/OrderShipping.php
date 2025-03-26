<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $pickupPointId
 * @property Address|null $address
 * @property ShippingMethodEnum|null $method
 * @property string|null $provider
 * @property ShipmentStatusEnum|null $status
 * @property ShipmentResolutionEnum|null $resolution
 */
class OrderShipping extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "email" => "string",
        "phone" => "string",
        "pickupPointId" => "string",
        "address" => Address::class,
        "method" => ShippingMethodEnum::class,
        "provider" => "string",
        "status" => ShipmentStatusEnum::class,
        "resolution" => ShipmentResolutionEnum::class,
    ];

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getPickupPointId(): ?string
    {
        return $this->pickupPointId;
    }

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @return ShippingMethodEnum|null
     */
    public function getMethod(): ?ShippingMethodEnum
    {
        return $this->method;
    }

    /**
     * @return string|null
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * @return ShipmentStatusEnum|null
     */
    public function getStatus(): ?ShipmentStatusEnum
    {
        return $this->status;
    }

    /**
     * @return ShipmentResolutionEnum|null
     */
    public function getResolution(): ?ShipmentResolutionEnum
    {
        return $this->resolution;
    }
}
