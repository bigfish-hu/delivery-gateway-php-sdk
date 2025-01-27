<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property string|null $sku
 * @property string|null $referenceId
 * @property OrderItemCategory[]|null $categories
 * @property string|null $variant
 * @property GlobalIdentifier[]|null $globalIdentifiers
 * @property string|null $note
 * @property OrderItemPrice|null $unit
 * @property OrderItemQuantity|null $quantity
 * @property OrderItemTotalPrice|null $total
 * @property bool|null $isShipping
 * @property bool|null $isPayment
 * @property bool|null $isDiscount
 */
class OrderItem extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "sku" => "string",
        "referenceId" => "string",
        "categories" => [OrderItemCategory::class],
        "variant" => "string",
        "globalIdentifiers" => [GlobalIdentifier::class],
        "note" => "string",
        "unit" => OrderItemPrice::class,
        "quantity" => OrderItemQuantity::class,
        "total" => OrderItemTotalPrice::class,
        "isShipping" => "bool",
        "isPayment" => "bool",
        "isDiscount" => "bool",
    ];

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @return OrderItemCategory[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @return string|null
     */
    public function getVariant(): ?string
    {
        return $this->variant;
    }

    /**
     * @return GlobalIdentifier[]|null
     */
    public function getGlobalIdentifiers(): ?array
    {
        return $this->globalIdentifiers;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @return OrderItemPrice|null
     */
    public function getUnit(): ?OrderItemPrice
    {
        return $this->unit;
    }

    /**
     * @return OrderItemQuantity|null
     */
    public function getQuantity(): ?OrderItemQuantity
    {
        return $this->quantity;
    }

    /**
     * @return OrderItemTotalPrice|null
     */
    public function getTotal(): ?OrderItemTotalPrice
    {
        return $this->total;
    }

    /**
     * @return bool|null
     */
    public function isShipping(): ?bool
    {
        return $this->isShipping;
    }

    /**
     * @return bool|null
     */
    public function isPayment(): ?bool
    {
        return $this->isPayment;
    }

    /**
     * @return bool|null
     */
    public function isDiscount(): ?bool
    {
        return $this->isDiscount;
    }
}
