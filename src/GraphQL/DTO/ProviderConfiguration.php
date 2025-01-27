<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $provider
 * @property ProviderConfigurationEnum|null $key
 * @property string|null $description
 * @property string|null $value
 * @property string|null $default
 */
class ProviderConfiguration extends ObjectType
{
    protected $casts = [
        "provider" => ProviderEnum::class,
        "key" => ProviderConfigurationEnum::class,
        "description" => "string",
        "value" => "string",
        "default" => "string",
    ];

    /**
     * @return ProviderEnum|null
     */
    public function getProvider(): ?ProviderEnum
    {
        return $this->provider;
    }

    /**
     * @return ProviderConfigurationEnum|null
     */
    public function getKey(): ?ProviderConfigurationEnum
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
