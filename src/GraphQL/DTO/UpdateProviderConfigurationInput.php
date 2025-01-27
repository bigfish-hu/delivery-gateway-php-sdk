<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $provider
 * @property ProviderConfigurationEnum|null $key
 * @property string|null $value
 */
class UpdateProviderConfigurationInput extends ObjectType
{
    protected $casts = [
        "provider" => ProviderEnum::class,
        "key" => ProviderConfigurationEnum::class,
        "value" => "string",
    ];

    /**
     * @param ProviderEnum $value
     *
     * @return self
     */
    public function setProvider(ProviderEnum $value): self
    {
        $this->provider = $value;

        return $this;
    }

    /**
     * @param ProviderConfigurationEnum $value
     *
     * @return self
     */
    public function setKey(ProviderConfigurationEnum $value): self
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
    public function getValue(): ?string
    {
        return $this->value;
    }
}
