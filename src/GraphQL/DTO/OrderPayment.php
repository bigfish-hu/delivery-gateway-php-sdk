<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $method
 * @property PaymentStatusEnum|null $status
 * @property DateTimeTz|null $paidAt
 */
class OrderPayment extends ObjectType
{
    protected $casts = [
        "method" => "string",
        "status" => PaymentStatusEnum::class,
        "paidAt" => DateTimeTz::class,
    ];

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
