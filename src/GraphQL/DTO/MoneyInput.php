<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $amount
 * @property CurrencyEnum|null $currency
 */
class MoneyInput extends ObjectType
{
    protected $casts = [
        "amount" => "float",
        "currency" => CurrencyEnum::class,
    ];

    /**
     * @param float $value
     *
     * @return self
     */
    public function setAmount(float $value): self
    {
        $this->amount = $value;

        return $this;
    }

    /**
     * @param CurrencyEnum $value
     *
     * @return self
     */
    public function setCurrency(CurrencyEnum $value): self
    {
        $this->currency = $value;

        return $this;
    }

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
