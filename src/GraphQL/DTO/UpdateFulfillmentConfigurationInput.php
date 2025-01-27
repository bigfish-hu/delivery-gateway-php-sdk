<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property FulfillmentEnum|null $fulfillment
 * @property FulfillmentConfigurationEnum|null $key
 * @property string|null $value
 */
class UpdateFulfillmentConfigurationInput extends ObjectType
{
    protected $casts = [
        "fulfillment" => FulfillmentEnum::class,
        "key" => FulfillmentConfigurationEnum::class,
        "value" => "string",
    ];

    /**
     * @param FulfillmentEnum $value
     *
     * @return self
     */
    public function setFulfillment(FulfillmentEnum $value): self
    {
        $this->fulfillment = $value;

        return $this;
    }

    /**
     * @param FulfillmentConfigurationEnum $value
     *
     * @return self
     */
    public function setKey(FulfillmentConfigurationEnum $value): self
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
    public function getValue(): ?string
    {
        return $this->value;
    }
}
