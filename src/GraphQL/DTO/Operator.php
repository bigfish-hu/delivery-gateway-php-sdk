<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property OperatorEnum|null $id
 * @property string|null $name
 * @property OperatorConfiguration[]|null $configurations
 */
class Operator extends ObjectType
{
    protected $casts = [
        "id" => OperatorEnum::class,
        "name" => "string",
        "configurations" => [OperatorConfiguration::class],
    ];

    /**
     * @return OperatorEnum|null
     */
    public function getId(): ?OperatorEnum
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
     * @return OperatorConfiguration[]|null
     */
    public function getConfigurations(): ?array
    {
        return $this->configurations;
    }
}
