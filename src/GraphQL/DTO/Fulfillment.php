<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property FulfillmentEnum|null $id
 * @property string|null $name
 * @property FulfillmentConfiguration[]|null $configurations
 */
class Fulfillment extends ObjectType
{
    protected $casts = [
        "id" => FulfillmentEnum::class,
        "name" => "string",
        "configurations" => [FulfillmentConfiguration::class],
    ];

    /**
     * @return FulfillmentEnum|null
     */
    public function getId(): ?FulfillmentEnum
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
     * @return FulfillmentConfiguration[]|null
     */
    public function getConfigurations(): ?array
    {
        return $this->configurations;
    }
}
