<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property string|null $sku
 * @property string|null $referenceId
 * @property OrderItemCategoryInput[]|null $categories
 * @property string|null $variant
 * @property GlobalIdentifierInput[]|null $globalIdentifiers
 * @property string|null $note
 * @property OrderUnitPriceInput|null $unit
 * @property OrderItemQuantityInput|null $quantity
 * @property OrderTotalPriceInput|null $total
 * @property bool|null $isShipping
 * @property bool|null $isPayment
 * @property bool|null $isDiscount
 */
class OrderItemInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "sku" => "string",
        "referenceId" => "string",
        "categories" => [OrderItemCategoryInput::class],
        "variant" => "string",
        "globalIdentifiers" => [GlobalIdentifierInput::class],
        "note" => "string",
        "unit" => OrderUnitPriceInput::class,
        "quantity" => OrderItemQuantityInput::class,
        "total" => OrderTotalPriceInput::class,
        "isShipping" => "bool",
        "isPayment" => "bool",
        "isDiscount" => "bool",
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setSku(?string $value): self
    {
        $this->sku = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setReferenceId(?string $value): self
    {
        $this->referenceId = $value;

        return $this;
    }

    /**
     * @param OrderItemCategoryInput[]|null $value
     *
     * @return self
     */
    public function setCategories(?array $value): self
    {
        $this->categories = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setVariant(?string $value): self
    {
        $this->variant = $value;

        return $this;
    }

    /**
     * @param GlobalIdentifierInput[]|null $value
     *
     * @return self
     */
    public function setGlobalIdentifiers(?array $value): self
    {
        $this->globalIdentifiers = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setNote(?string $value): self
    {
        $this->note = $value;

        return $this;
    }

    /**
     * @param OrderUnitPriceInput $value
     *
     * @return self
     */
    public function setUnit(OrderUnitPriceInput $value): self
    {
        $this->unit = $value;

        return $this;
    }

    /**
     * @param OrderItemQuantityInput $value
     *
     * @return self
     */
    public function setQuantity(OrderItemQuantityInput $value): self
    {
        $this->quantity = $value;

        return $this;
    }

    /**
     * @param OrderTotalPriceInput $value
     *
     * @return self
     */
    public function setTotal(OrderTotalPriceInput $value): self
    {
        $this->total = $value;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setShipping(bool $value): self
    {
        $this->isShipping = $value;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setPayment(bool $value): self
    {
        $this->isPayment = $value;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setDiscount(bool $value): self
    {
        $this->isDiscount = $value;

        return $this;
    }

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
     * @return OrderItemCategoryInput[]|null
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
     * @return GlobalIdentifierInput[]|null
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
     * @return OrderUnitPriceInput|null
     */
    public function getUnit(): ?OrderUnitPriceInput
    {
        return $this->unit;
    }

    /**
     * @return OrderItemQuantityInput|null
     */
    public function getQuantity(): ?OrderItemQuantityInput
    {
        return $this->quantity;
    }

    /**
     * @return OrderTotalPriceInput|null
     */
    public function getTotal(): ?OrderTotalPriceInput
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
