<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property FulfillmentEnum|null $fulfillment
 * @property FulfillmentConfigurationEnum|null $key
 * @property string|null $description
 * @property string|null $value
 * @property string|null $default
 */
class FulfillmentConfiguration extends ObjectType
{
    protected $casts = [
        "fulfillment" => FulfillmentEnum::class,
        "key" => FulfillmentConfigurationEnum::class,
        "description" => "string",
        "value" => "string",
        "default" => "string",
    ];

    /**
     * @return FulfillmentEnum|null
     */
    public function getFulfillment(): ?FulfillmentEnum
    {
        return $this->fulfillment;
    }

    /**
     * @return FulfillmentConfigurationEnum|null
     */
    public function getKey(): ?FulfillmentConfigurationEnum
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
