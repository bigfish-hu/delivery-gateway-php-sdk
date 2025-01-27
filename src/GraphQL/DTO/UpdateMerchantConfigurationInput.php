<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property MerchantConfigurationEnum|null $key
 * @property string|null $value
 */
class UpdateMerchantConfigurationInput extends ObjectType
{
    protected $casts = [
        "key" => MerchantConfigurationEnum::class,
        "value" => "string",
    ];

    /**
     * @param MerchantConfigurationEnum $value
     *
     * @return self
     */
    public function setKey(MerchantConfigurationEnum $value): self
    {
        $this->key = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return MerchantConfigurationEnum|null
     */
    public function getKey(): ?MerchantConfigurationEnum
    {
        return $this->key;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
}
