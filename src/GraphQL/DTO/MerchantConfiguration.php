<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property MerchantConfigurationEnum|null $key
 * @property string|null $description
 * @property string|null $value
 * @property string|null $default
 */
class MerchantConfiguration extends ObjectType
{
    protected $casts = [
        "key" => MerchantConfigurationEnum::class,
        "description" => "string",
        "value" => "string",
        "default" => "string",
    ];

    /**
     * @return MerchantConfigurationEnum|null
     */
    public function getKey(): ?MerchantConfigurationEnum
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
