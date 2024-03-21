<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create;

use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\DTO\Money;
use BigFish\DeliveryGateway\Enums\ProviderEnum;

/**
 * @property ProviderEnum|null $provider
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
