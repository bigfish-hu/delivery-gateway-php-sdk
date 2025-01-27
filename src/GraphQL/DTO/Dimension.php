<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $width
 * @property float|null $length
 * @property float|null $height
 */
class Dimension extends ObjectType
{
    protected $casts = [
        "width" => "float",
        "length" => "float",
        "height" => "float",
    ];

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
