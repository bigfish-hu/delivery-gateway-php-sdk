<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ProviderEnum|null $provider
 * @property string|null $referenceId
 * @property string[]|null $shipments
 */
class CreateWaybillInput extends ObjectType
{
    protected $casts = [
        "provider" => ProviderEnum::class,
        "referenceId" => "string",
        "shipments" => ["string"],
    ];

    /**
     * @param ProviderEnum $value
     *
     * @return self
     */
    public function setProvider(ProviderEnum $value): self
    {
        $this->provider = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setReferenceId(string $value): self
    {
        $this->referenceId = $value;

        return $this;
    }

    /**
     * @param string[]|null $value
     *
     * @return self
     */
    public function setShipments(?array $value): self
    {
        $this->shipments = $value;

        return $this;
    }

    /**
     * @return ProviderEnum|null
     */
    public function getProvider(): ?ProviderEnum
    {
        return $this->provider;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @return string[]|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }
}
