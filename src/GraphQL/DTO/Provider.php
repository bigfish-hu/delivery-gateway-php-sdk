<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $id
 * @property string|null $name
 * @property string|null $icon
 * @property bool|null $isEnabled
 * @property bool|null $isAvailable
 * @property ProviderConfiguration[]|null $configurations
 * @property PickupPointPaginator|null $pickupPoints
 */
class Provider extends ObjectType
{
    protected $casts = [
        "id" => ProviderEnum::class,
        "name" => "string",
        "icon" => "string",
        "isEnabled" => "bool",
        "isAvailable" => "bool",
        "configurations" => [ProviderConfiguration::class],
        "pickupPoints" => PickupPointPaginator::class,
    ];

    /**
     * @return ProviderEnum|null
     */
    public function getId(): ?ProviderEnum
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
    public function getIcon(): ?string
    {
        return $this->icon;
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
    public function isAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    /**
     * @return ProviderConfiguration[]|null
     */
    public function getConfigurations(): ?array
    {
        return $this->configurations;
    }

    /**
     * @return PickupPointPaginator|null
     */
    public function getPickupPoints(): ?PickupPointPaginator
    {
        return $this->pickupPoints;
    }
}
