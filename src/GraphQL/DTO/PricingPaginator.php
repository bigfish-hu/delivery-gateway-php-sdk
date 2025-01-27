<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property PaginatorInfo|null $paginatorInfo
 * @property Pricing[]|null $data
 */
class PricingPaginator extends ObjectType
{
    protected $casts = [
        "paginatorInfo" => PaginatorInfo::class,
        "data" => [Pricing::class],
    ];

    /**
     * @return PaginatorInfo|null
     */
    public function getPaginatorInfo(): ?PaginatorInfo
    {
        return $this->paginatorInfo;
    }

    /**
     * @return Pricing[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }
}
