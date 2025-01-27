<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $provider
 * @property PickupPointTypeEnum|null $pickupPointType
 * @property MoneyInput|null $price
 */
class SessionPickupPointPriceInput extends ObjectType
{
    protected $casts = [
        "provider" => ProviderEnum::class,
        "pickupPointType" => PickupPointTypeEnum::class,
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
     * @param PickupPointTypeEnum|null $value
     *
     * @return self
     */
    public function setPickupPointType(?PickupPointTypeEnum $value): self
    {
        $this->pickupPointType = $value;

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
     * @return PickupPointTypeEnum|null
     */
    public function getPickupPointType(): ?PickupPointTypeEnum
    {
        return $this->pickupPointType;
    }

    /**
     * @return MoneyInput|null
     */
    public function getPrice(): ?MoneyInput
    {
        return $this->price;
    }
}
