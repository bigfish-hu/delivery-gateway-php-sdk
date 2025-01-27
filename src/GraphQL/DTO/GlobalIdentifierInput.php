<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property GlobalIdentifierEnum|null $type
 * @property string|null $typeOther
 */
class GlobalIdentifierInput extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "type" => GlobalIdentifierEnum::class,
        "typeOther" => "string",
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
     * @param GlobalIdentifierEnum $value
     *
     * @return self
     */
    public function setType(GlobalIdentifierEnum $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setTypeOther(?string $value): self
    {
        $this->typeOther = $value;

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
