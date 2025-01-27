<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property ProviderEnum|null $provider
 * @property SessionDestination|null $destination
 * @property SessionRecipient|null $recipient
 * @property SessionParcel[]|null $parcels
 * @property bool|null $isCompleted
 * @property Money|null $price
 */
class Session extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "provider" => ProviderEnum::class,
        "destination" => SessionDestination::class,
        "recipient" => SessionRecipient::class,
        "parcels" => [SessionParcel::class],
        "isCompleted" => "bool",
        "price" => Money::class,
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return ProviderEnum|null
     */
    public function getProvider(): ?ProviderEnum
    {
        return $this->provider;
    }

    /**
     * @return SessionDestination|null
     */
    public function getDestination(): ?SessionDestination
    {
        return $this->destination;
    }

    /**
     * @return SessionRecipient|null
     */
    public function getRecipient(): ?SessionRecipient
    {
        return $this->recipient;
    }

    /**
     * @return SessionParcel[]|null
     */
    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    /**
     * @return bool|null
     */
    public function isCompleted(): ?bool
    {
        return $this->isCompleted;
    }

    /**
     * @return Money|null
     */
    public function getPrice(): ?Money
    {
        return $this->price;
    }
}
