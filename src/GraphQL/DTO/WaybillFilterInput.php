<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string[]|null $id
 * @property ProviderEnum[]|null $provider
 * @property bool|null $isClosed
 * @property DateTimeRangeFilter|null $closedAt
 * @property DateTimeRangeFilter|null $createdAt
 */
class WaybillFilterInput extends ObjectType
{
    protected $casts = [
        "id" => ["string"],
        "provider" => [ProviderEnum::class],
        "isClosed" => "bool",
        "closedAt" => DateTimeRangeFilter::class,
        "createdAt" => DateTimeRangeFilter::class,
    ];

    /**
     * @param string[]|null $value
     *
     * @return self
     */
    public function setId(?array $value): self
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param ProviderEnum[]|null $value
     *
     * @return self
     */
    public function setProvider(?array $value): self
    {
        $this->provider = $value;

        return $this;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setClosed(?bool $value): self
    {
        $this->isClosed = $value;

        return $this;
    }

    /**
     * @param DateTimeRangeFilter|null $value
     *
     * @return self
     */
    public function setClosedAt(?DateTimeRangeFilter $value): self
    {
        $this->closedAt = $value;

        return $this;
    }

    /**
     * @param DateTimeRangeFilter|null $value
     *
     * @return self
     */
    public function setCreatedAt(?DateTimeRangeFilter $value): self
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getId(): ?array
    {
        return $this->id;
    }

    /**
     * @return ProviderEnum[]|null
     */
    public function getProvider(): ?array
    {
        return $this->provider;
    }

    /**
     * @return bool|null
     */
    public function isClosed(): ?bool
    {
        return $this->isClosed;
    }

    /**
     * @return DateTimeRangeFilter|null
     */
    public function getClosedAt(): ?DateTimeRangeFilter
    {
        return $this->closedAt;
    }

    /**
     * @return DateTimeRangeFilter|null
     */
    public function getCreatedAt(): ?DateTimeRangeFilter
    {
        return $this->createdAt;
    }
}
