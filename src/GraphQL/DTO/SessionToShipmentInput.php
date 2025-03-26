<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $sessionId
 * @property string|null $referenceId
 * @property string|null $sourceId
 * @property string|null $waybillId
 * @property ShipmentModeEnum|null $mode
 * @property bool|null $direct
 * @property ShipmentOriginInput|null $origin
 * @property ShipmentSenderInput|null $sender
 * @property ParcelInput[]|null $parcels
 * @property OrderInput|null $order
 */
class SessionToShipmentInput extends ObjectType
{
    protected $casts = [
        "sessionId" => "string",
        "referenceId" => "string",
        "sourceId" => "string",
        "waybillId" => "string",
        "mode" => ShipmentModeEnum::class,
        "direct" => "bool",
        "origin" => ShipmentOriginInput::class,
        "sender" => ShipmentSenderInput::class,
        "parcels" => [ParcelInput::class],
        "order" => OrderInput::class,
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setSessionId(string $value): self
    {
        $this->sessionId = $value;

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
     * @param string|null $value
     *
     * @return self
     */
    public function setSourceId(?string $value): self
    {
        $this->sourceId = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setWaybillId(?string $value): self
    {
        $this->waybillId = $value;

        return $this;
    }

    /**
     * @param ShipmentModeEnum $value
     *
     * @return self
     */
    public function setMode(ShipmentModeEnum $value): self
    {
        $this->mode = $value;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setDirect(bool $value): self
    {
        $this->direct = $value;

        return $this;
    }

    /**
     * @param ShipmentOriginInput|null $value
     *
     * @return self
     */
    public function setOrigin(?ShipmentOriginInput $value): self
    {
        $this->origin = $value;

        return $this;
    }

    /**
     * @param ShipmentSenderInput|null $value
     *
     * @return self
     */
    public function setSender(?ShipmentSenderInput $value): self
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * @param ParcelInput[]|null $value
     *
     * @return self
     */
    public function setParcels(?array $value): self
    {
        $this->parcels = $value;

        return $this;
    }

    /**
     * @param OrderInput|null $value
     *
     * @return self
     */
    public function setOrder(?OrderInput $value): self
    {
        $this->order = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @return string|null
     */
    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    /**
     * @return string|null
     */
    public function getWaybillId(): ?string
    {
        return $this->waybillId;
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
     * @return ShipmentOriginInput|null
     */
    public function getOrigin(): ?ShipmentOriginInput
    {
        return $this->origin;
    }

    /**
     * @return ShipmentSenderInput|null
     */
    public function getSender(): ?ShipmentSenderInput
    {
        return $this->sender;
    }

    /**
     * @return ParcelInput[]|null
     */
    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    /**
     * @return OrderInput|null
     */
    public function getOrder(): ?OrderInput
    {
        return $this->order;
    }
}
