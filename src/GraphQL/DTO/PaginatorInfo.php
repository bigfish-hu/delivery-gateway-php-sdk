<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property int|null $count
 * @property int|null $currentPage
 * @property int|null $firstItem
 * @property bool|null $hasMorePages
 * @property int|null $lastItem
 * @property int|null $lastPage
 * @property int|null $perPage
 * @property int|null $total
 */
class PaginatorInfo extends ObjectType
{
    protected $casts = [
        "count" => "int",
        "currentPage" => "int",
        "firstItem" => "int",
        "hasMorePages" => "bool",
        "lastItem" => "int",
        "lastPage" => "int",
        "perPage" => "int",
        "total" => "int",
    ];

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @return int|null
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * @return int|null
     */
    public function getFirstItem(): ?int
    {
        return $this->firstItem;
    }

    /**
     * @return bool|null
     */
    public function getHasMorePages(): ?bool
    {
        return $this->hasMorePages;
    }

    /**
     * @return int|null
     */
    public function getLastItem(): ?int
    {
        return $this->lastItem;
    }

    /**
     * @return int|null
     */
    public function getLastPage(): ?int
    {
        return $this->lastPage;
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
}
