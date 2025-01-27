<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property IP[]|null $ips
 * @property string[]|null $referers
 */
class TokenAllowlist extends ObjectType
{
    protected $casts = [
        "ips" => [IP::class],
        "referers" => ["string"],
    ];

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
