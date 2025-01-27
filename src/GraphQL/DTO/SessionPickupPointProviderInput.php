<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $provider
 * @property PickupPointTypeEnum[]|null $pickupPointTypes
 */
class SessionPickupPointProviderInput extends ObjectType
{
    protected $casts = [
        "provider" => ProviderEnum::class,
        "pickupPointTypes" => [PickupPointTypeEnum::class],
    ];

    /**
     * @param ProviderEnum $value
     *
     * @return self
     */
    public function setProvider(ProviderEnum $value): self
    {
        $this->provider = $value;

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
     * @return ProviderEnum|null
     */
    public function getProvider(): ?ProviderEnum
    {
        return $this->provider;
    }

    /**
     * @return PickupPointTypeEnum[]|null
     */
    public function getPickupPointTypes(): ?array
    {
        return $this->pickupPointTypes;
    }
}
