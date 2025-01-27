<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property bool|null $isHomeDelivery
 * @property bool|null $isPickupPoint
 * @property PickupPointTypeEnum[]|null $pickupPointTypes
 * @property ProviderEnum[]|null $providers
 * @property bool|null $isCustom
 * @property string|null $zoneId
 */
class PricingConditionInput extends ObjectType
{
    protected $casts = [
        "isHomeDelivery" => "bool",
        "isPickupPoint" => "bool",
        "pickupPointTypes" => [PickupPointTypeEnum::class],
        "providers" => [ProviderEnum::class],
        "isCustom" => "bool",
        "zoneId" => "string",
    ];

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setHomeDelivery(?bool $value): self
    {
        $this->isHomeDelivery = $value;

        return $this;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setPickupPoint(?bool $value): self
    {
        $this->isPickupPoint = $value;

        return $this;
    }

    /**
     * @param PickupPointTypeEnum[]|null $value
     *
     * @return self
     */
    public function setPickupPointTypes(?array $value): self
    {
        $this->pickupPointTypes = $value;

        return $this;
    }

    /**
     * @param ProviderEnum[]|null $value
     *
     * @return self
     */
    public function setProviders(?array $value): self
    {
        $this->providers = $value;

        return $this;
    }

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
     * @param string|null $value
     *
     * @return self
     */
    public function setZoneId(?string $value): self
    {
        $this->zoneId = $value;

        return $this;
    }

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
     * @return string|null
     */
    public function getZoneId(): ?string
    {
        return $this->zoneId;
    }
}
