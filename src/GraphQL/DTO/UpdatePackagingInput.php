<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $handle
 * @property DimensionInput|null $dimensions
 * @property bool|null $isDefault
 */
class UpdatePackagingInput extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "name" => "string",
        "handle" => "string",
        "dimensions" => DimensionInput::class,
        "isDefault" => "bool",
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setId(string $value): self
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

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
     * @param DimensionInput $value
     *
     * @return self
     */
    public function setDimensions(DimensionInput $value): self
    {
        $this->dimensions = $value;

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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * @return DimensionInput|null
     */
    public function getDimensions(): ?DimensionInput
    {
        return $this->dimensions;
    }

    /**
     * @return bool|null
     */
    public function isDefault(): ?bool
    {
        return $this->isDefault;
    }
}
