<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $amount
 * @property CurrencyEnum|null $currency
 */
class Money extends ObjectType
{
    protected $casts = [
        "amount" => "float",
        "currency" => CurrencyEnum::class,
    ];

    /**
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @return CurrencyEnum|null
     */
    public function getCurrency(): ?CurrencyEnum
    {
        return $this->currency;
    }
}
