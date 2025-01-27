<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $weight
 * @property DimensionInput|null $dimensions
 * @property MoneyInput|null $cashOnDelivery
 * @property MoneyInput|null $value
 * @property MoneyInput|null $insurance
 */
class SessionParcelInput extends ObjectType
{
    protected $casts = [
        "weight" => "float",
        "dimensions" => DimensionInput::class,
        "cashOnDelivery" => MoneyInput::class,
        "value" => MoneyInput::class,
        "insurance" => MoneyInput::class,
    ];

    /**
     * @param float $value
     *
     * @return self
     */
    public function setWeight(float $value): self
    {
        $this->weight = $value;

        return $this;
    }

    /**
     * @param DimensionInput $value
     *
     * @return self
     */
    public function setDimensions(DimensionInput $value): self
    {
        $this->dimensions = $value;

        return $this;
    }

    /**
     * @param MoneyInput|null $value
     *
     * @return self
     */
    public function setCashOnDelivery(?MoneyInput $value): self
    {
        $this->cashOnDelivery = $value;

        return $this;
    }

    /**
     * @param MoneyInput|null $value
     *
     * @return self
     */
    public function setValue(?MoneyInput $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param MoneyInput|null $value
     *
     * @return self
     */
    public function setInsurance(?MoneyInput $value): self
    {
        $this->insurance = $value;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return DimensionInput|null
     */
    public function getDimensions(): ?DimensionInput
    {
        return $this->dimensions;
    }

    /**
     * @return MoneyInput|null
     */
    public function getCashOnDelivery(): ?MoneyInput
    {
        return $this->cashOnDelivery;
    }

    /**
     * @return MoneyInput|null
     */
    public function getValue(): ?MoneyInput
    {
        return $this->value;
    }

    /**
     * @return MoneyInput|null
     */
    public function getInsurance(): ?MoneyInput
    {
        return $this->insurance;
    }
}
