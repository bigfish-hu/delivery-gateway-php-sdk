<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $count
 * @property OrderItemQuantityUnitEnum|null $type
 * @property string|null $typeOther
 */
class OrderItemQuantity extends ObjectType
{
    protected $casts = [
        "count" => "float",
        "type" => OrderItemQuantityUnitEnum::class,
        "typeOther" => "string",
    ];

    /**
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }

    /**
     * @return OrderItemQuantityUnitEnum|null
     */
    public function getType(): ?OrderItemQuantityUnitEnum
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getTypeOther(): ?string
    {
        return $this->typeOther;
    }
}
