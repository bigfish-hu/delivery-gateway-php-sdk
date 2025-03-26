<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ShipmentStatusEnum|null $status
 * @property ShipmentResolutionEnum|null $resolution
 * @property DateTimeTz|null $timestamp
 */
class ShipmentStatus extends ObjectType
{
    protected $casts = [
        "status" => ShipmentStatusEnum::class,
        "resolution" => ShipmentResolutionEnum::class,
        "timestamp" => DateTimeTz::class,
    ];

    /**
     * @return ShipmentStatusEnum|null
     */
    public function getStatus(): ?ShipmentStatusEnum
    {
        return $this->status;
    }

    /**
     * @return ShipmentResolutionEnum|null
     */
    public function getResolution(): ?ShipmentResolutionEnum
    {
        return $this->resolution;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getTimestamp(): ?DateTimeTz
    {
        return $this->timestamp;
    }
}
