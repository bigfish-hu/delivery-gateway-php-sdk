<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $provider
 * @property MoneyInput|null $price
 */
class SessionPriceInput extends ObjectType
{
    protected $casts = [
        "provider" => ProviderEnum::class,
        "price" => MoneyInput::class,
    ];

    /**
     * @param ProviderEnum|null $value
     *
     * @return self
     */
    public function setProvider(?ProviderEnum $value): self
    {
        $this->provider = $value;

        return $this;
    }

    /**
     * @param MoneyInput $value
     *
     * @return self
     */
    public function setPrice(MoneyInput $value): self
    {
        $this->price = $value;

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
     * @return MoneyInput|null
     */
    public function getPrice(): ?MoneyInput
    {
        return $this->price;
    }
}
