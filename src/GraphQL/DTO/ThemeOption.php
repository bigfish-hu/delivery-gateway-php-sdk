<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ThemeConfigurationEnum|null $key
 * @property string|null $value
 * @property string|null $default
 * @property string|null $description
 */
class ThemeOption extends ObjectType
{
    protected $casts = [
        "key" => ThemeConfigurationEnum::class,
        "value" => "string",
        "default" => "string",
        "description" => "string",
    ];

    /**
     * @return ThemeConfigurationEnum|null
     */
    public function getKey(): ?ThemeConfigurationEnum
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

    /**
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
}
