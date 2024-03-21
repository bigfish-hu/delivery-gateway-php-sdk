<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create;

use BigFish\DeliveryGateway\DTO\Dimension;
use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\DTO\Money;

/**
 * @property float $weight
 * @property Dimension $dimensions
 * @property Money|null $cashOnDelivery
 * @property Money|null $value
 */
class Parcel extends DTO
{
    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getDimensions(): Dimension
    {
        return $this->dimensions;
    }

    public function setDimensions(Dimension $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function getCashOnDelivery(): ?Money
    {
        return $this->cashOnDelivery;
    }

    public function setCashOnDelivery(?Money $cashOnDelivery): self
    {
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    public function getValue(): ?Money
    {
        return $this->value;
    }

    public function setValue(?Money $value): self
    {
        $this->value = $value;

        return $this;
    }
}
