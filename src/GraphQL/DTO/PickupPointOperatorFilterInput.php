<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property OperatorEnum|null $operator
 * @property PickupPointTypeEnum[]|null $type
 */
class PickupPointOperatorFilterInput extends ObjectType
{
    protected $casts = [
        "operator" => OperatorEnum::class,
        "type" => [PickupPointTypeEnum::class],
    ];

    /**
     * @param OperatorEnum $value
     *
     * @return self
     */
    public function setOperator(OperatorEnum $value): self
    {
        $this->operator = $value;

        return $this;
    }

    /**
     * @param PickupPointTypeEnum[]|null $value
     *
     * @return self
     */
    public function setType(?array $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @return OperatorEnum|null
     */
    public function getOperator(): ?OperatorEnum
    {
        return $this->operator;
    }

    /**
     * @return PickupPointTypeEnum[]|null
     */
    public function getType(): ?array
    {
        return $this->type;
    }
}
