<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $pickupPointId
 * @property AddressInput|null $address
 * @property ShippingMethodEnum|null $method
 * @property string|null $provider
 * @property ShipmentStatusEnum|null $status
 * @property ShipmentResolutionEnum|null $resolution
 */
class OrderShippingInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "email" => "string",
        "phone" => "string",
        "pickupPointId" => "string",
        "address" => AddressInput::class,
        "method" => ShippingMethodEnum::class,
        "provider" => "string",
        "status" => ShipmentStatusEnum::class,
        "resolution" => ShipmentResolutionEnum::class,
    ];

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setName(?string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setEmail(?string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setPhone(?string $value): self
    {
        $this->phone = $value;

        return $this;
    }

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
     * @param ShippingMethodEnum|null $value
     *
     * @return self
     */
    public function setMethod(?ShippingMethodEnum $value): self
    {
        $this->method = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setProvider(?string $value): self
    {
        $this->provider = $value;

        return $this;
    }

    /**
     * @param ShipmentStatusEnum|null $value
     *
     * @return self
     */
    public function setStatus(?ShipmentStatusEnum $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * @param ShipmentResolutionEnum|null $value
     *
     * @return self
     */
    public function setResolution(?ShipmentResolutionEnum $value): self
    {
        $this->resolution = $value;

        return $this;
    }

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
     * @return AddressInput|null
     */
    public function getAddress(): ?AddressInput
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
