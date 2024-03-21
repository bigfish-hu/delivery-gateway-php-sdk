<?php

namespace BigFish\DeliveryGateway\DTO;

use BigFish\DeliveryGateway\Enums\CurrencyEnum;

/**
 * @property float $amount
 * @property CurrencyEnum $currency
 */
class Money extends DTO
{
    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    public function setCurrency(CurrencyEnum $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
