<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $handle
 * @property Dimension|null $dimensions
 * @property bool|null $isDefault
 */
class Packaging extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "name" => "string",
        "handle" => "string",
        "dimensions" => Dimension::class,
        "isDefault" => "bool",
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
     * @return Dimension|null
     */
    public function getDimensions(): ?Dimension
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
