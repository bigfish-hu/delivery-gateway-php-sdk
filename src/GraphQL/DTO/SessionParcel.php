<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $weight
 * @property Dimension|null $dimensions
 * @property Money|null $cashOnDelivery
 * @property Money|null $value
 * @property Money|null $insurance
 */
class SessionParcel extends ObjectType
{
    protected $casts = [
        "weight" => "float",
        "dimensions" => Dimension::class,
        "cashOnDelivery" => Money::class,
        "value" => Money::class,
        "insurance" => Money::class,
    ];

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return Dimension|null
     */
    public function getDimensions(): ?Dimension
    {
        return $this->dimensions;
    }

    /**
     * @return Money|null
     */
    public function getCashOnDelivery(): ?Money
    {
        return $this->cashOnDelivery;
    }

    /**
     * @return Money|null
     */
    public function getValue(): ?Money
    {
        return $this->value;
    }

    /**
     * @return Money|null
     */
    public function getInsurance(): ?Money
    {
        return $this->insurance;
    }
}
