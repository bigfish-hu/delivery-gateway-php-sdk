<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property OrderItemCategoryTypeEnum|null $type
 * @property string|null $typeOther
 */
class OrderItemCategory extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "type" => OrderItemCategoryTypeEnum::class,
        "typeOther" => "string",
    ];

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return OrderItemCategoryTypeEnum|null
     */
    public function getType(): ?OrderItemCategoryTypeEnum
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
