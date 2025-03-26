<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property PaginatorInfo|null $paginatorInfo
 * @property Theme[]|null $data
 */
class ThemePaginator extends ObjectType
{
    protected $casts = [
        "paginatorInfo" => PaginatorInfo::class,
        "data" => [Theme::class],
    ];

    /**
     * @return PaginatorInfo|null
     */
    public function getPaginatorInfo(): ?PaginatorInfo
    {
        return $this->paginatorInfo;
    }

    /**
     * @return Theme[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }
}
