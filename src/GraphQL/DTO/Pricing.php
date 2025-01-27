<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $name
 * @property PricingCondition|null $condition
 * @property Money|null $price
 * @property int|null $priority
 */
class Pricing extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "name" => "string",
        "condition" => PricingCondition::class,
        "price" => Money::class,
        "priority" => "int",
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return PricingCondition|null
     */
    public function getCondition(): ?PricingCondition
    {
        return $this->condition;
    }

    /**
     * @return Money|null
     */
    public function getPrice(): ?Money
    {
        return $this->price;
    }

    /**
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
}
