<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property OperatorEnum|null $operator
 * @property OperatorConfigurationEnum|null $key
 * @property string|null $description
 * @property string|null $value
 * @property string|null $default
 */
class OperatorConfiguration extends ObjectType
{
    protected $casts = [
        "operator" => OperatorEnum::class,
        "key" => OperatorConfigurationEnum::class,
        "description" => "string",
        "value" => "string",
        "default" => "string",
    ];

    /**
     * @return OperatorEnum|null
     */
    public function getOperator(): ?OperatorEnum
    {
        return $this->operator;
    }

    /**
     * @return OperatorConfigurationEnum|null
     */
    public function getKey(): ?OperatorConfigurationEnum
    {
        return $this->key;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }
}
