<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property OrderItemCategoryTypeEnum|null $type
 * @property string|null $typeOther
 */
class OrderItemCategoryInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "type" => OrderItemCategoryTypeEnum::class,
        "typeOther" => "string",
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param OrderItemCategoryTypeEnum $value
     *
     * @return self
     */
    public function setType(OrderItemCategoryTypeEnum $value): self
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
