<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property PaginatorInfo|null $paginatorInfo
 * @property Packaging[]|null $data
 */
class PackagingPaginator extends ObjectType
{
    protected $casts = [
        "paginatorInfo" => PaginatorInfo::class,
        "data" => [Packaging::class],
    ];

    /**
     * @return PaginatorInfo|null
     */
    public function getPaginatorInfo(): ?PaginatorInfo
    {
        return $this->paginatorInfo;
    }

    /**
     * @return Packaging[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }
}
