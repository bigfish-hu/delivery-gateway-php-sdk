<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property PricingConditionInput|null $condition
 * @property MoneyInput|null $price
 * @property int|null $priority
 */
class CreatePricingInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "condition" => PricingConditionInput::class,
        "price" => MoneyInput::class,
        "priority" => "int",
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
     * @param PricingConditionInput|null $value
     *
     * @return self
     */
    public function setCondition(?PricingConditionInput $value): self
    {
        $this->condition = $value;

        return $this;
    }

    /**
     * @param MoneyInput $value
     *
     * @return self
     */
    public function setPrice(MoneyInput $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * @param int|null $value
     *
     * @return self
     */
    public function setPriority(?int $value): self
    {
        $this->priority = $value;

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
     * @return PricingConditionInput|null
     */
    public function getCondition(): ?PricingConditionInput
    {
        return $this->condition;
    }

    /**
     * @return MoneyInput|null
     */
    public function getPrice(): ?MoneyInput
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
