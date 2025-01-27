<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property bool|null $isHomeDelivery
 * @property bool|null $isPickupPoint
 * @property PickupPointTypeEnum[]|null $pickupPointTypes
 * @property ProviderEnum[]|null $providers
 * @property bool|null $isCustom
 * @property Zone|null $zone
 */
class PricingCondition extends ObjectType
{
    protected $casts = [
        "isHomeDelivery" => "bool",
        "isPickupPoint" => "bool",
        "pickupPointTypes" => [PickupPointTypeEnum::class],
        "providers" => [ProviderEnum::class],
        "isCustom" => "bool",
        "zone" => Zone::class,
    ];

    /**
     * @return bool|null
     */
    public function isHomeDelivery(): ?bool
    {
        return $this->isHomeDelivery;
    }

    /**
     * @return bool|null
     */
    public function isPickupPoint(): ?bool
    {
        return $this->isPickupPoint;
    }

    /**
     * @return PickupPointTypeEnum[]|null
     */
    public function getPickupPointTypes(): ?array
    {
        return $this->pickupPointTypes;
    }

    /**
     * @return ProviderEnum[]|null
     */
    public function getProviders(): ?array
    {
        return $this->providers;
    }

    /**
     * @return bool|null
     */
    public function isCustom(): ?bool
    {
        return $this->isCustom;
    }

    /**
     * @return Zone|null
     */
    public function getZone(): ?Zone
    {
        return $this->zone;
    }
}
