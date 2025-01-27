<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $method
 * @property PaymentStatusEnum|null $status
 * @property DateTimeTz|null $paidAt
 */
class OrderPaymentInput extends ObjectType
{
    protected $casts = [
        "method" => "string",
        "status" => PaymentStatusEnum::class,
        "paidAt" => DateTimeTz::class,
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setMethod(string $value): self
    {
        $this->method = $value;

        return $this;
    }

    /**
     * @param PaymentStatusEnum $value
     *
     * @return self
     */
    public function setStatus(PaymentStatusEnum $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * @param DateTimeTz|null $value
     *
     * @return self
     */
    public function setPaidAt(?DateTimeTz $value): self
    {
        $this->paidAt = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @return PaymentStatusEnum|null
     */
    public function getStatus(): ?PaymentStatusEnum
    {
        return $this->status;
    }

    /**
     * @return DateTimeTz|null
     */
    public function getPaidAt(): ?DateTimeTz
    {
        return $this->paidAt;
    }
}
