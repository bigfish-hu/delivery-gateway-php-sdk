<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $waybillId
 * @property string|null $shipmentId
 */
class AssignShipmentToWaybillInput extends ObjectType
{
    protected $casts = [
        "waybillId" => "string",
        "shipmentId" => "string",
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setWaybillId(string $value): self
    {
        $this->waybillId = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setShipmentId(string $value): self
    {
        $this->shipmentId = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWaybillId(): ?string
    {
        return $this->waybillId;
    }

    /**
     * @return string|null
     */
    public function getShipmentId(): ?string
    {
        return $this->shipmentId;
    }
}
