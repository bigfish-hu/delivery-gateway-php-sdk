<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property MoneyInput|null $net
 * @property MoneyInput|null $gross
 */
class OrderTotalPriceInput extends ObjectType
{
    protected $casts = [
        "net" => MoneyInput::class,
        "gross" => MoneyInput::class,
    ];

    /**
     * @param MoneyInput $value
     *
     * @return self
     */
    public function setNet(MoneyInput $value): self
    {
        $this->net = $value;

        return $this;
    }

    /**
     * @param MoneyInput $value
     *
     * @return self
     */
    public function setGross(MoneyInput $value): self
    {
        $this->gross = $value;

        return $this;
    }

    /**
     * @return MoneyInput|null
     */
    public function getNet(): ?MoneyInput
    {
        return $this->net;
    }

    /**
     * @return MoneyInput|null
     */
    public function getGross(): ?MoneyInput
    {
        return $this->gross;
    }
}
