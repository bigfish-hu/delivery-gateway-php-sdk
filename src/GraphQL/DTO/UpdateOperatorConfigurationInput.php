<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property OperatorEnum|null $operator
 * @property OperatorConfigurationEnum|null $key
 * @property string|null $value
 */
class UpdateOperatorConfigurationInput extends ObjectType
{
    protected $casts = [
        "operator" => OperatorEnum::class,
        "key" => OperatorConfigurationEnum::class,
        "value" => "string",
    ];

    /**
     * @param OperatorEnum $value
     *
     * @return self
     */
    public function setOperator(OperatorEnum $value): self
    {
        $this->operator = $value;

        return $this;
    }

    /**
     * @param OperatorConfigurationEnum $value
     *
     * @return self
     */
    public function setKey(OperatorConfigurationEnum $value): self
    {
        $this->key = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

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
    public function getValue(): ?string
    {
        return $this->value;
    }
}
