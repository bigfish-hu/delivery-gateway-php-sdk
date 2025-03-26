<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property ProviderEnum|null $provider
 * @property string|null $sourceId
 * @property Waybill|null $waybill
 * @property ShipmentModeEnum|null $mode
 * @property bool|null $direct
 * @property ShipmentOrigin|null $origin
 * @property ShipmentSender|null $sender
 * @property ShipmentOrigin|null $destination
 * @property ShipmentRecipient|null $recipient
 * @property Parcel[]|null $parcels
 * @property Tracking|null $tracking
 * @property ShipmentStatus|null $status
 * @property ShipmentEvent[]|null $events
 * @property DateTimeTz|null $createdAt
 * @property Order|null $order
 */
class Shipment extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "provider" => ProviderEnum::class,
        "sourceId" => "string",
        "waybill" => Waybill::class,
        "mode" => ShipmentModeEnum::class,
        "direct" => "bool",
        "origin" => ShipmentOrigin::class,
        "sender" => ShipmentSender::class,
        "destination" => ShipmentOrigin::class,
        "recipient" => ShipmentRecipient::class,
        "parcels" => [Parcel::class],
        "tracking" => Tracking::class,
        "status" => ShipmentStatus::class,
        "events" => [ShipmentEvent::class],
        "createdAt" => DateTimeTz::class,
        "order" => Order::class,
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
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
    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    /**
     * @return Waybill|null
     */
    public function getWaybill(): ?Waybill
    {
        return $this->waybill;
    }

    /**
     * @return ShipmentModeEnum|null
     */
    public function getMode(): ?ShipmentModeEnum
    {
        return $this->mode;
    }

    /**
     * @return bool|null
     */
    public function getDirect(): ?bool
    {
        return $this->direct;
    }

    /**
     * @return ShipmentOrigin|null
     */
    public function getOrigin(): ?ShipmentOrigin
    {
        return $this->origin;
    }

    /**
     * @return ShipmentSender|null
     */
    public function getSender(): ?ShipmentSender
    {
        return $this->sender;
    }

    /**
     * @return ShipmentOrigin|null
     */
    public function getDestination(): ?ShipmentOrigin
    {
        return $this->destination;
    }

    /**
     * @return ShipmentRecipient|null
     */
    public function getRecipient(): ?ShipmentRecipient
    {
        return $this->recipient;
    }

    /**
     * @return Parcel[]|null
     */
    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    /**
     * @return Tracking|null
     */
    public function getTracking(): ?Tracking
    {
        return $this->tracking;
    }

    /**
     * @return ShipmentStatus|null
     */
    public function getStatus(): ?ShipmentStatus
    {
        return $this->status;
    }

    /**
     * @return ShipmentEvent[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getCreatedAt(): ?DateTimeTz
    {
        return $this->createdAt;
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }
}
