<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $referenceId
 * @property Tracking|null $tracking
 * @property Label|null $label
 * @property float|null $weight
 * @property Dimension|null $dimensions
 * @property bool|null $isReadyForWaybill
 * @property Money|null $cashOnDelivery
 * @property Money|null $value
 * @property Money|null $insurance
 */
class Parcel extends ObjectType
{
    protected $casts = [
        "referenceId" => "string",
        "tracking" => Tracking::class,
        "label" => Label::class,
        "weight" => "float",
        "dimensions" => Dimension::class,
        "isReadyForWaybill" => "bool",
        "cashOnDelivery" => Money::class,
        "value" => Money::class,
        "insurance" => Money::class,
    ];

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @return Tracking|null
     */
    public function getTracking(): ?Tracking
    {
        return $this->tracking;
    }

    /**
     * @return Label|null
     */
    public function getLabel(): ?Label
    {
        return $this->label;
    }

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
     * @return bool|null
     */
    public function isReadyForWaybill(): ?bool
    {
        return $this->isReadyForWaybill;
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
