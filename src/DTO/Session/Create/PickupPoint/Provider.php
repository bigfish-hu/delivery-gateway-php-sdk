<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create\PickupPoint;

use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\Enums\PickupPointTypeEnum;
use BigFish\DeliveryGateway\Enums\ProviderEnum;

/**
 * @property ProviderEnum $provider
 * @property PickupPointTypeEnum|null $pickupPointType
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

    public function getPickupPointType(): ?PickupPointTypeEnum
    {
        return $this->pickupPointType;
    }

    public function setPickupPointType(?PickupPointTypeEnum $pickupPointType): self
    {
        $this->pickupPointType = $pickupPointType;

        return $this;
    }
}
