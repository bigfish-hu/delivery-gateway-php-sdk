<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $referenceId
 * @property DateTimeTz|null $createdAt
 * @property string|null $customerId
 * @property string|null $sessionId
 * @property OrderBillingInput|null $billing
 * @property OrderShippingInput|null $shipping
 * @property OrderPaymentInput|null $payment
 * @property OrderTotalPriceInput|null $total
 * @property OrderItemInput[]|null $items
 * @property MoneyInput|null $cashOnDelivery
 */
class OrderInput extends ObjectType
{
    protected $casts = [
        "referenceId" => "string",
        "createdAt" => DateTimeTz::class,
        "customerId" => "string",
        "sessionId" => "string",
        "billing" => OrderBillingInput::class,
        "shipping" => OrderShippingInput::class,
        "payment" => OrderPaymentInput::class,
        "total" => OrderTotalPriceInput::class,
        "items" => [OrderItemInput::class],
        "cashOnDelivery" => MoneyInput::class,
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setReferenceId(string $value): self
    {
        $this->referenceId = $value;

        return $this;
    }

    /**
     * @param DateTimeTz $value
     *
     * @return self
     */
    public function setCreatedAt(DateTimeTz $value): self
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setCustomerId(?string $value): self
    {
        $this->customerId = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setSessionId(?string $value): self
    {
        $this->sessionId = $value;

        return $this;
    }

    /**
     * @param OrderBillingInput|null $value
     *
     * @return self
     */
    public function setBilling(?OrderBillingInput $value): self
    {
        $this->billing = $value;

        return $this;
    }

    /**
     * @param OrderShippingInput|null $value
     *
     * @return self
     */
    public function setShipping(?OrderShippingInput $value): self
    {
        $this->shipping = $value;

        return $this;
    }

    /**
     * @param OrderPaymentInput|null $value
     *
     * @return self
     */
    public function setPayment(?OrderPaymentInput $value): self
    {
        $this->payment = $value;

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
     * @param OrderItemInput[] $value
     *
     * @return self
     */
    public function setItems(array $value): self
    {
        $this->items = $value;

        return $this;
    }

    /**
     * @param MoneyInput|null $value
     *
     * @return self
     */
    public function setCashOnDelivery(?MoneyInput $value): self
    {
        $this->cashOnDelivery = $value;

        return $this;
    }

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
     * @return OrderBillingInput|null
     */
    public function getBilling(): ?OrderBillingInput
    {
        return $this->billing;
    }

    /**
     * @return OrderShippingInput|null
     */
    public function getShipping(): ?OrderShippingInput
    {
        return $this->shipping;
    }

    /**
     * @return OrderPaymentInput|null
     */
    public function getPayment(): ?OrderPaymentInput
    {
        return $this->payment;
    }

    /**
     * @return OrderTotalPriceInput|null
     */
    public function getTotal(): ?OrderTotalPriceInput
    {
        return $this->total;
    }

    /**
     * @return OrderItemInput[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @return MoneyInput|null
     */
    public function getCashOnDelivery(): ?MoneyInput
    {
        return $this->cashOnDelivery;
    }
}
