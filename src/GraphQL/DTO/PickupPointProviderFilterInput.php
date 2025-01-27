<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $provider
 * @property PickupPointTypeEnum[]|null $type
 */
class PickupPointProviderFilterInput extends ObjectType
{
    protected $casts = [
        "provider" => ProviderEnum::class,
        "type" => [PickupPointTypeEnum::class],
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
    public function setType(?array $value): self
    {
        $this->type = $value;

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
    public function getType(): ?array
    {
        return $this->type;
    }
}
