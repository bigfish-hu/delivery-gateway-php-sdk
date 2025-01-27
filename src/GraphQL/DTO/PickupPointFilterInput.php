<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property bool|null $isCustom
 * @property PickupPointProviderFilterInput[]|null $providers
 * @property PickupPointOperatorFilterInput[]|null $operators
 * @property PickupPointBoundingBoxFilterInput|null $boundingBox
 * @property PickupPointDistanceFilterInput|null $distance
 * @property string|null $search
 * @property CountryEnum|null $country
 * @property string|null $postalCode
 * @property PaymentMethodEnum[]|null $cashOnDelivery
 * @property bool|null $hasWheelchairAccess
 * @property PickupPointTypeEnum[]|null $type
 * @property bool|null $isPickUpAvailable
 * @property bool|null $isDropOffAvailable
 */
class PickupPointFilterInput extends ObjectType
{
    protected $casts = [
        "isCustom" => "bool",
        "providers" => [PickupPointProviderFilterInput::class],
        "operators" => [PickupPointOperatorFilterInput::class],
        "boundingBox" => PickupPointBoundingBoxFilterInput::class,
        "distance" => PickupPointDistanceFilterInput::class,
        "search" => "string",
        "country" => CountryEnum::class,
        "postalCode" => "string",
        "cashOnDelivery" => [PaymentMethodEnum::class],
        "hasWheelchairAccess" => "bool",
        "type" => [PickupPointTypeEnum::class],
        "isPickUpAvailable" => "bool",
        "isDropOffAvailable" => "bool",
    ];

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setCustom(?bool $value): self
    {
        $this->isCustom = $value;

        return $this;
    }

    /**
     * @param PickupPointProviderFilterInput[]|null $value
     *
     * @return self
     */
    public function setProviders(?array $value): self
    {
        $this->providers = $value;

        return $this;
    }

    /**
     * @param PickupPointOperatorFilterInput[]|null $value
     *
     * @return self
     */
    public function setOperators(?array $value): self
    {
        $this->operators = $value;

        return $this;
    }

    /**
     * @param PickupPointBoundingBoxFilterInput|null $value
     *
     * @return self
     */
    public function setBoundingBox(?PickupPointBoundingBoxFilterInput $value): self
    {
        $this->boundingBox = $value;

        return $this;
    }

    /**
     * @param PickupPointDistanceFilterInput|null $value
     *
     * @return self
     */
    public function setDistance(?PickupPointDistanceFilterInput $value): self
    {
        $this->distance = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setSearch(?string $value): self
    {
        $this->search = $value;

        return $this;
    }

    /**
     * @param CountryEnum|null $value
     *
     * @return self
     */
    public function setCountry(?CountryEnum $value): self
    {
        $this->country = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setPostalCode(?string $value): self
    {
        $this->postalCode = $value;

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
     * @param PickupPointTypeEnum[]|null $value
     *
     * @return self
     */
    public function setType(?array $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setPickUpAvailable(?bool $value): self
    {
        $this->isPickUpAvailable = $value;

        return $this;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setDropOffAvailable(?bool $value): self
    {
        $this->isDropOffAvailable = $value;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isCustom(): ?bool
    {
        return $this->isCustom;
    }

    /**
     * @return PickupPointProviderFilterInput[]|null
     */
    public function getProviders(): ?array
    {
        return $this->providers;
    }

    /**
     * @return PickupPointOperatorFilterInput[]|null
     */
    public function getOperators(): ?array
    {
        return $this->operators;
    }

    /**
     * @return PickupPointBoundingBoxFilterInput|null
     */
    public function getBoundingBox(): ?PickupPointBoundingBoxFilterInput
    {
        return $this->boundingBox;
    }

    /**
     * @return PickupPointDistanceFilterInput|null
     */
    public function getDistance(): ?PickupPointDistanceFilterInput
    {
        return $this->distance;
    }

    /**
     * @return string|null
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * @return CountryEnum|null
     */
    public function getCountry(): ?CountryEnum
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
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
     * @return PickupPointTypeEnum[]|null
     */
    public function getType(): ?array
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
}
