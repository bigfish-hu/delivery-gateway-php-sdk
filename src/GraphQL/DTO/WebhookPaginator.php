<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property PaginatorInfo|null $paginatorInfo
 * @property Webhook[]|null $data
 */
class WebhookPaginator extends ObjectType
{
    protected $casts = [
        "paginatorInfo" => PaginatorInfo::class,
        "data" => [Webhook::class],
    ];

    /**
     * @return PaginatorInfo|null
     */
    public function getPaginatorInfo(): ?PaginatorInfo
    {
        return $this->paginatorInfo;
    }

    /**
     * @return Webhook[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }
}
