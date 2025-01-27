<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property bool|null $isCustom
 * @property ProviderEnum|null $provider
 * @property OperatorEnum|null $operator
 * @property PickupPointTypeEnum|null $type
 * @property bool|null $isPickUpAvailable
 * @property bool|null $isDropOffAvailable
 * @property string|null $id
 * @property string|null $name
 * @property Address|null $address
 * @property Location|null $location
 * @property string|null $phone
 * @property OpeningHour[]|null $openingHours
 * @property bool|null $isOpen
 * @property int|null $distance
 * @property PaymentMethodEnum[]|null $cashOnDelivery
 * @property bool|null $hasWheelchairAccess
 * @property KeyValue[]|null $extra
 * @property string|null $referenceId
 */
class PickupPoint extends ObjectType
{
    protected $casts = [
        "isCustom" => "bool",
        "provider" => ProviderEnum::class,
        "operator" => OperatorEnum::class,
        "type" => PickupPointTypeEnum::class,
        "isPickUpAvailable" => "bool",
        "isDropOffAvailable" => "bool",
        "id" => "string",
        "name" => "string",
        "address" => Address::class,
        "location" => Location::class,
        "phone" => "string",
        "openingHours" => [OpeningHour::class],
        "isOpen" => "bool",
        "distance" => "int",
        "cashOnDelivery" => [PaymentMethodEnum::class],
        "hasWheelchairAccess" => "bool",
        "extra" => [KeyValue::class],
        "referenceId" => "string",
    ];

    /**
     * @return bool|null
     */
    public function isCustom(): ?bool
    {
        return $this->isCustom;
    }

    /**
     * @return ProviderEnum|null
     */
    public function getProvider(): ?ProviderEnum
    {
        return $this->provider;
    }

    /**
     * @return OperatorEnum|null
     */
    public function getOperator(): ?OperatorEnum
    {
        return $this->operator;
    }

    /**
     * @return PickupPointTypeEnum|null
     */
    public function getType(): ?PickupPointTypeEnum
    {
        return $this->type;
    }

    /**
     * @return bool|null
     */
    public function isPickUpAvailable(): ?bool
    {
        return $this->isPickUpAvailable;
    }

    /**
     * @return bool|null
     */
    public function isDropOffAvailable(): ?bool
    {
        return $this->isDropOffAvailable;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
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

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return OpeningHour[]|null
     */
    public function getOpeningHours(): ?array
    {
        return $this->openingHours;
    }

    /**
     * @return bool|null
     */
    public function isOpen(): ?bool
    {
        return $this->isOpen;
    }

    /**
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    /**
     * @return PaymentMethodEnum[]|null
     */
    public function getCashOnDelivery(): ?array
    {
        return $this->cashOnDelivery;
    }

    /**
     * @return bool|null
     */
    public function getHasWheelchairAccess(): ?bool
    {
        return $this->hasWheelchairAccess;
    }

    /**
     * @return KeyValue[]|null
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
}
