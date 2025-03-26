<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $handle
 * @property bool|null $isEnabled
 * @property bool|null $isDefault
 * @property ThemeOptionInput[]|null $options
 */
class CreateThemeInput extends ObjectType
{
    protected $casts = [
        "handle" => "string",
        "isEnabled" => "bool",
        "isDefault" => "bool",
        "options" => [ThemeOptionInput::class],
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setHandle(string $value): self
    {
        $this->handle = $value;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setEnabled(bool $value): self
    {
        $this->isEnabled = $value;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setDefault(bool $value): self
    {
        $this->isDefault = $value;

        return $this;
    }

    /**
     * @param ThemeOptionInput[] $value
     *
     * @return self
     */
    public function setOptions(array $value): self
    {
        $this->options = $value;

        return $this;
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
     * @return ThemeOptionInput[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
}
