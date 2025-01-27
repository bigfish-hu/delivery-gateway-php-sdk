<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property MoneyInput|null $net
 * @property float|null $vat
 * @property MoneyInput|null $gross
 */
class OrderUnitPriceInput extends ObjectType
{
    protected $casts = [
        "net" => MoneyInput::class,
        "vat" => "float",
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
     * @param float $value
     *
     * @return self
     */
    public function setVat(float $value): self
    {
        $this->vat = $value;

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
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->vat;
    }

    /**
     * @return MoneyInput|null
     */
    public function getGross(): ?MoneyInput
    {
        return $this->gross;
    }
}
