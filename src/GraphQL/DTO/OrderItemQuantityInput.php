<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property float|null $count
 * @property OrderItemQuantityUnitEnum|null $type
 * @property string|null $typeOther
 */
class OrderItemQuantityInput extends ObjectType
{
    protected $casts = [
        "count" => "float",
        "type" => OrderItemQuantityUnitEnum::class,
        "typeOther" => "string",
    ];

    /**
     * @param float $value
     *
     * @return self
     */
    public function setCount(float $value): self
    {
        $this->count = $value;

        return $this;
    }

    /**
     * @param OrderItemQuantityUnitEnum $value
     *
     * @return self
     */
    public function setType(OrderItemQuantityUnitEnum $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setTypeOther(?string $value): self
    {
        $this->typeOther = $value;

        return $this;
    }

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
