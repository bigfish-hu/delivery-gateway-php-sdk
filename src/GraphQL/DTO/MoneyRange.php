<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property FloatRange|null $amount
 * @property CurrencyEnum|null $currency
 */
class MoneyRange extends ObjectType
{
    protected $casts = [
        "amount" => FloatRange::class,
        "currency" => CurrencyEnum::class,
    ];

    /**
     * @return FloatRange|null
     */
    public function getAmount(): ?FloatRange
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
