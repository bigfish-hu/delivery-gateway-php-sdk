<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ThemeConfigurationEnum|null $key
 * @property string|null $value
 */
class ThemeOptionInput extends ObjectType
{
    protected $casts = [
        "key" => ThemeConfigurationEnum::class,
        "value" => "string",
    ];

    /**
     * @param ThemeConfigurationEnum $value
     *
     * @return self
     */
    public function setKey(ThemeConfigurationEnum $value): self
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
}
