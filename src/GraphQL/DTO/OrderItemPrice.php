<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property Money|null $net
 * @property float|null $vat
 * @property Money|null $gross
 */
class OrderItemPrice extends ObjectType
{
    protected $casts = [
        "net" => Money::class,
        "vat" => "float",
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
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->vat;
    }

    /**
     * @return Money|null
     */
    public function getGross(): ?Money
    {
        return $this->gross;
    }
}
