<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property GlobalIdentifierEnum|null $type
 * @property string|null $typeOther
 */
class GlobalIdentifier extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "type" => GlobalIdentifierEnum::class,
        "typeOther" => "string",
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return GlobalIdentifierEnum|null
     */
    public function getType(): ?GlobalIdentifierEnum
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getTypeOther(): ?string
    {
        return $this->typeOther;
    }
}
