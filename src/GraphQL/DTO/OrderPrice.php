<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property Money|null $net
 * @property Money|null $gross
 */
class OrderPrice extends ObjectType
{
    protected $casts = [
        "net" => Money::class,
        "gross" => Money::class,
    ];

    /**
     * @return Money|null
     */
    public function getNet(): ?Money
    {
        return $this->net;
    }

    /**
     * @return Money|null
     */
    public function getGross(): ?Money
    {
        return $this->gross;
    }
}
