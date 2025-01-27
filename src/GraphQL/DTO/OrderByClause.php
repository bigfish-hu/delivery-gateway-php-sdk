<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $column
 * @property SortOrder|null $order
 */
class OrderByClause extends ObjectType
{
    protected $casts = [
        "column" => "string",
        "order" => SortOrder::class,
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setColumn(string $value): self
    {
        $this->column = $value;

        return $this;
    }

    /**
     * @param SortOrder $value
     *
     * @return self
     */
    public function setOrder(SortOrder $value): self
    {
        $this->order = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getColumn(): ?string
    {
        return $this->column;
    }

    /**
     * @return SortOrder|null
     */
    public function getOrder(): ?SortOrder
    {
        return $this->order;
    }
}
