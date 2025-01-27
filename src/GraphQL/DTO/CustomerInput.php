<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $referenceId
 * @property CustomerAddressInput[]|null $addresses
 */
class CustomerInput extends ObjectType
{
    protected $casts = [
        "referenceId" => "string",
        "addresses" => [CustomerAddressInput::class],
    ];

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
     * @param CustomerAddressInput[]|null $value
     *
     * @return self
     */
    public function setAddresses(?array $value): self
    {
        $this->addresses = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @return CustomerAddressInput[]|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }
}
