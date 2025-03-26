<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property ShipmentEventEnum|null $event
 * @property ShipmentActorEnum|null $actor
 * @property DateTimeTz|null $timestamp
 * @property string|null $hash
 * @property KeyValue[]|null $provider
 */
class ShipmentEvent extends ObjectType
{
    protected $casts = [
        "event" => ShipmentEventEnum::class,
        "actor" => ShipmentActorEnum::class,
        "timestamp" => DateTimeTz::class,
        "hash" => "string",
        "provider" => [KeyValue::class],
    ];

    /**
     * @return ShipmentEventEnum|null
     */
    public function getEvent(): ?ShipmentEventEnum
    {
        return $this->event;
    }

    /**
     * @return ShipmentActorEnum|null
     */
    public function getActor(): ?ShipmentActorEnum
    {
        return $this->actor;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getTimestamp(): ?DateTimeTz
    {
        return $this->timestamp;
    }

    /**
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @return KeyValue[]|null
     */
    public function getProvider(): ?array
    {
        return $this->provider;
    }
}
