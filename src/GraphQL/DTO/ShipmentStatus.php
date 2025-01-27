<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $hash
 * @property ShipmentStatusEnum|null $status
 * @property DateTimeTz|null $timestamp
 * @property KeyValue[]|null $provider
 */
class ShipmentStatus extends ObjectType
{
    protected $casts = [
        "hash" => "string",
        "status" => ShipmentStatusEnum::class,
        "timestamp" => DateTimeTz::class,
        "provider" => [KeyValue::class],
    ];

    /**
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @return ShipmentStatusEnum|null
     */
    public function getStatus(): ?ShipmentStatusEnum
    {
        return $this->status;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getTimestamp(): ?DateTimeTz
    {
        return $this->timestamp;
    }

    /**
     * @return KeyValue[]|null
     */
    public function getProvider(): ?array
    {
        return $this->provider;
    }
}
