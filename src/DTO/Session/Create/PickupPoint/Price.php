<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create\PickupPoint;

use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\DTO\Money;
use BigFish\DeliveryGateway\Enums\PickupPointTypeEnum;
use BigFish\DeliveryGateway\Enums\ProviderEnum;

/**
 * @property ProviderEnum|null $provider
 * @property PickupPointTypeEnum|null $pickupPointType
 * @property Money $price
 */
class Price extends DTO
{
    public function getProvider(): ?ProviderEnum
    {
        return $this->provider;
    }

    public function setProvider(?ProviderEnum $provider): self
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

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function setPrice(Money $price): self
    {
        $this->price = $price;

        return $this;
    }
}
