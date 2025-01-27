<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property Provider|null $provider
 * @property Shipment[]|null $shipments
 * @property DateTimeTz|null $createdAt
 * @property DateTimeTz|null $closedAt
 */
class Waybill extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "provider" => Provider::class,
        "shipments" => [Shipment::class],
        "createdAt" => DateTimeTz::class,
        "closedAt" => DateTimeTz::class,
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return Provider|null
     */
    public function getProvider(): ?Provider
    {
        return $this->provider;
    }

    /**
     * @return Shipment[]|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getCreatedAt(): ?DateTimeTz
    {
        return $this->createdAt;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getClosedAt(): ?DateTimeTz
    {
        return $this->closedAt;
    }
}
