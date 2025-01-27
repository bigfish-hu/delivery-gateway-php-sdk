<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $referenceId
 * @property string|null $name
 * @property string|null $phone
 * @property PaymentMethodEnum[]|null $cashOnDelivery
 * @property bool|null $hasWheelchairAccess
 * @property AddressInput|null $address
 * @property LocationInput|null $location
 * @property PickupPointOpeningHoursInput|null $openingHours
 * @property bool|null $isActive
 */
class CreatePickupPointInput extends ObjectType
{
    protected $casts = [
        "referenceId" => "string",
        "name" => "string",
        "phone" => "string",
        "cashOnDelivery" => [PaymentMethodEnum::class],
        "hasWheelchairAccess" => "bool",
        "address" => AddressInput::class,
        "location" => LocationInput::class,
        "openingHours" => PickupPointOpeningHoursInput::class,
        "isActive" => "bool",
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setReferenceId(string $value): self
    {
        $this->referenceId = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setPhone(string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * @param PaymentMethodEnum[]|null $value
     *
     * @return self
     */
    public function setCashOnDelivery(?array $value): self
    {
        $this->cashOnDelivery = $value;

        return $this;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setHasWheelchairAccess(?bool $value): self
    {
        $this->hasWheelchairAccess = $value;

        return $this;
    }

    /**
     * @param AddressInput $value
     *
     * @return self
     */
    public function setAddress(AddressInput $value): self
    {
        $this->address = $value;

        return $this;
    }

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
     * @param PickupPointOpeningHoursInput|null $value
     *
     * @return self
     */
    public function setOpeningHours(?PickupPointOpeningHoursInput $value): self
    {
        $this->openingHours = $value;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setActive(bool $value): self
    {
        $this->isActive = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
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
    public function getPhone(): ?string
    {
        return $this->phone;
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

    /**
     * @return PickupPointOpeningHoursInput|null
     */
    public function getOpeningHours(): ?PickupPointOpeningHoursInput
    {
        return $this->openingHours;
    }

    /**
     * @return bool|null
     */
    public function isActive(): ?bool
    {
        return $this->isActive;
    }
}
