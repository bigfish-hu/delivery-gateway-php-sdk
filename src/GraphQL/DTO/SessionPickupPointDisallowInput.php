<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $referenceId
 */
class SessionPickupPointDisallowInput extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "referenceId" => "string",
    ];

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setId(?string $value): self
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setReferenceId(?string $value): self
    {
        $this->referenceId = $value;

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
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
}
