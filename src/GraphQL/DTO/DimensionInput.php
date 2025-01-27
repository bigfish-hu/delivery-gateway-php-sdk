<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $width
 * @property float|null $length
 * @property float|null $height
 */
class DimensionInput extends ObjectType
{
    protected $casts = [
        "width" => "float",
        "length" => "float",
        "height" => "float",
    ];

    /**
     * @param float $value
     *
     * @return self
     */
    public function setWidth(float $value): self
    {
        $this->width = $value;

        return $this;
    }

    /**
     * @param float $value
     *
     * @return self
     */
    public function setLength(float $value): self
    {
        $this->length = $value;

        return $this;
    }

    /**
     * @param float $value
     *
     * @return self
     */
    public function setHeight(float $value): self
    {
        $this->height = $value;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }
}
