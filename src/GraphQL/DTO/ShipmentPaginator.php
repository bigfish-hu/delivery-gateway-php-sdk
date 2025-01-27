<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property PaginatorInfo|null $paginatorInfo
 * @property Shipment[]|null $data
 */
class ShipmentPaginator extends ObjectType
{
    protected $casts = [
        "paginatorInfo" => PaginatorInfo::class,
        "data" => [Shipment::class],
    ];

    /**
     * @return PaginatorInfo|null
     */
    public function getPaginatorInfo(): ?PaginatorInfo
    {
        return $this->paginatorInfo;
    }

    /**
     * @return Shipment[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }
}
