<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create\PickupPoint;

use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\Enums\PickupPointTypeEnum;
use BigFish\DeliveryGateway\Enums\ProviderEnum;

/**
 * @property ProviderEnum $provider
 * @property PickupPointTypeEnum[]|null $pickupPointTypes
 */
class Provider extends DTO
{
    public function getProvider(): ProviderEnum
    {
        return $this->provider;
    }

    public function setProvider(ProviderEnum $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function getPickupPointType(): ?array
    {
        return $this->pickupPointTypes;
    }

    public function setPickupPointType(?array $pickupPointTypes): self
    {
        $this->pickupPointTypes = $pickupPointTypes;

        return $this;
    }
}
