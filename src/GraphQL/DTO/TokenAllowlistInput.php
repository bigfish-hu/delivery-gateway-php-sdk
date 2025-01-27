<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property IP[]|null $ips
 * @property string[]|null $referers
 */
class TokenAllowlistInput extends ObjectType
{
    protected $casts = [
        "ips" => [IP::class],
        "referers" => ["string"],
    ];

    /**
     * @param IP[]|null $value
     *
     * @return self
     */
    public function setIps(?array $value): self
    {
        $this->ips = $value;

        return $this;
    }

    /**
     * @param string[]|null $value
     *
     * @return self
     */
    public function setReferers(?array $value): self
    {
        $this->referers = $value;

        return $this;
    }

    /**
     * @return IP[]|null
     */
    public function getIps(): ?array
    {
        return $this->ips;
    }

    /**
     * @return string[]|null
     */
    public function getReferers(): ?array
    {
        return $this->referers;
    }
}
