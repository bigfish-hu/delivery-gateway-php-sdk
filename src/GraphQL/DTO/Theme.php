<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $handle
 * @property bool|null $isEnabled
 * @property bool|null $isDefault
 * @property ThemeOption[]|null $options
 */
class Theme extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "handle" => "string",
        "isEnabled" => "bool",
        "isDefault" => "bool",
        "options" => [ThemeOption::class],
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * @return bool|null
     */
    public function isEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    /**
     * @return bool|null
     */
    public function isDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * @return ThemeOption[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
}
