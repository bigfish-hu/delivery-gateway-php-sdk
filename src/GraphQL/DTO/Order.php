<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $referenceId
 * @property DateTimeTz|null $createdAt
 * @property string|null $customerId
 * @property string|null $sessionId
 * @property OrderBilling|null $billing
 * @property OrderShipping|null $shipping
 * @property OrderPayment|null $payment
 * @property OrderPrice|null $total
 * @property OrderItem[]|null $items
 * @property Money|null $cashOnDelivery
 */
class Order extends ObjectType
{
    protected $casts = [
        "referenceId" => "string",
        "createdAt" => DateTimeTz::class,
        "customerId" => "string",
        "sessionId" => "string",
        "billing" => OrderBilling::class,
        "shipping" => OrderShipping::class,
        "payment" => OrderPayment::class,
        "total" => OrderPrice::class,
        "items" => [OrderItem::class],
        "cashOnDelivery" => Money::class,
    ];

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getCreatedAt(): ?DateTimeTz
    {
        return $this->createdAt;
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * @return OrderBilling|null
     */
    public function getBilling(): ?OrderBilling
    {
        return $this->billing;
    }

    /**
     * @return OrderShipping|null
     */
    public function getShipping(): ?OrderShipping
    {
        return $this->shipping;
    }

    /**
     * @return OrderPayment|null
     */
    public function getPayment(): ?OrderPayment
    {
        return $this->payment;
    }

    /**
     * @return OrderPrice|null
     */
    public function getTotal(): ?OrderPrice
    {
        return $this->total;
    }

    /**
     * @return OrderItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @return Money|null
     */
    public function getCashOnDelivery(): ?Money
    {
        return $this->cashOnDelivery;
    }
}
